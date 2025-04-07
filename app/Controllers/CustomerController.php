<?php
// app/Controllers/CustomerController.php
namespace App\Controllers;

use App\Models\Customer;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class CustomerController {
    public function index() {
        $customers = Customer::allWithEmployee();

        $loader = new FilesystemLoader(__DIR__ . '/../Templates');
        $twig = new Environment($loader);

        echo $twig->render('customers.html.twig', ['customers' => $customers]);
    }
}
