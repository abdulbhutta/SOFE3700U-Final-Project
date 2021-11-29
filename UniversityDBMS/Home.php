<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/style.css">
</head>

<body>
	<div class="topnav" id="myTopnav">
  		<a href="Home.php" class="active">Home</a>
	  	<a href="Students/StudentLoginPage">Student Portal</a>
	  	<a href="Professors/LoginPage">Staff Portal</a>
		<a href="RegistrarOffice/RegistrarLoginPage">Registrar Portal</a>
	</div>

	<div class="jumbotron jumbotron-fluid">
  		<div class="container">
    		<h1><strong>Welcome to University Database Management System</strong></h1>
    		<p>*Prototype*</p>
  		</div>
	</div>

	<section class="container">
		<div class="row text-center">

			<div class="col-md-6 mb-6">
				<div class="card h-200">
					<img src="assets/students.jpg" alt="Students Photo">
					<div class="card-body">
						<h4 class="card-title">Current Students Sign In</h4>
						<div class="card-text">
							Only current students that are registered at the university can log in.</p>
						</div>
						<br></br>
					</div>
					<div class="card-footer py-4">
						<a href="Students/StudentLoginPage" class="btn btn-primary btn-block">Sign-In </a>
					</div>
				</div>
			</div>  

			<div class="col-md-6 mb-4">
				<div class="card h-200">
					<img src="assets/professors.jpg" alt="Professors Photo">
					<div class="card-body">
						<h4 class="card-title">Faculty and Staff Log in</h4>
						<div class="card-text">
							Only current faculty and staff members can log in
						</div>
					</div>
					<div class="card-footer py-4">
						<a href="Professors/LoginPage" class="btn btn-primary btn-block">Sign-In </a>
					</div>
				</div>
		</div>
	</section>

	<br></br>
    <div class="footer">
        <p class="footer">Copyright © SOFE3700 </p>
    </div>
</body>
</html>