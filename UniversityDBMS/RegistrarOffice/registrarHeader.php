<?php
session_start();

//Obtain session username, password, and profID
$username = $_SESSION['Username'];
$password = $_SESSION['Password'];
$userID = $_SESSION['UserID'];

//Make sure to change this when using this page
$dbhost = "localhost";
$username = "root";
$password = "password";
$dbname = "universitydbms";
    
//Output error if there is an issue with the connection
$connection=mysqli_connect ($dbhost,$username,$password,$dbname);
if (mysqli_connect_errno()) {
    die ("Database connection failed ".mysqli_connect_error()."(".mysqli_connect_errno().")");
    $error = $_SESSION['error']; 
}
    //Define query variable to obtain Fname for professor
    $q = mysqli_query($connection, "SELECT FirstName, LastName FROM administrators where UserID = '$userID'");
     //Use while loop to get the course title and course code for the course the professor is currently teaching 
     while ($row = mysqli_fetch_assoc($q))
     {
         //Declare and define course code and course name
         $_SESSION['FirstName'] = $row['FirstName'];
         $_SESSION['LastName'] = $row['LastName'];
     }
    //Set Fname and Lname to values obtained in session
    $fname = $_SESSION['FirstName'];
    $lname = $_SESSION['LastName'];
?>