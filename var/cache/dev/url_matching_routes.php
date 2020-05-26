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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categories', '_controller' => 'App\\Controller\\AdminCategoriesController::index'], null, null, null, false, false, null]],
        '/admin/content' => [[['_route' => 'admin_content', '_controller' => 'App\\Controller\\AdminContentController::index'], null, null, null, false, false, null]],
        '/admin/order' => [[['_route' => 'admin_order', '_controller' => 'App\\Controller\\AdminOrderController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminProductController::index'], null, null, null, false, false, null]],
        '/admin/insert' => [[['_route' => 'add_new', '_controller' => 'App\\Controller\\AdminProductController::insert'], null, null, null, false, false, null]],
        '/seller' => [[['_route' => 'seller', '_controller' => 'App\\Controller\\AdminSellerProductController::index'], null, null, null, false, false, null]],
        '/seller/insert' => [[['_route' => 'seller_insert', '_controller' => 'App\\Controller\\AdminSellerProductController::insert'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|approve/([^/]++)(*:195)'
                    .'|cancel/([^/]++)(*:218)'
                    .'|delete/([^/]++)(*:241)'
                    .'|edit/([^/]++)(*:262)'
                .')'
                .'|/seller/(?'
                    .'|delete/([^/]++)(*:297)'
                    .'|edit/([^/]++)(*:318)'
                .')'
                .'|/ca(?'
                    .'|rt/(?'
                        .'|add/([^/]++)(*:351)'
                        .'|remvove/([^/]++)(*:375)'
                    .')'
                    .'|tegory/([^/]++)(*:399)'
                .')'
                .'|/product/details/([^/]++)(*:433)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'approve', '_controller' => 'App\\Controller\\AdminOrderController::approve'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'cancel', '_controller' => 'App\\Controller\\AdminOrderController::cancel'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\AdminProductController::delete'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'edit_product', '_controller' => 'App\\Controller\\AdminProductController::edit'], ['id'], null, null, false, true, null]],
        297 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\AdminSellerProductController::delete'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\AdminSellerProductController::edit'], ['id'], null, null, false, true, null]],
        351 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        375 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        399 => [[['_route' => 'categories', '_controller' => 'App\\Controller\\CategoriesController::index'], ['title'], null, null, false, true, null]],
        433 => [
            [['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
