<?php
session_start();
//Obtain profID from the session variable
$profID = $_SESSION['profID'];
$currentYear = date('Y');
$month = date('m');
if ($month>=9 && $month<=12)
{
    $semester = "Fall";
}
else if ($month>=1 && $month<=4)
{
    $semester = "Winter";
}
else{
    $semester = "Summer";
}

//Define and make connection to the database
if (!empty($_POST)){
    $dbhost = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "universitydbms";

    $connection=mysqli_connect ($dbhost,$username,$password,$dbname);
    if (mysqli_connect_errno()) {
        die ("Database connection failed ".mysqli_connect_error()."(".mysqli_connect_errno().")");
    }
}

//If just the year parameter is sent to semesterCourse
if (isset($_POST['year']))
{
    //Declare and define year 
    $year = $_POST['year'];
    //Make a query to database to retrieve the semesters that corresponds with the year and profID
    $sql = mysqli_query($connection,"select DISTINCT Term from grades where Year = '".$year."' and ProfessorID = '".$profID."'");
    
    

    //Update semester dropdown box
    echo('<select name = "Semester">
        <option value="" hidden>Select Semester</option>');
            while ($row = mysqli_fetch_assoc($sql))
                {
                    echo '<option value = '.$row['Term'].'>'.$row['Term'].'</option>';
                } 
             
} 

//If just the year and semester parameter is sent to semesterCourse
if (isset($_POST['sYear']) && (isset($_POST['sem'])))
{
    //Declare and define year
    $year = $_POST['sYear'];
    //Declare and define semester
    $sem = $_POST['sem'];
    //Make a query to database to retrieve the coursecode and course name that corresponds with the year, semester, and ProfID
    $sql = mysqli_query($connection,"select DISTINCT CourseCode, CourseName from grades where Year = '".$year."' and Term = '".$sem."' and ProfessorID = '".$profID."'");

    //Update the courses dropdown box
    echo('<select name = "Courses">
        <option value="" hidden>Select Course Code</option>');
            while ($row = mysqli_fetch_assoc($sql))
                {
                    echo '<option value = '.$row['CourseCode'].'>'.$row['CourseCode']. ' - ' .$row['CourseName']. '</option>';
                } 
} 

?>



