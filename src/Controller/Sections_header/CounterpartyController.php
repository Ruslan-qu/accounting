<?php

namespace App\Controller\Sections_header;

use App\Entity\Counterparty;
use App\Form\CounterpartyType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CounterpartyController extends AbstractController
{
    #[Route('/counterparty', name: 'counterparty')]
    public function AddCounterparty(): Response
    {
        $task_counterparty = new Counterparty();
        $form_counterparty = $this->createForm(CounterpartyType::class, $task_counterparty);

        return $this->render('counterparty/counterparty.html.twig', [
            'title_logo' => 'Контрагент',
            'legend' => 'Добавить нового поставщика',
            'form_c' => $form_counterparty->createView(),
        ]);
    }
}
