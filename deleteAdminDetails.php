<?php
    session_start();
    if(!isset($_SESSION['userName'])){
        header('location:adminLogin.php?mes=please login here');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Admin Details</title>
</head>
<body>
    <?php
        if(isset($_GET['user']))
            $userName = $_GET['user'];

        class DeleteAdminDetails
        {
            var $userName;
            var $connection, $db;

            function __construct($euserName){
                $this->userName = $euserName;

                $this->connection = mysqli_connect("localhost","root", "") or die("cannot connect server");
                $this->db = mysqli_select_db($this->connection, "examsystem") or die("cannot connect database");
            }

            function delete(){
                $query = "DELETE FROM admins WHERE userName = '$this->userName'";
                if($result = mysqli_query($this->connection, $query))
                    header('location:admin.php');
                else
                    echo "error";
            }

            function closeServer(){
                mysqli_close($this->closeConnection());
            }
        }

        $obj1 = new DeleteAdminDetails($userName);
        $obj1->delete();
        $obj1->closeServer();
    ?>
</body>
</html>