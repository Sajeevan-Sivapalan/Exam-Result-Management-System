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

        </head>
        <body>
        <!--student details container start-->
        <div class="add-container">
            <form method="post" action="storeStudentData.php" name="studentDetails" onSubmit="return studentFormValidation(this)">
            <table>
                <tr>
                    <th>
                        <div class="form-floating">
                            <input type="text" class="form-control" maxlength="5" name="indexNumber" placeholder=" ">
                            <label for="floatingInput">Index Number</label>
                        </div> 
                    </th>
                    <th>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="name" placeholder=" " maxlength="20">
                            <label for="floatingInput">Name</label>
                        </div> 
                    </th>
                </tr>
                <tr>
                    <th>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="tamil" placeholder=" " maxlength="3">
                            <label for="floatingInput">Tamil</label>
                        </div> 
                    </th>
                    <th>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="IT" placeholder=" " maxlength="3">
                            <label for="floatingInput">IT</label>
                        </div> 
                    </th>
                </tr>
                <tr>
                    <th>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="history" placeholder=" " maxlength="3">
                            <label for="floatingInput">History</label>
                        </div> 
                    </th>
                    <th>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="science" placeholder=" " maxlength="3">
                            <label for="floatingInput">Science</label>
                        </div> 
                    </th>
                </tr>
                <tr>
                    <th>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="english" placeholder=" " maxlength="3">
                            <label for="floatingInput">English</label>
                        </div> 
                    </th>
                    <th>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="maths" placeholder=" " maxlength="3">
                            <label for="floatingInput">Maths</label>
                        </div> 
                    </th>
                </tr>
                <tr>
                    <th colspan="2"><center><button type="submit" class="btn btn-primary">Submit</button><button type="reset" class="btn btn-danger">Reset</button></center></th>
                </tr>
            </table>
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