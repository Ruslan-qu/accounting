<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'counterparty' => [[], ['_controller' => 'App\\Controller\\Sections_header\\CounterpartyController::SearchCounterparty'], [], [['text', '/counterparty']], [], [], []],
    'sales_counterparty' => [[], ['_controller' => 'App\\Controller\\Sections_header\\CounterpartyController::SalesCounterparty'], [], [['text', '/sales_counterparty']], [], [], []],
    'delete_counterparty' => [[], ['_controller' => 'App\\Controller\\Sections_header\\CounterpartyController::deleteCounterparty'], [], [['text', '/delete_counterparty']], [], [], []],
    'edit_counterparty' => [[], ['_controller' => 'App\\Controller\\Sections_header\\CounterpartyController::EditCounterparty'], [], [['text', '/edit_counterparty']], [], [], []],
    'incoming_documents' => [[], ['_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::SearchIncomingDocuments'], [], [['text', '/incoming_documents']], [], [], []],
    'save_incoming_documents' => [[], ['_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::SalesIncomingDocuments'], [], [['text', '/save_incoming_documents']], [], [], []],
    'refund_part' => [[], ['_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::Refund'], [], [['text', '/refund_part']], [], [], []],
    'reset_invoice' => [[], ['_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::Reset'], [], [['text', '/reset_invoice']], [], [], []],
    'delete_invoice' => [[], ['_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::deleteInvoice'], [], [['text', '/delete_invoice']], [], [], []],
    'ku_dir' => [[], ['_controller' => 'App\\Controller\\Sections_header\\KuDirController::index'], [], [['text', '/ku_dir']], [], [], []],
    'app_main_page' => [[], ['_controller' => 'App\\Controller\\Sections_header\\MainPageController::index'], [], [['text', '/']], [], [], []],
    'part_no' => [[], ['_controller' => 'App\\Controller\\Sections_header\\PartNoController::searchPart'], [], [['text', '/part_no']], [], [], []],
    'save_part_no' => [[], ['_controller' => 'App\\Controller\\Sections_header\\PartNoController::salesPart'], [], [['text', '/save_part_no']], [], [], []],
    'reset_part_no' => [[], ['_controller' => 'App\\Controller\\Sections_header\\PartNoController::resetPart'], [], [['text', '/reset_part_no']], [], [], []],
    'delete_part' => [[], ['_controller' => 'App\\Controller\\Sections_header\\PartNoController::deletePart'], [], [['text', '/delete_part']], [], [], []],
    'edit_part' => [[], ['_controller' => 'App\\Controller\\Sections_header\\PartNoController::editPart'], [], [['text', '/edit_part']], [], [], []],
    'price' => [[], ['_controller' => 'App\\Controller\\Sections_header\\PriceController::searchPrice'], [], [['text', '/price']], [], [], []],
    'reset_price' => [[], ['_controller' => 'App\\Controller\\Sections_header\\PriceController::resetPart'], [], [['text', '/reset_price']], [], [], []],
    'sold_price' => [[], ['_controller' => 'App\\Controller\\Sections_header\\PriceController::soldPrice'], [], [['text', '/sold_price']], [], [], []],
    'edit_sold_price' => [[], ['_controller' => 'App\\Controller\\Sections_header\\PriceController::editSoldPrice'], [], [['text', '/edit_sold_price']], [], [], []],
    'delete_sale_list' => [[], ['_controller' => 'App\\Controller\\Sections_header\\PriceController::deleteSaleList'], [], [['text', '/delete_sale_list']], [], [], []],
    'complete_sales' => [[], ['_controller' => 'App\\Controller\\Sections_header\\PriceController::completeSales'], [], [['text', '/complete_sales']], [], [], []],
    'refund' => [[], ['_controller' => 'App\\Controller\\Sections_header\\RefundController::SearchRefund'], [], [['text', '/refund']], [], [], []],
    'reset_refund' => [[], ['_controller' => 'App\\Controller\\Sections_header\\RefundController::Reset'], [], [['text', '/reset_refund']], [], [], []],
    'edit_refund' => [[], ['_controller' => 'App\\Controller\\Sections_header\\RefundController::EditRefund'], [], [['text', '/edit_refund']], [], [], []],
    'delete_refund' => [[], ['_controller' => 'App\\Controller\\Sections_header\\RefundController::deleteRefund'], [], [['text', '/delete_refund']], [], [], []],
    'edit_activity' => [[], ['_controller' => 'App\\Controller\\Sections_header\\RefundController::EditActivity'], [], [['text', '/edit_activity']], [], [], []],
    'sales' => [[], ['_controller' => 'App\\Controller\\Sections_header\\SalesController::searchSales'], [], [['text', '/sales']], [], [], []],
    'health_check' => [[], ['_controller' => 'App\\Controller\\Test\\HealthCheckAction'], [], [['text', '/health-check']], [], [], []],
];
