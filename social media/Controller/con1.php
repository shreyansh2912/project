<!-- <?php

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

class controller
{
    public $url = "http://localhost/Tops_daily/project/social%20media%20main/social%20media/assets/";
public function __construct()
{
    
    if(isset($_SERVER['PATH_INFO']))
    {
        
        switch($_SERVER['PATH_INFO'])
            {
                
                // case "/register":
                //     require_once("view/header.php");
                //     require_once("view/register.php");
                //     require_once("view/footer.php");
                //     break;

                //    case"/home":
                //        echo "hi";
                //        require_once("view/header.php");
                //        require_once("view/home.php");
                //        require_once("view/footer.php");
                //        break;

                    case"/image":
                    require_once("view/header.php");
                    require_once("view/image.php");
                    require_once("view/footer.php");
                    break;
                    
                // case"/login":
                //     require_once("view/login.php");
                //     break;

                // case "/friend":   
                //     require_once("view/header.php");    
                //     require_once("view/friend.php");   
                //     require_once("view/footer.php");  
            }
        }
     else
        {
            echo "Inside else";
            header("location:home");
        }
   
    
}


}

$obj = new controller;
// $obj->index();

?> -->