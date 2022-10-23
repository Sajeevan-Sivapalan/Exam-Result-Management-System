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
        <title>Add Student Details</title>
        <!--bootstrap css-->
        <link href="src/css/bootstrap.min.css" rel="stylesheet" >

        <!--style sheet-->
        <link rel="stylesheet" href="src/css/forms.css">
		<link rel="stylesheet" href="src/css/header.css">

		<!--JS-->
		<script rel="javascript" src="src/JS/home.js"></script>
        </head>
        <body>
        <!--student details container start-->
        <div class="add-container">
                <?php
                    require 'config.php';
                    $indexNumber = $_POST['indexNumber'];
                    $query = "SELECT * FROM student WHERE indexNumber = '$indexNumber'";
                    if($result = mysqli_query($connection, $query)){
                        echo "<table>";
                        if($row = mysqli_fetch_array($result)){
                            echo "<tr><th colspan = '2'>
                                    <input type='hidden' class='form-control' maxlength='5' name='indexNumber' placeholder=' ' value=", $row['indexNumber'], " disabled>
                                <div class='form-floating'>
                                    <input type='text' class='form-control' name='name' placeholder=' ' value=", $row['nam'], " disabled>
                                    <label for='floatingInput'>Name</label>
                                </div> 
                            </th></tr>";
                            echo "<tr><th>
                                <div class='form-floating'>
                                    <input type='text' class='form-control' name='tamil' placeholder=' ' value=", $row['tamil'], " disabled>
                                    <label for='floatingInput'>Tamil</label>
                                </div> 
                            </th>
                            <th>
                                <div class='form-floating'>
                                    <input type='text' class='form-control' name='IT' placeholder=' ' value=", $row['IT'], " disabled>
                                    <label for='floatingInput'>IT</label>
                                </div> 
                            </th></tr>";
                            echo "<tr><th>
                                <div class='form-floating'>
                                    <input type='text' class='form-control' name='history' placeholder=' ' value=", $row['history'], " disabled>
                                    <label for='floatingInput'>History</label>
                                </div> 
                            </th>
                            <th>
                                <div class='form-floating'>
                                    <input type='text' class='form-control' name='science' placeholder=' ' value=", $row['science']," disabled>
                                    <label for='floatingInput'>science</label>
                                </div> 
                            </th></tr>";
                            echo "<tr><th>
                                <div class='form-floating'>
                                    <input type='text' class='form-control' name='english' placeholder=' ' value=", $row['english']," disabled>
                                    <label for='floatingInput'>English</label>
                                </div> 
                            </th>
                            <th>
                                <div class='form-floating'>
                                    <input type='text' class='form-control' name='maths' placeholder=' ' value=", $row['maths'], " disabled>
                                    <label for='floatingInput'>Maths</label>
                                </div> 
                            </th></tr>";
                            echo "<tr><th colspan='2'><center><a href='viewStudent.php'><button class='btn btn-primary'>View More</button ></a><a href='editStudentDetails.php?indexNum=", $row['indexNumber'], " '><button class='btn btn-primary'>Edit</button ></a></center></th></tr>";
                        }
                        else{
                        header('location:viewStudent.php?mes=UserName not exist');
                            exit();
                        } 
                        echo "</table>";
                    }
                       
                    
                    
                ?>
            <p id="errormeg" class="text-danger"></p>
            <div class="alert" >
				<?php
					if(isset($_GET['mes']))
						echo "<p class='text-danger'>", $_GET['mes'],"</p>";
				?>
			</div>
        </div>
        <!--student details container end-->

        <!--bootstrap js-->
        <script src="src/js/bootstrap.bundle.min.js" ></script>

        <script rel="javascript" src="src/JS/student.js"></script>
    </body>
</html>