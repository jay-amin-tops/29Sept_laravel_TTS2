<?php
session_start();
require_once("Model/model.php");
// echo "<pre>";
// print_r($_SERVER['PATH_INFO']);
class Controller extends Model{
    public function __construct() {
        parent::__construct();
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    echo "API Example";
                break;
                case '/allusers':
                    $Res = $this->select("users");
                    // echo "<pre>";
                    // print_r($Res);
                    echo json_encode($Res);
                    break;
            case '/login':
                include_once("Views/header.php");
                include_once("Views/loginpage.php");
                include_once("Views/footer.php");
                if (isset($_REQUEST['login'])) {
                    $Res = $this->login($_POST['username'],$_POST['password']);
                    if ($Res['Code'] == 1) {
                        $_SESSION['UserData'] = $Res['Data'][0];
                        if ($Res['Data'][0]->role_id == 1) {
                            header("location:admindashboard");
                        } else {
                            header("location:home");
                        }
                         
                    } else {
                        echo "<script>alert('invalid user crediantials')</script>";
                    }
                    
                    echo "<pre>";
                    print_r($Res);
                    
                    echo "</pre>";
                }
            break;
            case '/registration':
                $data = json_decode(file_get_contents('php://input'), true);
                if ($data['username'] != "" && $data['password'] !="") {
                    $Res = $this->insert("users",$data);
                    echo json_encode($Res);
                }else{
                    echo "User Name and Password is required";
                }
            break;
            case '/services':
                include_once("Views/header.php");
                echo "<h1>services page data</h1>";
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
