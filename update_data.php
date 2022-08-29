<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "student";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM student_data where id=" . $_GET['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
// print_r($row);
} else {
    echo "0 results";
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form</title>
        <link href="style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!-- Body of Form starts -->
        <div class="container">
            <form action="update.php" method="post" autocomplete="on">
                <input type="hidden" name="empId" value="<?php echo !empty($row['id']) ? $row['id'] : ''; ?>" />
                <!--First name-->
                <div class="box">
                    <label for="firstName" class="fl fontLabel"> First Name: </label>
                    <div class="new iconBox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="fr">
                        <input type="text" name="firstName" placeholder="First Name"
                               class="textBox" autofocus="on" value="<?php echo!empty($row['firstname']) ? $row['firstname'] : ''; ?>" required>
                    </div>
                    <div class="clr"></div>
                </div>
                <!--First name-->


                <!--Second name-->
                <div class="box">
                    <label for="secondName" class="fl fontLabel"> Seconed Name: </label>
                    <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
                    <div class="fr">
                        <input type="text" required name="secondName"
                               placeholder="Last Name" class="textBox" value="<?php echo!empty($row['lastname']) ? $row['lastname'] : ''; ?>" >
                    </div>
                    <div class="clr"></div>
                </div>
                <!--Second name-->


                <!---Phone No.------>
                <div class="box">
                    <label for="phone" class="fl fontLabel"> Phone No.: </label>
                    <div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                    <div class="fr">
                        <input type="text" required name="phoneNo" maxlength="10" placeholder="Phone No." class="textBox" value="<?php echo!empty($row['phone']) ? $row['phone'] : ''; ?>" >
                    </div>
                    <div class="clr"></div>
                </div>
                <!---Phone No.---->


                <!---Email ID---->
                <div class="box">
                    <label for="email" class="fl fontLabel"> Email ID: </label>
                    <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="fr">
                        <input type="email" required name="email" placeholder="Email Id" class="textBox" value="<?php echo!empty($row['email']) ? $row['email'] : ''; ?>" >
                    </div>
                    <div class="clr"></div>
                </div>
                <!--Email ID----->


                <!---Password------>
                <div class="box">
                    <label for="password" class="fl fontLabel"> Address </label>
                    <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
                    <div class="fr">
                        <input type="text" required name="address" placeholder="Address" class="textBox" value="<?php echo!empty($row['address']) ? $row['address'] : ''; ?>" >
                    </div>
                    <div class="clr"></div>
                </div>
                <!---Password---->

                <!---Gender----->
                <div class="box radio">
                    <label for="gender" class="fl fontLabel"> Gender: </label>
                    <input type="radio" name="Gender" value="Male" required <?php echo $row['gender'] == 'Male' ? "checked='checked'" : '' ?> > Male &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="radio" name="Gender" value="Female" required <?php echo $row['gender'] == 'Female' ? "checked='checked'" : '' ?> > Female
                </div>
                <!---Gender--->





                <!---Submit Button------>
                <div class="box" style="background: #2d3e3f">
                    <input type="Submit" name="Submit" class="submit" value="SUBMIT">
                </div>
                <!---Submit Button----->
            </form>
            <div class="box" style="background: #2d3e3f">
    				<a href="index.php"><input type="Submit" name="Submit" class="submit" value="BACK"></a>
    		</div>
        </div>
        <!--Body of Form ends--->
    </body>
</html>




<!-- serialize( $values_in_form_of_array ) -->

<!-- $myvar = array( 
    'hello', 
    42, 
    array(1, 'two'), 
    'apple'
); 

echo serialize($myvar)
a:4:{
    i:0; => s:5:"hello";
    i:1; => i:42;
    i:2; => a:2:{
                i:0;i:1;
                i:1;s:3:"two";
            }
    i:3; => s:5:"apple";
} 


echo unserialize($myvar)
Array
(
    [0] => hello
    [1] => 42
    [2] => Array
        (
            [0] => 1
            [1] => two
        )

    [3] => apple
)




-->
