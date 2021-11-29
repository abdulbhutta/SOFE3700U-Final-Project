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

if (isset($_POST['year']))
{
    $year = $_POST['year'];
    $sql = mysqli_query($connection,"select DISTINCT Term from courses ");    

    echo('<select name = "Semester">
        <option value="" hidden>Select Semester</option>');
            while ($row = mysqli_fetch_assoc($sql))
                {
                    echo '<option value = '.$row['Term'].'>'.$row['Term'].'</option>';
                } 
             
} 
?>



