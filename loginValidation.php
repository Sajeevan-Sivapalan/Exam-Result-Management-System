<?php
    session_start();
    if(!isset($_SESSION['userName'])){
        header('location:adminLogin.php?mes=please login here');
    }
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        class loginValidation
        {
            var $userName, $password;
            var $connection, $db;

            function __construct($uname, $pass){
                $this->userName = $uname;
                $this->password = $pass;

                $this->connection = mysqli_connect("localhost","root", "") or die("cannot connect server");
                $this->db = mysqli_select_db($this->connection, "examsystem") or die("cannot connect database");
            }

            function check(){
                $query = "SELECT * FROM admins WHERE userName = '$this->userName'";
                if($result = mysqli_query($this->connection, $query)){
                    if($row = mysqli_fetch_array($result)){
                        if($row['pass'] == $this->password){
                            header('location:students.php');
                            $_SESSION['fname'] = $row['fname'];
                            $_SESSION['userName'] = $this->userName;
                        }
                        else{
                            header('location:adminLogin.php?mes=Invalid password');
                            exit();
                        }
                    }
                    else{
                        header('location:adminLogin.php?mes=Invalid User Name');
                        exit();
                    }
                        
                }
            }

            function closeServer(){
                mysqli_close($this->closeConnection());
            }
        }
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        $obj1 = new loginValidation($userName, $password);
        $obj1->check();
        $obj1->closeServer();
    ?>
</body>
</html>