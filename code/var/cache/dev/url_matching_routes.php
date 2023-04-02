<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ArticleController::list'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/view/article/([^/]++)(*:29)'
                .'|/edit/article/([^/]++)(*:58)'
                .'|/article/([^/]++)(*:82)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:117)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'article_view', '_controller' => 'App\\Controller\\ArticleController::view'], ['id'], ['GET' => 0], null, false, true, null]],
        58 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'article_update', '_controller' => 'App\\Controller\\ArticleController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        117 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
