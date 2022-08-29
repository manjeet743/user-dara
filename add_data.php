<?php
print_r($_POST);
print_r($_FILES['pic']);

//ttt
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "student";


// // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
 }

$stmt = $conn->prepare("INSERT INTO student_data (firstname, lastname, phone, email, "
        . "address, gender) VALUES (?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssss", $fname, $lname, $phone, $email, $address, $gender);

$fname = $_POST["firstName"];
$lname = $_POST["secondName"];
$phone = $_POST["phoneNo"];
$email = $_POST["email"];
$address = $_POST["address"];
$gender = $_POST["Gender"];
$stmt->execute();

$id = $conn->insert_id;
$file_name = $_FILES['pic']['name'] ;
  $extension = pathinfo($file_name, PATHINFO_EXTENSION);

 $filename = $_FILES["pic"]["name"];
 $tempname = $_FILES["pic"]["tmp_name"];
 $folder = "./image/".$id.".".$extension;
 $moved = move_uploaded_file($tempname,$folder);



//$id = $conn->insert_id;
// $file_name = $_FILES['pic']['name'] ;
//   $extension = pathinfo($file_name, PATHINFO_EXTENSION);

//  $filename = $_FILES["pic"]["name"];
//  $tempname = $_FILES["pic"]["tmp_name"];
//  $folder = "./images/".$id.".".$extension;
//  $moved = move_uploaded_file($tempname,$folder);
$stmt->close();
$conn->close();
echo "Form Submitted Succesfully=".$fname;



?>