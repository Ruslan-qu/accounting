<?php

namespace App\Controller\Sections_header;

use DateTime;
use App\Entity\Sold;
use DateTimeImmutable;
use App\Entity\Invoice;
use App\Form\PartNoType;
use App\Entity\RefundDate;
use App\Entity\Availability;
use App\Entity\Counterparty;
use App\Entity\SearchInvoice;
use App\Entity\RefundActivity;
use App\Form\CounterpartyType;
use App\Form\SearchInvoiceType;
use App\Form\IncomingDocumentsType;
use App\Entity\IdDetailsManufacturer;
use App\Repository\InvoiceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Validation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
/*класс сохраняет, поиск по данным, продажу */

class IncomingDocumentsController extends AbstractController
{
    /*функция поиска по данным */
    #[Route('/incoming_documents', name: 'incoming_documents')]
    public function SearchIncomingDocuments(
        ManagerRegistry $doctrine,
        Request $request,
        InvoiceRepository $InvoiceRepository,
        ValidatorInterface $validator
    ): Response {

        /*Подключаем класс базы данных*/
        $entity_incoming_documents = new Invoice();
        $entity_part_no = new IdDetailsManufacturer();

        /*Подключаем формы */
        $form_incoming_documents = $this->createForm(IncomingDocumentsType::class, $entity_incoming_documents);
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);
        $form_search_invoice = $this->createForm(SearchInvoiceType::class);

        /*Валидация формы */
        $form_search_invoice->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_search_invoice = $validator->validate($form_search_invoice);

        /* Массив для передачи в твиг списка по поиску */
        $arr_incoming_documents = [];

        /*Валидация формы */
        if ($form_search_invoice->isSubmitted()) {
            if ($form_search_invoice->isValid()) {

                /* Массив для сбора списка по поиску */
                // $arr_incoming_documents_search = [];

                /* собераем списка по поиску */
                $number_document_search = $form_search_invoice->getData()['search_number_document'];
                $s_data_invoice_search = $form_search_invoice->getData()['s_data_invoice'];
                $po_data_invoice_search = $form_search_invoice->getData()['po_data_invoice'];
                $id_counterparty_search = $form_search_invoice->getData()['search_id_counterparty'];
                $part_numbers_search = strtolower($form_search_invoice->getData()['search_id_details']);
                $manufacturers_search = strtolower($form_search_invoice->getData()['search_id_manufacturer']);
                $s_price_search = $form_search_invoice->getData()['s_price'];
                $po_price_search = $form_search_invoice->getData()['po_price'];
                $id_payment_method_search = $form_search_invoice->getData()['search_id_payment_method'];

                if ($number_document_search) {
                    $arr_incoming_documents[] = $doctrine->getRepository(Invoice::class)
                        ->findBy(['number_document' => $number_document_search]);
                } elseif ($s_data_invoice_search && $po_data_invoice_search) {

                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findByDateInvoice(
                            $s_data_invoice_search,
                            $po_data_invoice_search,
                            $form_search_invoice
                        );
                } elseif ($s_data_invoice_search && !$po_data_invoice_search) {

                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findBySDate($s_data_invoice_search, $form_search_invoice);
                } elseif (!$s_data_invoice_search && $po_data_invoice_search) {

                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findByPoDate($po_data_invoice_search, $form_search_invoice);
                } elseif ($id_counterparty_search) {

                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findByCounterparty($id_counterparty_search, $form_search_invoice);
                } elseif ($part_numbers_search) {

                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findBySearchNumberInvoice($part_numbers_search, $form_search_invoice);
                } elseif ($manufacturers_search) {

                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findBySearchManufacturers($manufacturers_search, $form_search_invoice);
                } elseif ($s_price_search && $po_price_search) {

                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findByPrice($form_search_invoice);
                } elseif ($s_price_search && !$po_price_search) {

                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findByPrice($form_search_invoice);
                } elseif (!$s_price_search && $po_price_search) {

                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findByPrice($form_search_invoice);
                } elseif ($id_payment_method_search) {

                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findByPaymentMethod($id_payment_method_search);
                }

                /* Удаляем дубли из списка по поиску 
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
                unset($Fruits);*/
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


    /*функция сохранения счет-фактур , номера , производителей, описания деталей */
    #[Route('/save_incoming_documents', name: 'save_incoming_documents')]
    public function SalesIncomingDocuments(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {

        /* Подключаем сущности  */
        $entity_incoming_documents = new Invoice();
        $entity_counterparty = new Counterparty();
        $entity_part_no = new IdDetailsManufacturer();


        /* Подключаем форм */
        $form_incoming_documents = $this->createForm(IncomingDocumentsType::class, $entity_incoming_documents);
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);
        $form_counterparty = $this->createForm(CounterpartyType::class, $entity_counterparty);

        $form_incoming_documents->handleRequest($request);
        $form_part_no->handleRequest($request);
        $form_counterparty->handleRequest($request);

        /* Подключаем валидацию  */
        $errors_incoming_documents = $validator->validate($form_incoming_documents);
        $errors_part_no = $validator->validate($form_part_no);
        //dd($request);
        /*Валидация формы ручного сохранения счет-фактур , номера , производителей, описания деталей */
        if (
            $form_incoming_documents->isSubmitted() && $form_incoming_documents->isValid()
            && $form_part_no->isSubmitted() && $form_part_no->isValid()
        ) {

            $part_number_strtolower_preg_replace = strtolower(preg_replace(
                '#\s#',
                '',
                $request->request->all()['part_no']['part_numbers']
            ));

            $сount_part_number = $doctrine->getRepository(IdDetailsManufacturer::class)
                ->count(['part_numbers' => $part_number_strtolower_preg_replace]);

            /* Валидация дулей номеров деталей, сохранения номера , производителей, описания деталей */
            if ($сount_part_number == 0) {

                $entity_part_no->setPartNumbers($part_number_strtolower_preg_replace);

                $entity_part_no->setManufacturers(
                    strtolower(preg_replace(
                        '#[^a-z\d \-&]#i',
                        '',
                        $request->request->all()['part_no']['manufacturers']
                    ))
                );

                $entity_part_no->setIdInStock($doctrine->getRepository(Availability::class)->find(1));

                $em = $doctrine->getManager();
                $em->persist($entity_part_no);
                $em->flush();
            }

            $id_part_number_manufacturer = $doctrine->getRepository(IdDetailsManufacturer::class)
                ->findOneBy(['part_numbers' => $part_number_strtolower_preg_replace]);

            $entity_incoming_documents->setIdDetails($id_part_number_manufacturer);

            $entity_incoming_documents->setIdManufacturer($id_part_number_manufacturer);

            $entity_incoming_documents->setNumberDocument(
                $request->request->all()['incoming_documents']['number_document']
            );

            $entity_incoming_documents->setDataInvoice(
                new DateTime($request->request->all()['incoming_documents']['data_invoice'])
            );

            $entity_incoming_documents->setQuantity(
                $request->request->all()['incoming_documents']['quantity']
            );

            $price = $request->request->all()['incoming_documents']['price'];
            if (strpos($price, ',')) {
                $strPriceReplace = str_replace(',', '.', $price);
                $entity_incoming_documents->setPrice($strPriceReplace * 100);
            } else {
                $entity_incoming_documents->setPrice($price * 100);
            }

            $entity_incoming_documents->setSoldStatus(1);
            $entity_incoming_documents->setSales(1);
            $entity_incoming_documents->setRefund(1);

            $em = $doctrine->getManager();
            $em->persist($entity_incoming_documents);
            $em->flush();

            return $this->redirectToRoute('incoming_documents');
        } else {

            /* Выводим вбитые данные в формы сохранения если форма не прошла валидацию, через сессии  */
            $value_form_incoming_documents_and_part_no = $request->request->all();
            if ($value_form_incoming_documents_and_part_no) {
                foreach ($value_form_incoming_documents_and_part_no as $key => $values) {
                    if (is_iterable($values)) {
                        foreach ($values as $key => $value) {
                            $this->addFlash($key, $value);
                        }
                    }
                }
            }

            /* Выводим ошибки валидации, через сессии */
            if ($errors_incoming_documents) {
                foreach ($errors_incoming_documents as $key) {
                    $message = $key->getmessage();
                    $propertyPath = $key->getpropertyPath();
                    $this->addFlash(
                        $propertyPath,
                        $message
                    );
                }
            }

            if ($errors_part_no) {
                foreach ($errors_part_no as $key) {
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

    /* Функция возврата */
    #[Route('/refund_part', name: 'refund_part', methods: ['GET'])]
    public function Refund(
        ManagerRegistry $doctrine,
        Request $request,
        InvoiceRepository $InvoiceRepository,
    ): Response {
        $entity_refund_date = new RefundDate();

        $id = $request->query->get('refund_part');
        $refund = $InvoiceRepository->findOneByInvoiceJoinDetails($id);
        $refund[0]->setRefund(2);
        $id_refund_activit = $doctrine->getRepository(RefundActivity::class)->find(2);
        $refund[0]->setIdRefundActivity($id_refund_activit);

        $entity_refund_date->setIdInvoiceRefundDate($refund[0]);
        $entity_refund_date->setRefundDate(new \DateTime());

        $em = $doctrine->getManager();
        $em->persist($entity_refund_date);
        $em->flush();

        $in_stock = $doctrine->getRepository(Availability::class)->find(2);
        $count_availability = $InvoiceRepository->findByCountAvailability($refund[0]->getIdDetails());
        if ($count_availability[0][1] == 0) {

            $refund[0]->getIdDetails()->setIdInStock($in_stock);
        }
        $doctrine->getManager()->flush();

        return $this->redirectToRoute('incoming_documents');
    }


    /* функция сброса */
    #[Route('/reset_invoice', name: 'reset_invoice')]
    public function Reset(): Response
    {
        return $this->redirectToRoute('incoming_documents');
    }

    /* функция удаления */
    #[Route('/delete_invoice', name: 'delete_invoice')]
    public function deleteInvoice(ManagerRegistry $doctrine, Request $request): Response
    {

        $id_delete_invoice = $request->request->all()['delete_invoice'];

        $delete_invoice = $doctrine->getRepository(Invoice::class)->find($id_delete_invoice);

        $entityManager = $doctrine->getManager();
        $entityManager->remove($delete_invoice);
        $entityManager->flush();

        return $this->redirectToRoute('incoming_documents');
    }
}
