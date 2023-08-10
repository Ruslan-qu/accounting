<?php

namespace App\Controller\Sections_header;


use App\Entity\Invoice;
use App\Entity\IdDetailsManufacturer;
use App\Form\IncomingDocumentsType;
use App\Form\PartNoType;
use App\Form\SalesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class IncomingDocumentsController extends AbstractController
{
    #[Route('/incoming_documents', name: 'incoming_documents')]
    public function AddIncomingDocuments(ManagerRegistry $doctrine, Request $request): Response
    {
        $entity_incoming_documents = new Invoice();
        $entity_sales = new Invoice();
        $entity_part_no = new IdDetailsManufacturer();

        $form_incoming_documents = $this->createForm(IncomingDocumentsType::class, $entity_incoming_documents);
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);
        $form_sales = $this->createForm(SalesType::class, $entity_sales);

        $form_incoming_documents->handleRequest($request);
        $form_part_no->handleRequest($request);
        $form_sales->handleRequest($request);

        if (
            $form_incoming_documents->isSubmitted() && $form_incoming_documents->isValid()
            && $form_part_no->isSubmitted() && $form_part_no->isValid()
        ) {
            $entity_incoming_documents->setIdInvoice($request->request->get('id_invoice'));
            $entity_incoming_documents->setDataInvoice($request->request->get('data_invoice'));
            $entity_part_no->setIdDetails($request->request->get('Id_details'));;
            $entity_part_no->setManufacturer($request->request->get('manufacturer'));;
            $entity_incoming_documents->setNameDetail($request->request->get('name_detail'));
            $entity_incoming_documents->setQuantity($request->request->get('quantity'));
            /*$entity_incoming_documents->setUnitPrice(
                $request->request->get('price') / $request->request->get('quantity')
            );*/
            $entity_incoming_documents->setPrice($request->request->get('price'));

            $em = $$doctrine->getDoctrine()->getManager();
            $em->persist($entity_incoming_documents);
            $em->flush();

            $em = $$doctrine->getDoctrine()->getManager();
            $em->persist($entity_part_no);
            $em->flush();
            return $this->redirectToRoute('incoming_documents');
        }

        return $this->render('incoming_documents/incoming_documents.html.twig', [
            'title_logo' => 'Входящие документы',
            'legend' => 'Добавить новую счет-фактуру',
            'form_i_d' => $form_incoming_documents->createView(),
            'form_p_n' => $form_part_no->createView(),
            'form_s' => $form_sales->createView(),
        ]);
    }
}
