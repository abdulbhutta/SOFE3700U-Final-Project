<?php
//Include header
include("Registrarheader.php");

//Declar and define the username and password from session variables 
$username = $_SESSION['Username'];
$password = $_SESSION['Password'];
//Query database for all information about the professor
$q = mysqli_query($connection, "SELECT * FROM administrators where Username = '$username' and Password = '$password'");
//Obtain row 
$row = mysqli_fetch_assoc($q);
//Declare and define variables holding information about professor
$fname = $row['FirstName'];
$lname = $row['LastName'];
$sin = $row['SINNumber'];
$phone = $row['PhoneNumber'];
$address = $row['Address'];
$dob = $row['DOB'];
$department = $row['Department'];


//Make a query to get department name from departmentID
$q = mysqli_query($connection, "SELECT DepartmentName FROM departments where DepartmentID = '$department'");
$row = $q->fetch_row();
$department = $row[0];

?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Style sheet -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    
    <body>
        <!--Navbar-->
        <?php include "navbar.php"?>

        <!--Bread crumbs-->
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
            &nbsp&nbsp&nbsp<li class="breadcrumb-item pb-1"><a href="./RegistrarPage.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">View profile</li>
            </ol>
        </nav>

        <!--Personal information container-->
        <div class="container-fluid">
        <h3>Personal Information<h3>
            <hr>
            <div class="row">
                <div class="col-1"><h5>Name:<h5></div>
                <div class="col"><p class = "lead"><?php echo ($fname);?> <?php echo ($lname);?></p></div>
            </div>
            <div class="row">
                <div class="col-1"><h5>Address:<h5></div>
                <div class="col"><p class = "lead"><?php echo ($address);?></p></div>
            </div>
            <div class="row">
                <div class="col-1"><h5>Date of Birth:<h5></div>
                <div class="col"><p class = "lead"><?php echo ($dob);?></p></div>
            </div>
            <div class="row">
                <div class="col-1"><h5>SIN:<h5></div>
                <div class="col"><p class = "lead"><?php echo ($sin);?></p></div>
            </div>
            <div class="row">
                <div class="col-1"><h5>Department:<h5></div>
                <div class="col"><p class = "lead"><?php echo ($department);?></p></div>
            </div>
        </div>

        <!--Contact information container-->
        <div class="container-fluid">
        <h3>Contact Information<h3>
            <hr>
            <div class="row">
                <div class="col-auto"><h5>Phone number:<h5></div>
                <div class="col"><p class = "lead"><?php echo ($phone);?></p></div>
            </div>
        </div>
    </body> 