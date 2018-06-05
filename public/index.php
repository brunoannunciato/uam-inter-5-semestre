<?php

require_once 'vendor/autoload.php';

use Unify\Router;

$router = new Router();

$router->on('GET', 'path/to/action', function () {
    return 'this is a hero return';
});

$router->post('/(\w+)/(\w+)/(\w+)', function ($module, $class, $method) {
    var_dump('here custom');
    var_dump([$module, $class, $method]);
});

$router->get('/view/(\w+)', function ($view) {
    ob_start();
    require dirname(__DIR__) . "/src/View/{$view}.php";
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
});

$router->get('/webroot/(.*)', function ($uri) {
    ob_start();
    require dirname(__DIR__) . "/public/webroot/{$uri}";
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
});

$router->get('/(.*)', function ($uri) {
    var_dump('here final');
    var_dump($uri);
});

echo $router($router->method(), $router->uri());
