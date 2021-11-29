<?php
include ("registrarHeader.php");
include ("navbar.php");
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Style sheet -->
        <link rel="stylesheet" href="homepage.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--Javascript-->
        <script src = "viewCourseFunctions.js" type = "text/javascript"></script>
    </head>
    
    <body>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
        &nbsp&nbsp&nbsp<li class="breadcrumb-item pb-1"><a href="./RegistrarPage.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Previous Classes</li>
        </ol>
        </nav>
        
        <div class="container-fluid">
        <h3>Select course: </h3>
        <form method = "POST" action = "courseResult.php">
            <select name = "Year" class ="Year" required>
            <option value="" hidden selected>Select Year</option>
                <?php
                    $sql =  mysqli_query($connection,"select DISTINCT CourseYear from courses ORDER BY CourseYear");
                    while ($row = mysqli_fetch_assoc($sql))
                    {
                        echo '<option value = '.$row['CourseYear'].'>'.$row['CourseYear'].'</option>';
                    }
                ?>   
            </select>
            <select name = "Semester" class ="Semester" required>
                <option value="" hidden>Select Semester</option>              
            </select>
          
            <br><br> 
            <button type="submit" class="btn btn-outline-primary" id = "btnSubmit" name = "submit">Submit</button>
        </form>
                </div>
    </body> 