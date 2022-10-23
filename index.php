<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <!--bootstrap css-->
        <link href="src/css/bootstrap.min.css" rel="stylesheet" >

        <!--style sheet-->
        <link rel="stylesheet" href="src/css/home.css">
		<link rel="stylesheet" href="src/css/header.css">
    </head>
      <body>

        <!--navbar start-->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              	 
              	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                  	<li class="nav-item">
					          </li>
                </ul>
                <a class="link" href="adminLogin.php">Login As Admin</a>
              </div>
            </div>
          </nav>
        <!--navbar end-->

        <!--index number area start-->
        <div class="roll-number-area">
          <div class="roll-number-container">
				<h4>Enter your index number</h4>
				<form method="post" action="indexNumberValidation.php" name="homeValidationForm" onSubmit="return homeValidation(this)">
				<div class="form-floating">
						<input type="text" class="form-control" name="indexNumber" placeholder=" " maxlength="5">
						<label for="floatingInput">Index Number</label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				<p id="errormeg" class="text-danger"></p>
				<div class="alert" >
				<?php
					if(isset($_GET['mes']))
					echo "<p class='text-danger'>", $_GET['mes'], "</p>";
				?>
				</div>
          </div>
        </div>
        <!--index number area end-->

        <!--bootstrap js-->
        <script src="src/js/bootstrap.bundle.min.js" ></script>

        <script rel="javascript" src="src/JS/home.js"></script>
    </body>
</html>