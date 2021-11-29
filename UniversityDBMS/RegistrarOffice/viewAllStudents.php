<?php
    include ("registrarHeader.php");
    //Make a query to obtain number of students 
    $q = mysqli_query($connection, "SELECT * FROM totalstudents");
    $row = $q->fetch_row();
    $numOfStudents = $row[0];
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Style sheet -->
        <link rel="stylesheet" href="viewAllStudents.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">University Database System</a>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo ($fname)?>&nbsp<?php echo($lname)?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="./homepage.html">Sign out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>

        <!--Breadcrumbs-->
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                &nbsp&nbsp&nbsp<li class="breadcrumb-item pb-1"><a href="./professorGeneralPage.php">Home</a></li>
                <li class="breadcrumb-item pb-2"><a href="./viewStudentRecords.php">View Student Records</a></li>
                <li class="breadcrumb-item active" aria-current="page">View All Students</li>
            </ol>
        </nav>

         <!--Display Database title -->
        <h3 class = "display-3 ">University Database System<br></h3>
        <p class = "lead">All students enrolled in the University</p>
        <p class = "lead">Total number of students: <?php echo($numOfStudents)?></p>
        <h3 class = "display-5 mt-5">First Year</h3>


        <!--First Year Table-->
        <div class='container'>
            <table class = 'table table-hover mt-5'>
            <thead>
                <tr>
                    <th class = 'col-1'>ID</th>
                    <th class = 'col-1'>Name</th>
                    <th class = 'col-1'>Program</th>
                </tr>
            </thead>
            <tbody>
                <?php
                     //Make query to obtain information for first year  
                     $sql = "SELECT *
                     FROM studentprogram
                     WHERE year = 1";
                     $result = mysqli_query($connection,$sql);
                     //Use while loop to output each students information
                     while ($row = mysqli_fetch_assoc($result))
                     {
                         echo "<tr>
                                 <td class = 'col-1'>".$row["StudentID"]. "</td>
                                 <td class = 'col-1'>".$row["FName"]." ".$row["LName"]."</td>
                                 <td class = 'col-1'>".$row["ProgramName"]."</td>
                             </tr>";
                     } 
                    //close table
                    echo "</tbody></table></div>";
                ?>

            <!--Second Year Table-->    
            <h3 class = "display-5 mt-5">Second Year</h3>
                <p class = "lead"></p>
                <div class='container'>
                    <table class = 'table table-hover mt-5'>
                    <thead>
                        <tr>
                            <th class = 'col-1'>ID</th>
                            <th class = 'col-1'>Name</th>
                            <th class = 'col-1'>Program</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                             //Make query to obtain information for second year 
                            $sql = "SELECT *
                            FROM studentprogram
                            WHERE year = 2";
                            $result = mysqli_query($connection,$sql);
                            //Use while loop to output each students information
                            while ($row = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>
                                        <td class = 'col-1'>".$row["StudentID"]. "</td>
                                        <td class = 'col-1'>".$row["FName"]." ".$row["LName"]."</td>
                                        <td class = 'col-1'>".$row["ProgramName"]."</td>
                                    </tr>";
                            } 
                            //close table
                            echo "</tbody></table></div>";
                        ?>

            <!--Third Year Table-->   
            <h3 class = "display-5 mt-5">Third Year</h3>
                    <div class='container'>
                        <table class = 'table table-hover mt-5'>
                        <thead>
                            <tr>
                                <th class = 'col-1'>ID</th>
                                <th class = 'col-1'>Name</th>
                                <th class = 'col-1'>Program</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                //Make query to obtain information for third year 
                                $sql = "SELECT *
                                FROM studentprogram
                                WHERE year = 3";
                                $result = mysqli_query($connection,$sql);
                                //Use while loop to output each students information
                                while ($row = mysqli_fetch_assoc($result))
                                {
                                    echo "<tr>
                                            <td class = 'col-1'>".$row["StudentID"]. "</td>
                                            <td class = 'col-1'>".$row["FName"]." ".$row["LName"]."</td>
                                            <td class = 'col-1'>".$row["ProgramName"]."</td>
                                        </tr>";
                                } 
                                //Close table
                                echo "</tbody></table></div>";
                            ?>


                <!--Fourth Year Table-->
                <h3 class = "display-5 mt-5">Fourth Year</h3>
                    <p class = "lead"></p>
                    <div class='container'>
                        
                        <table class = 'table table-hover mt-5'>
                        <thead>
                            <tr>
                                <th class = 'col-1'>ID</th>
                                <th class = 'col-1'>Name</th>
                                <th class = 'col-1'>Program</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                //Make query to obtain information for fourth year 
                                $sql = "SELECT *
                                FROM studentprogram
                                WHERE year = 4";
                                $result = mysqli_query($connection,$sql);
                                //Use while loop to output each students information
                                while ($row = mysqli_fetch_assoc($result))
                                {
                                    echo "<tr>
                                            <td class = 'col-1'>".$row["StudentID"]. "</td>
                                            <td class = 'col-1'>".$row["FName"]." ".$row["LName"]."</td>
                                            <td class = 'col-1'>".$row["ProgramName"]."</td>
                                        </tr>";
                                } 
                                //close table
                                echo "</tbody></table></div>";
                ?>



                
       