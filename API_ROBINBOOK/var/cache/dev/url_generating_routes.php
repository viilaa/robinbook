<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'add_book' => [[], ['_controller' => 'App\\Controller\\BookController::add'], [], [['text', '/book']], [], []],
    'get_one_book' => [['id'], ['_controller' => 'App\\Controller\\BookController::get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book']], [], []],
    'get_all_book' => [[], ['_controller' => 'App\\Controller\\BookController::getAll'], [], [['text', '/books']], [], []],
    'update_book' => [['id'], ['_controller' => 'App\\Controller\\BookController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book']], [], []],
    'delete_book' => [['id'], ['_controller' => 'App\\Controller\\BookController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book']], [], []],
    'add_new_pdf' => [[], ['_controller' => 'App\\Controller\\BookController::newAction'], [], [['text', '/book/new']], [], []],
    'get_all_findBooks' => [['word'], ['_controller' => 'App\\Controller\\BookController::findBySearch'], [], [['variable', '/', '[^/]++', 'word', true], ['text', '/findBooks']], [], []],
    'add_Contact' => [[], ['_controller' => 'App\\Controller\\ContactController::add'], [], [['text', '/contact']], [], []],
    'get_one_Contact' => [['id'], ['_controller' => 'App\\Controller\\ContactController::get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contact']], [], []],
    'get_all_Contact' => [[], ['_controller' => 'App\\Controller\\ContactController::getAll'], [], [['text', '/contacts/']], [], []],
    'update_Contact' => [['id'], ['_controller' => 'App\\Controller\\ContactController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contact']], [], []],
    'delete_Contact' => [['id'], ['_controller' => 'App\\Controller\\ContactController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contact']], [], []],
    'add_Genre' => [[], ['_controller' => 'App\\Controller\\GenreController::add'], [], [['text', '/Genre']], [], []],
    'get_one_genre' => [['id'], ['_controller' => 'App\\Controller\\GenreController::get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/genre']], [], []],
    'get_all_genre' => [[], ['_controller' => 'App\\Controller\\GenreController::getAll'], [], [['text', '/genre']], [], []],
    'update_genre' => [['id'], ['_controller' => 'App\\Controller\\GenreController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/genre']], [], []],
    'delete_genre' => [['id'], ['_controller' => 'App\\Controller\\GenreController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/genre']], [], []],
    'get_all_findGenres' => [['TypeGenre'], ['_controller' => 'App\\Controller\\GenreController::findByGenre'], [], [['variable', '/', '[^/]++', 'TypeGenre', true], ['text', '/findGenres']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'add_users' => [[], ['_controller' => 'App\\Controller\\UsersController::add'], [], [['text', '/users']], [], []],
    'get_one_users' => [['id'], ['_controller' => 'App\\Controller\\UsersController::get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], []],
    'get_all_users' => [[], ['_controller' => 'App\\Controller\\UsersController::getAll'], [], [['text', '/users/']], [], []],
    'update_users' => [['id'], ['_controller' => 'App\\Controller\\UsersController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], []],
    'delete_users' => [['id'], ['_controller' => 'App\\Controller\\UsersController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], []],
    'get_all_findbookRead' => [['BookRead'], ['_controller' => 'App\\Controller\\UsersController::findByRead'], [], [['variable', '/', '[^/]++', 'BookRead', true], ['text', '/findbookRead']], [], []],
];
