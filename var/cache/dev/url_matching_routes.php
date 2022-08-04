<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/insertFromXls' => [[['_route' => 'insertFromXls', '_controller' => 'App\\Controller\\MusicController::insertFromXls'], null, null, null, false, false, null]],
        '/getAllBands' => [[['_route' => 'getAllBands', '_controller' => 'App\\Controller\\MusicController::getAllBands'], null, null, null, false, false, null]],
        '/updateBand' => [[['_route' => 'updateBand', '_controller' => 'App\\Controller\\MusicController::updateBand'], null, null, null, false, false, null]],
        '/deleteBand' => [[['_route' => 'deleteBand', '_controller' => 'App\\Controller\\MusicController::deleteBand'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/getBandById/([^/]++)(*:28)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:63)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'getBandById', '_controller' => 'App\\Controller\\MusicController::getBandById'], ['id'], null, null, false, true, null]],
        63 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
