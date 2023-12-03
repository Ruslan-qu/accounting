<?php

namespace App\Controller\Sections_header;

use App\Entity\Invoice;
use App\Form\PartNoType;
use App\Form\SearchInvoiceType;
use App\Form\IncomingDocumentsType;
use App\Entity\IdDetailsManufacturer;
use App\Repository\InvoiceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RefundController extends AbstractController
{
    #[Route('/refund', name: 'refund')]
    public function SearchRefund(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator,
        InvoiceRepository $InvoiceRepository,
    ): Response {

        /*Подключаем класс базы данных*/
        $entity_incoming_documents = new Invoice();
        $entity_part_no = new IdDetailsManufacturer();


        /*Подключаем формы */
        $form_incoming_documents = $this->createForm(IncomingDocumentsType::class, $entity_incoming_documents);
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);
        $form_search_refund = $this->createForm(SearchInvoiceType::class);

        /*Валидация формы */
        $form_incoming_documents->handleRequest($request);
        $form_search_refund->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_refund = $validator->validate($form_search_refund);

        /* Массив для передачи в твиг списка по поиску */
        $arr_refund = [];

        if ($form_search_refund->isSubmitted()) {
            if ($form_search_refund->isValid()) {
            }
        } else {
            $arr_refund[] = $doctrine->getRepository(Invoice::class)->findAll();
        }


        return $this->render('refund/refund.html.twig', [
            'title_logo' => 'Возвращенные детали',
            'legend_search' => 'Поиск',
            'form_search' => $form_search_refund->createView(),
            'arr_refund' => $arr_refund,
        ]);
    }

    /* функция сброса */
    #[Route('/reset', name: 'reset')]
    public function Reset(): Response
    {
        return $this->redirectToRoute('refund');
    }
}
