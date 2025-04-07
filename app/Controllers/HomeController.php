<?php
// app/Controllers/HomeController.php
namespace App\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class HomeController {
    public function index() {
        $loader = new FilesystemLoader(__DIR__ . '/../Templates');
        $twig = new Environment($loader);

        echo $twig->render('home.html.twig');
    }
}
