<?php

namespace App\Controller\Sections_header;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RefundController extends AbstractController
{
    #[Route('/refund', name: 'refund')]
    public function index(): Response
    {
        return $this->render('refund/index.html.twig', [
            'controller_name' => 'RefundController',
        ]);
    }
}
