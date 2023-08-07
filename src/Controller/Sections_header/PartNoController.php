<?php

namespace App\Controller\Sections_header;

use App\Entity\IdDetailsManufacturer;
use App\Form\PartNoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PartNoController extends AbstractController
{
    #[Route('/part_no', name: 'part_no')]
    public function AddPartNo(): Response
    {
        $task_part_no = new IdDetailsManufacturer();
        $form_part_no = $this->createForm(PartNoType::class, $task_part_no);

        return $this->render('part_no/part_no.html.twig', [
            'title_logo' => '№ Де-ли Произ-ль',
            'legend' => 'Добавить новую деталь и поставщика',
            'form_p_n' => $form_part_no->createView(),
        ]);
    }
}
