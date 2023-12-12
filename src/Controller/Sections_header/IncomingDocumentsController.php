<?php

namespace App\Controller\Sections_header;

use DateTime;
use App\Entity\Sold;
use DateTimeImmutable;
use App\Entity\Invoice;
use App\Form\PartNoType;
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

        /*Подключаем сессии, для передачи ошибок валидации*/
        $session = new Session();
        $session->start();

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
                $number_document_search = $request->request->all()['search_invoice']['search_number_document'];
                $s_data_invoice_search = $request->request->all()['search_invoice']['s_data_invoice'];
                $po_data_invoice_search = $request->request->all()['search_invoice']['po_data_invoice'];
                $id_counterparty_search = $request->request->all()['search_invoice']['search_id_counterparty'];
                $part_numbers_search = strtolower($request->request->all()['search_invoice']['search_id_details']);
                $manufacturers_search = strtolower($request->request->all()['search_invoice']['search_id_manufacturer']);
                $s_price_search = $request->request->all()['search_invoice']['s_price'];
                $po_price_search = $request->request->all()['search_invoice']['po_price'];
                $id_payment_method_search = $request->request->all()['search_invoice']['search_id_payment_method'];

                if ($number_document_search) {
                    $arr_incoming_documents[] = $doctrine->getRepository(Invoice::class)
                        ->findBy(['number_document' => $number_document_search]);
                } elseif ($s_data_invoice_search && $po_data_invoice_search) {
                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findByDate($s_data_invoice_search, $po_data_invoice_search);
                } elseif ($s_data_invoice_search && !$po_data_invoice_search) {
                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findBySDate($s_data_invoice_search);
                } elseif (!$s_data_invoice_search && $po_data_invoice_search) {
                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findByPoDate($po_data_invoice_search);
                } elseif ($id_counterparty_search) {
                    $arr_incoming_documents[] = $doctrine->getRepository(Invoice::class)
                        ->findBy(['id_counterparty' => $id_counterparty_search]);
                } elseif ($part_numbers_search) {
                    $arr_details_manufacturer_details = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['part_numbers' => $part_numbers_search]);
                    if ($arr_details_manufacturer_details) {
                        $arr_incoming_documents[] = $doctrine->getRepository(Invoice::class)
                            ->findBy(['id_details' => $arr_details_manufacturer_details[0]->getId()]);
                    }
                } elseif ($manufacturers_search) {
                    $arr_details_manufacturer = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['manufacturers' => $manufacturers_search]);
                    if ($arr_details_manufacturer) {
                        $arr_incoming_documents[] = $doctrine->getRepository(Invoice::class)
                            ->findBy(['id_manufacturer' => $arr_details_manufacturer[0]->getId()]);
                    }
                } elseif ($s_price_search && $po_price_search) {
                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findByPrice($s_price_search, $po_price_search);
                } elseif ($s_price_search && !$po_price_search) {
                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findBySPrice($s_price_search);
                } elseif (!$s_price_search && $po_price_search) {
                    $arr_incoming_documents[] = $InvoiceRepository
                        ->findByPoPrice($po_price_search);
                } elseif ($id_payment_method_search) {
                    $arr_incoming_documents[] = $doctrine->getRepository(Invoice::class)
                        ->findBy(['id_payment_method' => $id_payment_method_search]);
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


    /*функция сохранения счет-фактур , номера , производителей, описания деталей */
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


    /* Функция формы продажи */
    #[Route('/sales_parts', name: 'sales_parts')]
    public function SalesParts(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {

        /* Валидация формы продажи */
        if (
            isset($_POST['quantity_sold'])
            && isset($_POST['price_sold'])
            && isset($_POST['date_sold'])
        ) {
            /* Подключаем сущности */
            $entity_sold = new Sold();

            /* Выводим данные и формы */
            $id = $request->request->all()['sales'];
            $quantity_sold = $request->request->all()['quantity_sold'];
            $price_sold = $request->request->all()['price_sold'];

            /* Выводим по ид из базы данных */
            $entity_sales = $doctrine->getRepository(Invoice::class)->find($id);
            $quantity = $entity_sales->getQuantity();
            $entity_quantity_sold = $entity_sales->getQuantitySold();
            $sum_quantity_sold = $quantity_sold + $entity_quantity_sold;

            /* Подключаем валидацию и прописываем условида валидации и сообщение ошибки*/
            $validator = Validation::createValidator();

            $input = [
                'quantity_sold_error' => $quantity_sold,
                'sum_quantity_sold_error' => $sum_quantity_sold,
                'price_sold_error' => $price_sold,
            ];

            $constraint = new Assert\Collection([
                'quantity_sold_error' => new Assert\Range(
                    min: 1,
                    max: $quantity,
                    notInRangeMessage: 'Недопустимое число',
                ),
                'sum_quantity_sold_error' => new Assert\Range(
                    min: 1,
                    max: $quantity,
                ),
                'price_sold_error' => new Assert\Range(
                    min: 1,
                    minMessage: 'Недопустимое число',
                ),
            ]);

            $errors = $validator->validate($input, $constraint);

            /* Валидация формы */
            if (!$errors->count()) {

                /* Запись в базу данных */
                $entity_sales->setQuantitySold(
                    $entity_quantity_sold +
                        $request->request->all()['quantity_sold']
                );

                $entity_sold->setInvoice($entity_sales);

                $entity_sold->setQuantitySold(
                    $request->request->all()['quantity_sold']
                );

                $entity_sold->setPriceSold(
                    $request->request->all()['price_sold']
                );
                $entity_sold->setDateSold(
                    new DateTimeImmutable($request->request->all()['date_sold'])
                );

                $em = $doctrine->getManager();
                $em->persist($entity_sold);
                $em->flush();

                $quantity_sold = $entity_sales->getQuantitySold();

                if ($quantity_sold == $quantity) {

                    $entity_sales->setSales(2);

                    $doctrine->getManager()->flush();
                }

                return $this->redirectToRoute('incoming_documents');
            } else {
                /* Выводим вбитые данные в форму продаж если форма не прошла валидацию, через сессии  */
                $value_sold = $request->request->all();
                if ($value_sold) {
                    foreach ($value_sold as $key => $value) {
                        $this->addFlash($key, $value);
                    }
                }

                /* Выводим ошибки валидации, через сессии  */
                if ($errors) {
                    foreach ($errors as $key) {
                        //dd($key);
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

    /* Функция возврата , изменяем данные в базе данных ячейке возврат  */
    #[Route('/refund_part', name: 'refund_part', methods: ['GET'])]
    public function Refund(ManagerRegistry $doctrine, Request $request): Response
    {
        $id = $request->query->get('refund_part');

        $refund = $doctrine->getRepository(Invoice::class)->find($id);

        $refund->setRefund(2);

        $id_refund_activit = $doctrine->getRepository(RefundActivity::class)->find(2);

        $refund->setIdRefundActivity($id_refund_activit);

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
