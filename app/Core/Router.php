<?php
// app/Core/Router.php
namespace App\Core;

class Router {
    public static function route() {
        // Route très simple
        $controllerName = 'App\\Controllers\\CustomerController';
        $method = 'index';

        $controller = new $controllerName();
        call_user_func([$controller, $method]);
    }
}
