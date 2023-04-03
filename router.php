<?php

$request = $_SERVER['REDIRECT_URL'] ?? $_SERVER['REQUEST_URI'];

// dd($_SERVER);

switch ($request) {
    case '/TCGOCD' :
    case '/TCGOCD/' :
        require 'controllers/home.php';
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

// require __DIR__ . '/controlelrs/home.php';

// original $request:
// ["REQUEST_URI"]=>
// string(61) "/TCGOCD/connect?name=a&qty=2&collection=a&submit=Submit+Query"

// ["REDIRECT_URL"]=>
// string(15) "/TCGOCD/connect"

// ["REDIRECT_QUERY_STRING"] = ["QUERY_STRING"] =>
// string(45) "name=a&qty=2&collection=a&submit=Submit+Query"

// ["REQUEST_METHOD"]=>
// string(3) "GET"