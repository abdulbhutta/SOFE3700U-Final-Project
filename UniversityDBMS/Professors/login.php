<?php
session_start();

if (!empty($_POST)){
    $dbhost = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "universitydbms";

    $connection=mysqli_connect ($dbhost,$username,$password,$dbname);
    if (mysqli_connect_errno()) {
        die ("Database connection failed ".mysqli_connect_error()."(".mysqli_connect_errno().")");
    }

//Obtain variables from form (change this to work for binary)
$username = $_POST['Username'];
$password = $_POST['Password'];


//Declare SQL statements to check if username and password is found in the administator, students, and professor table   
$sql3 = "select * from professors where Username='".$username."' AND Password = '".$password."'";

//Insert query to database
$insert3 = $connection->query($sql3);

    //If the inserts true 
    if ($insert3==TRUE) 
    {
        if ($insert3->fetch_row()!= NULL)
        {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            //Retrieve the professorID from the database using username and password
            $sql = "select ProfessorID from professors where Username='".$username."' AND Password = '".$password."'";
            $insert = $connection->query($sql);
            $row = $insert->fetch_row();
            $profID = $row[0];
            //Save the professorID to session variable
            $_SESSION['profID'] = $profID;
            header('Location: professorGeneralPage.php');
        }
        else
        {
            echo("USER NOT FOUND");
        }
    }
    else {
        die("Error: {$connection->errorno} : {$connection->error}");
    }

$connection->close();
}
?>