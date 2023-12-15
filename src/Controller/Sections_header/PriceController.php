<?php

namespace App\Controller\Sections_header;

use DateTime;
use App\Entity\Sold;
use App\Form\SoldType;
use App\Entity\Invoice;
use App\Form\PartNoType;
use App\Entity\OriginalRooms;
use App\Form\OriginalRoomsType;
use App\Form\IncomingDocumentsType;
use App\Entity\IdDetailsManufacturer;
use App\Repository\InvoiceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Validation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Range;
use App\Repository\IdDetailsManufacturerRepository;
use Symfony\Component\Validator\Constraints\Collection;
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

                    $arr_price[] = $InvoiceRepository
                        ->findBySearchNumber($part_numbers_search);
                } elseif ($id_part_name_search) {

                    $arr_price[] = $InvoiceRepository
                        ->findBySearchPart($id_part_name_search, $array_filter_part_no, $form_price_search);
                } elseif ($id_car_brand_search) {

                    $arr_price[] = $InvoiceRepository
                        ->findBySearchPart($id_car_brand_search, $array_filter_part_no, $form_price_search);
                } elseif ($id_side_search) {

                    $arr_price[] = $InvoiceRepository
                        ->findBySearchPart($id_side_search, $array_filter_part_no, $form_price_search);
                } elseif ($id_body_search) {

                    $arr_price[] = $InvoiceRepository
                        ->findBySearchPart($id_body_search, $array_filter_part_no, $form_price_search);
                } elseif ($id_axle_search) {

                    $arr_price[] = $InvoiceRepository
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
            $arr_price[] = $InvoiceRepository->findAllInvoicePartNo();
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


    /* функция продажи */
    #[Route('/sold_price', name: 'sold_price')]
    public function soldPrice(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator,
        InvoiceRepository $InvoiceRepository,
    ): Response {

        /* Подключаем сущности  */
        $entity_sold = new Sold();

        /* Подключаем форм */
        $form_sold = $this->createForm(SoldType::class, $entity_sold);

        /*Валидация формы */
        $form_sold->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_sold = $validator->validate($form_sold);

        //dd($form_sold->getData()->getHiddenSold());

        if (!empty($_POST['sold_price'])) {

            /*Открываем деталь по id */
            $id = $request->request->all()['sold_price'];

            $arr_sold_part = $InvoiceRepository->findByIdSold($id);
        } else {
            $id = $form_sold->getData()->getHiddenSold();
            $arr_sold_part = $InvoiceRepository->findByIdSold($id);
        }

        /*Валидация формы ручного именения деталей */
        if ($form_sold->isSubmitted()) {

            /* Выводим данные и формы */
            $quantity_sold = $form_sold->getData()->getQuantitySold();

            /* Выводим данные из базы данных */
            $quantity = $arr_sold_part[0]->getQuantity();
            $entity_quantity_sold = $arr_sold_part[0]->getQuantitySold();
            $sum_quantity_sold = $quantity_sold + $entity_quantity_sold;

            /* Подключаем валидацию и прописываем условида валидации и сообщение ошибки*/
            $validator = Validation::createValidator();

            $input = [
                'quantity_sold_error' => $quantity_sold,
                'sum_quantity_sold_error' => $sum_quantity_sold,
            ];

            $constraint = new Collection([
                'quantity_sold_error' => new Range(
                    max: $quantity,
                    notInRangeMessage: 'Недопустимое число',
                ),
                'sum_quantity_sold_error' => new Range(
                    max: $quantity,
                    notInRangeMessage: 'Недопустимое число',
                ),
            ]);

            $errors = $validator->validate($input, $constraint);

            /* Валидация формы */

            if ($form_sold->isValid() && !$errors->count()) {

                $entity_sold->setIdInvoice($form_sold->getData()->getHidden());

                $entity_sold->setQuantitySold($quantity_sold);

                $entity_sold->setPriceSold($form_sold->getData()->getPriceSold());

                $entity_sold->setDateSold(new DateTime($form_sold->getData()->getDateSold()));

                $em = $doctrine->getManager();
                $em->persist($entity_sold);
                $em->flush();


                $arr_sold_part[0]->setQuantitySold($quantity_sold);
                /*Устанавливаем статус продажи для выведения общей сумму 
                    всех продаж при одной сделки "NULL"- не выводится, "1"- выводится */
                $arr_sold_part[0]->setSoldStatus(1);

                $doctrine->getManager()->flush();

                return $this->redirectToRoute('price');
            } else {

                /* Выводим вбитые данные в формы сохранения если форма не прошла валидацию, через сессии  */
                $value_form_sold = $request->request->all();
                if ($value_form_sold) {
                    foreach ($value_form_sold as $key => $values) {
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                $this->addFlash($key . '_sold', $value);
                            }
                        }
                    }
                }

                /* Выводим ошибки валидации, через сессии  */
                if ($errors) {
                    foreach ($errors as $key) {
                        //dd($key);
                        $message = $key->getmessage();
                        $propertyPath = $key->getpropertyPath();
                        $this->addFlash(
                            $propertyPath,
                            $message
                        );
                    }
                }
            }
        }

        return $this->render('price/sold.html.twig', [
            'title_logo' => 'Продажа детали',
            'legend' => 'Продажа детали',
            'form_sold' => $form_sold->createView(),
            'arr_sold_part' => $arr_sold_part,
        ]);
    }
}
