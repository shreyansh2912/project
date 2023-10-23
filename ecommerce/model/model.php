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

    public function insert($tbl,$data)
    {
        // array_pop($data);
        
        $keysdata = array_keys($data);
        $valuesdata = array_values($data);

        $keysdata = implode(",",$keysdata);
        $valuesdata = implode("','",$valuesdata);

        // echo "<pre>";
        // print_r($keysdata);
        echo "<br>";
        // print_r($valuesdata);
        echo "<br>";


            $sql = "INSERT INTO $tbl ($keysdata) VALUES ('$valuesdata')";
            // echo $sql;
            // $sql2 = "INSERT INTO users (name,username,email,password) VALUES ('$data[name]','$data[username]','$data[email]','$data[password]')";
            // echo $sql2;
            $this->connection->query($sql);
            header("location:admin_product");
        // print_r(array_keys($data));
        // print_r(array_values($data));
        // print_r($data);
        // echo "</pre>";

    } 
    // public function Add_product($data)
    // {
        
    //     array_pop($data);   
    //     // print_r($data);
    //     $keydata = array_keys($data);
    //     $valuedata = array_values($data);

    //     $keysdata = implode(",",$keydata);
    //     $valuedata = implode("','",$valuedata);
        
    //     $sql = "INSERT INTO product ($keysdata) VALUES ('$valuedata')";
    //     // print_r($_FILES);
    //     print_r($sql);
         
    //     // $this->connection->query($sql);


    //     // header("location:admin_product");
    // }
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

    public function delete($table,$id)
    {
        $SQL = "DELETE FROM $table WHERE Id = $id ";
        
        // echo $SQL;
        // echo $table.$id;
        $this->connection->query($SQL);

        header("location:$_SERVER[PHP_SELF]");
        
    }
    public function login($data)
    {
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        if (isset($data['signin']))
        {

             $sql = "SELECT*FROM register WHERE( email= '$data[your_name]' OR username ='$data[your_name]') AND password ='$data[your_pass]';";
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
    
    public function select($info)
    {
        $sql = "SELECT * FROM $info";
        $sqlex = $this->connection->query($sql);

        if($sqlex->num_rows>0)
        {
              while($data = $sqlex->fetch_object())
              {
                $datas[] = $data;
              }
              return $datas;
        }
    }

    public function selectwhere($tbl,$id)
    {
        
        $SQL = "SELECT * FROM $tbl WHERE id = $id";
        print_r($SQL);
        // echo $SQL;
        $sqlex = $this->connection->query($SQL);
        // print_r($sqlex);
        // exit;
        if($sqlex->num_rows > 0)
        {
            $data = $sqlex->fetch_object();
            print_r($data);
            // exit;
        }
        else 
        {
            $data = "Something Went Wrong";
            // return $data;
        }
        // print_r($sqlex);
        return $data;
        // exit;
    }

    public function update($tbl,$values,$id)
    {
        // echo "<pre>";
        print_r($values);
        $SQL = " UPDATE $tbl SET ";
        foreach($values as $key => $value)
        {
            $SQL .= " $key = '$value' , ";
        }
        $SQL = rtrim($SQL," , ");
        
        $SQL .= " WHERE id = $id";
        echo "<pre>";
        print_r($SQL);
        echo "</pre>";
        // $sqlex = $this->connection->query($SQL);
        // if($sqlex->num_rows > 0)
        // {
        //     $data = "success";
        // }
        // else
        // {
        //     $data = "Something went wrong";
        //     // echo $data;
        // }
        // 
        // return $data;
    }



}

?>
