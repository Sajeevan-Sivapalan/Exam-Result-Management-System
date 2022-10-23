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
            <form method="post" action="storeAdminEditData.php" name="adminDetails" onSubmit="return adminValidation(this)">
                <?php
                    if(isset($_GET['user']))
                        $userName = $_GET['user'];

                    require 'config.php';
                    
                    $query = "SELECT * FROM admins WHERE userName = '$userName'";
                    if($result = mysqli_query($connection, $query)){
                        echo "<table>";
                        if($row = mysqli_fetch_array($result)){
                            echo "<tr><th>
                            <div class='form-floating'>
                                <input type='text' class='form-control' maxlength='20' name='fname' placeholder=' ' value=", $row['fname'], ">
                                <label for='floatingInput'>First Name</label>
                            </div> 
                            </th><th>
                            <div class='form-floating'>
                                <input type'text' class='form-control' name='lname' maxlength='20' placeholder=' ' value = ", $row['lname']," >
                                <label for='floatingInput'>Last Name</label>
                            </div> 
                            </th></tr>";
                            echo "<tr><th colspan='2'>
                                <input type='hidden' class='form-control' name='userName' maxlength='20' value=", $row['userName'], " >
                            </th></tr>";
                            echo "<tr><th>
                            <div class='form-floating'>
                                <input type='password' class='form-control' name='pass' maxlength='20' placeholder=' ' value=", $row['pass'], ">
                                <label for='floatingInput'>Password</label>
                            </div> 
                            </th>
                            <th>
                            <div class='form-floating'>
                                <input type='password' class='form-control' name='repassword' placeholder=' ' maxlength='20' value=", $row['pass']," >
                                <label for='floatingInput'>Re-Password</label>
                            </div> 
                            </th></tr>";
                            echo "<tr>
                            <th colspan='2'><center><button type='submit' class='btn btn-primary'>Update</button></center></th>
                            </tr>";

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

        <script rel="javascript" src="src/JS/admin.js"></script>
    </body>
</html>