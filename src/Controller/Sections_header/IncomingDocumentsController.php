<?php

namespace App\Controller\Sections_header;

use DateTime;
use App\Entity\Invoice;
use App\Form\SalesType;
use App\Form\PartNoType;
use App\Entity\Counterparty;
use App\Form\CounterpartyType;
use App\Form\IncomingDocumentsType;
use App\Entity\IdDetailsManufacturer;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IncomingDocumentsController extends AbstractController
{
    #[Route('/incoming_documents', name: 'incoming_documents')]
    public function AddIncomingDocuments(ManagerRegistry $doctrine, Request $request): Response
    {
        $entity_incoming_documents = new Invoice();
        $entity_counterparty = new Counterparty();
        $entity_part_no = new IdDetailsManufacturer();

        $form_incoming_documents = $this->createForm(IncomingDocumentsType::class, $entity_incoming_documents);
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);
        $form_counterparty = $this->createForm(CounterpartyType::class, $entity_counterparty);

        $form_incoming_documents->handleRequest($request);
        $form_part_no->handleRequest($request);
        $form_counterparty->handleRequest($request);
        //dd(3 % 3);
        if (
            $form_incoming_documents->isSubmitted() && $form_incoming_documents->isValid()
            && $form_part_no->isSubmitted() && $form_part_no->isValid()
        ) {
            //dd($request->request->all()['incoming_documents']['id_invoice']);
            $part_number = $request->request->all()['part_no']['part_numbers'];
            $сount_part_number = $doctrine->getRepository(IdDetailsManufacturer::class)
                ->count(['part_numbers' => $part_number]);
            //dd($сount_part_number);
            if ($сount_part_number == 0) {
                $entity_part_no->setPartNumbers($part_number);
                $entity_part_no->setManufacturers(
                    $request->request->all()['part_no']['manufacturers']
                );
                $em = $doctrine->getManager();
                $em->persist($entity_part_no);
                $em->flush();
            }

            $id_part_number_manufacturer = $doctrine->getRepository(IdDetailsManufacturer::class)
                ->findOneBy(['part_numbers' => $part_number]);
            //dd($em);
            $entity_incoming_documents->setIdDetails($id_part_number_manufacturer);
            $entity_incoming_documents->setIdManufacturer($id_part_number_manufacturer);
            $entity_incoming_documents->setNumberDocument(
                $request->request->all()['incoming_documents']['number_document']
            );
            $entity_incoming_documents->setDataInvoice(
                new DateTime($request->request->all()['incoming_documents']['data_invoice'])
            );
            $entity_incoming_documents->setNameDetail(
                $request->request->all()['incoming_documents']['name_detail']
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
        }

        $arr_incoming_documents = $doctrine->getRepository(Invoice::class)
            ->findAll();
        $arr_part_no = $doctrine->getRepository(IdDetailsManufacturer::class)
            ->findAll();

        return $this->render('incoming_documents/incoming_documents.html.twig', [
            'title_logo' => 'Входящие документы',
            'legend' => 'Добавить новую счет-фактуру',
            'form_i_d' => $form_incoming_documents->createView(),
            'form_p_n' => $form_part_no->createView(),
            'arr_incoming_documents' => $arr_incoming_documents,
            'arr_part_no' => $arr_part_no,
        ]);
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
            $now_quantity_sold = $entity_sales->getQuantitySold();
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
        }
    }

    #[Route('/refund', name: 'refund', methods: ['GET'])]
    public function Refund(ManagerRegistry $doctrine, Request $request): Response
    {
        $id = $request->query->get('refund');

        $refund = $doctrine->getRepository(Invoice::class)->find($id);

        $refund->setRefund(2);

        $doctrine->getManager()->flush();

        return $this->redirectToRoute('incoming_documents');
    }
}
