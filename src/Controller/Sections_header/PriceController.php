<?php

namespace App\Controller\Sections_header;

use App\Entity\Invoice;
use App\Form\PartNoType;
use App\Entity\OriginalRooms;
use App\Form\OriginalRoomsType;
use App\Form\IncomingDocumentsType;
use App\Entity\IdDetailsManufacturer;
use App\Repository\InvoiceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\IdDetailsManufacturerRepository;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PriceController extends AbstractController
{
    /*функция поиска по данным */
    #[Route('/price', name: 'price')]
    public function searchPrice(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator,
        InvoiceRepository $InvoiceRepository,
        IdDetailsManufacturerRepository $IdDetailsManufacturerRepository
    ): Response {

        /* Массив для передачи в твиг списка по поиску */
        $arr_price = [];

        /*Подключаем класс базы данных*/
        $entity_price = new IdDetailsManufacturer();
        $entity_original_number = new OriginalRooms();
        $entity_incoming_documents = new Invoice();

        /*Подключаем формы */
        $form_price_search = $this->createForm(PartNoType::class, $entity_price);
        $form_incoming_documents = $this->createForm(IncomingDocumentsType::class, $entity_incoming_documents);
        $form_original_number = $this->createForm(OriginalRoomsType::class, $entity_original_number);

        /*Валидация формы */
        $form_price_search->handleRequest($request);
        $form_incoming_documents->handleRequest($request);
        $form_original_number->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_search_price = $validator->validate($form_price_search);

        if ($form_price_search->isSubmitted()) {
            if ($form_price_search->isValid()) {

                /* собераем список по поиску */
                $part_numbers_search = strtolower(preg_replace(
                    '#\s#',
                    '',
                    $form_price_search->getData()->getPartNumbers()
                ));
                //dd($request);
                $id_part_name_search = $form_price_search->getData()->getIdPartName();
                $id_car_brand_search = $form_price_search->getData()->getIdCarBrand();
                $id_side_search = $form_price_search->getData()->getIdSide();
                $id_body_search = $form_price_search->getData()->getIdBody();
                $id_axle_search = $form_price_search->getData()->getIdAxle();

                $arr_form_price_search = $request->request->all()['part_no'];

                $array_filter_part_no = array_filter($arr_form_price_search);
                //dd($array_filter_part_no);

                if ($part_numbers_search) {

                    //$arr_price[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                    //      ->findBy(['part_numbers' => $part_numbers_search]);
                    $arr_price[] = $InvoiceRepository
                        ->findBySearchPrice($part_numbers_search, $array_filter_part_no, $form_price_search);
                } elseif ($id_part_name_search) {

                    $arr_price[] = $IdDetailsManufacturerRepository
                        ->findBySearchPart($id_part_name_search, $array_filter_part_no, $form_price_search);
                } elseif ($id_car_brand_search) {

                    $arr_price[] = $IdDetailsManufacturerRepository
                        ->findBySearchPart($id_car_brand_search, $array_filter_part_no, $form_price_search);
                } elseif ($id_side_search) {

                    $arr_price[] = $IdDetailsManufacturerRepository
                        ->findBySearchPart($id_side_search, $array_filter_part_no, $form_price_search);
                } elseif ($id_body_search) {

                    $arr_price[] = $IdDetailsManufacturerRepository
                        ->findBySearchPart($id_body_search, $array_filter_part_no, $form_price_search);
                } elseif ($id_axle_search) {

                    $arr_price[] = $IdDetailsManufacturerRepository
                        ->findBySearchPart($id_axle_search, $array_filter_part_no, $form_price_search);
                }
            } else {

                /* Выводим вбитые данные в форму поиска если форма не прошла валидацию, через сессии */
                $value_form_price = $request->request->all();
                if ($value_form_price) {
                    foreach ($value_form_price as $key => $values) {
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                $this->addFlash($key . '_search', $value);
                            }
                        }
                    }
                }
                //dd($errors_search_original_number);
                /* Выводим сообщения ошибки в форму поиска, через сессии  */
                if ($errors_search_price) {
                    foreach ($errors_search_price as $key) {
                        $message = $key->getmessage();
                        $propertyPath = $key->getpropertyPath() . '_search';
                        $this->addFlash(
                            $propertyPath,
                            $message
                        );
                    }
                }

                return $this->redirectToRoute('price');
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
