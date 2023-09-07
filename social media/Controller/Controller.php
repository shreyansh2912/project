<?php

require_once("model/model.php");

class controller extends model 
{
    public $url = "http://localhost/Tops_daily/project/social%20media%20main/social%20media/assets/";
    public $baseurl = "http://localhost/Tops_daily/project/social%20media%20main/social%20media/admin/";

public function __construct()
{
    parent::__construct();
       
        if(isset($_SERVER['PATH_INFO']))
        {
            switch($_SERVER['PATH_INFO'])
            {
                    case "/home":
                        require_once("view/header.php");
                        require_once("view/home.php");
                        require_once("view/footer.php");
                        break;
                    
                    case"/image":
                        require_once("view/header.php");
                        require_once("view/image.php");
                        require_once("view/footer.php");
                        break;
                        
                    case"/login":
                        $data =$_REQUEST;
                        $this->login($data);
                        print_r($_REQUEST);
                        require_once("view/login.php");
                        break;
    
                    case "/friend":   
                        require_once("view/header.php");    
                        require_once("view/friend.php");   
                        require_once("view/footer.php"); 
                        
                    case "/register":

                        if(isset($_REQUEST['register']))
                         {
                            $data = $_REQUEST;
                            $this->register($data);
                            // echo "<pre>";
                            // print_r($_REQUEST);
                            // echo "</pre>";
                         }
                         require_once("view/header.php");
                         require_once("view/register.php");
                         require_once("view/footer.php");
                         break;

                     case "/contact-us": 
                        require_once("view/header.php");
                        require_once("view/Contact-us.php");
                        require_once("view/footer.php");
                        break;

                     case "/edit-profile-basic": 
                        require_once("view/header.php");
                        require_once("view/profile-basic.php");
                        require_once("view/footer.php");
                        break;

                     case "/edit-profile-interest":
                        require_once("view/header.php");
                        require_once("view/profile-interest.php");
                        require_once("view/footer.php");
                        break;

                     case "/edit-profile-password":
                        require_once("view/header.php");
                        require_once("view/profile-password.php");
                        require_once("view/footer.php");
                        break;

                     case "/edit-profile-work-edu":   
                        require_once("view/header.php");
                        require_once("view/profile-work-edu.php");
                        require_once("view/footer.php");
                        break;

                     case "/edit-profile-settings":
                        require_once("view/header.php");
                        require_once("view/profile-setting.php");
                        require_once("view/footer.php");
                        break; 

                     case "/help":
                        require_once("view/header.php");
                        require_once("view/help.php");
                        require_once("view/footer.php");    
                        break; 

                     case "/message":
                        require_once("view/header.php");
                        require_once("view/message.php");
                        require_once("view/footer.php");
                        break; 

                     case "/people-nearby":
                        require_once("view/header.php");
                        require_once("view/people-nearby.php");
                        require_once("view/footer.php");
                        break;

                     case "/video":
                        require_once("view/header.php");
                        require_once("view/video.php");
                        require_once("view/footer.php");
                        break; 

                     case "/about":
                        require_once("view/header.php");
                        require_once("view/about.php");
                        require_once("view/footer.php");
                        break; 

                     case "/album":
                        require_once("view/header.php");
                        require_once("view/album.php");
                        require_once("view/footer.php");
                        break;

                     case "/friends":
                        require_once("view/header.php");
                        require_once("view/friends.php");
                        require_once("view/footer.php");
                        break; 

                     case "/timeline":
                        require_once("view/header.php");
                        require_once("view/timeline.php");
                        require_once("view/footer.php");
                        break;

                     case "/admin_dashboard":
                        require_once("view/admin_header.php"); 
                        require_once("view/admin_dashboard.php");
                        require_once("view/admin_footer.php"); 
                        break; 
                        
                     case "/alluser":

                       $fetch = $this->select("register");
                       if(isset($_REQUEST['delete_btn']))
                       {
                           $this->delete("register","$_REQUEST[delete_btn]");
                       }

                        require_once("view/admin_header.php");
                        require_once("view/alluser.php"); 
                        // require_once("view/admin_footer.php"); 
                        break;
                        
                     case "/admin_update":   

                        // if(isset($_REQUEST['update_btn']))
                        {
                            echo "<pre>";
                            print_r($_REQUEST);
                            print_r($_FILES);
                           //  $response = $this->update("register", $_REQUEST["update"]);
                           // $response = $this->update("register", $_REQUEST["update"] , $data); 
                           //  print_r($response);
                            echo "</pre>";
                            // exit;
                            require_once("view/admin_header.php"); 
                            require_once("view/admin_update.php");
                           //  require_once("view/admin_footer.php");    
                        }


                        
                        break;
                     
                     // default : 
                     //       require_once("view/header.php");
                     //       require_once("view/404.php");
                     //       require_once("view/footer.php");
                     //       break;   
                        
                     }  
                  }
        
        else
        {
            
            echo "Inside else";
            header("location:home");
        }
   
    
}


}
ob_flush();

$obj = new controller;
// $obj->index();

?>