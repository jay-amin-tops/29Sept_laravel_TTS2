<?php

// echo "<pre>";
// print_r($_SERVER['PATH_INFO']);
class Controller{
    public function __construct() {
        $BaseURL = "http://localhost/laravel/29Sept_laravel_TTS2/PHP/14MVC/";
        switch ($_SERVER['PATH_INFO']) {
            case '/home':
                include_once("Views/header.php");
                include_once("Views/homepage.php");
                include_once("Views/footer.php");
                
                break;
            case '/contact':
                include_once("Views/header.php");
                echo "<h1>Contact us</h1>";
                include_once("Views/footer.php");
                break;
            case '/about':
                include_once("Views/header.php");
                echo "<h1>about us</h1>";
                include_once("Views/footer.php");
                break;
            case '/services':
                include_once("Views/header.php");
                echo "<h1>services page data</h1>";
                include_once("Views/footer.php");
                break;
            
            default:
                # code...
                break;
        }
    }
}

$Controller = new Controller;

?>