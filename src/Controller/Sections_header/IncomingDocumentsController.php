<?php

namespace App\Controller\Sections_header;

use App\Entity\Invoice;
use App\Entity\IdDetailsManufacturer;
use App\Form\IncomingDocumentsType;
use App\Form\PartNoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IncomingDocumentsController extends AbstractController
{
    #[Route('/incoming_documents', name: 'incoming_documents')]
    public function AddIncomingDocuments(Request $request): Response
    {
        $entity_incoming_documents = new Invoice();
        $entity_part_no = new IdDetailsManufacturer();
        $form_incoming_documents = $this->createForm(IncomingDocumentsType::class, $entity_incoming_documents);
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);

        $form_incoming_documents->handleRequest($request);
        $form_part_no->handleRequest($request);

        if (
            $form_incoming_documents->isSubmitted() && $form_incoming_documents->isValid()
            && $form_part_no->isSubmitted() && $form_part_no->isValid()
        ) {
            $form_incoming_documents->setSlug($slugify->slugify($post->getTitle()));
            $post->setCreatedAt(new \DateTime());

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('blog_posts');
        }

        return $this->render('incoming_documents/incoming_documents.html.twig', [
            'title_logo' => 'Входящие документы',
            'legend' => 'Добавить новую счет-фактуру',
            'form_i_d' => $form_incoming_documents->createView(),
            'form_p_n' => $form_part_no->createView(),
        ]);
    }


    //public function addIncomingDocuments(Request $request): Response
    //{
    //$task = new Invoice();
    // $form = $this->createForm(IncomingDocumentsType::class, $task);
    //$form->handleRequest($request);

    //if ($form->isSubmitted() && $form->isValid()) {
    //    $post->setSlug($slugify->slugify($post->getTitle()));
    //   $post->setCreatedAt(new \DateTime());

    //   $em = $this->getDoctrine()->getManager();
    //  $em->persist($post);
    //  $em->flush();

    //  return $this->redirectToRoute('blog_posts');
    // }
    // return $this->render('incoming_documents/index.html.twig', [
    //     'form' => $form->createView(),
    // ]);
    // }
}
