<?php
// app/Models/Customer.php
namespace App\Models;

use App\Config\Database;
use PDO;

class Customer {
    public static function allWithEmployee() {
        $db = Database::getInstance();

        $sql = "
            SELECT c.customerName, c.city, e.firstName, e.lastName
            FROM customers c
            LEFT JOIN employees e ON c.salesRepEmployeeNumber = e.employeeNumber
            LIMIT 20; ";

        $stmt = $db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
