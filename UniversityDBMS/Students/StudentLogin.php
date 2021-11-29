<?php
include ("studentHeader.php");

//Obtain variables from form (change this to work for binary)
$username = $_POST['Username'];
$password = $_POST['Password'];

//Declare SQL statements to check if username and password is found in the administator, students, and professor table   
$sql3 = "select * from students where Username='".$username."' AND Password = '".$password."'";

//Insert query to database
$insert3 = $connection->query($sql3);

    //If the inserts true 
    if ($insert3==TRUE) 
    {
        if ($insert3->fetch_row()!= NULL)
        {
            $_SESSION["Username"] = $username;
            $_SESSION["Password"] = $password;
            //Retrieve the professorID from the database using username and password
            $sql = "select StudentID from students where Username='".$username."' AND Password = '".$password."'";
            $insert = $connection->query($sql);
            $row = $insert->fetch_row();
            $userID = $row[0];
            //Save the professorID to session variable
            $_SESSION['StudentID'] = $userID;
            header('Location: index');
        }
        else
        {
            echo("Incorrect Username and Password");
        }
    }
    else {
        die("Error: {$connection->errorno} : {$connection->error}");
    }

$connection->close();

?>