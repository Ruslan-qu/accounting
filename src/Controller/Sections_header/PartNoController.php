<?php

namespace App\Controller\Sections_header;

use App\Form\PartNoType;
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
    public function SearchPart(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {

        /* Массив для передачи в твиг списка по поиску */
        $arr_part_no = [];

        /*Подключаем класс базы данных*/
        $entity_part_no = new IdDetailsManufacturer();

        /*Подключаем формы */
        $form_p_n_search = $this->createForm(PartNoType::class, $entity_part_no);

        $form_p_n_sales = $this->createForm(PartNoType::class, $entity_part_no);

        /*Валидация формы */
        $form_p_n_search->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_search_part_no = $validator->validate($form_p_n_search);

        //dd($request);
        /*Валидация формы */
        if ($form_p_n_search->isSubmitted()) {
            if ($form_p_n_search->isValid()) {

                /* Массив для сбора списка по поиску */
                $arr_part_no_search = [];

                /* собераем список по поиску */
                $part_numbers_search = $request->request->all()['part_no']['part_numbers'];
                if ($part_numbers_search) {
                    $arr_part_no_search[] = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['part_numbers' => $part_numbers_search]);
                }

                $id_part_name_search = $request->request->all()['part_no']['id_part_name'];
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
                $arr_part_no[] = $newArray;
                unset($newArray);
                unset($Fruits);
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
                //dd($errors_search_part_no);
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
            'arr_part_no' => $arr_part_no,
        ]);
    }



    #[Route('/sales_part_no', name: 'sales_part_no')]
    public function SalesPart(
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
        // dd($request);
        /*Валидация формы ручного сохранения деталей */
        if (
            $form_part_no->isSubmitted() && $form_part_no->isValid()
        ) {

            $part_number_strtolower_preg_replace = strtolower(preg_replace(
                '#[^a-z\d]#i',
                '',
                $request->request->all()['part_no']['part_numbers']
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

            return $this->redirectToRoute('part_no');
        }
    }

    /* функция сброса */
    #[Route('/reset_part_no', name: 'reset_part_no')]
    public function ResetPart(): Response
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
    public function EditPart(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {

        /* Подключаем сущности  */
        $entity_part_no_edit = new IdDetailsManufacturer();

        /* Подключаем форм */
        $form_p_n_edit = $this->createForm(PartNoType::class, $entity_part_no_edit);

        /*Валидация формы */
        $form_p_n_edit->handleRequest($request);

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
        if ($form_p_n_edit->isSubmitted()) {

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
            $name_detail_strtolower = strtolower(preg_replace(
                '#\s#i',
                '',
                $request->request->all()['part_no']['name_detail']
            ));

            $input = [
                'part_number_error' => $part_number_strtolower,
                'manufacturers_error' => $manufacturers_strtolower,
                'name_detail_error' => $name_detail_strtolower,
            ];

            $constraint = new Collection([
                'part_number_error' => new NotBlank(
                    message: 'Форма содержит недопустимые символы',
                ),
                'manufacturers_error' => new NotBlank(
                    message: 'Форма содержит недопустимые символы',
                ),
                'name_detail_error' => new NotBlank(
                    message: 'Форма содержит недопустимые символы',
                ),
            ]);

            $errors = $validator->validate($input, $constraint);

            if ($form_p_n_edit->isValid() && !$errors->count()) {

                $id_part_no = $form_p_n_edit->getData()->getHidden();

                $part_no_edit = $doctrine->getRepository(IdDetailsManufacturer::class)
                    ->find($id_part_no);

                $part_no_edit->setPartNumbers($part_number_strtolower);

                $part_no_edit->setManufacturers($manufacturers_strtolower);

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
            'edit_part' => $edit_part,
        ]);
    }
}
