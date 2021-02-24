<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/book' => [[['_route' => 'add_book', '_controller' => 'App\\Controller\\BookController::add'], null, ['POST' => 0], null, false, false, null]],
        '/books' => [[['_route' => 'get_all_book', '_controller' => 'App\\Controller\\BookController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/contact' => [[['_route' => 'add_Contact', '_controller' => 'App\\Controller\\ContactController::add'], null, ['POST' => 0], null, false, false, null]],
        '/contacts' => [[['_route' => 'get_all_Contact', '_controller' => 'App\\Controller\\ContactController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/Genre' => [[['_route' => 'add_Genre', '_controller' => 'App\\Controller\\GenreController::add'], null, ['POST' => 0], null, false, false, null]],
        '/genre' => [[['_route' => 'get_all_genre', '_controller' => 'App\\Controller\\GenreController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['POST' => 0], null, false, false, null]],
        '/users' => [
            [['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::add'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'get_all_user', '_controller' => 'App\\Controller\\UserController::getAll'], null, ['GET' => 0], null, true, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/book/(?'
                    .'|([^/]++)(?'
                        .'|(*:62)'
                    .')'
                    .'|new(*:73)'
                .')'
                .'|/find(?'
                    .'|Books/([^/]++)(*:103)'
                    .'|Genres/([^/]++)(*:126)'
                    .'|bookRead/([^/]++)(*:151)'
                .')'
                .'|/contact/([^/]++)(?'
                    .'|(*:180)'
                .')'
                .'|/genre/([^/]++)(?'
                    .'|(*:207)'
                .')'
                .'|/users/([^/]++)(?'
                    .'|(*:234)'
                .')'
                .'|/addBookByRead/([^/]++)(*:266)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        62 => [
            [['_route' => 'get_one_book', '_controller' => 'App\\Controller\\BookController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_book', '_controller' => 'App\\Controller\\BookController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_book', '_controller' => 'App\\Controller\\BookController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        73 => [[['_route' => 'add_book_new', '_controller' => 'App\\Controller\\BookController::newAction'], [], ['POST' => 0], null, false, false, null]],
        103 => [[['_route' => 'get_all_findBooks', '_controller' => 'App\\Controller\\BookController::findBySearch'], ['word'], ['GET' => 0], null, false, true, null]],
        126 => [[['_route' => 'get_all_findGenres', '_controller' => 'App\\Controller\\GenreController::findByGenre'], ['TypeGenre'], ['GET' => 0], null, false, true, null]],
        151 => [[['_route' => 'get_all_findbookRead', '_controller' => 'App\\Controller\\UserController::findByRead'], ['BookRead'], ['GET' => 0], null, false, true, null]],
        180 => [
            [['_route' => 'get_one_Contact', '_controller' => 'App\\Controller\\ContactController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_Contact', '_controller' => 'App\\Controller\\ContactController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_Contact', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        207 => [
            [['_route' => 'get_one_genre', '_controller' => 'App\\Controller\\GenreController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_genre', '_controller' => 'App\\Controller\\GenreController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_genre', '_controller' => 'App\\Controller\\GenreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        234 => [
            [['_route' => 'get_one_user', '_controller' => 'App\\Controller\\UserController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_user', '_controller' => 'App\\Controller\\UserController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        266 => [
            [['_route' => 'get_all_addBookRead', '_controller' => 'App\\Controller\\UserController::AddBookRead'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
