<?php

namespace App\Controller\Sections_header;

use App\Form\KuDirType;
use App\Form\SearchInvoiceType;
use App\Repository\KuDirRepository;
use App\Form\KuDirSearchInvoiceType;
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
        KuDirRepository $KuDirRepository,
    ): Response {

        /* Массив для передачи в твиг списка по поиску */
        $arr_ku_dir = [];

        /*Подключаем формы */
        $form_ku_dir_search = $this->createForm(KuDirType::class);
        $form_ku_dir_invoice_search = $this->createForm(KuDirSearchInvoiceType::class);

        /*Валидация формы */
        $form_ku_dir_search->handleRequest($request);
        $form_ku_dir_invoice_search->handleRequest($request);

        if ($form_ku_dir_search->isSubmitted()) {
            if ($form_ku_dir_search->isValid()) {

                //$arr_ku_dir = $KuDirRepository->findByListSoldParts($form_sales_search);
            }
        } else {
            $arr_ku_dir = $KuDirRepository->findByListUnrecordedKuDir();
        }

        return $this->render('ku_dir/ku_dir.html.twig', [
            'title_logo' => 'КуДир',
            'legend' => 'Поиск КуДир',
            'legend_search' => 'Поиск счет-фактуру',
            'form_ku_dir_search' => $form_ku_dir_search->createView(),
            'form_ku_dir_invoice_search' => $form_ku_dir_invoice_search->createView(),
            'arr_ku_dir' => $arr_ku_dir,
        ]);
    }

    /* функция сброса */
    #[Route('/reset_ku_dir', name: 'reset_ku_dir')]
    public function resetKuDir(): Response
    {
        return $this->redirectToRoute('ku_dir');
    }

    #[Route('/ku_dir_save', name: 'ku_dir_save')]
    public function kuDirSave(): Response
    {
        return $this->render('ku_dir/ku_dir_save.html.twig', [
            'title_logo' => 'КуДир сохранение',
        ]);
    }
}
