<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'newevt' => [[], ['_controller' => 'App\\Controller\\TournoiController::newevt'], [], [['text', '/tournoi/newEvt/{nom<[0-9a-zA-Z ]+>']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];
