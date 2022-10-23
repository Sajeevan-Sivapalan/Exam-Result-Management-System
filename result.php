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
        <title>Result</title>
        <!--bootstrap css-->
        <link href="src/css/bootstrap.min.css" rel="stylesheet" >

        <!--style sheet-->
        <link rel="stylesheet" href="src/css/result.css">

		<!--JS-->
		<script rel="javascript" src="src/JS/home.js"></script>
        </head>
        <body>
            <div class="result">
                <h3>Result Sheet</h3>
                <?php
                require 'config.php';

                if(isset($_SESSION['indexNum']))
                    $indexNumber = $_SESSION['indexNum'];

                $query = "SELECT * FROM student WHERE indexNumber='$indexNumber'";

                if($result = mysqli_query($connection, $query) or die(mysqli_error($connection))){
                    echo "<table class='table table-striped'>";
                    if($row = mysqli_fetch_array($result)){
                        echo "<tr><th scope='col'>Index Number</th><th scope='col'>", $row['indexNumber'], "</th></tr>";
                        echo "<tr><th scope='col'>Name</th><th>", $row['nam'], "</th></tr>";
                        echo "<tr><th scope='col'>Tamil</th><th>", $row['tamil'], "</th></tr>";
                        echo "<tr><th scope='col'>Information Technology</th><th>", $row['IT'], "</th></tr>";
                        echo "<tr><th scope='col'>History</th><th>", $row['history'], "</th></tr>";
                        echo "<tr><th scope='col'>science</th><th>", $row['science'], "</th></tr>";
                        echo "<tr><th scope='col'>English</th><th>", $row['english'], "</th></tr>";
                        echo "<tr><th scope='col'>Maths</th><th>", $row['maths'], "</th></tr>";
                        echo "<tr><th scope='col'>Average</th><th>", $row['average'], "</th></tr>";
                        echo "<tr?><th scope='col'>Grade</th><th>", $row['grade'], "</th></tr>";
                    }
                    echo "<tr><th colspan='2'><center><a href='index.php'><button class='btn btn-primary'>Go to Home Page</button></a>
                    <a href='addReport.php?user=", $row['indexNumber']," '><button class='btn btn-danger'>Report Issue</button></a></center></th></tr>";
                    echo "</table>";
                }
                ?>
            </div>
            <!--bootstrap js-->
            <script src="src/js/bootstrap.bundle.min.js" ></script>
        </body>
</html>