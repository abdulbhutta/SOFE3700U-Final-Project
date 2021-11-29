<?php
include ("header.php");

//Declare and define variables to hold information about the current month and year
$month = date('m');
$year = date('Y');

//Use if statement to determine what semester it is 
//If the current month is Septermber to December
if ($month>=9 && $month<=12)
{
    //Set semester to fall
    $semester = "Fall";
}
//Else if the current month is January to April
else if ($month>=1 && $month<=4)
{
    //Set the semester to Winter
    $semester = "Winter";
}
//Else it is assumed to be the summer semester
else{
    //Set the semester to Summer
    $semester = "Summer";
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    
    <body>
         <!--Navbar-->
         <?php include "navbar.php"?>
        <!--Bread crumbs-->
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
            &nbsp&nbsp&nbsp<li class="breadcrumb-item pb-1"><a href="./professorGeneralPage.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Current Classes</li>
            </ol>   
        </nav>

        <?php
        //Make a query to get each course that professor is currently teaching 
        $sql = mysqli_query($connection, "SELECT DISTINCT currentlyteaching.CourseCode, courses.CourseName
        FROM currentlyteaching 
        INNER JOIN courses
        where currentlyteaching.ProfessorID = '$profID' and currentlyteaching.CourseYear = '$year' and courses.Term = '$semester' and courses.CourseCode = currentlyteaching.CourseCode");

        //Use while loop to output information about the course (Course code, name, year, and semester)
        while ($row1 = mysqli_fetch_assoc($sql))
        {
            $course = $row1['CourseCode'];
            $courseName = $row1['CourseName'];
            echo '<h3 class = "display-5 ">'.$course.'</h3>';
            echo '<p class = "lead">'.$courseName.' - '.$semester.' '.$year.'</p>';

            //Make another query in the while loop to obtain information about students that enrolled in the professor's class
            $result = mysqli_query($connection, "select students.StudentID, students.FName, students.LName, currentlyenrolled.CRN 
            FROM currentlyenrolled
            INNER JOIN students ON students.StudentID=currentlyenrolled.StudentID
            INNER JOIN courses ON currentlyenrolled.CourseCode=courses.CourseCode
            WHERE currentlyenrolled.CourseCode = '".$course."' AND currentlyenrolled.CourseYear = '".$year."' AND courses.Professor = '".$profID."' AND courses.Term =  '".$semester."'");
            
            //Output the table head information 
            echo 
            "<div class='container'>
            <table class = 'table table-hover'>
            <thead>
                <tr>
                    <th class = 'col-1'>ID</th>
                    <th class = 'col-1'>Name</th>
                    <th class = 'col-1'>CRN</th>
                </tr></thead><tbody>";

            //Use while to loop to go through the student table query to output information about students in each table row 
            while ($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>
                        <td class = 'col-1'>".$row["StudentID"]. "</td>
                        <td class = 'col-1'>".$row["FName"]." ".$row["LName"]."</td>
                        <td class = 'col-1'>".$row["CRN"]."</td>
                    </tr>";
            } 
            //Close the table 
            echo "</tbody></table></div>";
        }
        ?>
    </body> 