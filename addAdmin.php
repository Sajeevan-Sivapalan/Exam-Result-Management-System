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
        <title>Add Admin Details</title>
        <!--bootstrap css-->
        <link href="src/css/bootstrap.min.css" rel="stylesheet" >

        <!--style sheet-->
        <link rel="stylesheet" href="src/css/forms.css">
		<link rel="stylesheet" href="src/css/header.css">

        </head>
        <body>
        <!--student details container start-->
        <div class="add-container">
            <form method="post" action="storeAdminData.php" name="adminDetails" onSubmit="return adminValidation(this)">
            <table>
                <tr>
                    <th>
                        <div class="form-floating">
                            <input type="text" class="form-control" maxlength="20" name="fname" placeholder=" ">
                            <label for="floatingInput">First Name</label>
                        </div> 
                    </th>
                    <th>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="lname"maxlength="20" placeholder=" ">
                            <label for="floatingInput">Last Name</label>
                        </div> 
                    </th>
                </tr>
                <tr>
                    <th>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="pass" maxlength="20" placeholder=" ">
                            <label for="floatingInput">Password</label>
                        </div> 
                    </th>
                    <th>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="repassword" maxlength="20" placeholder=" ">
                            <label for="floatingInput">Re-Password</label>
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

        <script rel="javascript" src="src/JS/admin.js"></script>
    </body>
</html>