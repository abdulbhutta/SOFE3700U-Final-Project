<?php
//Include header 
include ("header.php");
//Include the Google Calendar API
include("api/quickstart.php");
//Get data from universityEvents JSON file
$jsonData = file_get_contents("api/universityEvents.json");
//Decode the data 
$data = json_decode($jsonData,true);
//Add each event to the database
foreach ($data as $row){
    $event = $row['event'];
    $date = $row['date'];
    $q = mysqli_query($connection, "INSERT IGNORE INTO events (date, event) VALUES ('$date','$event')");
}
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Style sheet -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    
    <body>
          <!--Navbar-->
          <?php include ("navbar.php")?>
            <!--Bread crumbs-->
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                &nbsp&nbsp&nbsp<li class="breadcrumb-item pb-1"><a href="./professorGeneralPage.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Academic Schedule</li>
            </ol>
            </nav>
        <?php
             
        ?>
        <!--Events-->
        <div class="container-fluid">
        <h3>Events<h3>
        <?php
              $q = mysqli_query($connection, "SELECT * FROM events");
              while ($row = mysqli_fetch_assoc($q))
              {
                  $dateFormatted = date("F d Y",strtotime($row['Date']));
                echo("<p class = 'lead'>".$dateFormatted." - ".$row['Event']."</p>");
              }
            
        ?>
