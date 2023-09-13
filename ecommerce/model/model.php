<?php

class model
{
    public $connection;
    public function __construct() 
    {
        try
        {
            $this->connection = new mysqli("localhost","root","","ecommerce");
            echo "pass";
        }
        catch(\Throwable $th)
        {
               echo "fail";
        }  
    }
    public function register($data)
    {
        
        array_pop($data);
        array_pop($data);
        array_pop($data);
        // print_r($data);
        print_r($_REQUEST);

        $keysdata = array_keys($data);
        $valuedata = array_values($data);

        $keysdata = implode(",",$keysdata);
        $valuedata = implode("','",$valuedata);

          $sql = "INSERT INTO register ($keysdata) VALUES ('$valuedata')";
          print_r($sql);
          
          $this->connection->query($sql);
          header("location:login1 ");
    }

    public function login($data)
    {
        if (isset($data['singin']))
        {
            echo "<pre>";
            print_r($_REQUEST);
            echo "</pre>";

             $sql = "SELECT*FROM register WHERE( email= '$data[username]' OR username ='$data[username]') AND password ='$data[password]';";
            // print_r($sql);
             $sqlx= $this->connection->query($sql);

             if ($sqlx->num_rows > 0)
             {
                $userdata = $sqlx->fetch_object();
                if($userdata->role_as==1)
                {
                    header("location:admin_dashboard");
                }
                else
                {
                    header("location:home");
                    
                }

            }
            else 
            {
                echo "<script>alert('Invalid Username or Password')</script>";
            }
        }
    }    



}

?>
