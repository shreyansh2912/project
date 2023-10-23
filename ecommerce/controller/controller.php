<?php 

require_once ("model/model.php");
class controller extends model
{
    public $url = "http://localhost/Tops_daily/project/ashion-master/ecommerce/assets/";
    public $adminurl = "http://localhost/Tops_daily/project/ashion-master/ecommerce/assets/admin/";
    //baseurl for login or register form
    public $baseurl ="http://localhost/Tops_daily/project/ashion-master/ecommerce/login_folder/colorlib-regform-7/colorlib-regform-7/assets/";
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
                    // print_r($_REQUEST);
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

                case '/admin_dashboard':
                    require_once("view/admin/adminheader.php");
                    require_once("view/admin/admin_dashboard.php");
                    require_once("view/admin/adminfooter.php");
                    break;

                case '/admin_add_product':
                    if(isset($_REQUEST['add_product']))
                    {
                        echo "<pre>";
                        // print_r($_REQUEST);
                        // print_r($_FILES);
                        echo "</pre>";
                        if($_FILES['image']['error'] == UPLOAD_ERR_OK  )
                        {
                        $image = "uploads/products/".time().$_FILES['image']["name"];
                        move_uploaded_file($_FILES['image']['tmp_name'],$image);
                        }
                        else
                         {
                            $image = $_REQUEST["image"];
                         }

                        $data = array(
                            "name" => $_REQUEST['name'],
                            "price" => $_REQUEST['price'],
                            "discription" => $_REQUEST['discription'],
                            "quantity" => $_REQUEST['quantity'],
                            "image" => $image
                        );
                        $this->insert("product",$data);

                        // exit();
                    }
                    require_once("view/admin/adminheader.php");
                    require_once("view/admin/addproduct.php");
                    require_once("view/admin/adminfooter.php");
                    break;
                  
                case '/admin_product':
                    // print_r($_REQUEST);  
                    $fetch = $this->select('product');
                    require_once("view/admin/adminheader.php");
                    require_once("view/admin/adminproduct.php");
                    // require_once("view/admin/adminfooter.php");
                     break;

                case '/alluser':
                     $fetch = $this->select('register');
                     if(isset($_REQUEST['delete_btn']))
                     {
                        $this->delete("register","$_REQUEST[delete_btn]");
                     }
                      require_once("view/admin/adminheader.php");     
                      require_once("view/admin/alluser.php");     
                    //require_once("view/admin/adminfooter.php");  
                      break;

                case '/admin_update':
                    if(isset($_REQUEST['update_btn']))
                    {
                        // print_r($_REQUEST);
                        echo "<pre>";
                        // print_r($_FILES);
                        $response = $this->selectwhere("register",$_REQUEST["update_btn"]);
                        // print_r($response);
                        echo "</pre>";
                        require_once("view/admin/adminheader.php");     
                        require_once("view/admin/update.php");     
                        require_once("view/admin/adminfooter.php");      
                    }
                    else if(isset($_REQUEST["update"]))
                    {
                       
                        if($_FILES['image']['error'] == UPLOAD_ERR_OK  )
                        {
                            $image = "uploads/".time().$_FILES['image']["name"];
                            move_uploaded_file($_FILES['image']['tmp_name'],$image);
                        }
                        else
                        {
                           $image = $_REQUEST["image"];
                        }

                        // exit();
                        $data = array(
                            "name"=>$_REQUEST["name"],
                            "email"=>$_REQUEST["email"],
                            "password"=>$_REQUEST["password"],
                            "username"=>$_REQUEST["username"],
                            "image" => $image 
                        );
                        $response =$this->update("register",$data ,$_REQUEST["update"]);
                        // echo $response;
                        header("location:admin_update");    
                    }
                    else
                    {
                        header("location:alluser");
                    }
                    break;
                
                case '/update_product':
                    if (isset($_REQUEST['update_btn']))
                    {
                        
                       $response = $this->selectwhere("product",$_REQUEST["update_btn"]) ;
                       echo "<pre>";
                       print_r($_REQUEST["update_btn"]);
                    //    print_r($response);
                    //    print_r($_FILES);
                       echo "</pre>";
                       require_once("view/admin/adminheader.php");     
                       require_once("view/admin/update_product.php");     
                       require_once("view/admin/adminfooter.php");
                    }
                    else if(isset($_REQUEST['update']))
                    {  
                         
                        if($_FILES['image']['error'] == UPLOAD_ERR_OK  )
                        {
                            $image = "uploads/products".time().$_FILES['image']["name"];
                            move_uploaded_file($_FILES['image']['tmp_name'],$image);
                        }
                        else
                        {
                           $image = $_REQUEST["image"];
                        }

                        // exit();
                        $data = array(
                            "name" => $_REQUEST['name'],
                            "price" => $_REQUEST['price'],
                            "discription" => $_REQUEST['discription'],
                            "quantity" => $_REQUEST['quantity'],
                            "image" => $image,
                        );
                        echo "<pre>";
                        print_r($_REQUEST);
                        print_r($_REQUEST["update"]);
                        echo "</pre>";
                        $response =$this->update("product",$data ,$_REQUEST["update"]);
                        // header("location:update_product"); 
                    }
                    else
                    {
                        header("location:admin_product");
                    }
                    break;
               
            }




        }
        else 
        {
            echo "inside elase";
            header("location:home");
        }
    }
}


$obj = new controller;












?>