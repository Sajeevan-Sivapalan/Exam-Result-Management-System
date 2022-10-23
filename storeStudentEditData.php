<?php
    session_start();
    if(!isset($_SESSION['userName'])){
        header('location:adminLogin.php?mes=please login here');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Student Edit Details</title>
</head>
<body>
    <?php
        class UpdateEditDetails
        {
            var $indexNumber, $nam, $tamil, $IT, $history, $science, $english, $maths, $average, $grade;
            var $connection, $db;

            function __construct($eindexNumber, $enam, $etamil, $eIT, $ehistory, $escience, $eenglish, $emaths){
                $this->indexNumber = $eindexNumber;
                $this->nam = $enam;
                $this->tamil = $etamil;
                $this->IT = $eIT;
                $this->history = $ehistory;
                $this->science = $escience;
                $this->english = $eenglish;
                $this->maths = $emaths;

                $this->connection = mysqli_connect("localhost","root", "") or die("cannot connect server");
                $this->db = mysqli_select_db($this->connection, "examsystem") or die("cannot connect database");
            }

            function calculate(){
                $this->total = $this->tamil + $this->IT + $this->history + $this->science + $this->english + $this->maths;
                $this->average = $this->total / 6.0;

                if($this->average >= 75)
                    $this->grade = "A";
                    else
                        if($this->average >= 65)
                            $this->grade = "B";
                            else
                                if($this->average >= 55)
                                    $this->grade = "C";
                                    else
                                        if($this->average >= 45)
                                            $this->grade = "S";
                                            else
                                                $this->grade = "F";
            }

            function check(){
                echo $this->indexNumber, "<br>";
                echo $this->nam, "<br>";
                echo $this->tamil, "<br>";
                echo $this->IT, "<br>";
                echo $this->history, "<br>";
                echo $this->science, "<br>";
                echo $this->english, "<br>";
                echo $this->maths, "<br>";
            }

            function update(){
                $query = "UPDATE student SET tamil = '$this->tamil', IT = '$this->IT', history = '$this->history', science = '$this->science', english = '$this->english', maths = '$this->maths', average = '$this->average', grade = '$this->grade' WHERE indexNumber = '$this->indexNumber'";

                if($result = mysqli_query($this->connection, $query))
                    header('location:students.php');
                else
                    header('location:editStudentDetails.php?mes=Error');
            }

            function closeServer(){
                mysqli_close($this->closeConnection());
            }
        }
        $indexNumber = $_POST['indexNumber'];
        $nam = $_POST['name'];
        $tamil = $_POST['tamil'];
        $IT = $_POST['IT'];
        $history = $_POST['history'];
        $science = $_POST['science'];
        $english = $_POST['english'];
        $maths = $_POST['maths'];

        $obj1 = new UpdateEditDetails($indexNumber, $nam, $tamil, $IT, $history, $science, $english, $maths);
        //$obj1->check();
        $obj1->calculate();
        $obj1->update();
        $obj1->closeServer();
        ?>
        
</body>
</html>