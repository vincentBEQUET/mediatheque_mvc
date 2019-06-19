<?php
use Bramus\Router\Router;

require __DIR__ . '/vendor/autoload.php';

$router = new Router;

$router->get('/hello', function() {
    echo "Hello world";
});

$router->get('/articles/{id}', function ($id) {
    echo "voici l'article" . $id;
});

$router->run();


