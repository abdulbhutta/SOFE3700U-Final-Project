<?php
include ("registrarHeader.php");
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Style sheet -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <?php include "navbar.php"?>
            <!--Breadcrumbs-->
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    &nbsp&nbsp&nbsp<li class="breadcrumb-item pb-1"><a href="./RegistrarPage.php">Home</a></li>                 
                </ol>
            </nav>

            <div class='container' style="text-align: center">
                <h3 class = "display-3", style = "text-align: center">User Search<br></h3><br></br>
                <form action ="studentResult.php" method = "POST">
                    <input name="search" type="text" size="50" placeholder="Enter UserID, First Name, Or Last Name"/>
                    <input type="submit" value="Search"/>       
                </form>                 
            </div>
    </body>
</html>