<?php
include ("header.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Style sheet -->
        <link rel="stylesheet" href="professorGeneralPage.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        <!--Navbar-->
        <?php include "navbar.php"?>
        <!--Breadcrumbs-->
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    &nbsp&nbsp&nbsp<li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
        </nav>
        <!--Header-->
        <h4 class = "">&nbsp What would you like to do?</h4>  
        <!--Card for view profile-->      
        <div class="card">
            <div class="card-body">
                <h6 class = "card-title"><a href = "./viewProfile.php">View Profile<br></a></h6>
                <h6 class="card-subtitle mb-2 text-muted">View information about yourself</h6>
            </div>
        </div>
        <!--Card for current classes-->  
        <div class="card">
            <div class="card-body">
                <h6 class = "card-title"><a href = "./viewCurrentClasses.php">View Current Classes<br></a></h6>
                <h6 class="card-subtitle mb-2 text-muted">View classes that you are currently teaching</h6>
            </div>
        </div>
        <!--Card for previous classes-->  
        <div class="card">
            <div class="card-body">
                <h6 class = "card-title"><a href = "./viewClasses.php">View Previous Classes<br></a></h6>
                <h6 class="card-subtitle mb-2 text-muted">View classes that you have previously taught</h6>
            </div>
        </div>       
        <!--View Student records-->  
        <div class="card">
            <div class="card-body">
                <h6 class = "card-title"><a href = "./viewStudentRecords.php">View Student Records<br></a></h6>
                <h6 class="card-subtitle mb-2 text-muted">View information about students at the University</h6>
            </div>
        </div>
         <!--View Academic Calendar-->  
         <div class="card">
            <div class="card-body">
                <h6 class = "card-title"><a href = "./viewAcademicSchedule.php">View Academic Schedule<br></a></h6>
                <h6 class="card-subtitle mb-2 text-muted">View important dates through out the course year</h6>
            </div>
        </div>
         <!--View Faculty Informationr-->  
         <div class="card">
            <div class="card-body">
                <h6 class = "card-title"><a href = "./viewFacultyInfo.php">View Faculty Information<br></a></h6>
                <h6 class="card-subtitle mb-2 text-muted">View information about Faculties in the University</h6>
            </div>
        </div>
    </body>
</html>