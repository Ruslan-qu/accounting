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
        '/counterparty' => [[['_route' => 'counterparty', '_controller' => 'App\\Controller\\Sections_header\\CounterpartyController::SearchCounterparty'], null, null, null, false, false, null]],
        '/sales_counterparty' => [[['_route' => 'sales_counterparty', '_controller' => 'App\\Controller\\Sections_header\\CounterpartyController::SalesCounterparty'], null, null, null, false, false, null]],
        '/delete_counterparty' => [[['_route' => 'delete_counterparty', '_controller' => 'App\\Controller\\Sections_header\\CounterpartyController::deleteCounterparty'], null, null, null, false, false, null]],
        '/edit_counterparty' => [[['_route' => 'edit_counterparty', '_controller' => 'App\\Controller\\Sections_header\\CounterpartyController::EditCounterparty'], null, null, null, false, false, null]],
        '/incoming_documents' => [[['_route' => 'incoming_documents', '_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::SearchIncomingDocuments'], null, null, null, false, false, null]],
        '/save_incoming_documents' => [[['_route' => 'save_incoming_documents', '_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::SalesIncomingDocuments'], null, null, null, false, false, null]],
        '/sales_parts' => [[['_route' => 'sales_parts', '_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::SalesParts'], null, null, null, false, false, null]],
        '/refund_part' => [[['_route' => 'refund_part', '_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::Refund'], null, ['GET' => 0], null, false, false, null]],
        '/reset_invoice' => [[['_route' => 'reset_invoice', '_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::Reset'], null, null, null, false, false, null]],
        '/delete_invoice' => [[['_route' => 'delete_invoice', '_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::deleteInvoice'], null, null, null, false, false, null]],
        '/ku_dir' => [[['_route' => 'ku_dir', '_controller' => 'App\\Controller\\Sections_header\\KuDirController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_main_page', '_controller' => 'App\\Controller\\Sections_header\\MainPageController::index'], null, null, null, false, false, null]],
        '/part_no' => [[['_route' => 'part_no', '_controller' => 'App\\Controller\\Sections_header\\PartNoController::searchPart'], null, null, null, false, false, null]],
        '/save_part_no' => [[['_route' => 'save_part_no', '_controller' => 'App\\Controller\\Sections_header\\PartNoController::salesPart'], null, null, null, false, false, null]],
        '/reset_part_no' => [[['_route' => 'reset_part_no', '_controller' => 'App\\Controller\\Sections_header\\PartNoController::resetPart'], null, null, null, false, false, null]],
        '/delete_part' => [[['_route' => 'delete_part', '_controller' => 'App\\Controller\\Sections_header\\PartNoController::deletePart'], null, null, null, false, false, null]],
        '/edit_part' => [[['_route' => 'edit_part', '_controller' => 'App\\Controller\\Sections_header\\PartNoController::editPart'], null, null, null, false, false, null]],
        '/price' => [[['_route' => 'price', '_controller' => 'App\\Controller\\Sections_header\\PriceController::searchPrice'], null, null, null, false, false, null]],
        '/reset_price' => [[['_route' => 'reset_price', '_controller' => 'App\\Controller\\Sections_header\\PriceController::resetPart'], null, null, null, false, false, null]],
        '/sold_price' => [[['_route' => 'sold_price', '_controller' => 'App\\Controller\\Sections_header\\PriceController::soldPrice'], null, null, null, false, false, null]],
        '/delete_sale_list' => [[['_route' => 'delete_sale_list', '_controller' => 'App\\Controller\\Sections_header\\PriceController::deleteInvoice'], null, null, null, false, false, null]],
        '/refund' => [[['_route' => 'refund', '_controller' => 'App\\Controller\\Sections_header\\RefundController::SearchRefund'], null, null, null, false, false, null]],
        '/reset_refund' => [[['_route' => 'reset_refund', '_controller' => 'App\\Controller\\Sections_header\\RefundController::Reset'], null, null, null, false, false, null]],
        '/edit_refund' => [[['_route' => 'edit_refund', '_controller' => 'App\\Controller\\Sections_header\\RefundController::EditRefund'], null, null, null, false, false, null]],
        '/delete_refund' => [[['_route' => 'delete_refund', '_controller' => 'App\\Controller\\Sections_header\\RefundController::deleteRefund'], null, null, null, false, false, null]],
        '/edit_activity' => [[['_route' => 'edit_activity', '_controller' => 'App\\Controller\\Sections_header\\RefundController::EditActivity'], null, null, null, false, false, null]],
        '/sales' => [[['_route' => 'sales', '_controller' => 'App\\Controller\\Sections_header\\SalesController::index'], null, null, null, false, false, null]],
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
