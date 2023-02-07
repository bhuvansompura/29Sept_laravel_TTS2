<?php 
session_start();

// require_once("Model/model.php");
// echo "<pre>";
// print_r($_SERVER['PATH_INFO']);

class Controller{
    public function __construct() {
        // parent::__construct();
        ob_start();
        // echo "called controller";
        $baseURL="http://localhost/29SEP_LARAVEL_ttS/php/13MVC/";
        $this->baseURLdynamic="http://localhost/29SEP_LARAVEL_ttS/php/13MVC/admindashboard";
    
        if (isset($_SERVER['PATH_INFO'])) {
        
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("View/header.php");
                    include_once("View/homepage.php");
                    include_once("View/footer.php");
                    break;
                    case '/contact':
                        include_once("View/header.php");
                        echo "<h1>Contact us</h1>";
                        include_once("View/footer.php");
                        break;
                        case '/about':
                        include_once("View/header.php");
                        echo "<h1>about us</h1>";
                        include_once("View/footer.php");
                        break;
                        case '/login':
                         include_once("View/header.php");
                         include_once("View/loginpage.php");
                         include_once("View/footer.php");
                        //  if (isset($_REQUEST['login'])) {
                            
                        //  $Res = $this->login($_POST['username'],$_POST['password']);
                        //  if ($Res['Code'] == 1) {
                        //     $_SESSION['userData'] = $Res['Data'][0];
                        //     // echo "<pre>";
                        //     // print_r($Res['Data'][0]);
                        //     // echo "</pre>";      
                        //     if ($Res['Data'][0]->role_id == 0) {

                        //         header("location:admindashboard");
                        //     } else {
                        //         header("location:home");
                        //     }
                            
                        //  } else {
                        //     echo "<script>alert('invalid user crediantials')</script>";
                        //  }
                         
                        //  echo "<pre>";
                        //  print_r($Res);
                        //  echo "</pre>";
                        // }
                         break;
                         case '/registration':

                        include_once("View/header.php");
                        include_once("View/registration.php");
                        include_once("View/footer.php");

                        // if (isset($_REQUEST['register'])) {
                        //     array_pop($_REQUEST);
                        //     echo "<pre>";
                        //     print_r($_REQUEST);
                        //     echo "</pre>";
                        //   $Res = $this->insert("users",$_REQUEST);
                        // }
                        break;
                        case '/Services':
                            include_once("View/header.php");
                            echo "<h1>Services page</h1>";
                            include_once("View/footer.php");
                            break;
                            case '/apiexample':
                                include_once("View/header.php");
                                include_once("View/apicalling.php");
                                include_once("View/footer.php");
                                break;
                                
                            // case '/admindashboard':
                            //     include_once("View/admin/header.php");
                                // include_once("View/apicalling.php");
                                // include_once("View/footer.php");
                                // break;
                        
                            default:
                            
                            break;
                        }
                        
                    }else {
                        header("location:home");
                    }
                    ob_flush();
                }
            }
            
            $Controller = new Controller;
    
                    
                    
                        
?>       