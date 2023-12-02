<?php

namespace App\Controller\Sections_header;

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
    ): Response{

            /*Подключаем класс базы данных*/
        $entity_incoming_documents = new Invoice();
        $entity_part_no = new IdDetailsManufacturer();
    

        /*Подключаем формы */
        $form_incoming_documents = $this->createForm(IncomingDocumentsType::class, $entity_incoming_documents);
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);
        $form_invoice_date_price = $this->createForm(IncomingDocumentsType::class, $entity_incoming_documents);

            /*Валидация формы */
        $form_incoming_documents->handleRequest($request);
        $form_invoice_date_price->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_incoming_documents = $validator->validate($form_incoming_documents);

        /* Массив для передачи в твиг списка по поиску */
        $arr_incoming_documents = [];


        return $this->render('refund/refund.html.twig', [
            'controller_name' => 'RefundController',
        ]);
    }

    

    

    

    /*Валидация формы */
    if ($form_search_invoice->isSubmitted()) {
        if ($form_search_invoice->isValid()) {

            /* Массив для сбора списка по поиску */
            $arr_incoming_documents_search = [];

            /* собераем списка по поиску */
            $number_document_search = $request->request->all()['search_invoice']['search_number_document'];
            if ($number_document_search) {
                $arr_incoming_documents_search[] = $doctrine->getRepository(Invoice::class)
                    ->findBy(['number_document' => $number_document_search]);
            }

            $s_data_invoice_search = $request->request->all()['search_invoice']['s_data_invoice'];
            $po_data_invoice_search = $request->request->all()['search_invoice']['po_data_invoice'];
            if ($s_data_invoice_search && $po_data_invoice_search) {
                $arr_incoming_documents_search[] = $InvoiceRepository
                    ->findByDate($s_data_invoice_search, $po_data_invoice_search);
            }
            if ($s_data_invoice_search && !$po_data_invoice_search) {
                $arr_incoming_documents_search[] = $InvoiceRepository
                    ->findBySDate($s_data_invoice_search);
            }
            if (!$s_data_invoice_search && $po_data_invoice_search) {
                $arr_incoming_documents_search[] = $InvoiceRepository
                    ->findByPoDate($po_data_invoice_search);
            }


            $id_counterparty_search = $request->request->all()['search_invoice']['search_id_counterparty'];
            if ($id_counterparty_search) {
                $arr_incoming_documents_search[] = $doctrine->getRepository(Invoice::class)
                    ->findBy(['id_counterparty' => $id_counterparty_search]);
            }

            $part_numbers_search = strtolower($request->request->all()['search_invoice']['id_details']);
            if ($part_numbers_search) {
                $arr_details_manufacturer_details = $doctrine->getRepository(IdDetailsManufacturer::class)
                    ->findBy(['part_numbers' => $part_numbers_search]);
                if ($arr_details_manufacturer_details) {
                    $arr_incoming_documents_search[] = $doctrine->getRepository(Invoice::class)
                        ->findBy(['id_details' => $arr_details_manufacturer_details[0]->getId()]);
                }
            }

            /*$manufacturers_search = strtolower($request->request->all()['search_invoice']['id_manufacturer']);
            if ($manufacturers_search) {
                $arr_details_manufacturer = $doctrine->getRepository(IdDetailsManufacturer::class)
                    ->findBy(['manufacturers' => $manufacturers_search]);
                if ($arr_details_manufacturer) {
                    $arr_incoming_documents_search[] = $doctrine->getRepository(Invoice::class)
                        ->findBy(['id_manufacturer' => $arr_details_manufacturer[0]->getId()]);
                }
            }

            $search_name_details = strtolower($request->request->all()['search_invoice']['search_name_details']);
            if ($search_name_details) {
                $arr_details_manufacturer_name = $doctrine->getRepository(IdDetailsManufacturer::class)
                    ->findBy(['name_details' => $search_name_details]);
                if ($arr_details_manufacturer_name) {
                    $arr_incoming_documents_search[] = $doctrine->getRepository(Invoice::class)
                        ->findBy(['id_name_detail' => $arr_details_manufacturer_name[0]->getId()]);
                }
            }*/

            $s_price_search = $request->request->all()['search_invoice']['s_price'];
            $po_price_search = $request->request->all()['search_invoice']['po_price'];
            if ($s_price_search && $po_price_search) {
                $arr_incoming_documents_search[] = $InvoiceRepository
                    ->findByPrice($s_price_search, $po_price_search);
            }
            if ($s_price_search && !$po_price_search) {
                $arr_incoming_documents_search[] = $InvoiceRepository
                    ->findBySPrice($s_price_search);
            }
            if (!$s_price_search && $po_price_search) {
                $arr_incoming_documents_search[] = $InvoiceRepository
                    ->findByPoPrice($po_price_search);
            }

            /* Удаляем дубли из списка по поиску */
            $newArray = [];
            $Fruits = [];
            foreach ($arr_incoming_documents_search as $key => $value) {
                foreach ($value as $key => $line) {
                    if (!in_array($line->getId(), $Fruits)) {
                        $Fruits[] = $line->getId();
                        $newArray[$key] = $line;
                    }
                }
            }
            $arr_incoming_documents[] = $newArray;
            unset($newArray);
            unset($Fruits);
        } else {

            /* Выводим вбитые данные в форму поиска если форма не прошла валидацию, через сессии */
            $value_form_search_invoice = $request->request->all();
            if ($value_form_search_invoice) {
                foreach ($value_form_search_invoice as $key => $values) {
                    if (is_iterable($values)) {
                        foreach ($values as $key => $value) {
                            $this->addFlash($key, $value);
                        }
                    }
                }
            }

            /* Выводим сообщения ошибки в форму поиска, через сессии  */
            if ($errors_search_invoice) {
                foreach ($errors_search_invoice as $key) {
                    $message = $key->getmessage();
                    $propertyPath = $key->getpropertyPath();
                    $this->addFlash(
                        $propertyPath,
                        $message
                    );
                }
            }
            return $this->redirectToRoute('incoming_documents');
        }
    }

    /* Валидация форм продажи, выводим ошибки валидации, 
    вбитые данные в форм продажи если форма не прошла валидацию, через сессии  */
    if ($session->getFlashBag()->has('sales')) {
        $error_id = $session->getFlashBag()->get('sales')[0];
        $arr_incoming_documents_error[] = $doctrine->getRepository(Invoice::class)
            ->find($error_id);
        $arr_incoming_documents[] = $arr_incoming_documents_error;
    }


    return $this->render('incoming_documents/incoming_documents.html.twig', [
        'title_logo' => 'Входящие документы',
        'legend' => 'Добавить новую счет-фактуру',
        'legend_search' => 'Поиск',
        'form_search' => $form_search_invoice->createView(),
        'form_i_d' => $form_incoming_documents->createView(),
        'form_p_n' => $form_part_no->createView(),
        'arr_incoming_documents' => $arr_incoming_documents,
    ]);
}
}
