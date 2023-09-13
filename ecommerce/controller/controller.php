<?php 

require_once ("model/model.php");
class controller extends model
{
    public $url = "http://localhost/Tops_daily/project/ashion-master/assets/";
    //baseurl for login or register form
    public $baseurl ="http://localhost/Tops_daily/project/ashion-master/login_folder/colorlib-regform-7/colorlib-regform-7/assets/";
    public function __construct() 
    {
        parent::__construct();
        if (isset($_SERVER['PATH_INFO'])) 
        {
            // echo "infide if";
            switch ($_SERVER['PATH_INFO']) 
            {
                case '/register':
                    if (isset($_REQUEST['signup']))
                    {
                        $data = $_REQUEST;
                        $this->register($data);
                        // print_r($_REQUEST);
                    }
                    require_once("view/register.php");
                    break;
                case '/login1':
                    $data =$_REQUEST;
                    $this->login($data);
                    print_r($_REQUEST);
                    require_once("view/login.php");
                    break;
                case '/home':
                    require_once("view/header.php");
                    require_once("view/home.php");
                    require_once("view/footer.php");
                    break;
                case '/blog-details':
                    require_once("view/header.php");
                    require_once("view/blog-details.php");
                    require_once("view/footer.php");
                    break;
                case '/blog':
                    require_once("view/header.php");
                    require_once("view/blog.php");
                    require_once("view/footer.php");
                    break;
                case '/checkout':
                    require_once("view/header.php");
                    require_once("view/checkout.php");
                    require_once("view/footer.php");
                    break;
                case '/contact':
                    require_once("view/header.php");
                    require_once("view/contact.php");
                    require_once("view/footer.php");
                    break;
                case '/product-details':
                    require_once("view/header.php");
                    require_once("view/product-details.php");
                    require_once("view/footer.php");
                    break;
                case '/shop-cart':
                    require_once("view/header.php");
                    require_once("view/shop-cart.php");
                    require_once("view/footer.php");
                    break;
                case '/shop':
                    require_once("view/header.php");
                    require_once("view/shop.php");
                    require_once("view/footer.php");
                    break;
                

               
            }




        }
        else 
        {
            echo "infide elase";
            header("location:home");
        }
    }
}


$obj = new controller;












?>