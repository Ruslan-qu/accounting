<?php

namespace App\Controller\Sections_header;

//use App\Entity\Invoice;
//use App\Form\IncomingDocumentsType;
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
    #[Route('/price', name: 'price')]
    public function searchPrice(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {

        /* Массив для передачи в твиг списка по поиску */
        $arr_part_no = [];

        /*Подключаем класс базы данных*/
        $entity_price = new IdDetailsManufacturer();

        /*Подключаем формы */
        $form_price_search = $this->createForm(PartNoType::class, $entity_price);

        /*Валидация формы */
        $form_price_search->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_search_part_no = $validator->validate($form_price_search);



        return $this->render('price/price.html.twig', [
            'title_logo' => 'Прайс',
            //'legend' => 'Добавить новую счет-фактуру',
            //'form_i_d' => $form_incoming_documents->createView(),
        ]);
    }
}
