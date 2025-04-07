<?php
// app/Core/Router.php
namespace App\Core;

class Router {
    public static function route() {
        $uri = $_SERVER['REQUEST_URI'];

        switch ($uri) {
            case '/':
            case '/home':
                $controller = new \App\Controllers\HomeController();
                $controller->index();
                break;

            case '/customers':
                $controller = new \App\Controllers\CustomerController();
                $controller->index();
                break;

            default:
                http_response_code(404);
                echo "Page non trouvée.";
                break;
        }
    }
}
