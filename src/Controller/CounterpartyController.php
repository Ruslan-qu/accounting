<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Validation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\FormsCounterparty\CounterpartyType;
use App\Entity\EntitiesCounterparty\Counterparty;
use App\Form\FormsCounterparty\CounterpartySearchType;
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

        /*Подключаем класс базы данных*/
        $entity_counterparty = new Counterparty();

        /*Подключаем формы */
        $form_counterparty_search = $this->createForm(CounterpartySearchType::class);

        $form_counterparty_sales = $this->createForm(CounterpartyType::class, $entity_counterparty);

        $form_counterparty_reset = $this->createForm(CounterpartyType::class, $entity_counterparty);

        /*Валидация формы */
        $form_counterparty_search->handleRequest($request);

        $arr_counterparty_search = $doctrine->getRepository(Counterparty::class)->findAll();
        /*Валидация формы */
        if ($form_counterparty_search->isSubmitted()) {
            if ($form_counterparty_search->isValid()) {

                /* собераем список по поиску */
                $counterparty_search = $request->request->all()['counterparty_search']['counterparty_search'];
                if ($counterparty_search) {
                    unset($arr_counterparty_search);
                    $arr_counterparty_search[] = $doctrine->getRepository(Counterparty::class)
                        ->find($counterparty_search);
                }
            }
        }
        // dd($arr_counterparty_search);
        return $this->render('counterparty/counterparty.html.twig', [
            'title_logo' => 'Контрагент',
            'legend' => 'Добавить нового поставщика',
            'legend_search' => 'Поиск',
            'form_counterparty_search' => $form_counterparty_search->createView(),
            'form_counterparty_sales' => $form_counterparty_sales->createView(),
            'form_counterparty_reset' => $form_counterparty_reset->createView(),
            'arr_counterparty_search' => $arr_counterparty_search,
        ]);
    }


    #[Route('/sales_counterparty', name: 'sales_counterparty')]
    public function SalesCounterparty(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {

        /* Подключаем сущности  */
        $entity_counterparty = new Counterparty();

        /* Подключаем форм */
        $form_counterparty = $this->createForm(CounterpartyType::class, $entity_counterparty);

        /*Валидация формы */
        $form_counterparty->handleRequest($request);

        /* Подключаем валидацию  */
        $errors_counterparty = $validator->validate($form_counterparty);
        // dd($request);
        /*Валидация формы ручного сохранения деталей */
        if (
            $form_counterparty->isSubmitted()
        ) {
            if ($form_counterparty->isValid()) {

                $counterparty_strtolower_preg_replace = strtolower(preg_replace(
                    '#\s#',
                    '',
                    $request->request->all()['counterparty']['counterparty']
                ));


                $mail_counterparty_strtolower_preg_replace = strtolower(preg_replace(
                    '#\s#',
                    '',
                    $request->request->all()['counterparty']['mail_counterparty']
                ));


                $сount_counterparty = $doctrine->getRepository(Counterparty::class)
                    ->count(['counterparty' => $counterparty_strtolower_preg_replace]);

                $сount_mail_counterparty = $doctrine->getRepository(Counterparty::class)
                    ->count(['mail_counterparty' => $mail_counterparty_strtolower_preg_replace]);

                /* Валидация дулей номеров деталей, сохранения номера , производителей, описания деталей */
                if ($сount_counterparty == 0) {

                    if ($сount_mail_counterparty == 0) {
                        //dd($сount_mail_counterparty);
                        $entity_counterparty->setCounterparty($counterparty_strtolower_preg_replace);

                        $entity_counterparty->setMailCounterparty($mail_counterparty_strtolower_preg_replace);


                        $em = $doctrine->getManager();
                        $em->persist($entity_counterparty);
                        $em->flush();
                    } else {

                        $this->addFlash('children[mail_counterparty].data_sales', 'Такой email существует');
                        $this->addFlash('mail_counterparty_sales', $mail_counterparty_strtolower_preg_replace);
                    }
                } else {
                    //dd(1);
                    $this->addFlash('children[counterparty].data_sales', 'Такой поставщик существует');
                    $this->addFlash('counterparty_sales', $counterparty_strtolower_preg_replace);
                }

                return $this->redirectToRoute('counterparty');
            } else {

                /* Выводим вбитые данные в формы сохранения если форма не прошла валидацию, через сессии  */
                $value_form_counterparty = $request->request->all();
                if ($value_form_counterparty) {
                    foreach ($value_form_counterparty as $key => $values) {
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                $this->addFlash($key . '_sales', $value);
                            }
                        }
                    }
                }

                /* Выводим ошибки валидации, через сессии */
                if ($errors_counterparty) {
                    foreach ($errors_counterparty as $key) {
                        $message = $key->getmessage();
                        $propertyPath = $key->getpropertyPath() . '_sales';
                        //dd($propertyPath);
                        $this->addFlash(
                            $propertyPath,
                            $message
                        );
                    }
                }

                return $this->redirectToRoute('counterparty');
            }
        }
    }

    /* функция удаления */
    #[Route('/delete_counterparty', name: 'delete_counterparty')]
    public function deleteCounterparty(ManagerRegistry $doctrine, Request $request): Response
    {

        $id_delete_counterparty = $request->request->all()['delete_counterparty'];

        $delete_counterparty = $doctrine->getRepository(Counterparty::class)->find($id_delete_counterparty);

        $entityManager = $doctrine->getManager();
        $entityManager->remove($delete_counterparty);
        $entityManager->flush();

        return $this->redirectToRoute('counterparty');
    }

    /* функция редактирования */
    #[Route('/edit_counterparty', name: 'edit_counterparty')]
    public function EditCounterparty(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {

        /* Подключаем сущности  */
        $entity_counterparty_edit = new Counterparty();

        /* Подключаем форм */
        $form_counterparty_edit = $this->createForm(CounterpartyType::class, $entity_counterparty_edit);

        /*Валидация формы */
        $form_counterparty_edit->handleRequest($request);

        /* Подключаем валидацию и прописываем условида валидации и сообщение ошибки*/
        $validator = Validation::createValidator();

        //dd($request);

        if (!empty($_POST['edit_counterparty'])) {

            /*Открываем редаткируемую деталь по id */
            $id_edit_counterparty = $request->request->all()['edit_counterparty'];

            $edit_counterparty = $doctrine->getRepository(Counterparty::class)->find($id_edit_counterparty);
        } else {

            $edit_counterparty = '';
        }
        /*Валидация формы ручного именения деталей */
        if ($form_counterparty_edit->isSubmitted()) {

            if ($form_counterparty_edit->isValid()) {
                //dd($form_counterparty_edit->getData()->getHidden());
                $id_counterparty = $form_counterparty_edit->getData()->getHidden();

                $counterparty_strtolower = strtolower(preg_replace(
                    '#\s#i',
                    '',
                    $request->request->all()['counterparty']['counterparty']
                ));
                $mail_counterparty_strtolower = strtolower(preg_replace(
                    '#\s#i',
                    '',
                    $request->request->all()['counterparty']['mail_counterparty']
                ));
                //dd($counterparty_strtolower);

                $counterparty_edit = $doctrine->getRepository(Counterparty::class)
                    ->find($id_counterparty);
                //dd($counterparty_edit);
                $counterparty_edit->setCounterparty($counterparty_strtolower);

                $counterparty_edit->setMailCounterparty($mail_counterparty_strtolower);

                $doctrine->getManager()->flush();

                return $this->redirectToRoute('counterparty');
            } else {

                /* Выводим вбитые данные в формы сохранения если форма не прошла валидацию, через сессии  */
                $value_form_counterparty = $request->request->all();
                if ($value_form_counterparty) {
                    foreach ($value_form_counterparty as $key => $values) {
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                $this->addFlash($key . '_edit', $value);
                            }
                        }
                    }
                }
            }
        }
        //dd($edit_part);
        return $this->render('counterparty/edit_counterparty.html.twig', [
            'title_logo' => 'Редактируем поставщика',
            'legend' => 'Редактируем поставщика',
            'form_counterparty_edit' => $form_counterparty_edit->createView(),
            'edit_counterparty' => $edit_counterparty,
        ]);
    }
}
