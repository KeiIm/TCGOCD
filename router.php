<?php

$request = $_SERVER['REDIRECT_URL'] ?? $_SERVER['REQUEST_URI'];

// dd($_SERVER);

switch ($request) {
    case '/TCGOCD' :
    case '/TCGOCD/' :
        require 'controllers/home.php'; // require __DIR__ . '/controllers/home.php';
        break;
    case '/TCGOCD/cards' :
        require 'controllers/cards.php';
        break;
    case '/TCGOCD/collections' :
        require 'controllers/collections.php';
        break;
    default:
        http_response_code(404);
        require 'views/404.php';
        break;
}