<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'insertFromXls' => [[], ['_controller' => 'App\\Controller\\MusicController::insertFromXls'], [], [['text', '/insertFromXls']], [], [], []],
    'getAllBands' => [[], ['_controller' => 'App\\Controller\\MusicController::getAllBands'], [], [['text', '/getAllBands']], [], [], []],
    'getBandById' => [['id'], ['_controller' => 'App\\Controller\\MusicController::getBandById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/getBandById']], [], [], []],
    'updateBand' => [[], ['_controller' => 'App\\Controller\\MusicController::updateBand'], [], [['text', '/updateBand']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
