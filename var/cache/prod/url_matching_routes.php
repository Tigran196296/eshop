<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/admin/(?'
                    .'|approve/([^/]++)(*:33)'
                    .'|cancel/([^/]++)(*:55)'
                    .'|delete/([^/]++)(*:77)'
                    .'|edit/([^/]++)(*:97)'
                .')'
                .'|/seller/(?'
                    .'|delete/([^/]++)(*:131)'
                    .'|edit/([^/]++)(*:152)'
                .')'
                .'|/ca(?'
                    .'|rt/(?'
                        .'|add/([^/]++)(*:185)'
                        .'|remvove/([^/]++)(*:209)'
                    .')'
                    .'|tegory/([^/]++)(*:233)'
                .')'
                .'|/product/details/([^/]++)(*:267)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'approve', '_controller' => 'App\\Controller\\AdminOrderController::approve'], ['id'], null, null, false, true, null]],
        55 => [[['_route' => 'cancel', '_controller' => 'App\\Controller\\AdminOrderController::cancel'], ['id'], null, null, false, true, null]],
        77 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\AdminProductController::delete'], ['id'], null, null, false, true, null]],
        97 => [[['_route' => 'edit_product', '_controller' => 'App\\Controller\\AdminProductController::edit'], ['id'], null, null, false, true, null]],
        131 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\AdminSellerProductController::delete'], ['id'], null, null, false, true, null]],
        152 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\AdminSellerProductController::edit'], ['id'], null, null, false, true, null]],
        185 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        209 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        233 => [[['_route' => 'categories', '_controller' => 'App\\Controller\\CategoriesController::index'], ['title'], null, null, false, true, null]],
        267 => [
            [['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
