<?php
session_start();
// require_once("Model/model.php");
// echo "<pre>";
// print_r($_SERVER['PATH_INFO']);
class Controller{
    public $BaseURLDynamic = "";
    public function __construct() {
        ob_start();
        // echo "called controller";
        // echo "<pre>";
        // print_r($_SERVER);
        $BaseURL = "http://localhost/laravel/29Sept_laravel_TTS2/PHP/14MVC/";
        // print_r($_SERVER['REQUEST_URI']);
        // echo "<br>";
        $uriarray = explode("/",$_SERVER['REQUEST_URI']);
        // print_r($uriarray);
        $this->BaseURLDynamic = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/".$uriarray[1]."/".$uriarray[2]."/".$uriarray[3]."/".$uriarray[4]."/assets/";
        // echo "</pre>";
        // exit;
        if (isset($_SERVER['PATH_INFO'])) {
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
            case '/login':
                include_once("Views/header.php");
                include_once("Views/loginpage.php");
                include_once("Views/footer.php");
            break;
            case '/registration':
                include_once("Views/header.php");
                include_once("Views/registration.php");
                include_once("Views/footer.php");
                // if (isset($_REQUEST['register'])) {
                //     array_pop($_REQUEST);
                //     echo "<pre>";
                //     print_r($_REQUEST);
                //     echo "</pre>";
                //     $Res = $this->insert("users",$_REQUEST);
                //     if ($Res['Code'] == 1) {
                //         header("location:login");
                //     }else{
                //         echo "Error";   
                //     }
                // }
            break;
            case '/services':
                include_once("Views/header.php");
                echo "<h1>services page data</h1>";
                include_once("Views/footer.php");
                break;
            case '/apiexample':
                include_once("Views/header.php");
                include_once("Views/apicalling.php");
                include_once("Views/footer.php");
                break;
            case '/admindashboard':
                include_once("Views/admin/adminheader.php");
                include_once("Views/admin/dashboard.php");
                // echo "<h1>services page data</h1>";
                include_once("Views/admin/adminfooter.php");
                break;
                
                default:
                # code...
                break;
            }
        }else{
            header("location:home");
        }
        ob_flush();
    }
}

$Controller = new Controller;
