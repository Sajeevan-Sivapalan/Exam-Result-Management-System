<?php
    session_start();
    if(!isset($_SESSION['userName'])){
        header('location:adminLogin.php?mes=please login here');
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel</title>

        <!--bootstrap css-->
        <link href="src/css/bootstrap.min.css" rel="stylesheet" >

        <!--style sheet-->
        <link rel="stylesheet" href="src/css/students.css">
		    <link rel="stylesheet" href="src/css/header.css">

        <!--bootstrap icons-->
		    <link rel="stylesheet" href="src/bootstrap-icons/bootstrap-icons.css">

		    <!--JS-->
	    	<script rel="javascript" src="src/JS/home.js"></script>
        </head>
        <body>

        <!--navbar start-->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <?php $fName = $_SESSION['fname'];
                      echo $fName;
               ?>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="students.php">Students</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="viewReports.php">Reports</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="admin.php">Admins</a>
					</li>
          <li class="nav-item">
						<a class="nav-link" href="viewStudent.php">View Student</a>
					</li>
                </ul>
                <a class="link" href="logout.php">Logout</a>
              </div>
            </div>
          </nav>
        <!--navbar end-->

        <!--student display area start-->
        <div class="student-display-area">
          <a href="addStudent.php"><button class="addbtn btn btn-primary">Add Student</button></a>
          <?php
			require 'config.php';

			$query = "SELECT * FROM student";

			if($result = mysqli_query($connection, $query)){
				echo "<table class='table table-striped'>";
				echo "<tr><th>Index Number</th><th>Name</th><th>Tamil</th><th>Information<br>Technology</th><th>History</th><th>Science</th><th>English</th><th>Maths</th><th>Average</th><th>Grade</th></tr>";
				while($row = mysqli_fetch_array($result)){
					echo "<tr><th>", $row['indexNumber'], "</th><th>" ,  $row['nam'],"</th><th>", $row['tamil'], "</th><th>",  $row['IT'],"</th><th>", $row['history'], "</th><th>",$row['science'], "</th><th>" ,  $row['english'],"</th><th>", $row['maths'], "</th><th>",  $row['average'],"</th><th>", $row['grade'],"</th>";
          echo "<th><a href='editStudentDetails.php?indexNum=", $row['indexNumber']," '><button class='btn btn-primary'>Edit</button></a></th>";
          echo "<th><a href='deleteStudentDetails.php?indexNum=", $row['indexNumber']," ' onClick='conformation()'><button class='btn btn-danger'>Delete</button></a></th></tr>";
				}
				echo "</table>";
			}
          ?>
        </div>
        <!--student display area start-->

		<!--footer start-->

		<!--footer end-->

        <!--bootstrap js-->
        <script src="src/js/bootstrap.bundle.min.js" ></script>

        <script rel="javascript" src="src/JS/delconfirm.js"></script>
    </body>
</html>