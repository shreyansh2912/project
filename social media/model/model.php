<?php   

class model
{

    public $connection;

    public function __construct()
    {
        try
        {

            $this->connection = new mysqli("localhost","root","","social_media");
            // echo "Connection was  successful";
        }
        catch(\Throwable $th)
        {
            // echo "Connection was not successful";
        }
    }

    public function insert($tbl,$data)
    {

        

        // array_pop($data);
        
        $keysdata = array_keys($data);
        $valuesdata = array_values($data);

        $keysdata = implode(",",$keysdata);
        $valuesdata = implode("','",$valuesdata);

        echo "<pre>";
        // print_r($keysdata);
        echo "<br>";
        // print_r($valuesdata);
        echo "<br>";


            $sql = "INSERT INTO $tbl ($keysdata) VALUES ('$valuesdata')";
            echo $sql;
            // $sql2 = "INSERT INTO users (name,username,email,password) VALUES ('$data[name]','$data[username]','$data[email]','$data[password]')";
            // echo $sql2;
            $this->connection->query($sql);
            header("location:products");
        // print_r(array_keys($data));
        // print_r(array_values($data));
        // print_r($data);
        echo "</pre>";
    } 
    
    public function update($tbl,$values,$id)
    {
        echo "<pre>";
        print_r($values);
        $SQL = " UPDATE $tbl SET ";
        foreach($values as $key => $value)
        {
            $SQL .= " $key = '$value' , ";
        }
        $SQL = rtrim($SQL," , ");
        
        $SQL .= " WHERE id = $id";
        // echo $SQL;
        $sqlex = $this->connection->query($SQL);
        if($sqlex->num_rows > 0)
        {
            $data = "success";
        }
        else
        {
            $data = "Something went wrong";
            // echo $data;
        }
        return $data;
    }

    public function selectwhere($tbl,$id)
{
    $SQL = "SELECT * FROM $tbl WHERE id = $id";
    // echo $SQL;
    $sqlex = $this->connection->query($SQL);
    // exit;
    if($sqlex->num_rows > 0)
    {
        $data = $sqlex->fetch_object();
        // print_r($data);
        // exit;
    }
    else 
    {
        $data = "Something Went Wrong";
        // return $data;
    }
    return $data;
    // print_r($sqlex);
    // exit;
}

    public function delete($table,$id)
    {
        $SQL = "DELETE FROM $table WHERE id = $id";
        // echo $SQL;
        // echo "$table $id";
        // exit;


        $this->connection->query($SQL);
        header("location:$_SERVER[PHP_SELF]");//it redirect the page you have not to refress the page to see the changes

        // header
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

    public function register($data)
    {
        array_pop($data);
        
        $keysdata = array_keys($data);
        $valuesdata = array_values($data);

        $keysdata = implode(",",$keysdata);
        $valuesdata = implode("','",$valuesdata);


            $sql = "INSERT INTO register ($keysdata) VALUES ('$valuesdata')";
           
            $this->connection->query($sql);
            header("location:login");
            // echo $sql;
    } 

    public function login($data)
    {
        if (isset($data['login-btn']))
        {
            // echo "<pre>";
            // print_r($_REQUEST);
            // echo "</pre>";

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
        else 
        {
        //    echo "hi";
        }    
    }


// $model = new model;
// $model->register("Save Data");
// $model->register("<br>Update Data");
}













?>