<?php
session_start();
if(!isset($_SESSION['indexNum']))
    header('location:index.php?mes=please enter the index number');
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Report Details</title>
        </head>
        <body>
        <?php
            class AddReport
            {
                var $indexNumber, $report, $date;
                var $connection, $db;

                function __construct($eindexnum, $erep, $edat){
                    $this->indexNumber = $eindexnum;
                    $this->report = $erep;
                    $this->date = $edat;

                    $this->connection = mysqli_connect("localhost","root", "") or die("cannot connect server");
                    $this->db = mysqli_select_db($this->connection, "examsystem") or die("cannot connect database");
                }

                function add(){
                    $query = "INSERT INTO reports(dates, indexNumber, report) VALUES ('$this->date', '$this->indexNumber', '$this->report')";

                    if($result = mysqli_query($this->connection, $query))
                        header('location:result.php');
                    else
                        echo "error";
                }

                function closeServer(){
                mysqli_close($this->closeConnection());
                }
            }
            $indexNumber = $_POST['indexNumber'] ;
            $report = $_POST['report'];
            $date = date('y-m-d');
            $obj1 = new AddReport($indexNumber, $report, $date);
            $obj1->add();
            $obj1->closeServer();
        ?>
    </body>
</html>