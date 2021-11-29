<?php
include ("registrarHeader.php");

if (isset($_POST['Year']) && (isset($_POST['Semester'])) )
{
    $year = $_POST['Year'];
    $semester = $_POST['Semester'];
    //$course = $_POST['Courses'];
    //echo $semester;
} 
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Style sheet -->
        <link rel="stylesheet" href="viewCurrentClass.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    </head>
    
    <body>
     <!--Navbar-->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">University Database System</a>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo ($fname)?>&nbsp<?php echo($lname)?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="../homepage.html">Sign out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
        &nbsp&nbsp&nbsp<li class="breadcrumb-item pb-1"><a href="./RegistrarPage.php">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="./viewCourses.php"> Search Classes</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo($semester." ".$year)?></li>
        </ol>
        </nav>

        <h3 class = "display-3", style = "text-align: center">Course Search<br></h3>

        <?php

            $sql = mysqli_query($connection, "SELECT CourseName, CourseYear, CourseCode, Term, Department, Professor FROM courses WHERE CourseYear= '$year' AND Term = '$semester'");
            ?>

            <div class='container'>
            <table class = 'table table-hover'>
            <thead>
                <tr>
                    <th class = 'col-1'>Course Code</th>
                    <th class = 'col-1'>Course Name</th>
                    <th class = 'col-1'>Year</th>
                    <th class = 'col-1'>Term</th>
                    <th class = 'col-1'>Department</th>
                    <th class = 'col-1'>Professor </th>
                </tr></thead></tbody>
            <?php
            
            //$sql3 = mysqli_query($connection, "SELECT DepartmentName FROM departments WHERE departments.DepartmentID = '3'");

            while ($row = mysqli_fetch_assoc($sql))
            {           
                $deptID = $row["Department"];
                $profID = $row["Professor"];
                $sql2 = mysqli_query($connection, "SELECT DepartmentName FROM departments WHERE DepartmentID = '$deptID'");
                $sql3 = mysqli_query($connection, "SELECT Fname,Lname FROM professors WHERE ProfessorID = '$profID'");
                // $sql3 = mysqli_query($connection, "SELECT Fname, Lname FROM Professors WHERE DepartmentID = $deptID");
                $row2 = mysqli_fetch_assoc($sql2);
                $getProfName = mysqli_fetch_assoc($sql3);
                echo "<tr>
                        <td class = 'col-1'>".$row["CourseCode"]. " </td> 
                        <td class = 'col-1'>".$row["CourseName"]. " </td>       
                        <td class = 'col-1'>".$row["CourseYear"]. " </td>    
                        <td class = 'col-1'>".$row["Term"]." </td>    
                        <td class = 'col-1'>".$row2["DepartmentName"]." </td>   
                        <td class = 'col-1'> ". $getProfName["Fname"] ." ".$getProfName["Lname"]." </td>   
                    </tr>";
            } 
            echo "</tbody></table></div>";
            
        ?>
    </body> 