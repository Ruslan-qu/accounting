<?php

namespace App\Controller\Sections_header;

use App\Entity\Invoice;
use App\Form\PartNoType;
use App\Entity\OriginalRooms;
use App\Form\SearchSalesType;
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
            }
        }


        return $this->render('sales/sales.html.twig', [
            'title_logo' => 'Продажи',
            'legend_search' => 'Поиск',
            'form_sales_search' => $form_sales_search->createView(),
        ]);
    }

    /* функция сброса */
    #[Route('/reset_sales', name: 'reset_sales')]
    public function resetPart(): Response
    {
        return $this->redirectToRoute('sales');
    }
}
