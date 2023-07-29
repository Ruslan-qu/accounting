<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CounterpartyController extends AbstractController
{
    #[Route('/counterparty', name: 'counterparty')]
    public function index(): Response
    {
        return $this->render('counterparty/index.html.twig', [
            'title_logo' => 'Контрагент',
        ]);
    }
}
