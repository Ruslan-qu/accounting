<?php

namespace App\Controller\Sections_header;

use App\Entity\Invoice;
use App\Entity\RefundActivity;
use App\Form\SearchInvoiceType;
use App\Entity\IdDetailsManufacturer;
use App\Repository\InvoiceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RefundController extends AbstractController
{
    #[Route('/refund', name: 'refund')]
    public function SearchRefund(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator,
        InvoiceRepository $InvoiceRepository,
    ): Response {

        /*Подключаем формы */
        $form_search_refund = $this->createForm(SearchInvoiceType::class);

        /*Валидация формы */
        $form_search_refund->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_refund = $validator->validate($form_search_refund);

        /* Массив для передачи в твиг списка по поиску */
        $arr_refund = [];

        if ($form_search_refund->isSubmitted()) {
            if ($form_search_refund->isValid()) {
                // dd($request);
                /* собераем списка по поиску */
                $number_document_search = $request->request->all()['search_invoice']['search_number_document'];
                $s_data_invoice_search = $request->request->all()['search_invoice']['s_data_invoice'];
                $po_data_invoice_search = $request->request->all()['search_invoice']['po_data_invoice'];
                $id_counterparty_search = $request->request->all()['search_invoice']['search_id_counterparty'];
                $part_numbers_search = strtolower($request->request->all()['search_invoice']['search_id_details']);
                $manufacturers_search = strtolower($request->request->all()['search_invoice']['search_id_manufacturer']);
                $s_price_search = $request->request->all()['search_invoice']['s_price'];
                $po_price_search = $request->request->all()['search_invoice']['po_price'];


                if ($number_document_search) {

                    $arr_refund[] = $doctrine->getRepository(Invoice::class)
                        ->findBy(['number_document' => $number_document_search]);
                } elseif ($s_data_invoice_search && $po_data_invoice_search) {

                    $arr_refund[] = $InvoiceRepository
                        ->findByDate($s_data_invoice_search, $po_data_invoice_search);
                } elseif ($s_data_invoice_search && !$po_data_invoice_search) {

                    $arr_refund[] = $InvoiceRepository
                        ->findBySDate($s_data_invoice_search);
                } elseif (!$s_data_invoice_search && $po_data_invoice_search) {

                    $arr_refund[] = $InvoiceRepository
                        ->findByPoDate($po_data_invoice_search);
                } elseif ($id_counterparty_search) {

                    $arr_refund[] = $doctrine->getRepository(Invoice::class)
                        ->findBy(['id_counterparty' => $id_counterparty_search]);
                } elseif ($part_numbers_search) {

                    $arr_refund[] = $InvoiceRepository
                        ->findBySearchNumber($part_numbers_search);
                } elseif ($manufacturers_search) {

                    $arr_refund[] = $InvoiceRepository
                        ->findBySearchManufacturers($manufacturers_search);
                } elseif ($s_price_search && $po_price_search) {

                    $arr_refund[] = $InvoiceRepository
                        ->findByPrice($s_price_search, $po_price_search);
                } elseif ($s_price_search && !$po_price_search) {

                    $arr_refund[] = $InvoiceRepository
                        ->findBySPrice($s_price_search);
                } elseif (!$s_price_search && $po_price_search) {

                    $arr_refund[] = $InvoiceRepository
                        ->findByPoPrice($po_price_search);
                }
            } else {

                /* Выводим вбитые данные в форму поиска если форма не прошла валидацию, через сессии */
                $value_form_search_refund = $request->request->all();
                if ($value_form_search_refund) {
                    foreach ($value_form_search_refund as $key => $values) {
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                $this->addFlash($key, $value);
                            }
                        }
                    }
                }

                /* Выводим сообщения ошибки в форму поиска, через сессии  */
                if ($errors_refund) {
                    foreach ($errors_refund as $key) {
                        $message = $key->getmessage();
                        $propertyPath = $key->getpropertyPath();
                        $this->addFlash(
                            $propertyPath,
                            $message
                        );
                    }
                }
                return $this->redirectToRoute('refund');
            }
        } else {
            $arr_refund[] = $doctrine->getRepository(Invoice::class)->findAll();
            $arr_refund[] = $InvoiceRepository->findByRefund();
        }

        dd($arr_refund);
        return $this->render('refund/refund.html.twig', [
            'title_logo' => 'Возвращенные детали',
            'legend_search' => 'Поиск',
            'form_search' => $form_search_refund->createView(),
            'arr_refund' => $arr_refund,
        ]);
    }

    /* функция сброса */
    #[Route('/reset_refund', name: 'reset_refund')]
    public function Reset(): Response
    {
        return $this->redirectToRoute('refund');
    }

    /* Функция отменяет возврат  */
    #[Route('/edit_refund', name: 'edit_refund')]
    public function EditRefund(ManagerRegistry $doctrine, Request $request): Response
    {
        $id = $request->request->all()['edit_refund'];

        $edit_refund = $doctrine->getRepository(Invoice::class)->find($id);

        $edit_refund->setRefund(1);

        $doctrine->getManager()->flush();

        return $this->redirectToRoute('refund');
    }

    /* функция удаления */
    #[Route('/delete_refund', name: 'delete_refund')]
    public function deleteRefund(ManagerRegistry $doctrine, Request $request): Response
    {

        $id_delete_refund = $request->request->all()['delete_refund'];

        $delete_refund = $doctrine->getRepository(Invoice::class)->find($id_delete_refund);

        $entityManager = $doctrine->getManager();
        $entityManager->remove($delete_refund);
        $entityManager->flush();

        return $this->redirectToRoute('refund');
    }

    /* Функция состояния возврат */
    #[Route('/edit_activity', name: 'edit_activity')]
    public function EditActivity(ManagerRegistry $doctrine, Request $request): Response
    {
        $id_activity = '';

        $id = $request->request->all()['edit_activity'];

        $edit_activity = $doctrine->getRepository(Invoice::class)->find($id);

        $refund_activity = $edit_activity->getIdRefundActivity()->getId();

        if ($refund_activity == 1) {
            $id_activity = 2;
        } elseif ($refund_activity == 2) {
            $id_activity = 1;
        }

        $id_refund_activit = $doctrine->getRepository(RefundActivity::class)->find($id_activity);

        $edit_activity->setIdRefundActivity($id_refund_activit);

        $doctrine->getManager()->flush();

        return $this->redirectToRoute('refund');
    }
}
