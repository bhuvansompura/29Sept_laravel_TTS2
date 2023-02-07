<?php     

// echo "<pre>";
// print_r($_SERVER["PATH_INFO"]);
class Controller{
    public function __construct() {
        
        $baseURL = "http://localhost/29SEP_LARAVEL_ttS/php/project01/";
        if(isset($_SERVER['PATH_INFO'])) {
            switch($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("View/header.php");
                    include_once("View/homepage.php");
                    include_once("View/footer.php");
                
                    break;
                    case '/contact':
                        include_once("View/header.php");
                        // echo "<h2>contact.php</h2>";
                        include_once("View/contact.php");
                        include_once("View/footer.php");
                    
                        break;
                        case '/Materials':
                            include_once("View/header.php");
                            // echo "<h2>Materials.php</h2>";
                            include_once("View/Materials.php");
                            include_once("View/footer.php");
                        
                            break;
                            case '/about':
                                include_once("View/header.php");
                                // echo "<h2>Contact us</h2>";
                                include_once("View/about.php");
                                include_once("View/footer.php");
                            
                                break;
                                case '/Current Affairs':
                                    include_once("View/header.php");
                                    // echo "<h2>Contact us</h2>";
                                    include_once("View/Current Affairs.php");
                                    include_once("View/footer.php");
                                    break;
                                       case '/login':
                                           include_once("View/header.php");
                                           // echo "<h2>Contact us</h2>";
                                           include_once("View/login.php");
                                           include_once("View/footer.php");
                                           break;
                                           
                                       case '/join us':
                                        include_once("View/header.php");
                                        // echo "<h2>Contact us</h2>";
                                        include_once("View/joiningpage.php");
                                        include_once("View/footer.php");
                                        break;
                                       
                                
                
                default:
                    
                    break;
                } 
        }else {
            header("location:home");
        }
    }
}

$Controller = new Controller;



?>