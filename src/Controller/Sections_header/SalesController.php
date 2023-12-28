<?php

namespace App\Controller\Sections_header;

use App\Entity\Invoice;
use App\Form\PartNoType;
use App\Entity\OriginalRooms;
use App\Form\SearchSalesType;
use App\Repository\SoldRepository;
use App\Entity\IdDetailsManufacturer;
use App\Repository\InvoiceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
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

        /*Подключаем класс базы данных*/
        $entity_invoice = new Invoice();
        $entity_part_no = new IdDetailsManufacturer();
        $entity_original_rooms = new OriginalRooms();
        $entity_PartNo = new IdDetailsManufacturer();

        /*Подключаем формы */
        $form_sales_search = $this->createForm(SearchSalesType::class);

        /*Валидация формы */
        $form_sales_search->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_search_sales = $validator->validate($form_sales_search);

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
                //dd($errors_search_original_number);
                /* Выводим сообщения ошибки в форму поиска, через сессии  */
                if ($errors_search_sales) {
                    foreach ($errors_search_sales as $key) {
                        $message = $key->getmessage();
                        $propertyPath = $key->getpropertyPath() . '_errors';
                        $this->addFlash(
                            $propertyPath,
                            $message
                        );
                    }
                }
            }
        } else {
            $arr_sales = $SoldRepository->findBySoldList();
        }

        $total_amount = 0;
        foreach ($arr_sales as $key => $value) {
            $total_amount += ($value->getPriceSold() / 100);
        }
        //dd($total_amount);
        return $this->render('sales/sales.html.twig', [
            'title_logo' => 'Продажи',
            'legend_search' => 'Поиск',
            'total_amount' => $total_amount,
            'form_sales_search' => $form_sales_search->createView(),
            'arr_sales' => $arr_sales,

        ]);
    }

    /* функция сброса */
    #[Route('/reset_sales', name: 'reset_sales')]
    public function resetPart(): Response
    {
        return $this->redirectToRoute('sales');
    }
}
