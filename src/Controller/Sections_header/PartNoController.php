<?php

namespace App\Controller\Sections_header;

use App\Form\PartNoType;
use App\Entity\OriginalRooms;
use App\Form\OriginalRoomsType;
use App\Entity\IdDetailsManufacturer;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Validation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PartNoController extends AbstractController
{
    #[Route('/part_no', name: 'part_no')]
    public function searchPart(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {

        /* Массив для передачи в твиг списка по поиску */
        $arr_part_no = [];

        /*Подключаем класс базы данных*/
        $entity_part_no = new IdDetailsManufacturer();
        $entity_original_number = new OriginalRooms();

        /*Подключаем формы */
        $form_p_n_search = $this->createForm(PartNoType::class, $entity_part_no);
        $form_p_n_sales = $this->createForm(PartNoType::class, $entity_part_no);
        $form_original_number_sales = $this->createForm(OriginalRoomsType::class, $entity_original_number);
        $form_original_number_search = $this->createForm(OriginalRoomsType::class, $entity_original_number);

        /*Валидация формы */
        $form_p_n_search->handleRequest($request);
        $form_original_number_search->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_search_part_no = $validator->validate($form_p_n_search);
        $errors_search_original_number = $validator->validate($form_original_number_search);

        //dd($request);
        /*Валидация формы */
        if ($form_p_n_search->isSubmitted() && $form_original_number_search->isSubmitted()) {
            if ($form_p_n_search->isValid() && $form_original_number_search->isValid()) {
                // dd($form_p_n_search);
                /* Массив для сбора списка по поиску */
                $arr_part_no_search = [];

                /* собераем список по поиску */
                $part_numbers_search = strtolower(preg_replace(
                    '#\s#',
                    '',
                    $form_p_n_search->getData()->getPartNumbers()
                ));
                $original_number = strtolower(preg_replace(
                    '#\s#',
                    '',
                    $form_original_number_search->getData()->getOriginalNumber()
                ));
                $id_part_name_search = $form_p_n_search->getData()->getIdPartName();
                $id_car_brand_search = $form_p_n_search->getData()->getIdCarBrand();
                $id_side_search = $form_p_n_search->getData()->getIdSide();
                $id_body_search = $form_p_n_search->getData()->getIdBody();
                $id_axle_search = $form_p_n_search->getData()->getIdAxle();
                $id_in_stock_search = $form_p_n_search->getData()->getIdInStock();

                //dd($part_numbers_search);
                if ($part_numbers_search) {
                    $arr_part_no[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['part_numbers' => $part_numbers_search]);
                } elseif ($original_number) {
                    $id_original_number = $doctrine->getRepository(OriginalRooms::class)
                        ->findBy(['original_number' => $original_number]);
                    $arr_part_no[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['id_original_number' => $id_original_number]);
                } elseif (
                    $id_part_name_search || $id_car_brand_search
                    || $id_side_search || $id_body_search
                    || $id_axle_search || $id_in_stock_search
                ) {
                    if ($id_part_name_search) {
                        $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                            ->findBy(['id_part_name' => $id_part_name_search]);
                    }

                    if ($id_car_brand_search) {
                        $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                            ->findBy(['id_car_brand' => $id_car_brand_search]);
                    }

                    if ($id_side_search) {
                        $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                            ->findBy(['id_side' => $id_side_search]);
                    }

                    if ($id_body_search) {
                        $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                            ->findBy(['id_body' => $id_body_search]);
                    }

                    if ($id_axle_search) {
                        $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                            ->findBy(['id_axle' => $id_axle_search]);
                    }

                    if ($id_in_stock_search) {
                        $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                            ->findBy(['id_in_stock' => $id_in_stock_search]);
                    }
                    //dd($arr_part_no_search);
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
                    //dd($arr_part_no);
                    $arr_part_no[] = $newArray;
                    unset($newArray);
                    unset($Fruits);
                    //dd($arr_part_no);
                }

                /* $id_part_name_search = $request->request->all()['part_no']['id_part_name'];
                if ($id_part_name_search) {
                    $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['id_part_name' => $id_part_name_search]);
                }

                $id_car_brand_search = $request->request->all()['part_no']['id_car_brand'];
                if ($id_car_brand_search) {
                    $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['id_car_brand' => $id_car_brand_search]);
                }

                $id_side_search = $request->request->all()['part_no']['id_side'];
                if ($id_side_search) {
                    $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['id_side' => $id_side_search]);
                }

                $id_body_search = $request->request->all()['part_no']['id_body'];
                if ($id_body_search) {
                    $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['id_body' => $id_body_search]);
                }

                $id_axle_search = $request->request->all()['part_no']['id_axle'];
                if ($id_axle_search) {
                    $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['id_axle' => $id_axle_search]);
                }

                $id_in_stock_search = $request->request->all()['part_no']['id_in_stock'];
                if ($id_in_stock_search) {
                    $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['id_in_stock' => $id_in_stock_search]);
                }*/

                /* Удаляем дубли из списка по поиску */
                /*$newArray = [];
                $Fruits = [];
                foreach ($arr_part_no_search as $key => $value) {
                    foreach ($value as $key => $line) {
                        if (!in_array($line->getId(), $Fruits)) {
                            $Fruits[] = $line->getId();
                            $newArray[$key] = $line;
                        }
                    }
                }
                $arr_part_no[] = $newArray;
                unset($newArray);
                unset($Fruits);*/
            } else {

                /* Выводим вбитые данные в форму поиска если форма не прошла валидацию, через сессии */
                $value_form_part_no = $request->request->all();
                if ($value_form_part_no) {
                    foreach ($value_form_part_no as $key => $values) {
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                $this->addFlash($key . '_search', $value);
                            }
                        }
                    }
                }
                //dd($errors_search_original_number);
                /* Выводим сообщения ошибки в форму поиска, через сессии  */
                if ($errors_search_part_no) {
                    foreach ($errors_search_part_no as $key) {
                        $message = $key->getmessage();
                        $propertyPath = $key->getpropertyPath() . '_search';
                        $this->addFlash(
                            $propertyPath,
                            $message
                        );
                    }
                }

                if ($errors_search_original_number) {
                    foreach ($errors_search_original_number as $key) {
                        $message = $key->getmessage();
                        $propertyPath = $key->getpropertyPath() . '_search';
                        $this->addFlash(
                            $propertyPath,
                            $message
                        );
                    }
                }

                return $this->redirectToRoute('part_no');
            }
        } else {
            $arr_part_no[] = $doctrine->getRepository(IdDetailsManufacturer::class)->findAll();
        }
        //dd($arr_part_no);
        return $this->render('part_no/part_no.html.twig', [
            'title_logo' => 'Детали',
            'legend' => 'Добавить новую деталь',
            'legend_search' => 'Поиск',
            'form_p_n_sales' => $form_p_n_sales->createView(),
            'form_p_n_search' => $form_p_n_search->createView(),
            'form_original_number_sales' => $form_original_number_sales->createView(),
            'form_original_number_search' => $form_original_number_search->createView(),
            'arr_part_no' => $arr_part_no,
        ]);
    }



    #[Route('/sales_part_no', name: 'sales_part_no')]
    public function salesPart(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {

        /* Подключаем сущности  */
        $entity_part_no = new IdDetailsManufacturer();
        $entity_original_number = new OriginalRooms();

        /* Подключаем форм */
        $form_part_no = $this->createForm(PartNoType::class, $entity_part_no);
        $form_original_number = $this->createForm(OriginalRoomsType::class, $entity_original_number);

        /*Валидация формы */
        $form_part_no->handleRequest($request);
        $form_original_number->handleRequest($request);

        /* Подключаем валидацию  */
        $errors_part_no = $validator->validate($form_part_no);
        $errors_original_number = $validator->validate($form_original_number);
        // dd($request);
        /*Валидация формы ручного сохранения деталей */
        if ($form_part_no->isSubmitted() && $form_original_number->isSubmitted()) {

            if ($form_part_no->isValid() && $form_original_number->isValid()) {
                // dd($form_original_number->getData()->getOriginalNumber());

                $part_number_strtolower_preg_replace = strtolower(preg_replace(
                    '#[^a-z\d]#i',
                    '',
                    $request->request->all()['part_no']['part_numbers']
                ));

                $сount_part_number = $doctrine->getRepository(IdDetailsManufacturer::class)
                    ->count(['part_numbers' => $part_number_strtolower_preg_replace]);

                /* Валидация дулей номеров деталей, сохранения номера , производителей, описания деталей */
                if ($сount_part_number == 0) {

                    $original_number_strtolower_preg_replace = strtolower(preg_replace(
                        '#\s#',
                        '',
                        $form_original_number->getData()->getOriginalNumber()
                    ));

                    if ($original_number_strtolower_preg_replace) {

                        $сount_original_number = $doctrine->getRepository(OriginalRooms::class)
                            ->count(['original_number' => $original_number_strtolower_preg_replace]);

                        /* Валидация дулей оригинального номеров деталей */
                        if ($сount_original_number == 0) {

                            $entity_original_number->setOriginalNumber($original_number_strtolower_preg_replace);

                            $em = $doctrine->getManager();
                            $em->persist($entity_original_number);
                            $em->flush();
                        }

                        $id_original_number = $doctrine->getRepository(OriginalRooms::class)
                            ->findOneBy(['original_number' => $original_number_strtolower_preg_replace]);

                        $entity_part_no->setIdOriginalNumber($id_original_number);
                    }


                    $entity_part_no->setPartNumbers($part_number_strtolower_preg_replace);

                    $entity_part_no->setManufacturers(
                        strtolower(preg_replace(
                            '#[^a-z\d \-&]#i',
                            '',
                            $request->request->all()['part_no']['manufacturers']
                        ))
                    );

                    $entity_part_no->setNameDetail(
                        mb_strtolower(preg_replace(
                            '#[^а-яё\d\s\.,]#ui',
                            '',
                            $request->request->all()['part_no']['name_detail']
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
                                $this->addFlash($key . '_sales', $value);
                            }
                        }
                    }
                }

                /* Выводим ошибки валидации, через сессии */
                if ($errors_part_no) {
                    foreach ($errors_part_no as $key) {
                        $message = $key->getmessage();
                        $propertyPath = $key->getpropertyPath() . '_sales';
                        //dd($propertyPath);
                        $this->addFlash(
                            $propertyPath,
                            $message
                        );
                    }
                }

                if ($errors_original_number) {
                    foreach ($errors_original_number as $key) {
                        $message = $key->getmessage();
                        $propertyPath = $key->getpropertyPath() . '_sales';
                        //dd($propertyPath);
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

    /* функция сброса */
    #[Route('/reset_part_no', name: 'reset_part_no')]
    public function resetPart(): Response
    {
        return $this->redirectToRoute('part_no');
    }


    /* функция удаления */
    #[Route('/delete_part', name: 'delete_part')]
    public function deletePart(ManagerRegistry $doctrine, Request $request): Response
    {

        $id_delete_part = $request->request->all()['delete_part'];

        $delete_part = $doctrine->getRepository(IdDetailsManufacturer::class)->find($id_delete_part);

        $entityManager = $doctrine->getManager();
        $entityManager->remove($delete_part);
        $entityManager->flush();

        return $this->redirectToRoute('part_no');
    }


    /* функция редактирования */
    #[Route('/edit_part', name: 'edit_part')]
    public function editPart(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {

        /* Подключаем сущности  */
        $entity_part_no_edit = new IdDetailsManufacturer();
        $entity_original_number_edit = new OriginalRooms();

        /* Подключаем форм */
        $form_p_n_edit = $this->createForm(PartNoType::class, $entity_part_no_edit);
        $form_original_number_edit = $this->createForm(OriginalRoomsType::class, $entity_original_number_edit);

        /*Валидация формы */
        $form_p_n_edit->handleRequest($request);
        $form_original_number_edit->handleRequest($request);


        /* Подключаем валидацию и прописываем условида валидации и сообщение ошибки*/
        $validator = Validation::createValidator();

        // dd($request);

        if (!empty($_POST['edit_part'])) {

            /*Открываем редаткируемую деталь по id */
            $id_edit_part = $request->request->all()['edit_part'];

            $edit_part = $doctrine->getRepository(IdDetailsManufacturer::class)->find($id_edit_part);
        } else {
            $edit_part = '';
        }
        /*Валидация формы ручного именения деталей */
        if ($form_p_n_edit->isSubmitted() && $form_original_number_edit->isSubmitted()) {

            $part_number_strtolower = strtolower(preg_replace(
                '#\s#i',
                '',
                $request->request->all()['part_no']['part_numbers']
            ));
            $manufacturers_strtolower = strtolower(preg_replace(
                '#\s#i',
                '',
                $request->request->all()['part_no']['manufacturers']
            ));

            $input = [
                'part_number_error' => $part_number_strtolower,
                'manufacturers_error' => $manufacturers_strtolower,
            ];

            $constraint = new Collection([
                'part_number_error' => new NotBlank(
                    message: 'Форма содержит недопустимые символы',
                ),
                'manufacturers_error' => new NotBlank(
                    message: 'Форма содержит недопустимые символы',
                ),
            ]);

            $errors = $validator->validate($input, $constraint);

            if ($form_p_n_edit->isValid() && $form_original_number_edit->isValid() && !$errors->count()) {

                $id_part_no = $form_p_n_edit->getData()->getHidden();

                $part_no_edit = $doctrine->getRepository(IdDetailsManufacturer::class)
                    ->find($id_part_no);

                $original_number_strtolower_preg_replace = strtolower(preg_replace(
                    '#\s#',
                    '',
                    $form_original_number_edit->getData()->getOriginalNumber()
                ));
                if ($original_number_strtolower_preg_replace) {


                    $сount_original_number = $doctrine->getRepository(OriginalRooms::class)
                        ->count(['original_number' => $original_number_strtolower_preg_replace]);

                    /* Валидация дулей оригинального номеров деталей */
                    if ($сount_original_number == 0) {

                        $entity_original_number_edit->setOriginalNumber($original_number_strtolower_preg_replace);

                        $em = $doctrine->getManager();
                        $em->persist($entity_original_number_edit);
                        $em->flush();
                    }

                    $id_original_number = $doctrine->getRepository(OriginalRooms::class)
                        ->findOneBy(['original_number' => $original_number_strtolower_preg_replace]);

                    $part_no_edit->setIdOriginalNumber($id_original_number);
                }

                $part_no_edit->setPartNumbers($part_number_strtolower);

                $part_no_edit->setManufacturers($manufacturers_strtolower);

                $name_detail_strtolower = strtolower(preg_replace(
                    '#\s#i',
                    '',
                    $request->request->all()['part_no']['name_detail']
                ));

                $part_no_edit->setNameDetail($name_detail_strtolower);

                $part_no_edit->setIdPartName($form_p_n_edit->getData()->getIdPartName());

                $part_no_edit->setIdCarBrand($form_p_n_edit->getData()->getIdCarBrand());

                $part_no_edit->setIdSide($form_p_n_edit->getData()->getIdSide());

                $part_no_edit->setIdBody($form_p_n_edit->getData()->getIdBody());

                $part_no_edit->setIdAxle($form_p_n_edit->getData()->getIdAxle());

                $part_no_edit->setIdInStock($form_p_n_edit->getData()->getIdInStock());

                $doctrine->getManager()->flush();

                return $this->redirectToRoute('part_no');
            } else {

                /* Выводим вбитые данные в формы сохранения если форма не прошла валидацию, через сессии  */
                $value_form_part_no = $request->request->all();
                if ($value_form_part_no) {
                    foreach ($value_form_part_no as $key => $values) {
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                $this->addFlash($key . '_edit', $value);
                            }
                        }
                    }
                }

                /* Выводим ошибки валидации, через сессии  */
                if ($errors) {
                    foreach ($errors as $key) {

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

        return $this->render('part_no/edit_part_no.html.twig', [
            'title_logo' => 'Редактируем деталь',
            'legend' => 'Редактируем деталь',
            'form_p_n_edit' => $form_p_n_edit->createView(),
            'form_original_number_edit' => $form_original_number_edit->createView(),
            'edit_part' => $edit_part,
        ]);
    }
}
