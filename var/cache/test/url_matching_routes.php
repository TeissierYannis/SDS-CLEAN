<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/articles/([^/]++)/(?'
                    .'|update(*:35)'
                    .'|remove(*:48)'
                .')'
                .'|/categories/([^/]++)/(?'
                    .'|update(*:86)'
                    .'|remove(*:99)'
                .')'
                .'|/handle\\-reset\\-password/([^/]++)/([^/]++)(*:149)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'article_update', '_controller' => 'App\\UserInterface\\Controller\\Article\\UpdateController'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        48 => [[['_route' => 'article_remove', '_controller' => 'App\\UserInterface\\Controller\\Article\\RemoveController'], ['id'], ['GET' => 0], null, false, false, null]],
        86 => [[['_route' => 'category_update', '_controller' => 'App\\UserInterface\\Controller\\Category\\UpdateController'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        99 => [[['_route' => 'category_remove', '_controller' => 'App\\UserInterface\\Controller\\Category\\RemoveController'], ['id'], ['GET' => 0], null, false, false, null]],
        149 => [
            [['_route' => 'recover_password', '_controller' => 'App\\UserInterface\\Controller\\Security\\RecoverPasswordController'], ['email', 'token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
