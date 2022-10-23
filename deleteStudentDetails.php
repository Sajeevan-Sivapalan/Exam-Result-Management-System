<?php
    session_start();
    if(!isset($_SESSION['userName'])){
        header('location:adminLogin.php?mes=please login here');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Student Details</title>
</head>
<body>
    <?php
        if(isset($_GET['indexNum']))
            $indexNumber = $_GET['indexNum'];

            class DeleteStudentDetails
            {
                var $indexNumber;
                var $db, $connection;

                function __construct($indexnum){
                    $this->indexNumber = $indexnum;

                    $this->connection = mysqli_connect("localhost","root", "") or die("cannot connect server");
                    $this->db = mysqli_select_db($this->connection, "examsystem") or die("cannot connect database");
                }

                function delete(){
                    $query = "DELETE FROM student WHERE indexNumber = '$this->indexNumber'";
                    if($result = mysqli_query($this->connection, $query)){
                        header('location:students.php');
                    }
                }

                function closeServer(){
                mysqli_close($this->closeConnection());
                }
            }

            $obj1 = new DeleteStudentDetails($indexNumber);
            $obj1->delete();
            $obj1->closeServer();
    ?>
</body>
</html>