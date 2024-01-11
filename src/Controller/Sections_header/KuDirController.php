<?php

namespace App\Controller\Sections_header;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KuDirController extends AbstractController
{
    #[Route('/ku_dir', name: 'ku_dir')]
    public function kuDir(): Response
    {
        return $this->render('ku_dir/ku_dir.html.twig', [
            'title_logo' => 'КуДир',
        ]);
    }

    #[Route('/ku_dir_save', name: 'ku_dir_save')]
    public function kuDirSave(): Response
    {
        return $this->render('ku_dir/ku_dir_save.html.twig', [
            'title_logo' => 'КуДир сохранение',
        ]);
    }
}
