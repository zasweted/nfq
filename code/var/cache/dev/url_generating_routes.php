<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'home' => [[], ['_controller' => 'App\\Controller\\ArticleController::list'], [], [['text', '/']], [], [], []],
    'article_view' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/view/article']], [], [], []],
    'article_edit' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/edit/article']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
