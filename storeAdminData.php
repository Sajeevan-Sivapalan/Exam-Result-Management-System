<?php
    session_start();
    if(!isset($_SESSION['userName'])){
        header('location:adminLogin.php?mes=please login here');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Store Admin Data</title>
</head>
<body>
    <?php
        class storeAdminData
        {
            var $fname, $lname, $pass;
            var $connection, $db;

            function __construct($efname, $elname, $epass){
                $this->fname = $efname;
                $this->lname = $elname;
                $this->pass = $epass;

                $this->connection = mysqli_connect("localhost","root", "") or die("cannot connect server");
                $this->db = mysqli_select_db($this->connection, "examsystem") or die("cannot connect database");
            }

            function store(){
                $query = "SELECT * FROM admins WHERE userName = '$this->userName'";
                if($result = mysqli_query($this->connection, $query)){
                    if($row = mysqli_fetch_array($result))
                        header('location:addAdmin.php?mes=Already Exist');
                    else{
                    $query = "INSERT INTO admins (userName, fname, lname, pass) VALUES ('0', '$this->fname', '$this->lname', '$this->pass')";
                    if($result = mysqli_query($this->connection, $query))
                        header('location:admin.php');
                    }
                }
            }

            function closeServer(){
                mysqli_close($this->closeConnection());
            }
        }

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pass = $_POST['pass'];

        $obj1 = new storeAdminData($fname, $lname, $pass);
        $obj1->store();
        $obj1->closeServer();
    ?>
</body>
</html>