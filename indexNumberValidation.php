<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        $indexNumber = $_POST['indexNumber'];
        
        class validateIndexNumber
        {
            var $indexNumber;
            var $connection, $db;

            function __construct($einno){
                $this->indexNumber = $einno;

                $this->connection = mysqli_connect("localhost","root", "") or die("cannot connect server");
                $this->db = mysqli_select_db($this->connection, "examsystem") or die("cannot connect database");
            }

            function check(){
                $query = "SELECT * FROM student WHERE indexNumber = '$this->indexNumber'";
                if($result = mysqli_query($this->connection, $query)){
                    if($row = mysqli_fetch_array($result)){
                        header('location:result.php');
                        $_SESSION['indexNum'] = $this->indexNumber;
                    }
                    else
                        header('location:index.php?mes=Invalid Index Number');
                }
            }

            function closeServer(){
                mysqli_close($this->closeConnection());
            }
        }

        $obj1 = new validateIndexNumber($indexNumber);
        $obj1->check();
        $obj1->closeServer();
    ?>
</body>
</html>