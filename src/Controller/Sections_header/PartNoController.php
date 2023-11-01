<?php

namespace App\Controller\Sections_header;

use App\Form\PartNoType;
use App\Entity\IdDetailsManufacturer;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\IdDetailsManufacturerRepository;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PartNoController extends AbstractController
{
    #[Route('/part_no', name: 'part_no')]
    public function SearchPart(
        ManagerRegistry $doctrine,
        Request $request,
        IdDetailsManufacturerRepository $IdDetailsManufacturerRepository,
        ValidatorInterface $validator
    ): Response {
        /*Подключаем сессии, для передачи ошибок валидации*/
        $session = new Session();
        $session->start();

        /*Подключаем класс базы данных*/
        $entity_part_no = new IdDetailsManufacturer();

        /*Подключаем формы */
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);

        /*Валидация формы */
        $form_part_no->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_search_part_no = $validator->validate($form_part_no);

        /* Массив для передачи в твиг списка по поиску */
        $arr_part_no = [];

        /*Валидация формы */
        if ($form_part_no->isSubmitted()) {
            if ($form_part_no->isValid()) {

                /* Массив для сбора списка по поиску */
                $arr_part_no_search = [];

                /* собераем списка по поиску */
                $part_numbers_search = $request->request->all()['form_p_n_search']['part_numbers'];
                if ($part_numbers_search) {
                    $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['part_numbers' => $part_numbers_search]);
                }

                $id_part_name_search = $request->request->all()['form_p_n_search']['id_part_name'];
                if ($id_part_name_search) {
                    $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['id_part_name' => $id_part_name_search]);
                }

                $id_car_brand_search = $request->request->all()['form_p_n_search']['id_car_brand'];
                if ($id_car_brand_search) {
                    $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['id_car_brand' => $id_car_brand_search]);
                }

                $id_side_search = $request->request->all()['form_p_n_search']['id_side'];
                if ($id_side_search) {
                    $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['id_side' => $id_side_search]);
                }

                $id_body_search = $request->request->all()['form_p_n_search']['id_body'];
                if ($id_body_search) {
                    $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['id_body' => $id_body_search]);
                }

                $id_axle_search = $request->request->all()['form_p_n_search']['id_axle'];
                if ($id_axle_search) {
                    $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['id_axle' => $id_axle_search]);
                }

                /* Удаляем дубли из списка по поиску */
                $newArray = [];
                $Fruits = [];
                foreach ($arr_part_no_search as $key => $value) {
                    foreach ($value as $key => $line) {
                        if (!in_array($line->getId(), $Fruits)) {
                            $Fruits[] = $line->getId();
                            $newArray[$key] = $line;
                        }
                    }
                }
                $arr_incoming_documents[] = $newArray;
                unset($newArray);
                unset($Fruits);
            } else {

                /* Выводим вбитые данные в форму поиска если форма не прошла валидацию, через сессии */
                $value_form_part_no = $request->request->all();
                if ($value_form_part_no) {
                    foreach ($value_form_part_no as $key => $values) {
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                $this->addFlash($key, $value);
                            }
                        }
                    }
                }

                /* Выводим сообщения ошибки в форму поиска, через сессии  */
                if ($errors_search_part_no) {
                    foreach ($errors_search_part_no as $key) {
                        $message = $key->getmessage();
                        $propertyPath = $key->getpropertyPath();
                        $this->addFlash(
                            $propertyPath,
                            $message
                        );
                    }
                }
                return $this->redirectToRoute('part_no');
            }
        }

        return $this->render('part_no/part_no.html.twig', [
            'title_logo' => 'Детали',
            'legend' => 'Добавить новую деталь',
            'legend_search' => 'Поиск',
            'form_p_n_sales' => $form_part_no->createView(),
            'form_p_n_search' => $form_part_no->createView(),
            'arr_part_no' => $arr_part_no,
        ]);
    }



    #[Route('/sales_part_no', name: 'sales_part_no')]
    public function SalesIncomingDocuments(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {

        /* Подключаем сущности  */
        $entity_part_no = new IdDetailsManufacturer();

        /* Подключаем форм */
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);

        /*Валидация формы */
        $form_part_no->handleRequest($request);

        /* Подключаем валидацию  */
        $errors_part_no = $validator->validate($form_part_no);

        /*Валидация формы ручного сохранения счет-фактур , номера , производителей, описания деталей */
        if (
            $form_part_no->isSubmitted() && $form_part_no->isValid()
        ) {

            $part_number_strtolower_preg_replace = strtolower(preg_replace(
                '#[^a-z\d]#i',
                '',
                $request->request->all()['form_p_n_sales']['part_numbers']
            ));

            $сount_part_number = $doctrine->getRepository(IdDetailsManufacturer::class)
                ->count(['part_numbers' => $part_number_strtolower_preg_replace]);

            /* Валидация дулей номеров деталей, сохранения номера , производителей, описания деталей */
            if ($сount_part_number == 0) {

                $entity_part_no->setPartNumbers($part_number_strtolower_preg_replace);

                $entity_part_no->setManufacturers(
                    strtolower(preg_replace(
                        '#[^a-z\d \-&]#i',
                        '',
                        $request->request->all()['form_p_n_sales']['manufacturers']
                    ))
                );

                $entity_part_no->setNameDetail(
                    mb_strtolower(preg_replace(
                        '#[^а-яё\d\s\.,]#ui',
                        '',
                        $request->request->all()['form_p_n_sales']['name_detail']
                    ))
                );

                $em = $doctrine->getManager();
                $em->persist($entity_part_no);
                $em->flush();
            }

            return $this->redirectToRoute('part_no');
        } else {

            /* Выводим вбитые данные в формы сохранения если форма не прошла валидацию, через сессии  */
            $value_form_part_no = $request->request->all();
            if ($value_form_part_no) {
                foreach ($value_form_part_no as $key => $values) {
                    if (is_iterable($values)) {
                        foreach ($values as $key => $value) {
                            $this->addFlash($key, $value);
                        }
                    }
                }
            }

            /* Выводим ошибки валидации, через сессии */
            if ($errors_part_no) {
                foreach ($errors_part_no as $key) {
                    $message = $key->getmessage();
                    $propertyPath = $key->getpropertyPath();
                    $this->addFlash(
                        $propertyPath,
                        $message
                    );
                }
            }

            return $this->redirectToRoute('part_no');
        }
    }
}
