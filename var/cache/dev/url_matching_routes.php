<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/counterparty' => [[['_route' => 'counterparty', '_controller' => 'App\\Controller\\CounterpartyController::SearchCounterparty'], null, null, null, false, false, null]],
        '/sales_counterparty' => [[['_route' => 'sales_counterparty', '_controller' => 'App\\Controller\\CounterpartyController::SalesCounterparty'], null, null, null, false, false, null]],
        '/delete_counterparty' => [[['_route' => 'delete_counterparty', '_controller' => 'App\\Controller\\CounterpartyController::deleteCounterparty'], null, null, null, false, false, null]],
        '/edit_counterparty' => [[['_route' => 'edit_counterparty', '_controller' => 'App\\Controller\\CounterpartyController::EditCounterparty'], null, null, null, false, false, null]],
        '/incoming_documents' => [[['_route' => 'incoming_documents', '_controller' => 'App\\Controller\\IncomingDocumentsController::searchIncomingDocuments'], null, null, null, false, false, null]],
        '/save_incoming_documents' => [[['_route' => 'save_incoming_documents', '_controller' => 'App\\Controller\\IncomingDocumentsController::SalesIncomingDocuments'], null, null, null, false, false, null]],
        '/saving_file' => [[['_route' => 'saving_file', '_controller' => 'App\\Controller\\IncomingDocumentsController::saveFile'], null, null, null, false, false, null]],
        '/refund_part' => [[['_route' => 'refund_part', '_controller' => 'App\\Controller\\IncomingDocumentsController::Refund'], null, ['GET' => 0], null, false, false, null]],
        '/reset_invoice' => [[['_route' => 'reset_invoice', '_controller' => 'App\\Controller\\IncomingDocumentsController::Reset'], null, null, null, false, false, null]],
        '/delete_invoice' => [[['_route' => 'delete_invoice', '_controller' => 'App\\Controller\\IncomingDocumentsController::deleteInvoice'], null, null, null, false, false, null]],
        '/ku_dir' => [[['_route' => 'ku_dir', '_controller' => 'App\\Controller\\KuDirController::kuDir'], null, null, null, false, false, null]],
        '/reset_ku_dir_save' => [[['_route' => 'reset_ku_dir_save', '_controller' => 'App\\Controller\\KuDirController::resetKuDirSave'], null, null, null, false, false, null]],
        '/delete_list_invoice_id_ku_dir' => [[['_route' => 'delete_list_invoice_id_ku_dir', '_controller' => 'App\\Controller\\KuDirController::deleteListInvoiceIdKuDir'], null, null, null, false, false, null]],
        '/id_ku_dir_save' => [[['_route' => 'id_ku_dir_save', '_controller' => 'App\\Controller\\KuDirController::statusChangesKuDir'], null, null, null, false, false, null]],
        '/ku_dir_save' => [[['_route' => 'ku_dir_save', '_controller' => 'App\\Controller\\KuDirController::kuDirSave'], null, null, null, false, false, null]],
        '/ku_dir_manual_saving' => [[['_route' => 'ku_dir_manual_saving', '_controller' => 'App\\Controller\\KuDirController::manualSavingKuDir'], null, null, null, false, false, null]],
        '/search_ku_dir' => [[['_route' => 'search_ku_dir', '_controller' => 'App\\Controller\\KuDirController::searchKuDir'], null, null, null, false, false, null]],
        '/reset_ku_dir_search' => [[['_route' => 'reset_ku_dir_search', '_controller' => 'App\\Controller\\KuDirController::resetKuDirSearch'], null, null, null, false, false, null]],
        '/ku_dir_edit' => [[['_route' => 'ku_dir_edit', '_controller' => 'App\\Controller\\KuDirController::editKuDir'], null, ['GET' => 0], null, false, false, null]],
        '/ku_dir_edit/save' => [[['_route' => 'ku_dir_edit_save', '_controller' => 'App\\Controller\\KuDirController::saveEditKuDir'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_main_page', '_controller' => 'App\\Controller\\MainPageController::index'], null, null, null, false, false, null]],
        '/part_no' => [[['_route' => 'part_no', '_controller' => 'App\\Controller\\PartNoController::searchPart'], null, null, null, false, false, null]],
        '/save_part_no' => [[['_route' => 'save_part_no', '_controller' => 'App\\Controller\\PartNoController::savePart'], null, null, null, false, false, null]],
        '/reset_part_no' => [[['_route' => 'reset_part_no', '_controller' => 'App\\Controller\\PartNoController::resetPart'], null, null, null, false, false, null]],
        '/delete_part' => [[['_route' => 'delete_part', '_controller' => 'App\\Controller\\PartNoController::deletePart'], null, null, null, false, false, null]],
        '/edit_part' => [[['_route' => 'edit_part', '_controller' => 'App\\Controller\\PartNoController::editPart'], null, null, null, false, false, null]],
        '/price' => [[['_route' => 'price', '_controller' => 'App\\Controller\\PriceController::searchPrice'], null, null, null, false, false, null]],
        '/reset_price' => [[['_route' => 'reset_price', '_controller' => 'App\\Controller\\PriceController::resetPart'], null, null, null, false, false, null]],
        '/sold_price' => [[['_route' => 'sold_price', '_controller' => 'App\\Controller\\PriceController::soldPrice'], null, null, null, false, false, null]],
        '/edit_sold_price' => [[['_route' => 'edit_sold_price', '_controller' => 'App\\Controller\\PriceController::editSoldPrice'], null, null, null, false, false, null]],
        '/delete_sale_list' => [[['_route' => 'delete_sale_list', '_controller' => 'App\\Controller\\PriceController::deleteSaleList'], null, null, null, false, false, null]],
        '/complete_sales' => [[['_route' => 'complete_sales', '_controller' => 'App\\Controller\\PriceController::completeSales'], null, null, null, false, false, null]],
        '/refund' => [[['_route' => 'refund', '_controller' => 'App\\Controller\\RefundController::SearchRefund'], null, null, null, false, false, null]],
        '/reset_refund' => [[['_route' => 'reset_refund', '_controller' => 'App\\Controller\\RefundController::Reset'], null, null, null, false, false, null]],
        '/edit_refund' => [[['_route' => 'edit_refund', '_controller' => 'App\\Controller\\RefundController::EditRefund'], null, null, null, false, false, null]],
        '/delete_refund' => [[['_route' => 'delete_refund', '_controller' => 'App\\Controller\\RefundController::deleteRefund'], null, null, null, false, false, null]],
        '/edit_activity' => [[['_route' => 'edit_activity', '_controller' => 'App\\Controller\\RefundController::EditActivity'], null, null, null, false, false, null]],
        '/sales' => [[['_route' => 'sales', '_controller' => 'App\\Controller\\SalesController::searchSales'], null, null, null, false, false, null]],
        '/reset_sales' => [[['_route' => 'reset_sales', '_controller' => 'App\\Controller\\SalesController::resetSales'], null, null, null, false, false, null]],
        '/quantity_return_product' => [[['_route' => 'quantity_return_product', '_controller' => 'App\\Controller\\SalesController::quantityReturnProduct'], null, null, null, false, false, null]],
        '/health-check' => [[['_route' => 'health_check', '_controller' => 'App\\Controller\\Test\\HealthCheckAction'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
