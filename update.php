
<html>
<body>

 <?php
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "student";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 $sql="update student_data set firstname='".$_POST['firstName']."',lastname='".$_POST['secondName']."'"
         . ", phone='".$_POST['phoneNo']."', email='".$_POST['email']."', "
         . "address='".$_POST['address']."', gender='".$_POST['Gender']."'   where id='".$_POST['empId']."'";
$conn->query($sql);





echo " records updated successfully";

$conn->close();
?> 

</body>
</html>
