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
                    <li class="breadcrumb-item pb-1"><a href="./viewFacultyInfo.php">View Faculty Information</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Department of Electrical, Computer, and Software Engineering</li>
                  
                </ol>
            </nav>
            <div class='container'>
            <h3>Department of Electrical, Computer, and Software Engineering</h3>
            <table class = 'table table-hover'>
            <thead>
                <tr>
                    <th class = 'col-1'>Name </th>
                    <th class = 'col-1'>Phone Number</th>
                </tr></thead></tbody>

            <?php
                    $sql = "SELECT * FROM d_eleecompsofe";
                    
                    $result = mysqli_query($connection,$sql);

                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>
                                <td class = 'col-1'>".$row["Fname"]." ".$row["Lname"]."</td>
                                <td class = 'col-1'>".$row["PhoneNumber"]."</td>
                            </tr>";
                    } 
                    echo "</tbody></table></div>";
                ?>
    </body>