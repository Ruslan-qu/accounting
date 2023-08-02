<?php

namespace App\Controller\Sections_header;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KuDirController extends AbstractController
{
    #[Route('/ku_dir', name: 'ku_dir')]
    public function index(): Response
    {
        return $this->render('ku_dir/index.html.twig', [
            'title_logo' => 'КуДир',
        ]);
    }
}
