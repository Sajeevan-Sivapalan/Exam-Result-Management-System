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
            <form method="post" action="storeStudentEditData.php" name="studentDetails" onSubmit="return studentFormValidation(this)">
                <?php
                    if(isset($_GET['indexNum']))
                        $indexNumber = $_GET['indexNum'];

                    require 'config.php';
                    
                    $query = "SELECT * FROM student WHERE indexNumber = '$indexNumber'";
                    if($result = mysqli_query($connection, $query)){
                        echo "<table>";
                        if($row = mysqli_fetch_array($result)){
                            echo "<tr><th>
                                    <div class='form-floating'>
                                    <input type='text' class='form-control' maxlength='5' name='indexNumber' placeholder=' ' value=", $row['indexNumber'], " >
                                    <label for='floatingInput'>Index Number</label>
                                </div> 
                            </th><th>
                                <div class='form-floating'>
                                    <input type='text' class='form-control' name='name' placeholder=' ' value=", $row['nam'], " >
                                    <label for='floatingInput'>Name</label>
                                </div> 
                            </th></tr>";
                            echo "<tr><th>
                                <div class='form-floating'>
                                    <input type='text' class='form-control' name='tamil' placeholder=' ' value=", $row['tamil'], " >
                                    <label for='floatingInput'>Tamil</label>
                                </div> 
                            </th>
                            <th>
                                <div class='form-floating'>
                                    <input type='text' class='form-control' name='IT' placeholder=' ' value=", $row['IT'], " >
                                    <label for='floatingInput'>IT</label>
                                </div> 
                            </th></tr>";
                            echo "<tr><th>
                                <div class='form-floating'>
                                    <input type='text' class='form-control' name='history' placeholder=' ' value=", $row['history'], ">
                                    <label for='floatingInput'>History</label>
                                </div> 
                            </th>
                            <th>
                                <div class='form-floating'>
                                    <input type='text' class='form-control' name='science' placeholder=' ' value=", $row['science'],">
                                    <label for='floatingInput'>science</label>
                                </div> 
                            </th></tr>";
                            echo "<tr><th>
                                <div class='form-floating'>
                                    <input type='text' class='form-control' name='english' placeholder=' ' value=", $row['english']," >
                                    <label for='floatingInput'>English</label>
                                </div> 
                            </th>
                            <th>
                                <div class='form-floating'>
                                    <input type='text' class='form-control' name='maths' placeholder=' ' value=", $row['maths'], " >
                                    <label for='floatingInput'>Maths</label>
                                </div> 
                            </th></tr>";
                            echo "<tr><th colspan='2'><center><button type='submit' class='btn btn-primary'>Update</button></th></tr>";
                        }
                        echo "</table>";
                    }
                ?>
            </form>
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