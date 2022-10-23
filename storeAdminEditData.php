<?php
    session_start();
    if(!isset($_SESSION['userName'])){
        header('location:adminLogin.php?mes=please login here');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Store Admin Edit Data</title>
</head>
<body>
    <?php
        class StoreAdminData
        {
            var $fname, $lname, $userName, $pass;
            var $connection, $db;

            function __construct($efname, $elname, $euserName, $epass){
                $this->fname = $efname;
                $this->lname = $elname;
                $this->userName = $euserName;
                $this->pass = $epass;

                $this->connection = mysqli_connect("localhost","root", "") or die("cannot connect server");
                $this->db = mysqli_select_db($this->connection, "examsystem") or die("cannot connect database");
            }

            function update(){
                $query = "UPDATE admins SET fname = '$this->fname', lname = '$this->lname', pass = '$this->pass' where userName = '$this->userName'";
                if($result = mysqli_query($this->connection, $query))
                    header('location:admin.php');
            }

            function closeServer(){
                mysqli_close($this->closeConnection());
            }
        }

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $userName = $_POST['userName'];
        $pass = $_POST['pass'];

        $obj1 = new StoreAdminData($fname, $lname, $userName, $pass);
        $obj1->update();
        $obj1->closeServer();

    ?>
</body>
</html>