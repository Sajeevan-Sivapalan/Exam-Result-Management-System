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
        <!--bootstrap css-->
        <link href="src/css/bootstrap.min.css" rel="stylesheet" >

        <!--style sheet-->
        <link rel="stylesheet" href="src/css/forms.css">
		<link rel="stylesheet" href="src/css/header.css">

        </head>
        <body>
        <!--student details container start-->
        <div class="add-container">
            <form method="post" action="storeReport.php" name="reportForm" onSubmit="return reportFormValidation(this)">
            <table>
                <tr>
                    <th>
                        <?php
                            if(isset($_GET['user']))
                                $indexNumber = $_GET['user'];
                                
                            echo "<div class='form-floating'>
                                <input type='text' class='form-control' name='indexNumber' maxlength='5'  value=", $indexNumber, " >
                                <label for='floatingInput'>Index Number</label>
                                </div>";
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder=" "  style="height: 100px" name="report"></textarea>
                        <label for="floatingTextarea2">Report</label>
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

        <script rel="javascript" src="src/JS/report.js"></script>
    </body>
</html>