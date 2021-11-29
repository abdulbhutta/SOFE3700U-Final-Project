<?php
include ("header.php");
//If the user sends the year, semester, and courses
if (isset($_POST['Year']) && (isset($_POST['Semester'])) &&(isset($_POST['Courses'])))
{
    //Declare and define varaiables
    $year = $_POST['Year'];
    $semester = $_POST['Semester'];
    $course = $_POST['Courses'];
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
     <?php include ("navbar.php");?>
        <!--Bread crumbs-->
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
        &nbsp&nbsp&nbsp<li class="breadcrumb-item pb-1"><a href="./professorGeneralPage.php">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="./viewClasses.php"> View Previous Classes</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo($course." ".$semester." ".$year)?></li>
        </ol>
        </nav>
        
        <!-- Course Information -->
        <h3 class = "display-3 mt-5"><?php echo ($course)?></h3>
        <p class = "lead"><?php echo ($semester." ".$year)?></p>
        <?php
            //Declare and define query variable. This will be used to retrive the currently taught coursecode and coursename 
            $sql = mysqli_query($connection, "SELECT DISTINCT currentlyteaching.CourseCode, courses.CourseName
            FROM currentlyteaching 
            INNER JOIN courses
            where currentlyteaching.ProfessorID = '$profID' and currentlyteaching.CourseYear = '$year' and courses.Term = '$semester' and courses.CourseCode = currentlyteaching.CourseCode");


            //Use while loop to get the course title and course code for the course the professor is currently teaching 
            while ($row1 = mysqli_fetch_assoc($sql))
            {
                //Declare and define course code and course name
                $course = $row1['CourseCode'];
                $CourseName = $row1['CourseName'];
                
            }
            
            //Make a query to obtain information about each student in previously taught class
            $result = mysqli_query($connection, "select grades.StudentID, students.FName, students.LName, students.PhoneNumber, grades.CRN,grades.LetterGrade 
            FROM grades 
            INNER JOIN students ON students.StudentID=grades.StudentID
            WHERE grades.CourseCode = '".$course."' AND grades.Year =  '".$year."' AND grades.ProfessorID =  '".$profID."' AND grades.Term =  '".$semester."'");

        
            //Output table head for each class
            echo "
            
            <div class='container'>
            <table class = 'table table-hover'>
            <thead>
                <tr>
                    <th class = 'col-1'>ID</th>
                    <th class = 'col-1'>Name</th>
                    <th class = 'col-1'>CRN</th>
                    <th class = 'col-1'>Grade</th>
                </tr></thead></tbody>";

            //Use while loop to output each table row 
            while ($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>
                        <td class = 'col-1'>".$row["StudentID"]. "</td>
                        <td class = 'col-1'>".$row["FName"]." ".$row["LName"]."</td>
                        <td class = 'col-1'>".$row["CRN"]."</td>
                        <td class = 'col-1'>".$row["LetterGrade"]."</td>
                    </tr>";
            } 
            //Close table
            echo "</tbody></table></div>";
        ?>


        <!-- Class statistics -->
        <h3 class = "display-5 mt-5">Course Statistics</h3>
        <p class = "lead"></p>

        <h3 class = "display-5 fs-4">Course Average = 
            <?php
                //Make a query to get the average GPA from GPA view
                $q = mysqli_query($connection, "SELECT avg(GPA) FROM gpa WHERE CourseCode = '$course' AND Year = '$year' AND Term = '$semester' AND ProfessorID = '$profID'");
                $row = $q->fetch_row();
                $avg = $row[0];
                //Format this output to always show 2 places after decimal
                $format = number_format($avg,"2");
                //Output the format
                echo($format);
            ?>
        </h3>

        <h3 class = "display-5 fs-4">Students above class average</h3> 
        <?php
            //Make a query to get all students who were above course average in the specific course, year, and semester.
            //NOTE - CRN is not included as this is the course average. This means that includes all students were enrolled in the specific course regardless of the CRN  
            $result = mysqli_query($connection, "Select * FROM aboveclassavg WHERE CourseCode = '".$course."' AND Year = '".$year."' AND Term = '".$semester."'");
            //Use while loop to output all students above the course average
            while ($row = mysqli_fetch_assoc($result))
            {
                $gpa = $row['GPA'];
                //Format this output to always show 2 places after decimal
                $format = number_format($gpa,"2");
                //Output to the user 
                echo("<p class = 'lead'>".$row['StudentID']." - ".$format." GPA</p>");
            }
             
        ?>
    </body> 