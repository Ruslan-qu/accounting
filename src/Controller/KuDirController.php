<?php

namespace App\Controller;

use App\Form\FormsKuDir\KuDirType;
use App\Entity\EntitiesKuDir\KuDir;
use App\Form\FormsKuDir\KuDirEditType;
use App\Form\FormsKuDir\SaveKuDirType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\FormsKuDir\KuDirSearchInvoiceType;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\EntitiesIncomingDocuments\Invoice;
use App\Repository\RepositoryKuDir\KuDirRepository;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Repository\RepositoryIncomingDocuments\InvoiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\RepositoryPartNo\IdDetailsManufacturerRepository;

class KuDirController extends AbstractController
{
    /*функция поиска счет-фактуры для сохранения в КуДир */
    #[Route('/ku_dir', name: 'ku_dir')]
    public function kuDir(
        Request $request,
        ValidatorInterface $validator,
        InvoiceRepository $InvoiceRepository,
        KuDirRepository $KuDirRepository,
    ): Response {

        /* Массив для передачи в твиг списка по поиску */
        $arr_invoice_ku_dir = [];


        /*Подключаем формы */
        $form_ku_dir_invoice_search = $this->createForm(KuDirSearchInvoiceType::class);
        $form_ku_dir_manual_saving = $this->createForm(SaveKuDirType::class);

        /*Валидация формы */
        $form_ku_dir_invoice_search->handleRequest($request);

        $last_check = $KuDirRepository->findOneByLastCheckKuDir();

        $arr_invoice_id_ku_dir = $InvoiceRepository->findByInvoiceIdKuDir();

        $arr_ku_dir = $KuDirRepository->findByListUnrecordedKuDir();
        //dd($form_ku_dir_invoice_search);

        if ($form_ku_dir_invoice_search->isSubmitted()) {
            if ($form_ku_dir_invoice_search->isValid()) {

                $arr_invoice_ku_dir = $InvoiceRepository
                    ->findBySearchInvoiceKuDir($form_ku_dir_invoice_search);
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
            }
        }
        /* Общая сумма расходов */
        $arr_total_amount_expenditure = [];
        foreach ($arr_invoice_id_ku_dir as $key => $value) {

            if (array_key_exists($value->getIdKuDir()->getId(), $arr_total_amount_expenditure)) {

                $arr_total_amount_expenditure[$value->getIdKuDir()->getId()] += ($value->getPrice() / 100);
            } else {

                $arr_total_amount_expenditure[$value->getIdKuDir()->getId()] = ($value->getPrice() / 100);
            }
        }
        //dd($arr_invoice_ku_dir);
        return $this->render('ku_dir/ku_dir_save.html.twig', [
            'title_logo' => 'Сохранение в КуДир',
            'legend' => 'Навигатор по КуДир',
            'legend_search' => 'Поиск счет-фактуру и сохранение в КуДир',
            'form_ku_dir_invoice_search' => $form_ku_dir_invoice_search->createView(),
            'form_ku_dir_manual_saving' => $form_ku_dir_manual_saving->createView(),
            'last_check' => $last_check,
            'arr_ku_dir' => $arr_ku_dir,
            'arr_invoice_ku_dir' => $arr_invoice_ku_dir,
            'arr_invoice_id_ku_dir' => $arr_invoice_id_ku_dir,
            'arr_total_amount_expenditure' => $arr_total_amount_expenditure,
        ]);
    }

    /* функция сброса */
    #[Route('/reset_ku_dir_save', name: 'reset_ku_dir_save')]
    public function resetKuDirSave(): Response
    {
        return $this->redirectToRoute('ku_dir');
    }

    /* функция уаления list_invoice_id_ku_dir */
    #[Route('/delete_list_invoice_id_ku_dir', name: 'delete_list_invoice_id_ku_dir')]
    public function deleteListInvoiceIdKuDir(
        ManagerRegistry $doctrine,
        Request $request,
    ): Response {

        //dd($request);
        $id_invoice = $request->request->all()['id_invoice'];

        if (!empty($id_invoice)) {
            $find_id_invoice = $doctrine->getRepository(Invoice::class)->find($id_invoice);
            $find_id_invoice->setKuDirStatus(2);
            $find_id_invoice->setIdKuDir(NULL);
            $doctrine->getManager()->flush();
        }

        return $this->redirectToRoute('ku_dir');
    }

    /* функция сохранения id_ku_dir */
    #[Route('/id_ku_dir_save', name: 'id_ku_dir_save')]
    public function statusChangesKuDir(
        ManagerRegistry $doctrine,
        Request $request,
    ): Response {
        //dd($request->request->all());

        $id_ku_dir = $request->request->all()['id_ku_dir'];

        if (!empty($id_ku_dir)) {

            $find_id_ku_dir = $doctrine->getRepository(KuDir::class)->find($id_ku_dir);

            $id_invoice = $request->request->all()['id_invoice'];
            $find_id_invoice = $doctrine->getRepository(Invoice::class)->find($id_invoice);
            $find_id_invoice->setIdKuDir($find_id_ku_dir);
            $find_id_invoice->setKuDirStatus(1);

            $doctrine->getManager()->flush();
        }
        return $this->redirectToRoute('ku_dir');
    }

    /* функция сохранения ku_dir */
    #[Route('/ku_dir_save', name: 'ku_dir_save')]
    public function kuDirSave(
        ManagerRegistry $doctrine,
        Request $request,
    ): Response {

        $id_ku_dir = $request->request->all()['id_ku_dir'];
        $find_id_ku_dir = $doctrine->getRepository(KuDir::class)->find($id_ku_dir);
        $find_id_ku_dir->setExpenditure($request->request->all()['expenditure'] * 100);
        $find_id_ku_dir->setStatusKuDir(1);
        $doctrine->getManager()->flush();


        return $this->redirectToRoute('ku_dir');
    }

    /*функция ручное сохранение в КуДир */
    #[Route('/ku_dir_manual_saving', name: 'ku_dir_manual_saving')]
    public function manualSavingKuDir(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator,
        InvoiceRepository $InvoiceRepository,
        KuDirRepository $KuDirRepository,
    ): Response {

        /* Подключаем сущности  */
        $entity_ku_dir = new KuDir();

        /*Подключаем формы */
        $form_ku_dir_manual_saving = $this->createForm(SaveKuDirType::class);

        /*Валидация формы */
        $form_ku_dir_manual_saving->handleRequest($request);

        /* Подключаем валидацию  */
        $errors_form_ku_dir_manual_saving = $validator->validate($form_ku_dir_manual_saving);

        if ($form_ku_dir_manual_saving->isSubmitted()) {

            $receipt_change_save = $form_ku_dir_manual_saving
                ->getData()['receipt_change_save'];
            $receipt_number_save = $form_ku_dir_manual_saving
                ->getData()['receipt_number_save'];

            $сount_receipt_change_number = $doctrine->getRepository(KuDir::class)
                ->count([
                    'receipt_change' => $receipt_change_save,
                    'receipt_number' => $receipt_number_save
                ]);
            if ($form_ku_dir_manual_saving->isValid() && $сount_receipt_change_number == 0) {


                $entity_ku_dir->setReceiptChange(
                    $receipt_change_save
                );
                $entity_ku_dir->setReceiptNumber(
                    $receipt_number_save
                );
                $entity_ku_dir->setReceiptDate(
                    $form_ku_dir_manual_saving->getData()['receipt_date_save']
                );
                $entity_ku_dir->setComing(
                    $form_ku_dir_manual_saving->getData()['coming_save']
                );
                $expenditure_save = strtolower(preg_replace(
                    '#\s#',
                    '',
                    $form_ku_dir_manual_saving->getData()['expenditure_save']
                ));
                if ($expenditure_save) {
                    $entity_ku_dir->setExpenditure($expenditure_save);
                };
                $entity_ku_dir->setStatusKuDir(1);

                $em = $doctrine->getManager();
                $em->persist($entity_ku_dir);
                $em->flush();
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

                /* Выводим ошибки валидации, через сессии  */
                if ($сount_receipt_change_number != 0) {
                    $this->addFlash(
                        'error_сount_receipt_change_number',
                        'Смена или номер чека существует.'
                    );
                }


                /* Выводим ошибки валидации, через сессии */
                if ($errors_form_ku_dir_manual_saving) {
                    foreach ($errors_form_ku_dir_manual_saving as $key) {
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

        return $this->redirectToRoute('ku_dir');
    }

    /*функция поиска в КуДир */
    #[Route('/search_ku_dir', name: 'search_ku_dir')]
    public function searchKuDir(
        Request $request,
        ValidatorInterface $validator,
        InvoiceRepository $InvoiceRepository,
        KuDirRepository $KuDirRepository,
    ): Response {

        /*Подключаем формы */
        $form_ku_dir_search = $this->createForm(KuDirType::class);
        $form_ku_dir_search->handleRequest($request);

        $arr_ku_dir_search = $InvoiceRepository->findByMonthlyTableKuDir();

        /*Валидация формы */
        if ($form_ku_dir_search->isSubmitted()) {
            if ($form_ku_dir_search->isValid()) {
                //dd($form_ku_dir_search);
                $arr_ku_dir_search = $InvoiceRepository->findBySearchKuDir($form_ku_dir_search);
            }
        }

        //dd($arr_ku_dir_search[0]);
        /* Общая сумма расходов */
        $total_amount_coming = 0;
        $total_amount_expenditure = 0;
        foreach ($arr_ku_dir_search as $key => $value) {

            $total_amount_coming += $value->getIdKuDir()->getComing();

            $total_amount_expenditure += ($value->getIdKuDir()->getExpenditure() / 100);
        }
        $arr_total_amount_coming_expenditure = [
            'total_amount_coming' => $total_amount_coming,
            'total_amount_expenditure' => $total_amount_expenditure
        ];

        return $this->render('ku_dir/ku_dir_search.html.twig', [
            'title_logo' => 'Поиск по КуДир',
            'legend' => 'Навигатор по КуДир',
            'legend_search' => 'Поиск по КуДир',
            'form_ku_dir_search' => $form_ku_dir_search->createView(),
            'arr_ku_dir_search' => $arr_ku_dir_search,
            'arr_total_amount_coming_expenditure' => $arr_total_amount_coming_expenditure,

        ]);
    }

    /* функция сброса */
    #[Route('/reset_ku_dir_search', name: 'reset_ku_dir_search')]
    public function resetKuDirSearch(): Response
    {
        return $this->redirectToRoute('search_ku_dir');
    }

    /* функция вывода данных для редактирования */
    #[Route('/ku_dir_edit', name: 'ku_dir_edit', methods: ['GET'])]
    public function editKuDir(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {
        //dd($request->query->get('ku_dir_edit'));
        /* Подключаем форм */
        $form_ku_dir_edit = $this->createForm(KuDirEditType::class);



        $id_ku_dir = $request->query->get('ku_dir_edit');

        if (!empty($id_ku_dir)) {

            /*Открываем по id */
            $arr_ku_dir = $doctrine->getRepository(KuDir::class)->find($id_ku_dir);
        } else {
            return $this->redirectToRoute('search_ku_dir');
        }

        return $this->render('ku_dir/edit_ku_dir.html.twig', [
            'title_logo' => 'Редактируем КуДир',
            'legend' => 'Редактируем КуДир',
            'form_ku_dir_edit' => $form_ku_dir_edit->createView(),
            'arr_ku_dir' => $arr_ku_dir,
        ]);
    }

    /* функция сохранения данных после редактирования */
    #[Route('/ku_dir_edit/save', name: 'ku_dir_edit_save')]
    public function saveEditKuDir(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator
    ): Response {
        //dd($request);
        /* Подключаем форм */
        $form_ku_dir_edit = $this->createForm(KuDirEditType::class);
        $form_ku_dir_edit->handleRequest($request);

        /*Валидация формы */
        if ($form_ku_dir_edit->isSubmitted()) {

            if ($form_ku_dir_edit->isValid()) {

                $id_ku_dir_edit_save = $form_ku_dir_edit->getData()['hidden_ku_dir_edit'];

                $ku_dir = $doctrine->getRepository(KuDir::class)->find($id_ku_dir_edit_save);
                $receipt_change_save = $form_ku_dir_edit
                    ->getData()['receipt_change_edit'];
                $receipt_number_save = $form_ku_dir_edit
                    ->getData()['receipt_number_edit'];

                $сount_receipt_change_number = $doctrine->getRepository(KuDir::class)
                    ->count([
                        'receipt_change' => $receipt_change_save,
                        'receipt_number' => $receipt_number_save
                    ]);
                if ($сount_receipt_change_number == 0) {
                    $ku_dir->setReceiptChange($form_ku_dir_edit->getData()['receipt_change_edit']);
                    $ku_dir->setReceiptNumber($form_ku_dir_edit->getData()['receipt_number_edit']);
                }
                $ku_dir->setReceiptDate($form_ku_dir_edit->getData()['receipt_date_edit']);
                $ku_dir->setComing($form_ku_dir_edit->getData()['coming_edit']);

                $doctrine->getManager()->flush();
            }
        }

        return $this->redirectToRoute('search_ku_dir');
    }
}
