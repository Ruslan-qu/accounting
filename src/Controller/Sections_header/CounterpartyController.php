<?php

namespace App\Controller\Sections_header;

use App\Entity\Counterparty;
use App\Form\CounterpartyType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CounterpartyController extends AbstractController
{
    #[Route('/counterparty', name: 'counterparty')]
    public function SearchCounterparty(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {

        /* Массив для передачи в твиг списка по поиску */
        $arr_counterparty = [];

        /*Подключаем класс базы данных*/
        $entity_counterparty = new Counterparty();

        /*Подключаем формы */
        $form_counterparty_search = $this->createForm(CounterpartyType::class, $entity_counterparty);

        $form_counterparty_sales = $this->createForm(CounterpartyType::class, $entity_counterparty);

        $form_counterparty_reset = $this->createForm(CounterpartyType::class, $entity_counterparty);

        /*Валидация формы */
        $form_counterparty_search->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_search_part_no = $validator->validate($form_counterparty_search);

        //dd($request);
        /*Валидация формы */
        if ($form_counterparty_search->isSubmitted()) {
            if ($form_counterparty_search->isValid()) {

                /* Массив для сбора списка по поиску */
                $arr_counterparty_search = [];

                /* собераем список по поиску */
                $part_numbers_search = $request->request->all()['part_no']['part_numbers'];
                if ($part_numbers_search) {
                    $arr_counterparty_search[] = $doctrine->getRepository(CounterpartyType::class)
                        ->findBy(['part_numbers' => $part_numbers_search]);
                }

                $id_part_name_search = $request->request->all()['part_no']['id_part_name'];
                if ($id_part_name_search) {
                    $arr_counterparty_search[] = $doctrine->getRepository(CounterpartyType::class)
                        ->findBy(['id_part_name' => $id_part_name_search]);
                }

                //dd($arr_part_no_search);
                /* Удаляем дубли из списка по поиску */
                $newArray = [];
                $Fruits = [];
                foreach ($arr_counterparty_search as $key => $value) {
                    foreach ($value as $key => $line) {
                        if (!in_array($line->getId(), $Fruits)) {
                            $Fruits[] = $line->getId();
                            $newArray[$key] = $line;
                        }
                    }
                }
                $arr_part_no[] = $newArray;
                unset($newArray);
                unset($Fruits);
            }
        }

        return $this->render('counterparty/counterparty.html.twig', [
            'title_logo' => 'Контрагент',
            'legend' => 'Добавить нового поставщика',
            'legend_search' => 'Поиск',
            'form_counterparty_search' => $form_counterparty_search->createView(),
            //'form_counterparty_sales' => $form_counterparty_sales->createView(),
            'form_counterparty_reset' => $form_counterparty_reset->createView(),
        ]);
    }
}
