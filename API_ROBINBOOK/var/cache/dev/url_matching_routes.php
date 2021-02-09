<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/book' => [
            [['_route' => 'add_book', '_controller' => 'App\\Controller\\BookController::add'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'get_all_book', '_controller' => 'App\\Controller\\BookController::getAll'], null, ['GET' => 0], null, false, false, null],
        ],
        '/Genre' => [[['_route' => 'add_Genre', '_controller' => 'App\\Controller\\GenreController::add'], null, ['POST' => 0], null, false, false, null]],
        '/genre' => [[['_route' => 'get_all_genre', '_controller' => 'App\\Controller\\GenreController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/users' => [
            [['_route' => 'add_users', '_controller' => 'App\\Controller\\UsersController::add'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'get_all_users', '_controller' => 'App\\Controller\\UsersController::getAll'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'users', '_controller' => 'App\\Controller\\UsersController::index'], null, null, null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/book/([^/]++)(?'
                    .'|(*:59)'
                .')'
                .'|/genre/([^/]++)(?'
                    .'|(*:85)'
                .')'
                .'|/users/([^/]++)(?'
                    .'|(*:111)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        59 => [
            [['_route' => 'get_one_book', '_controller' => 'App\\Controller\\BookController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_book', '_controller' => 'App\\Controller\\BookController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_book', '_controller' => 'App\\Controller\\BookController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        85 => [
            [['_route' => 'get_one_genre', '_controller' => 'App\\Controller\\GenreController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_genre', '_controller' => 'App\\Controller\\GenreController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_genre', '_controller' => 'App\\Controller\\GenreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        111 => [
            [['_route' => 'get_one_users', '_controller' => 'App\\Controller\\UsersController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_users', '_controller' => 'App\\Controller\\UsersController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_users', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
