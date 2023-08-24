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
        $entity_sales = new Invoice();
        $entity_counterparty = new Counterparty();
        $entity_part_no = new IdDetailsManufacturer();

        $form_incoming_documents = $this->createForm(IncomingDocumentsType::class, $entity_incoming_documents);
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);
        $form_sales = $this->createForm(SalesType::class, $entity_sales);
        $form_counterparty = $this->createForm(CounterpartyType::class, $entity_counterparty);

        $form_incoming_documents->handleRequest($request);
        $form_part_no->handleRequest($request);
        $form_sales->handleRequest($request);
        $form_counterparty->handleRequest($request);

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
            } //else {
            // $id_part_number_manufacturer = $doctrine->getRepository(IdDetailsManufacturer::class)
            //    ->findOneBy(['part_numbers' => $part_number]);
            //dd($id_part_number_manufacturer);
            // $entity_incoming_documents->setIdDetails($id_part_number_manufacturer);
            //$entity_incoming_documents->setIdManufacturer($id_part_number_manufacturer);
            // }
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
        //$arr_counterparty = $doctrine->getRepository(Counterparty::class)
        //    ->findAll();
        //dd($arr_incoming_documents[2]->getIdCounterparty()->getCounterparty());
        return $this->render('incoming_documents/incoming_documents.html.twig', [
            'title_logo' => 'Входящие документы',
            'legend' => 'Добавить новую счет-фактуру',
            'form_i_d' => $form_incoming_documents->createView(),
            'form_p_n' => $form_part_no->createView(),
            'form_s' => $form_sales->createView(),
            'arr_incoming_documents' => $arr_incoming_documents,
            'arr_part_no' => $arr_part_no,
            //'arr_counterparty' => $arr_counterparty,
        ]);
    }
}
