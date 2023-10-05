<?php

namespace App\Controller\Sections_header;

use DateTime;
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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IncomingDocumentsController extends AbstractController
{
    #[Route('/incoming_documents', name: 'incoming_documents')]
    public function AddIncomingDocuments(
        ManagerRegistry $doctrine,
        Request $request,
        InvoiceRepository $InvoiceRepository
    ): Response {
        $errors_id = $request->query->get('id');

        $entity_incoming_documents = new Invoice();
        $entity_part_no = new IdDetailsManufacturer();
        $entity_search_invoice = new SearchInvoice();

        $form_incoming_documents = $this->createForm(IncomingDocumentsType::class, $entity_incoming_documents);
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);
        $form_search_invoice = $this->createForm(SearchInvoiceType::class, $entity_search_invoice);

        //dd($request);
        $form_search_invoice->handleRequest($request);

        if (
            $form_search_invoice->isSubmitted()
        ) {

            //dd($request->request->all()['search_invoice']);
            $arr_incoming_documents = [];

            $number_document_search = $request->request->all()['search_invoice']['number_document'];
            if ($number_document_search) {
                $arr_incoming_documents[] = $doctrine->getRepository(Invoice::class)
                    ->findBy(['number_document' => $number_document_search]);
            }

            $s_data_invoice_search = $request->request->all()['search_invoice']['s_data_invoice'];
            $po_data_invoice_search = $request->request->all()['search_invoice']['po_data_invoice'];
            if ($s_data_invoice_search && $po_data_invoice_search) {
                $arr_incoming_documents[] = $InvoiceRepository
                    ->findByDate($s_data_invoice_search, $po_data_invoice_search);
                //dd($arr_incoming_documents);
            }
            if ($s_data_invoice_search && !$po_data_invoice_search) {
                $arr_incoming_documents[] = $InvoiceRepository
                    ->findBySDate($s_data_invoice_search);
            }
            if (!$s_data_invoice_search && $po_data_invoice_search) {
                $arr_incoming_documents[] = $InvoiceRepository
                    ->findByPoDate($po_data_invoice_search);
                // dd($arr_incoming_documents);
            }


            $id_counterparty_search = $request->request->all()['search_invoice']['id_counterparty'];
            if ($id_counterparty_search) {
                $arr_incoming_documents[] = $doctrine->getRepository(Invoice::class)
                    ->findBy(['id_counterparty' => $id_counterparty_search]);
                //dd($arr_incoming_documents);
            }
            $part_numbers_search = $request->request->all()['search_invoice']['id_details'];
            if ($part_numbers_search) {
                $arr_details_manufacturer = $doctrine->getRepository(IdDetailsManufacturer::class)
                    ->findBy(['part_numbers' => $part_numbers_search]);
                if ($arr_details_manufacturer) {
                    //dd($arr_details_manufacturer[0]->getId());
                    $arr_incoming_documents[] = $doctrine->getRepository(Invoice::class)
                        ->findBy(['id_details' => $arr_details_manufacturer[0]->getId()]);
                }
            }
            $manufacturers_search = $request->request->all()['search_invoice']['id_manufacturer'];
            if ($manufacturers_search) {
                // dd($manufacturers_search);
                $arr_details_manufacturer = $doctrine->getRepository(IdDetailsManufacturer::class)
                    ->findBy(['manufacturers' => $manufacturers_search]);
                if ($arr_details_manufacturer) {
                    //dd($arr_details_manufacturer);
                    $arr_incoming_documents[] = $doctrine->getRepository(Invoice::class)
                        ->findBy(['id_manufacturer' => $arr_details_manufacturer[0]->getId()]);
                }
            }

            $s_price_search = $request->request->all()['search_invoice']['s_price'];
            $po_price_search = $request->request->all()['search_invoice']['po_price'];

            if ($s_price_search && $po_price_search) {

                $arr_incoming_documents[] = $InvoiceRepository
                    ->findByPrice($s_price_search, $po_price_search);
            }

            if ($s_price_search && !$po_price_search) {

                $arr_incoming_documents[] = $InvoiceRepository
                    ->findBySPrice($s_price_search);
            }

            if (!$s_price_search && $po_price_search) {

                $arr_incoming_documents[] = $InvoiceRepository
                    ->findByPoPrice($po_price_search);
            }
        } else {
            $arr_incoming_documents[] = $doctrine->getRepository(Invoice::class)
                ->findAll();
        }

        return $this->render('incoming_documents/incoming_documents.html.twig', [
            'title_logo' => 'Входящие документы',
            'legend' => 'Добавить новую счет-фактуру',
            'legend_search' => 'Поиск',
            'form_search' => $form_search_invoice->createView(),
            'form_i_d' => $form_incoming_documents->createView(),
            'form_p_n' => $form_part_no->createView(),
            'arr_incoming_documents' => $arr_incoming_documents,
            'errors_id' => $errors_id,
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
            $part_number_mb_strtolower_preg_replace = mb_strtolower(preg_replace(
                '#[^a-zа-яё\d]#ui',
                '',
                $request->request->all()['part_no']['part_numbers']
            ));
            $сount_part_number = $doctrine->getRepository(IdDetailsManufacturer::class)
                ->count(['part_numbers' => $part_number_mb_strtolower_preg_replace]);
            //dd($сount_part_number);
            if ($сount_part_number == 0) {

                $entity_part_no->setPartNumbers($part_number_mb_strtolower_preg_replace);

                $entity_part_no->setManufacturers(
                    mb_strtolower(preg_replace(
                        '#[^a-zа-яё\d]#ui',
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
                ->findOneBy(['part_numbers' => $part_number_mb_strtolower_preg_replace]);

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
                    '#[^а-яё\d]#ui',
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

            // dd($errors);
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
    public function SalesParts(ManagerRegistry $doctrine, Request $request): Response
    {
        //dd($request->request->all()['id']);

        if (
            isset($_POST['quantity_sold'])
            && isset($_POST['price_sold'])
            && isset($_POST['today_date'])
        ) {
            $id = $request->request->all()['id'];
            $entity_sales = $doctrine->getRepository(Invoice::class)->find($id);

            $quantity = $entity_sales->getQuantity();

            $quantity_sold = $request->request->all()['quantity_sold'];
            $now_quantity_sold = $entity_sales->getQuantitySold();

            $sum_quantity_sold = $quantity_sold + $now_quantity_sold;

            if ($quantity_sold > 0 && $quantity_sold <= $quantity && $sum_quantity_sold <= $quantity) {


                $entity_sales->setQuantitySold(
                    $now_quantity_sold +
                        $request->request->all()['quantity_sold']
                );
                $entity_sales->setPriceSold(
                    $request->request->all()['price_sold']
                );
                $entity_sales->setTodayDate(
                    new DateTime($request->request->all()['today_date'])
                );
                $doctrine->getManager()->flush();
                //dd($entity_sales->getQuantitySold());
                $quantity_sold = $entity_sales->getQuantitySold();
                $quantity = $entity_sales->getQuantity();

                if ($quantity_sold == $quantity) {

                    $entity_sales->setSales(2);

                    $doctrine->getManager()->flush();
                }

                return $this->redirectToRoute('incoming_documents');
            } else {

                return $this->redirectToRoute('incoming_documents', ['id' => $id]);
            }
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
    public function Reset(ManagerRegistry $doctrine, Request $request): Response
    {
        return $this->redirectToRoute('incoming_documents');
    }
}
