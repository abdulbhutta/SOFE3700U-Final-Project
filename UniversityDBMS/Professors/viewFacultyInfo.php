<?php 
include("header.php");
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Style sheet -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <?php include "navbar.php"?>
            <!--Breadcrumbs-->
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    &nbsp&nbsp&nbsp<li class="breadcrumb-item pb-1"><a href="./professorGeneralPage.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Faculty Information</li>
                </ol>
            </nav>
        <!--Card for department info-->      
        <div class="card">
            <div class="card-body">
                <h6 class = "card-title"><a href = "./viewDepartmentECSE.php">Department of Electrical, Computer, and Software Engineering<br></a></h6>
                <h6 class="card-subtitle mb-2 text-muted">View all faculty members that are in the Department of Electrical, Computer, and Software Engineering</h6>
            </div>
        </div>
    </body>