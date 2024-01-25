<?php 
namespace app\core;

class Route {
    public static function handleRequest($action) {
        // Xử lý các yêu cầu tương ứng với action
        switch($action) {
            case 'home':
                // Gọi đến class Home và method tương ứng
                $home = new \app\Home();
                $home->index();
                break;
            case 'invoices':
                // Gọi đến class Invoices và method tương ứng
                $invoices = new \app\Invoices();
                $invoices->index();
                break;
            default:
                // Xử lý khi action không được xác định
                echo "404 Not Found";
        }
    }
}
?>