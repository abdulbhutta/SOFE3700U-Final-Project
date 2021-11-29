<?php
include ("registrarHeader.php");
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
                <h6 class = "card-title"><a href = "./viewRegistrarProfile.php">View Profile<br></a></h6>
                <h6 class="card-subtitle mb-2 text-muted">View information about yourself</h6>
            </div>
        </div>

          <!--Card for student registration-->  
          <div class="card">
            <div class="card-body">
                <h6 class = "card-title"><a href = "./StudentRegistration.php">Add Student<br></a></h6>
                <h6 class="card-subtitle mb-2 text-muted">Register a new Student</h6>
            </div>
        </div>

        <!--Card for search student-->  
        <div class="card">
            <div class="card-body">
                <h6 class = "card-title"><a href = "./searchStudent.php">Search Users<br></a></h6>
                <h6 class="card-subtitle mb-2 text-muted">Search Users at the university with Student ID, First Name, Or Last Name</h6>
            </div>
        </div>
        <!--View Student records-->  
        <div class="card">
            <div class="card-body">
                <h6 class = "card-title"><a href = "./viewStudentRecords.php">View Student Records<br></a></h6>
                <h6 class="card-subtitle mb-2 text-muted">View information about students at the University</h6>
            </div>
        </div>
        <!--Card for vaccinated users-->  
        <div class="card">
            <div class="card-body">
                <h6 class = "card-title"><a href = "./vaccinated.php">View Vaccinated users<br></a></h6>
                <h6 class="card-subtitle mb-2 text-muted">View all vaccinated users</h6>
            </div>
        </div>

        <!--Card for unvaccinated users-->  
        <div class="card">
            <div class="card-body">
                <h6 class = "card-title"><a href = "./Unvaccinated.php">View Unvaccinated users<br></a></h6>
                <h6 class="card-subtitle mb-2 text-muted">View all unvaccinated users</h6>
            </div>
        </div>

        <!--Card for courses search-->  
        <div class="card">
            <div class="card-body">
                <h6 class = "card-title"><a href = "./viewCourses.php">View courses by Year/Term<br></a></h6>
                <h6 class="card-subtitle mb-2 text-muted">Search all courses offered at the University by Year/Term</h6>
            </div>
        </div>       
       
    </body>
</html>