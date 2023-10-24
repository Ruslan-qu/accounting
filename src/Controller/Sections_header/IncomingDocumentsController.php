<?php

namespace App\Controller\Sections_header;

use DateTime;
use App\Entity\Sold;
use DateTimeImmutable;
use App\Entity\Invoice;
use App\Form\PartNoType;
use App\Entity\Counterparty;
use App\Entity\SearchInvoice;
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

class IncomingDocumentsController extends AbstractController
{
    #[Route('/incoming_documents', name: 'incoming_documents')]
    public function AddIncomingDocuments(
        ManagerRegistry $doctrine,
        Request $request,
        InvoiceRepository $InvoiceRepository,
        ValidatorInterface $validator
    ): Response {

        $session = new Session();
        $session->start();
        // dd($session->getFlashBag()->has('sales'));



        $entity_incoming_documents = new Invoice();
        $entity_part_no = new IdDetailsManufacturer();
        $entity_search_invoice = new SearchInvoice();

        $form_incoming_documents = $this->createForm(IncomingDocumentsType::class, $entity_incoming_documents);
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);
        $form_search_invoice = $this->createForm(SearchInvoiceType::class, $entity_search_invoice);

        //dd();
        $form_search_invoice->handleRequest($request);

        $errors_search_invoice = $validator->validate($form_search_invoice);

        $arr_incoming_documents = [];
        if ($form_search_invoice->isSubmitted()) {
            if ($form_search_invoice->isValid()) {

                // dd($request->request->all());
                $arr_incoming_documents_search = [];

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
                    //dd($arr_incoming_documents);
                }
                if ($s_data_invoice_search && !$po_data_invoice_search) {
                    $arr_incoming_documents_search[] = $InvoiceRepository
                        ->findBySDate($s_data_invoice_search);
                }
                if (!$s_data_invoice_search && $po_data_invoice_search) {
                    $arr_incoming_documents_search[] = $InvoiceRepository
                        ->findByPoDate($po_data_invoice_search);
                    // dd($arr_incoming_documents);
                }


                $id_counterparty_search = $request->request->all()['search_invoice']['search_id_counterparty'];
                if ($id_counterparty_search) {
                    $arr_incoming_documents_search[] = $doctrine->getRepository(Invoice::class)
                        ->findBy(['id_counterparty' => $id_counterparty_search]);
                    //dd($arr_incoming_documents);
                }
                $part_numbers_search = strtolower($request->request->all()['search_invoice']['id_details']);
                if ($part_numbers_search) {
                    $arr_details_manufacturer = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['part_numbers' => $part_numbers_search]);
                    if ($arr_details_manufacturer) {
                        //dd($arr_details_manufacturer[0]->getId());
                        $arr_incoming_documents_search[] = $doctrine->getRepository(Invoice::class)
                            ->findBy(['id_details' => $arr_details_manufacturer[0]->getId()]);
                    }
                }
                $manufacturers_search = strtolower($request->request->all()['search_invoice']['id_manufacturer']);
                if ($manufacturers_search) {
                    // dd($manufacturers_search);
                    $arr_details_manufacturer = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['manufacturers' => $manufacturers_search]);
                    if ($arr_details_manufacturer) {
                        //dd($arr_details_manufacturer);
                        $arr_incoming_documents_search[] = $doctrine->getRepository(Invoice::class)
                            ->findBy(['id_manufacturer' => $arr_details_manufacturer[0]->getId()]);
                    }
                }

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
                //dd($arr_incoming_documents[0][0]->getId());
                $newArray = [];
                $Fruits = [];
                foreach ($arr_incoming_documents_search as $key => $value) {

                    foreach ($value as $key => $line) {
                        //dd($line->getId());
                        if (!in_array($line->getId(), $Fruits)) {
                            $Fruits[] = $line->getId();
                            $newArray[$key] = $line;
                        }
                    }
                }
                $arr_incoming_documents[] = $newArray;
                unset($newArray);
                unset($Fruits);
                //dd($arr_incoming_documents);
            } else {
                // dd($request->request->all());
                $value_form_search_invoice = $request->request->all();
                if ($value_form_search_invoice) {
                    foreach ($value_form_search_invoice as $key => $values) {
                        //dd($values);
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                //dd($key);
                                $this->addFlash($key, $value);
                            }
                        }
                    }
                }

                if ($errors_search_invoice) {
                    foreach ($errors_search_invoice as $key) {
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
        } /*else {
            $arr_incoming_documents[] = $doctrine->getRepository(Invoice::class)
                ->findAll();
        }*/
        //dd($arr_incoming_documents);

        if ($session->getFlashBag()->has('sales')) {
            $error_id = $session->getFlashBag()->get('sales')[0];
            $arr_incoming_documents_error[] = $doctrine->getRepository(Invoice::class)
                ->find($error_id);
            $arr_incoming_documents[] = $arr_incoming_documents_error;
            // dd($arr_incoming_documents);
        }
        return $this->render('incoming_documents/incoming_documents.html.twig', [
            'title_logo' => 'Входящие документы',
            'legend' => 'Добавить новую счет-фактуру',
            'legend_search' => 'Поиск',
            'form_search' => $form_search_invoice->createView(),
            'form_i_d' => $form_incoming_documents->createView(),
            'form_p_n' => $form_part_no->createView(),
            'arr_incoming_documents' => $arr_incoming_documents,
            //'errors_id' => $errors_id,
        ]);
    }


    #[Route('/sales_incoming_documents', name: 'sales_incoming_documents')]
    public function SalesIncomingDocuments(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {
        $entity_incoming_documents = new Invoice();
        $entity_counterparty = new Counterparty();
        $entity_part_no = new IdDetailsManufacturer();

        $form_incoming_documents = $this->createForm(IncomingDocumentsType::class, $entity_incoming_documents);
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);
        $form_counterparty = $this->createForm(CounterpartyType::class, $entity_counterparty);

        $form_incoming_documents->handleRequest($request);
        $form_part_no->handleRequest($request);
        $form_counterparty->handleRequest($request);

        $errors_incoming_documents = $validator->validate($form_incoming_documents);
        $errors_part_no = $validator->validate($form_part_no);
        //dd(new Response());
        if (
            $form_incoming_documents->isSubmitted() && $form_incoming_documents->isValid()
            && $form_part_no->isSubmitted() && $form_part_no->isValid()
        ) {
            //dd($request->request->all());
            $part_number_strtolower_preg_replace = strtolower(preg_replace(
                '#[^a-z\d]#i',
                '',
                $request->request->all()['part_no']['part_numbers']
            ));
            $сount_part_number = $doctrine->getRepository(IdDetailsManufacturer::class)
                ->count(['part_numbers' => $part_number_strtolower_preg_replace]);
            //dd($сount_part_number);
            if ($сount_part_number == 0) {

                $entity_part_no->setPartNumbers($part_number_strtolower_preg_replace);

                $entity_part_no->setManufacturers(
                    strtolower(preg_replace(
                        '#[^a-z\d \-&]#i',
                        '',
                        $request->request->all()['part_no']['manufacturers']
                    ))
                );
                //dd($entity_part_no);
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

            $entity_incoming_documents->setNameDetail(
                mb_strtolower(preg_replace(
                    '#[^а-яё\d\s\.,]#ui',
                    '',
                    $request->request->all()['incoming_documents']['name_detail']
                ))
            );

            $entity_incoming_documents->setQuantity(
                $request->request->all()['incoming_documents']['quantity']
            );

            $price = $request->request->all()['incoming_documents']['price'];
            if (strpos($price, ',')) {
                $strPriceReplace = str_replace(',', '.', $price);
                $entity_incoming_documents->setPrice($strPriceReplace * 100);
            } else {
                //dd($price);
                $entity_incoming_documents->setPrice($price * 100);
            }
            $entity_incoming_documents->setSales(1);
            $entity_incoming_documents->setRefund(1);


            //dd($entity_incoming_documents);
            $em = $doctrine->getManager();
            $em->persist($entity_incoming_documents);
            $em->flush();

            return $this->redirectToRoute('incoming_documents');
        } else {

            //dd($errors_incoming_documents);
            $value_form_incoming_documents_and_part_no = $request->request->all();
            if ($value_form_incoming_documents_and_part_no) {
                foreach ($value_form_incoming_documents_and_part_no as $key => $values) {
                    //dd($values);
                    if (is_iterable($values)) {
                        foreach ($values as $key => $value) {
                            //dd($key);
                            $this->addFlash($key, $value);
                        }
                    }
                }
            }

            if ($errors_incoming_documents) {
                foreach ($errors_incoming_documents as $key) {
                    //dd($key);
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


    #[Route('/sales_parts', name: 'sales_parts')]
    public function SalesParts(
        ManagerRegistry $doctrine,
        Request $request,
        InvoiceRepository $InvoiceRepository,
        ValidatorInterface $validator
    ): Response {
        //dd($request->request->all());

        if (
            isset($_POST['quantity_sold'])
            && isset($_POST['price_sold'])
            && isset($_POST['date_sold'])
        ) {

            $entity_sold = new Sold();

            $id = $request->request->all()['sales'];
            $quantity_sold = $request->request->all()['quantity_sold'];
            $price_sold = $request->request->all()['price_sold'];

            $entity_sales = $doctrine->getRepository(Invoice::class)->find($id);
            //dd($entity_sales->getSolds()->getOwner());
            $quantity = $entity_sales->getQuantity();
            $entity_quantity_sold = $entity_sales->getQuantitySold();
            $sum_quantity_sold = $quantity_sold + $entity_quantity_sold;
            //$price = $InvoiceRepository->findIdPrice($id);
            //dd($request->request->all());
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
            //dd($entity_sales);

            if (!$errors->count()) {

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
                // $doctrine->getManager()->flush();
                //dd($entity_sales->getQuantitySold());
                $quantity_sold = $entity_sales->getQuantitySold();
                //  $quantity = $entity_sales->getQuantity();

                if ($quantity_sold == $quantity) {

                    $entity_sales->setSales(2);

                    $doctrine->getManager()->flush();
                }

                return $this->redirectToRoute('incoming_documents');
            } else {
                //dd($request->request->all());
                $value_sold = $request->request->all();
                if ($value_sold) {
                    foreach ($value_sold as $key => $value) {
                        $this->addFlash($key, $value);
                    }
                }

                // dd($errors);
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


            /* if ($quantity_sold > 0 && $quantity_sold <= $quantity && $sum_quantity_sold <= $quantity) {


                
            } else {

                return $this->redirectToRoute('incoming_documents', ['id' => $id]);
            }*/
        }
    }


    #[Route('/refund_part', name: 'refund_part', methods: ['GET'])]
    public function Refund(ManagerRegistry $doctrine, Request $request): Response
    {
        $id = $request->query->get('refund_part');

        $refund = $doctrine->getRepository(Invoice::class)->find($id);

        $refund->setRefund(2);

        $doctrine->getManager()->flush();

        return $this->redirectToRoute('incoming_documents');
    }



    #[Route('/reset', name: 'reset')]
    public function Reset(): Response
    {
        return $this->redirectToRoute('incoming_documents');
    }
}
