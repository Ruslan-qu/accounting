<?php

namespace App\Controller\Sections_header;

use App\Form\PartNoType;
use App\Entity\IdDetailsManufacturer;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\IdDetailsManufacturerRepository;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PartNoController extends AbstractController
{
    #[Route('/part_no', name: 'part_no')]
    public function SearchPart(
        ManagerRegistry $doctrine,
        Request $request,
        IdDetailsManufacturerRepository $IdDetailsManufacturerRepository,
        ValidatorInterface $validator
    ): Response {
        /*Подключаем сессии, для передачи ошибок валидации*/
        $session = new Session();
        $session->start();

        /*Подключаем класс базы данных*/
        $entity_part_no = new IdDetailsManufacturer();

        /*Подключаем формы */
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);

        /*Валидация формы */
        $form_part_no->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_search_part_no = $validator->validate($form_part_no);

        /* Массив для передачи в твиг списка по поиску */
        $arr_incoming_documents = [];

        /*Валидация формы */
        if ($form_part_no->isSubmitted()) {
            if ($form_part_no->isValid()) {

                /* Массив для сбора списка по поиску */
                $arr_part_no_search = [];

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

        return $this->render('part_no/part_no.html.twig', [
            'title_logo' => 'Детали',
            'legend' => 'Добавить новую деталь',
            'legend_search' => 'Поиск',
            'form_p_n' => $form_part_no->createView(),
        ]);
    }



    #[Route('/sales_incoming_documents', name: 'sales_incoming_documents')]
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

        /*Валидация формы ручного сохранения счет-фактур , номера , производителей, описания деталей */
        if (
            $form_incoming_documents->isSubmitted() && $form_incoming_documents->isValid()
            && $form_part_no->isSubmitted() && $form_part_no->isValid()
        ) {

            $part_number_strtolower_preg_replace = strtolower(preg_replace(
                '#[^a-z\d]#i',
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

                /*$entity_part_no->setNameDetails(
                    mb_strtolower(preg_replace(
                        '#[^а-яё\d\s\.,]#ui',
                        '',
                        $request->request->all()['part_no']['name_details']
                    ))
                );*/

                $em = $doctrine->getManager();
                $em->persist($entity_part_no);
                $em->flush();
            }

            $id_part_number_manufacturer = $doctrine->getRepository(IdDetailsManufacturer::class)
                ->findOneBy(['part_numbers' => $part_number_strtolower_preg_replace]);

            $entity_incoming_documents->setIdDetails($id_part_number_manufacturer);

            $entity_incoming_documents->setIdManufacturer($id_part_number_manufacturer);

            /*$entity_incoming_documents->setIdNameDetail($id_part_number_manufacturer);*/

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
}
