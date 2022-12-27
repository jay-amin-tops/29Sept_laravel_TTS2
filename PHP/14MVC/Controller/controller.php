<?php
require_once("Model/model.php");
// echo "<pre>";
// print_r($_SERVER['PATH_INFO']);
class Controller extends Model{
    public function __construct() {
        parent::__construct();
        // echo "called controller";
        $BaseURL = "http://localhost/laravel/29Sept_laravel_TTS2/PHP/14MVC/";
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
                // $this->insert("users",array("username"=>"test","password"=>"123","gender"=>"Male"));
                // echo "<br>";
                // $this->insert("city",array("city_title"=>"abc","stateid"=>1));
                // echo "<br>";
                // $this->insert("state",array("state_title"=>"abc","countryid"=>2));
                // echo "<br>";
                // $this->insert("country",array("country_title"=>"abc"));
                // echo "<br>";
                // exit;
                include_once("Views/header.php");
                include_once("Views/registration.php");
                include_once("Views/footer.php");
                if (isset($_REQUEST['register'])) {
                    array_pop($_REQUEST);
                    echo "<pre>";
                    print_r($_REQUEST);
                    echo "</pre>";
                    $Res = $this->insert("users",$_REQUEST);
                    if ($Res['Code'] == 1) {
                        header("location:login");
                    }else{
                        echo "Error";   
                    }
                }
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
        }else{
            header("location:home");
        }
    }
}

$Controller = new Controller;
