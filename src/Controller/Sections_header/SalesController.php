<?php

namespace App\Controller\Sections_header;

use App\Entity\Sold;
use App\Entity\Invoice;
use App\Form\PartNoType;
use App\Entity\Availability;
use App\Entity\OriginalRooms;
use App\Form\SearchSalesType;
use App\Repository\SoldRepository;
use App\Entity\IdDetailsManufacturer;
use App\Repository\InvoiceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Validation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SalesController extends AbstractController
{
    #[Route('/sales', name: 'sales')]
    public function searchSales(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator,
        InvoiceRepository $InvoiceRepository,
        SoldRepository $SoldRepository,
    ): Response {

        /* Массив для передачи в твиг списка по поиску */
        $arr_sales = [];

        /*Подключаем формы */
        $form_sales_search = $this->createForm(SearchSalesType::class);

        /*Валидация формы */
        $form_sales_search->handleRequest($request);

        if ($form_sales_search->isSubmitted()) {
            if ($form_sales_search->isValid()) {

                $arr_sales = $SoldRepository->findByListSoldParts($form_sales_search);
            } else {
                /* Выводим вбитые данные в форму поиска если форма не прошла валидацию, через сессии */
                $value_form_part_no = $request->request->all();
                if ($value_form_part_no) {
                    foreach ($value_form_part_no as $key => $values) {
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                $this->addFlash($key . '_search', $value);
                            }
                        }
                    }
                }
            }
        } else {
            $arr_sales = $SoldRepository->findBySoldList();
        }
        /* Общая сумма */
        $total_amount_sale = 0;
        $total_amount_purchase  = 0;
        foreach ($arr_sales as $key => $value) {
            $total_amount_sale += ($value->getPriceSold() / 100);
            $total_amount_purchase  += ((($value->getIdInvoice()->getPrice() / 100)
                / $value->getIdInvoice()->getQuantity())
                * $value->getQuantitySold());
        }
        $total_amount_profit = $total_amount_sale - $total_amount_purchase;
        //dd($arr_sales);
        return $this->render('sales/sales.html.twig', [
            'title_logo' => 'Продажи',
            'legend_search' => 'Поиск',
            'total_amount' => $total_amount_profit,
            'form_sales_search' => $form_sales_search->createView(),
            'arr_sales' => $arr_sales,

        ]);
    }

    /* функция сброса */
    #[Route('/reset_sales', name: 'reset_sales')]
    public function resetSales(): Response
    {
        return $this->redirectToRoute('sales');
    }

    /* функция количества возврата товара */
    #[Route('/quantity_return_product', name: 'quantity_return_product')]
    public function quantityReturnProduct(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator,
        SoldRepository $SoldRepository,
    ): Response {

        /*Подключаем формы */
        $form_return_product = $this->createForm(SearchSalesType::class);

        /*Валидация формы */
        $form_return_product->handleRequest($request);



        dd($form_return_product);
        if ($form_return_product->getData()) {
            $id_return_product = $form_return_product->getData()['hidden_sales'];
        } else {
            $id_return_product = $request->request->all()['quantity_return_product'];
        }
        /*Открываем деталь по id */
        $arr_return_product = $SoldRepository->findOneByIdReturnProduct($id_return_product);

        /*Валидация формы */
        if ($form_return_product->isSubmitted()) {

            /* Выводим данные из формы */
            $quantity_return_product = $form_return_product->getData()['quantity_sales'];

            /* Выводим данные из базы данных */
            $sold_quantity_sold = $arr_return_product[0]->getQuantitySold();

            /* Подключаем валидацию и прописываем условида валидации и сообщение ошибки*/
            $validator = Validation::createValidator();
            $constraint = new Range(
                min: 1,
                max: $sold_quantity_sold,
                notInRangeMessage: 'Недопустимое число',
            );
            $errors = $validator->validate($quantity_return_product, $constraint);

            /* Валидация формы */

            if ($form_return_product->isValid() && !$errors->count()) {

                /* $arr_sold_part[0]->setIdInvoice($arr_sold_part[0]->getIdInvoice());

                $arr_sold_part[0]->setQuantitySold($quantity_sold);

                $arr_sold_part[0]->setPriceSold($form_sold_edit->getData()->getPriceSold() * 100);

                $arr_sold_part[0]->setDateSold(new DateTime($request->request->all()['sold']['date_sold']));

                $arr_sold_part[0]->getIdInvoice()->setQuantitySold($quantity_sold);

                $doctrine->getManager()->flush();

                return $this->redirectToRoute('sold_price');*/
            } else {

                /* Выводим вбитые данные в формы сохранения если форма не прошла валидацию, через сессии  */
                $value_form_sold = $request->request->all();
                if ($value_form_sold) {
                    foreach ($value_form_sold as $key => $values) {
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                $this->addFlash($key . '_return', $value);
                            }
                        }
                    }
                }

                /* Выводим ошибки валидации, через сессии  */
                if ($errors) {
                    foreach ($errors as $key) {
                        $message = $key->getmessage();
                        $propertyPath = $key->getpropertyPath();
                        $this->addFlash(
                            $propertyPath,
                            $message
                        );
                    }
                }
            }
        }

        return $this->render('sales/quantity_return_product.html.twig', [
            'title_logo' => 'Возврат детали',
            'legend' => 'Возврат детали',
            'form_return_product' => $form_return_product->createView(),
            'arr_return_product' => $arr_return_product,
        ]);
    }

    /* функция возврата товара */
    #[Route('/return_product', name: 'return_product')]
    public function returnProduct(
        ManagerRegistry $doctrine,
        Request $request,
        InvoiceRepository $InvoiceRepository,
    ): Response {

        if ($request->request->all()) {



            $id_return_product = $request->request->all()['return_product'];
            $delete_return_product = $doctrine->getRepository(Sold::class)
                ->findOneBy(['id_invoice' => $id_return_product]);
            $return_product = $InvoiceRepository->findOneByInvoiceJoinDetailsAvailability($id_return_product);
            //dd($return_product[0]->getIdDetails()->getIdInStock()->getId());

            $quantity_sold = $return_product[0]->getQuantitySold() - $delete_return_product->getQuantitySold();

            $return_product[0]->setQuantitySold($quantity_sold);

            if ($return_product[0]->getSales() == 2) {
                $return_product[0]->setSales(1);
            }

            if ($return_product[0]->getIdDetails()->getIdInStock()->getId() == 2) {
                $in_stock = $doctrine->getRepository(Availability::class)->find(1);
                $return_product[0]->getIdDetails()->setIdInStock($in_stock);
            }

            $entityManager = $doctrine->getManager();
            $entityManager->remove($delete_return_product);
            $entityManager->flush();
        }


        return $this->redirectToRoute('sales');
    }
}
