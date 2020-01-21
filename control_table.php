<?php
class Department{
    public function connect (){
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "emp_database";
            //Create connection
            $conn = $this->connection;
        $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
            // echo "Connected successfully";
        // $sql = "SELECT id, products_name, image_name FROM developing_products";
        if(isset($_POST) & !empty($_POST))
        
        {
            $department =$_POST['department_name'];
        }
    }
            public function create ($department)
            {
            $sql = "INSERT INTO departments (department_name)
            VALUES ('$department')";
        
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                echo "Record inserted successfully";
            }
            else
            {
            echo "please try again";
            }
        }
        
    
    }    
        // $this->conn->close();
        ?>
     