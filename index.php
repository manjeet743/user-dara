<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="index.js"></script>

        <style>
            table {
                font-family: arial, sans-serif;
                /*  border-collapse: collapse;*/
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
            #img{
              
              border-radius: 50%;
            }
        </style>
    </head>
    <body>

        <h2 id="head"> STUDENT DATA</h2>
        <p align="right">
  <a href="form.php"> <button> ADD MORE DATA </button></a>
</p>
        <?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "student";

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$table_html = "<table>
  <tr>
  <th>ID</th>
  <th>Profil pic</th>
  
    <th>First Name</th>
    <th>Last Name</th>
    <th>Phone NO</th>
    <th>Email</th>
    <th>Address</th>
    <th>gender</th>
    <th>Action</th>
   
  </tr>
";

$sql = "SELECT * FROM student_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {

    $table_html .= " 
    <tr id='rowId" . $row['id'] . "' >
    <td class = 'data'>" . $row["id"] . "</td>    
    <td ><img src=./image/".$row["id"].".jpeg alter='error' id='img' width=50 height=50></td>
    <td  class = 'data'>" . $row["firstname"] . "</td>
    <td class = 'data'>" . $row["lastname"] . "</td>
    <td class = 'data'>" . $row["phone"] . "</td>
    <td class = 'data'>" . $row["email"] . "</td>
    <td class = 'data'>" . $row["address"] . "</td>
    <td class = 'data'>" . $row["gender"] . "</td>
        <td class = 'data'><a href='update_data.php?id=" . $row["id"] . "'>
            <button> UPDATE </button></a>  <a onClick='deleteEmp(" . $row["id"] . ")' > <button> DELETE </button></a></td>
   
  </tr>
";
  }
  $table_html .= "</table>";
  echo $table_html;
}
else {
  echo "0 results";
}
$conn->close();
?>
        <script>
            
           
            
            
           
        </script>
    </body>
</html>



