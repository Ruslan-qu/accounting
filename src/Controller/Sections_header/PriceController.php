<?php

namespace App\Controller\Sections_header;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PriceController extends AbstractController
{
    #[Route('/price', name: 'price')]
    public function index(): Response
    {
        return $this->render('price/index.html.twig', [
            'title_logo' => 'Прайс',
        ]);
    }
}
