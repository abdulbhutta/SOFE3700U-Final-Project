<?php 
$servername = "localhost";
$username = "root";
$password = "password";
try {
    $conn = new PDO("mysql:host=$servername;dbname=universitydbms", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    } 
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Validate Registration</title>
	<link rel="stylesheet" href="Registration.css">
</head>
<body>
	<h1>Validation</h1>
	<!-- get registration info from register.php and validate -->
	<?php
		$userID = $_POST['StudentID'];	
        $Username = $_POST['Username'];
        $password = $_POST['password'];
		$Fname = $_POST['Fname'];
		$Lname = $_POST['Lname'];
        $Year = $_POST['Year'];
        $SINNumber = $_POST['SINNumber'];
        $Program = $_POST['Program'];
        $PhoneNumber = $_POST['PhoneNumber'];      
        $DOB = $_POST['DOB'];  
        $Vaccination = $_POST['Vaccination'];    
        $Email = $_POST['Email'];  
		$data = $_POST;
        
		if(empty($data['StudentID']) || empty($data['Username']) ||   empty($data['Fname'])||empty($data['Lname'])|| empty($data['Year']) || empty($data['SINNumber']) || empty($data['Program']) || empty($data['PhoneNumber']) || empty($data['DOB']) ) {	
			die('Please fill in ALL fields, no empty fields allowed!');
		}
			
		else {
        echo "User Input OK! - Proceed with adding to database ..... ";
        echo "<br>";
        }  
            try{
              $sql = "INSERT INTO students VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
              $result = $conn->prepare($sql);
              $result ->execute([$userID, $Username, $password, $Fname, $Lname, $Year, $SINNumber, $Program, $PhoneNumber, $DOB, $Vaccination, $Email]);
              echo "New record created successfully";
            
            }
            catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
              }              
              $conn = null;  
    ?>        
        <!--Button-->
        <div style="text-align:center;"> 
                    <form action="RegistrarPage.php">
                        <input type="submit" value="Return" />
                    </form>  
        </div>           
        </div>  
</body>
</html>