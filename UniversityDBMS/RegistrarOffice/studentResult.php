<?php
include ("registrarHeader.php");
include ("navbar.php");

if(isset($_POST['search'])) {
    $search = $_POST['search'];
}
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

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
            &nbsp&nbsp&nbsp<li class="breadcrumb-item pb-1"><a href="./RegistrarPage.php">Home</a></li>                 
            </ol>
        </nav>
        
        <div class='container'>
            <h3 class = "display-3", style = "text-align: center">Search Result<br></h3>
            <table class = 'table table-hover'>
                <thead>
                    <tr>
                        <th class = 'col-1'>User ID </th>
                        <th class = 'col-1'>First Name</th>
                        <th class = 'col-1'>Last Name</th>
                        <th class = 'col-1'>Phone Number</th>
                        <th class = 'col-1'>Vaccinated</th>
                    </tr>
                </thead>
                
                <?php  
                //$search = '100785';                                
                $sql = "SELECT ProfessorID as UserID, Fname as FName, Lname as LName, PhoneNumber, Vaccinated FROM professors WHERE ProfessorID LIKE '%$search%' OR FName LIKE '%$search%' OR LName LIKE '%$search%'
                        UNION
                        SELECT StudentID as UserID, FName, LName, PhoneNumber, Vaccinated FROM students WHERE StudentID LIKE '%$search%' OR FName LIKE '%$search%' OR LName LIKE '%$search%'
                        UNION
                        SELECT UserID as UserID, FirstName as FName, LastName as LName, PhoneNumber, Vaccinated FROM Administrators WHERE UserID LIKE '%$search%' OR FirstName LIKE '%$search%' OR LastName LIKE '%$search%'";
                        
                $result = mysqli_query($connection,$sql);
                while ($row = mysqli_fetch_assoc($result)){
                    echo"<tr>
                            <td class = 'col-1'>".$row["UserID"]."</td>    
                            <td class = 'col-1'>".$row["FName"]."</td>
                            <td class = 'col-1'>".$row["LName"]."</td> 
                            <td class = 'col-1'>".$row["PhoneNumber"]."</td>
                            <td class = 'col-1'>".$row["Vaccinated"]."</td>
                        </tr>";
                } 
                echo "</tbody></table></div>";
                ?>                            
            </table> 
            <div style="text-align:center;"> 
                <form action="searchStudent.php">
                    <input type="submit" value="Return" />
                </form>  
            </div>          
        </div>
    </body>
</html>

