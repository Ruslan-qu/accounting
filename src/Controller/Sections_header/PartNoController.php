<?php

namespace App\Controller\Sections_header;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PartNoController extends AbstractController
{
    #[Route('/part_no', name: 'part_no')]
    public function index(): Response
    {
        return $this->render('part_no/index.html.twig', [
            'title_logo' => '№ Детали',
        ]);
    }
}
