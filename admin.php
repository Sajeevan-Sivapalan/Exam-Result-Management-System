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
          <a href="addAdmin.php"><button class="addbtn btn btn-primary">Add Admin</button></a>
          <?php
			require 'config.php';

			$query = "SELECT * FROM admins";

			if($result = mysqli_query($connection, $query)){
				echo "<table class='table table-striped'>";
				echo "<tr><th>First Name</th><th>Last Name</th><th>User Name</th></tr>";
				while($row = mysqli_fetch_array($result)){
					echo "<tr><th>", $row['fname'], "</th><th>" ,  $row['lname'],"</th><th>", $row['userName'], "</th>";
          echo "<th><a href='editAdminDetails.php?user=", $row['userName']," '><button class='btn btn-primary'>Edit</button></a></th>";
          echo "<th><a href='deleteAdminDetails.php?user=", $row['userName'], " ' onClick='conformation()'><button class='btn btn-danger'>Delete</button></a></th></tr>";
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