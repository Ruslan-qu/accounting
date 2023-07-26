<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Qu1Controller extends AbstractController
{
    #[Route('/qu1', name: 'app_qu1')]
    public function index(): Response
    {
        return $this->render('qu1/index.html.twig', [
            'controller_name' => 'Qu1Controller',
        ]);
    }
}
