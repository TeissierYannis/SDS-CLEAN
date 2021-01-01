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
        '/articles/create' => [[['_route' => 'article_create', '_controller' => 'App\\UserInterface\\Controller\\Article\\CreateController'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/articles' => [[['_route' => 'article_listing', '_controller' => 'App\\UserInterface\\Controller\\Article\\ListingController'], null, ['GET' => 0], null, false, false, null]],
        '/categories/create' => [[['_route' => 'category_create', '_controller' => 'App\\UserInterface\\Controller\\Category\\CreateController'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categories' => [[['_route' => 'category_listing', '_controller' => 'App\\UserInterface\\Controller\\Category\\ListingController'], null, ['GET' => 0], null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\UserInterface\\Controller\\RegistrationController'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\UserInterface\\Controller\\LoginController'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'ask_password_reset', '_controller' => 'App\\UserInterface\\Controller\\Security\\AskPasswordResetController'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\UserInterface\\Controller\\LogoutController'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/role/create' => [[['_route' => 'role_create', '_controller' => 'App\\UserInterface\\Controller\\Security\\Role\\CreateController'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/users' => [[['_route' => 'user_listing', '_controller' => 'App\\UserInterface\\Controller\\Security\\User\\ListingController'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', 'template' => 'home.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/articles/([^/]++)/(?'
                    .'|update(*:197)'
                    .'|remove(*:211)'
                .')'
                .'|/categories/([^/]++)/(?'
                    .'|update(*:250)'
                    .'|remove(*:264)'
                .')'
                .'|/handle\\-reset\\-password/([^/]++)/([^/]++)(*:315)'
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
        197 => [[['_route' => 'article_update', '_controller' => 'App\\UserInterface\\Controller\\Article\\UpdateController'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'article_remove', '_controller' => 'App\\UserInterface\\Controller\\Article\\RemoveController'], ['id'], ['GET' => 0], null, false, false, null]],
        250 => [[['_route' => 'category_update', '_controller' => 'App\\UserInterface\\Controller\\Category\\UpdateController'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'category_remove', '_controller' => 'App\\UserInterface\\Controller\\Category\\RemoveController'], ['id'], ['GET' => 0], null, false, false, null]],
        315 => [
            [['_route' => 'recover_password', '_controller' => 'App\\UserInterface\\Controller\\Security\\RecoverPasswordController'], ['email', 'token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
