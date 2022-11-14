<?php
    session_start();
    if(!isset($_SESSION['userName'])){
        header('location:adminLogin.php?mes=please login here');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Store Data</title>
</head>
<body>
    <?php
        class storeStudentData
        {
            var $indexNumber, $name, $tamil, $IT, $history, $science, $english, $maths, $average, $grade, $total, $report;
            var $connection, $db;
            
            function __construct($inumber, $ename, $etamil, $eit, $ehistory, $escience, $eenglish, $emaths){
                $this->indexNumber = $inumber;
                $this->name = $ename;
                $this->tamil = $etamil;
                $this->IT = $eit;
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

            function store(){
                $query = "SELECT * FROM student WHERE indexNumber = '$this->indexNumber'";
                if($result = mysqli_query($this->connection, $query)){
                    if($row = mysqli_fetch_array($result))
                        header('location:addStudent.php?mes=Already Exist');
                    else{
						$query = "INSERT INTO student (indexNumber, nam, tamil, IT, history, science, english, maths, average, grade) VALUES ('$this->indexNumber', '$this->name', '$this->tamil', '$this->IT', '$this->history', '$this->science', '$this->english', '$this->maths', '$this->average', '$this->grade')";

						if($result = mysqli_query($this->connection, $query))
							header('location:students.php');
                    }
                }
            }

            function closeServer(){
                mysqli_close($this->closeConnection());
            }
        }

        $indexNumber = $_POST['indexNumber'];
        $name = $_POST['name'];
        $tamil = $_POST['tamil'];
        $IT = $_POST['IT'];
        $history = $_POST['history'];
        $science = $_POST['science'];
        $english = $_POST['english'];
        $maths = $_POST['maths'];

        $obj1 = new storeStudentData($indexNumber,$name, $tamil, $IT, $history, $science, $english, $maths);
        $obj1->calculate();
        $obj1->store();
        $obj1->closeServer();
    ?>
</body>
</html>