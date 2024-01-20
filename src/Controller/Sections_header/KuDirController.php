<?php

namespace App\Controller\Sections_header;

use App\Entity\KuDir;
use App\Entity\Invoice;
use App\Form\KuDirType;
use App\Form\SearchInvoiceType;
use App\Repository\KuDirRepository;
use App\Form\KuDirSearchInvoiceType;
use App\Repository\InvoiceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
        $form_ku_dir_search = $this->createForm(KuDirType::class);
        $form_ku_dir_invoice_search = $this->createForm(KuDirSearchInvoiceType::class);

        /*Валидация формы */
        $form_ku_dir_search->handleRequest($request);
        $form_ku_dir_invoice_search->handleRequest($request);

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
        return $this->render('ku_dir/ku_dir.html.twig', [
            'title_logo' => 'Сохранение в КуДир',
            'legend' => 'Навигатор по КуДир',
            'legend_search' => 'Поиск счет-фактуру',
            'form_ku_dir_search' => $form_ku_dir_search->createView(),
            'form_ku_dir_invoice_search' => $form_ku_dir_invoice_search->createView(),
            'arr_ku_dir' => $arr_ku_dir,
            'arr_invoice_ku_dir' => $arr_invoice_ku_dir,
            'arr_invoice_id_ku_dir' => $arr_invoice_id_ku_dir,
            'arr_total_amount_expenditure' => $arr_total_amount_expenditure,
        ]);
    }

    /* функция сброса */
    #[Route('/reset_ku_dir', name: 'reset_ku_dir')]
    public function resetKuDir(): Response
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
            // $find_id_invoice->setIdKuDir(0);
            $find_id_invoice->setKuDirStatus(2);
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

        $expenditure = $request->request->all()['expenditure'];

        if ($expenditure != 0) {

            $id_ku_dir = $request->request->all()['id_ku_dir'];
            $find_id_ku_dir = $doctrine->getRepository(KuDir::class)->find($id_ku_dir);
            $find_id_ku_dir->setExpenditure($expenditure * 100);

            $doctrine->getManager()->flush();
        }

        return $this->redirectToRoute('ku_dir');
    }

    /*функция поиска счет-фактуры для сохранения в КуДир */
    #[Route('/ku_dirb', name: 'ku_dirb')]
    public function searchKuDir(
        Request $request,
        ValidatorInterface $validator,
        InvoiceRepository $InvoiceRepository,
        KuDirRepository $KuDirRepository,
    ): Response {

        /* Массив для передачи в твиг списка по поиску */
        $arr_ku_dir = [];
        $arr_invoice_ku_dir = [];
        $arr_invoice_id_ku_dir = [];

        /*Подключаем формы */
        $form_ku_dir_search = $this->createForm(KuDirType::class);
        $form_ku_dir_invoice_search = $this->createForm(KuDirSearchInvoiceType::class);

        /*Валидация формы */
        $form_ku_dir_search->handleRequest($request);
        $form_ku_dir_invoice_search->handleRequest($request);

        $arr_invoice_id_ku_dir = $InvoiceRepository->findByInvoiceIdKuDir();

        if ($form_ku_dir_search->isSubmitted()) {
            if ($form_ku_dir_search->isValid()) {

                //$arr_ku_dir = $KuDirRepository->findByListSoldParts($form_sales_search);
            }
        } else {
            $arr_ku_dir = $KuDirRepository->findByListUnrecordedKuDir();
        }

        if ($form_ku_dir_invoice_search->isSubmitted()) {
            if ($form_ku_dir_invoice_search->isValid()) {

                //$arr_invoice_ku_dir = $KuDirRepository->findByListSoldParts($form_sales_search);
            }
        } else {
            //$arr_invoice_ku_dir = $InvoiceRepository->findBySearchInvoiceKuDir();
        }
        // dd($arr_invoice_id_ku_dir);
        /* Общая сумма расходов */
        $arr_total_amount_expenditure = [];
        foreach ($arr_invoice_id_ku_dir as $key => $value) {

            if (array_key_exists($value->getIdKuDir()->getId(), $arr_total_amount_expenditure)) {

                $arr_total_amount_expenditure[$value->getIdKuDir()->getId()] += ($value->getPrice() / 100);
            } else {

                $arr_total_amount_expenditure[$value->getIdKuDir()->getId()] = ($value->getPrice() / 100);
            }
        }

        return $this->render('ku_dir/ku_dir.html.twig', [
            'title_logo' => 'Сохранение в КуДир',
            'legend' => 'Навигатор по КуДир',
            'legend_search' => 'Поиск счет-фактуру',
            'form_ku_dir_search' => $form_ku_dir_search->createView(),
            'form_ku_dir_invoice_search' => $form_ku_dir_invoice_search->createView(),
            'arr_ku_dir' => $arr_ku_dir,
            'arr_invoice_ku_dir' => $arr_invoice_ku_dir,
            'arr_invoice_id_ku_dir' => $arr_invoice_id_ku_dir,
            'arr_total_amount_expenditure' => $arr_total_amount_expenditure,
        ]);
    }
}
