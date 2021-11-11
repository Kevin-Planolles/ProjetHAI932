<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/tournoi/newEvt/([0-9a-zA-Z ]+)(*:38)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:73)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'newevt', '_controller' => 'App\\Controller\\TournoiController::newevt'], ['nom'], null, null, false, true, null]],
        73 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
