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
    /*функция поиска по данным */
    #[Route('/ku_dir', name: 'ku_dir')]
    public function kuDir(
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
            $arr_invoice_ku_dir = $InvoiceRepository->findBySearchInvoiceKuDir();
        }
        // dd($arr_invoice_id_ku_dir);
        /* Общая сумма расходов */
        //$total_amount_expenditure = 0;
        // $arr_id_ku_dir = [];
        $arr_total_amount_expenditure = [];
        foreach ($arr_invoice_id_ku_dir as $key => $value) {
            //$arr_total_amount_expenditure[$key] .= ($value->getPrice() / 100);
            if (array_key_exists($value->getIdKuDir()->getId(), $arr_total_amount_expenditure)) {
                //dd($arr_total_amount_expenditure);
                $arr_total_amount_expenditure[$value->getIdKuDir()->getId()] += ($value->getPrice() / 100);
            } else {
                //$arr_id_ku_dir[$key] .= $value->getIdKuDir()->getId();
                $arr_total_amount_expenditure[$value->getIdKuDir()->getId()] = ($value->getPrice() / 100);
            }
        }
        // dd($arr_total_amount_expenditure);
        return $this->render('ku_dir/ku_dir.html.twig', [
            'title_logo' => 'КуДир',
            'legend' => 'Поиск КуДир',
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
    public function kuDirSave(): Response
    {
        return $this->render('ku_dir/ku_dir_save.html.twig', [
            'title_logo' => 'КуДир сохранение',
        ]);
    }
}
