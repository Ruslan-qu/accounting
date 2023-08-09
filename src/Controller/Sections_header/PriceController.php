<?php

namespace App\Controller\Sections_header;

//use App\Entity\Invoice;
//use App\Form\IncomingDocumentsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PriceController extends AbstractController
{
    #[Route('/price', name: 'price')]
    public function AddPrice(): Response
    {
        //$task_incoming_documents = new Invoice();
        //$form_incoming_documents = $this->createForm(IncomingDocumentsType::class, $task_incoming_documents);

        return $this->render('price/price.html.twig', [
            'title_logo' => 'Прайс',
            //'legend' => 'Добавить новую счет-фактуру',
            //'form_i_d' => $form_incoming_documents->createView(),
        ]);
    }
}
