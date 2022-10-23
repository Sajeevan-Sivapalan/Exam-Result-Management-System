<!doctype html>
<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Login</title>
			<!--bootstrap css-->
			<link href="src/css/bootstrap.min.css" rel="stylesheet" >

			<!--style sheet-->
			<link rel="stylesheet" href="src/css/adminLogin.css">
			<link rel="stylesheet" href="src/css/header.css">

		<!--JS-->
		<script rel="javascript" src="src/JS/home.js"></script>
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
										<a class="nav-link" href="index.php">Student Login</a>
									</li>
								</ul>
								<a class="link" href="adminLogin.php">Login As Admin</a>
							</div>
						</div>
					</nav>
				<!--navbar end-->

				<!--login area start-->
				<div class="login">
					<div class="login-container">
					<h4>Login</h4>
					<form method="post" action="loginValidation.php" name="loginForm" onSubmit="return LoginFormValidation(this)">
						<div class="form-floating">
							<input type="text" class="form-control" name="userName" maxlength="4" placeholder=" ">
							<label for="floatingInput">User Name</label>
						</div>
						<div class="form-floating">
							<input type="password" maxlength="20" class="form-control" name="password" placeholder=" ">
							<label for="floatingInput">Password</label>
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
					<p id="errormeg" class="text-danger"></p>
					<div class="alert">
						<?php
							if(isset($_GET['mes']))
								echo "<p class='text-danger'>", $_GET['mes'], "</p>";
						?>
					</div>
				</div>
				</div>
				<!--login area end-->

				<!--bootstrap js-->
				<script src="src/js/bootstrap.bundle.min.js" ></script>

				<script rel="javascript" src="src/JS/login.js"></script>
		</body>
</html>