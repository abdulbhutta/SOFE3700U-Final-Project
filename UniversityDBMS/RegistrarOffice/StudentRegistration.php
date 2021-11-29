<?php 
session_start();
date_default_timezone_set('America/Toronto');

$servername = "localhost";
$username = "root";
$password = "password";
try {
    $conn = new PDO("mysql:host=$servername;dbname=universitydbms", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    } 
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }     
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Registration.css">
</head>
<body>
	<div class="topnav" id="myTopnav">
		<a href="RegistrarPage.php">Home</a>
	</div>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1><strong>Registration Form</strong></h1>
		</div>
	</div>

	<div class="login-form">
		<form id="login-form" action="validateStudent.php" method="POST">
			<h2 class="text-center">Student Registration</h2>
			<p>Please enter the details of the new student at the university</p>			
			<div class="form-group">
				<label for="StudentID">Student ID</label>
				<input type="text" class="form-control" name="StudentID" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label for="Username">Username</label>
				<input type="text" class="form-control" name="Username" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label for="password">Temporary Password</label>
			    <input type="password" class="form-control" name="password" required>
			</div>
			<div class="form-group">
				<label for="Fname">First name</label>
				<input type="text" class="form-control" name="Fname" autocomplete="off" required>
			</div>
            <div class="form-group">
				<label for="Lname">Last name</label>
				<input type="text" class="form-control" name="Lname" autocomplete="off" required>
			</div>	
			<div class="form-group">
				<label for="Email">Email</label>
				<input type="text" class="form-control" name="Email" autocomplete="off" required>
			</div>
            <div class="form-group">
				<label for="Year">Year Standing</label>
				<input type="text" class="form-control" name="Year" autocomplete="off" required>
			</div>		
			<div class="form-group">
				<label for="SINNumber">Sin Number</label>
				<input type="text" class="form-control" name="SINNumber" autocomplete="off" required>
			</div>
            <div class="form-group">
				<label for="Program">Program</label>
				<input type="text" class="form-control" name="Program" autocomplete="off" required>
			</div>
            <div class="form-group">
				<label for="PhoneNumber">Phone Number</label>
				<input type="text" class="form-control" name="PhoneNumber" autocomplete="off" required>
			</div>
            <div class="form-group">
				<label for="DOB">DOB</label>
				<input type="text" class="form-control" name="DOB" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label for="Vaccination">Vaccination Status</label>
				<input type="text" class="form-control" name="Vaccination" autocomplete="off" required>
			</div>
			
			
			<input type="submit" class="btn btn-primary btn-block" value="Register">
	    </form>
		
	</div>

	<div class="footer">
        <p class="footer_text">Copyright ©</p>
    </div>

</body>


</html>