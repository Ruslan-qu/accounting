<?php

namespace App\Controller\Sections_header;

use DateTime;
use App\Entity\Sold;
use App\Entity\KuDir;
use App\Form\SoldType;
use App\Entity\Invoice;
use App\Form\PartNoType;
use App\Entity\Availability;
use App\Form\CompleteSalesType;
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

class PriceController extends AbstractController
{
    /*функция поиска по данным */
    #[Route('/price', name: 'price')]
    public function searchPrice(
        Request $request,
        ValidatorInterface $validator,
        InvoiceRepository $InvoiceRepository,
    ): Response {

        /* Массив для передачи в твиг списка по поиску */
        $arr_price = [];

        /*Подключаем класс базы данных*/
        $entity_price = new IdDetailsManufacturer();

        /*Подключаем формы */
        $form_price_search = $this->createForm(PartNoType::class, $entity_price);

        /*Валидация формы */
        $form_price_search->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_search_price = $validator->validate($form_price_search);

        if ($form_price_search->isSubmitted()) {
            if ($form_price_search->isValid()) {

                /* собераем список по поиску */
                $part_numbers_search = strtolower(preg_replace(
                    '#\s#',
                    '',
                    $form_price_search->getData()->getPartNumbers()
                ));

                $id_part_name_search = $form_price_search->getData()->getIdPartName();
                $id_car_brand_search = $form_price_search->getData()->getIdCarBrand();
                $id_side_search = $form_price_search->getData()->getIdSide();
                $id_body_search = $form_price_search->getData()->getIdBody();
                $id_axle_search = $form_price_search->getData()->getIdAxle();

                $arr_form_price_search = $request->request->all()['part_no'];
                $array_filter_part_no = array_filter($arr_form_price_search);

                if ($part_numbers_search) {

                    $arr_price[] = $InvoiceRepository
                        ->findBySearchNumberPrice($part_numbers_search);
                } elseif ($id_part_name_search) {

                    $arr_price[] = $InvoiceRepository
                        ->findBySearchPart($id_part_name_search, $array_filter_part_no, $form_price_search);
                } elseif ($id_car_brand_search) {

                    $arr_price[] = $InvoiceRepository
                        ->findBySearchPart($id_car_brand_search, $array_filter_part_no, $form_price_search);
                } elseif ($id_side_search) {

                    $arr_price[] = $InvoiceRepository
                        ->findBySearchPart($id_side_search, $array_filter_part_no, $form_price_search);
                } elseif ($id_body_search) {

                    $arr_price[] = $InvoiceRepository
                        ->findBySearchPart($id_body_search, $array_filter_part_no, $form_price_search);
                } elseif ($id_axle_search) {

                    $arr_price[] = $InvoiceRepository
                        ->findBySearchPart($id_axle_search, $array_filter_part_no, $form_price_search);
                }
            } else {

                /* Выводим вбитые данные в форму поиска если форма не прошла валидацию, через сессии */
                $value_form_price = $request->request->all();
                if ($value_form_price) {
                    foreach ($value_form_price as $key => $values) {
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                $this->addFlash($key . '_search', $value);
                            }
                        }
                    }
                }

                /* Выводим сообщения ошибки в форму поиска, через сессии  */
                if ($errors_search_price) {
                    foreach ($errors_search_price as $key) {
                        $message = $key->getmessage();
                        $propertyPath = $key->getpropertyPath() . '_search';
                        $this->addFlash(
                            $propertyPath,
                            $message
                        );
                    }
                }

                return $this->redirectToRoute('price');
            }
        }


        return $this->render('price/price.html.twig', [
            'title_logo' => 'Прайс',
            'legend_search' => 'Поиск',
            'form_price_search' => $form_price_search->createView(),
            'arr_price' => $arr_price,
        ]);
    }


    /* функция сброса */
    #[Route('/reset_price', name: 'reset_price')]
    public function resetPart(): Response
    {
        return $this->redirectToRoute('price');
    }


    /* функция продажи */
    #[Route('/sold_price', name: 'sold_price')]
    public function soldPrice(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator,
        InvoiceRepository $InvoiceRepository,
        SoldRepository $SoldRepository,
    ): Response {

        /* Подключаем сущности  */
        $entity_sold = new Sold();

        /* Подключаем форм */
        $form_sold = $this->createForm(SoldType::class, $entity_sold);
        $form_complete_sales = $this->createForm(CompleteSalesType::class);

        /*Валидация формы */
        $form_sold->handleRequest($request);

        /*Выводим список продоваемых деталей*/
        $arr_sale_list[] = $SoldRepository->findBySaleListCompleteSales();
        //dd($arr_sale_list);
        /*Выводим общую сумму */
        $total_amount_transaction = $SoldRepository->countTotalAmountPriceSold();

        if (!empty($_POST['sold_price'])) {

            /*Открываем деталь по id */
            $id = $request->request->all()['sold_price'];
        } else {

            $id = $form_sold->getData()->getHiddenSold();
        }
        /*Открываем деталь по id */
        $arr_sold_part = $InvoiceRepository->findOneByInvoiceJoinDetails($id);

        /*Валидация формы */
        if ($form_sold->isSubmitted()) {

            /* Выводим данные и формы */
            $quantity_sold = $form_sold->getData()->getQuantitySold();
            //  dd($arr_sold_part);
            /* Выводим данные из базы данных */
            $quantity_invoice = $arr_sold_part[0]->getQuantity();
            $invoice_quantity_sold = $arr_sold_part[0]->getQuantitySold();
            $sum_quantity_sold = $invoice_quantity_sold + $quantity_sold;

            /* Подключаем валидацию и прописываем условида валидации и сообщение ошибки*/
            $validator = Validation::createValidator();

            $input = [
                'quantity_sold_error' => $quantity_sold,
                'sum_quantity_sold_error' => $sum_quantity_sold,
            ];

            $constraint = new Collection([
                'quantity_sold_error' => new Range(
                    min: 1,
                    max: $quantity_invoice,
                    notInRangeMessage: 'Недопустимое число',
                ),
                'sum_quantity_sold_error' => new Range(
                    min: 1,
                    max: $quantity_invoice,
                    notInRangeMessage: 'Недопустимое число',
                ),
            ]);

            $errors = $validator->validate($input, $constraint);

            /* Валидация формы */

            if ($form_sold->isValid() && !$errors->count()) {

                /* Сохранения формы */
                $entity_sold->setIdInvoice($arr_sold_part[0]);

                $entity_sold->setQuantitySold($quantity_sold);

                $entity_sold->setPriceSold($form_sold->getData()->getPriceSold() * 100);

                $entity_sold->setDateSold(new DateTime($request->request->all()['sold']['date_sold']));

                /*Устанавливаем статус продажи для выведения общей сумму 
                    всех продаж при одной сделки "1"- не выводится, "2"- выводится */
                $entity_sold->setSoldStatus(2);

                $arr_sold_part[0]->setQuantitySold($sum_quantity_sold);

                $em = $doctrine->getManager();
                $em->persist($entity_sold);
                $em->flush();

                return $this->redirectToRoute('sold_price');
            } else {

                /* Выводим вбитые данные в формы сохранения если форма не прошла валидацию, через сессии  */
                $value_form_sold = $request->request->all();
                if ($value_form_sold) {
                    foreach ($value_form_sold as $key => $values) {
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                $this->addFlash($key . '_sold', $value);
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

        return $this->render('price/sold.html.twig', [
            'title_logo' => 'Продажа детали',
            'legend' => 'Продажа детали',
            'total_amount_transaction' => $total_amount_transaction[0][1],
            'form_sold' => $form_sold->createView(),
            'form_complete_sales' => $form_complete_sales->createView(),
            'arr_sold_part' => $arr_sold_part,
            'arr_sale_list' => $arr_sale_list,
        ]);
    }

    /* функция изменения продажи */
    #[Route('/edit_sold_price', name: 'edit_sold_price')]
    public function editSoldPrice(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator,
        SoldRepository $SoldRepository,
    ): Response {

        /* Подключаем сущности  */
        $entity_sold = new Sold();

        /* Подключаем форм */
        $form_sold_edit = $this->createForm(SoldType::class, $entity_sold);

        /*Валидация формы */
        $form_sold_edit->handleRequest($request);

        /*Открываем деталь по id */
        if (!empty($_POST['edit_sold_price'])) {

            $id = $request->request->all()['edit_sold_price'];
        } else {

            $id = $form_sold_edit->getData()->getHiddenSold();
        }
        /*Открываем деталь по id */
        $arr_sold_part = $SoldRepository->findOneByIdSoldEdit($id);

        /*Валидация формы */
        if ($form_sold_edit->isSubmitted()) {

            /* Выводим данные из формы */
            $quantity_sold = $form_sold_edit->getData()->getQuantitySold();

            /* Выводим данные из базы данных */
            $quantity_invoice = $arr_sold_part[0]->getIdInvoice()->getQuantity();
            $invoice_quantity_sold = $arr_sold_part[0]->getIdInvoice()->getQuantitySold();
            $sold_quantity_sold = $arr_sold_part[0]->getQuantitySold();
            $sum_quantity_sold = $quantity_sold + ($invoice_quantity_sold - $sold_quantity_sold);

            /* Подключаем валидацию и прописываем условида валидации и сообщение ошибки*/
            $validator = Validation::createValidator();

            $input = [
                'quantity_sold_error' => $quantity_sold,
                'sum_quantity_sold_error' => $sum_quantity_sold,
            ];

            $constraint = new Collection([
                'quantity_sold_error' => new Range(
                    min: 1,
                    max: $quantity_invoice,
                    notInRangeMessage: 'Недопустимое число',
                ),
                'sum_quantity_sold_error' => new Range(
                    min: 1,
                    max: $quantity_invoice,
                    notInRangeMessage: 'Недопустимое число',
                ),
            ]);

            $errors = $validator->validate($input, $constraint);

            /* Валидация формы */

            if ($form_sold_edit->isValid() && !$errors->count()) {

                $arr_sold_part[0]->setIdInvoice($arr_sold_part[0]->getIdInvoice());

                $arr_sold_part[0]->setQuantitySold($quantity_sold);

                $arr_sold_part[0]->setPriceSold($form_sold_edit->getData()->getPriceSold() * 100);

                $arr_sold_part[0]->setDateSold(new DateTime($request->request->all()['sold']['date_sold']));

                $arr_sold_part[0]->getIdInvoice()->setQuantitySold($quantity_sold);

                $doctrine->getManager()->flush();

                return $this->redirectToRoute('sold_price');
            } else {

                /* Выводим вбитые данные в формы сохранения если форма не прошла валидацию, через сессии  */
                $value_form_sold = $request->request->all();
                if ($value_form_sold) {
                    foreach ($value_form_sold as $key => $values) {
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                $this->addFlash($key . '_sold', $value);
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

        return $this->render('price/edit_sold.html.twig', [
            'title_logo' => 'Продажа детали',
            'legend' => 'Продажа детали',
            'form_sold_edit' => $form_sold_edit->createView(),
            'arr_sold_part' => $arr_sold_part,
        ]);
    }

    /* функция удаления */
    #[Route('/delete_sale_list', name: 'delete_sale_list')]
    public function deleteSaleList(ManagerRegistry $doctrine, Request $request): Response
    {
        $id_delete_sale_list = $request->request->all()['delete_sale_list'];
        $delete_sold = $doctrine->getRepository(Sold::class)->findOneBy(['id_invoice' => $id_delete_sale_list]);
        $delete_sold_Invoice = $doctrine->getRepository(Invoice::class)->find($id_delete_sale_list);

        $delete_sold_Invoice->setSoldStatus(1);

        $quantity_sold = $delete_sold_Invoice->getQuantitySold() - $delete_sold->getQuantitySold();
        $delete_sold_Invoice->setQuantitySold($quantity_sold);

        $entityManager = $doctrine->getManager();
        $entityManager->remove($delete_sold);
        $entityManager->flush();

        return $this->redirectToRoute('sold_price');
    }

    /* функция завершения сделки */
    #[Route('/complete_sales', name: 'complete_sales')]
    public function completeSales(
        ManagerRegistry $doctrine,
        Request $request,
        SoldRepository $SoldRepository,
        InvoiceRepository $InvoiceRepository
    ): Response {

        /* Подключаем сущности  */
        $entity_ku_dir = new KuDir();

        /* Подключаем форм */
        $form_complete_sales = $this->createForm(CompleteSalesType::class);

        /*Валидация формы */
        $form_complete_sales->handleRequest($request);

        if ($form_complete_sales->isSubmitted()) {

            if ($form_complete_sales->isValid()) {

                // dd($form_complete_sales->getData()['id_payment_method_complete_sales']);
                $id_payment_method_complete_sales = $form_complete_sales
                    ->getData()['id_payment_method_complete_sales']
                    ->getId();

                if ($id_payment_method_complete_sales == 2) {

                    $receipt_change_complete_sales = $form_complete_sales
                        ->getData()['receipt_change_complete_sales'];
                    $receipt_number_complete_sales = $form_complete_sales
                        ->getData()['receipt_number_complete_sales'];

                    $сount_receipt_change_number = $doctrine->getRepository(KuDir::class)
                        ->count([
                            'receipt_change' => $receipt_change_complete_sales,
                            'receipt_number' => $receipt_number_complete_sales
                        ]);

                    if ($сount_receipt_change_number == 0) {
                        $entity_ku_dir->setReceiptChange(
                            $receipt_change_complete_sales
                        );
                        $entity_ku_dir->setReceiptNumber(
                            $receipt_number_complete_sales
                        );
                        $entity_ku_dir->setReceiptDate(
                            $form_complete_sales->getData()['receipt_date_complete_sales']
                        );
                        $entity_ku_dir->setComing(
                            $form_complete_sales->getData()['hidden_complete_sales']
                        );
                        $entity_ku_dir->setExpenditure(0);

                        $em = $doctrine->getManager();
                        $em->persist($entity_ku_dir);
                        $em->flush();
                    } else {

                        /* Выводим ошибки валидации, через сессии  */

                        $this->addFlash(
                            'error_сount_receipt_change_number',
                            'Смена или номер чека существует.'
                        );
                        return $this->redirectToRoute('sold_price');
                    }
                }


                /* Выводим список деталей на продажу */
                $complete_sales_invoice = $SoldRepository->findBySaleListCompleteSales();

                //dd($complete_sales_invoice);
                foreach ($complete_sales_invoice as $key => $value) {

                    $value->setSoldStatus(1);

                    $quantity_invoice = $value->getIdInvoice()->getQuantity();
                    $invoice_quantity_sold = $value->getIdInvoice()->getQuantitySold();
                    /* если количество на складе и количество проданных 
                        деталей равно, в ячейке продажи setSales(2) */
                    if ($invoice_quantity_sold == $quantity_invoice) {

                        $value->getIdInvoice()->setSales(2);
                    }
                }

                $doctrine->getManager()->flush();


                foreach ($complete_sales_invoice as $key => $value) {

                    $count_availability = $InvoiceRepository->findByCountAvailability(
                        $value->getIdInvoice()->getIdDetails()
                    );
                    if ($count_availability[0][1] == 0) {
                        $in_stock = $doctrine->getRepository(Availability::class)->find(2);
                        $value->getIdInvoice()->getIdDetails()->setIdInStock($in_stock);
                    }
                }


                $doctrine->getManager()->flush();
            }
        }

        return $this->redirectToRoute('price');
    }
}
