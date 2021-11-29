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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <?php include "navbar.php"?>
            <!--Breadcrumbs-->
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    &nbsp&nbsp&nbsp<li class="breadcrumb-item pb-1"><a href="./RegistrarPage.php">Home</a></li>                 
                </ol>
            </nav>

            <div class='container'>
                <h1 style="text-align: center" >Vaccination Status</h1>
                <table class = 'table table-hover'>
                    <thead>
                        <tr>
                            <th class = 'col-1'>User ID </th>
                            <th class = 'col-1'>First Name</th>
                            <th class = 'col-1'>Last Name</th>
                            <th class = 'col-1'>Phone Number</th>
                            <th class = 'col-1'>Vaccinated</th>
                        </tr>
                    </thead>

                    <?php                                   
                        $sql = "SELECT StudentID as UserID, Fname, Lname, PhoneNumber, Vaccinated FROM STUDENTS WHERE vaccinated = 'No' 
                                UNION
                                SELECT ProfessorID as UserID, Fname, Lname, PhoneNumber, Vaccinated FROM Professors WHERE vaccinated = 'No'
                                UNION
                                SELECT UserID as UserID, FirstName as Fname, LastName as LName, PhoneNumber, Vaccinated FROM Administrators WHERE vaccinated = 'No';"; 
                        

                        $result = mysqli_query($connection,$sql);
                        while ($row = mysqli_fetch_assoc($result)){

                            echo "<tr>
                                    <td class = 'col-1'>".$row["UserID"]."</td>    
                                    <td class = 'col-1'>".$row["Fname"]."</td>
                                    <td class = 'col-1'>".$row["Lname"]."</td> 
                                    <td class = 'col-1'>".$row["PhoneNumber"]."</td>
                                    <td class = 'col-1'>".$row["Vaccinated"]."</td>
                                </tr>";
                        } 
                        echo "</tbody></table></div>";
                    ?>                            
                </table> 
            </div>
    </body>
</html>