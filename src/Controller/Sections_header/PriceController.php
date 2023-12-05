<?php

namespace App\Controller\Sections_header;

//use App\Entity\Invoice;
//use App\Form\IncomingDocumentsType;
use App\Entity\Invoice;
use App\Form\PartNoType;
use App\Entity\IdDetailsManufacturer;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PriceController extends AbstractController
{
    /*функция поиска по данным */
    #[Route('/price', name: 'price')]
    public function searchPrice(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {

        /* Массив для передачи в твиг списка по поиску */
        $arr_price = [];

        /*Подключаем класс базы данных*/
        $entity_price = new IdDetailsManufacturer();

        /*Подключаем формы */
        $form_price_search = $this->createForm(PartNoType::class, $entity_price);

        /*Валидация формы */
        $form_price_search->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_search_part_no = $validator->validate($form_price_search);

        if ($form_price_search->isSubmitted()) {
            if ($form_price_search->isValid()) {
                # code...
            }
        } else {

            $arr_price[] = $doctrine->getRepository(IdDetailsManufacturer::class)->findAll();
            //$arr_price[] = $doctrine->getRepository(Invoice::class)->findAll();
        }


        return $this->render('price/price.html.twig', [
            'title_logo' => 'Прайс',
            'legend_search' => 'Поиск',
            'form_price_search' => $form_price_search->createView(),
            'arr_price' => $arr_price,
        ]);
    }

    /* функция сброса */
    #[Route('/reset_price', name: 'reset_price')]
    public function resetPart(): Response
    {
        return $this->redirectToRoute('price');
    }
}
