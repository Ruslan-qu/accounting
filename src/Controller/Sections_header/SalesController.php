<?php

namespace App\Controller\Sections_header;

use App\Entity\Invoice;
use App\Form\PartNoType;
use App\Entity\OriginalRooms;
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
        $form_price_search = $this->createForm(PartNoType::class, $entity_PartNo);

        /*Валидация формы */
        $form_price_search->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_search_price = $validator->validate($form_price_search);


        return $this->render('sales/sales.html.twig', [
            'title_logo' => 'Продажи',
        ]);
    }
}
