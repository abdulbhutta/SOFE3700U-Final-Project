 <?php

  include "registrarHeader.php";

  $output = '';

  if(isset($_POST['search'])) {
    $search = $_POST['search'];
    //$search = preg_replace("#[^0-9a-z]i#","", $search);

    $query = mysqli_query($connection, "SELECT * FROM students WHERE StudentID LIKE '%$search%'") or die ("Could not search");
    $count = mysqli_num_rows($query);
    
    if($count == 0){
      $output = "There was no search results!";

    }else{
        ?>
        <div class='container'>
        <h1 style="text-align: center" >Vaccination Status</h1>
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


      while ($row = mysqli_fetch_array($query)) {

        $StudentID = $row ['StudentID'];
        $FName = $row ['FName'];
        $LName = $row ['LName'];
        $PhoneNumber = $row ['PhoneNumber'];

        $output .='<div> '.$StudentID.''.$FName.''.$LName.''.$PhoneNumber.'</div>';
        print ("$output");

      }

    }
  }

  ?>