<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="index.js"></script>
  </head>
  <body>
    <!-- Body of Form starts -->
  	<div class="container">

            <form action="#" id="myForm"  enctype="multipart/form-data">
        <!--First name-->
    		<div class="box">
          <label for="firstName" class="fl fontLabel"> First Name: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input id="fname" type="text" name="firstName" placeholder="First Name"
              class="textBox" autofocus="on">
    			</div>
    			
    		</div>
    		<!--First name-->


        <!--Second name-->
    		<div class="box">
          <label for="secondName" class="fl fontLabel"> Seconed Name: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input id="lname" type="text" required name="secondName"placeholder="Last Name" class="textBox">
    			</div>
    			
    		</div>
    		<!--Second name-->


    		<!---Phone No.------>
    		<div class="box">
          <label for="phone" class="fl fontLabel"> Phone No.: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input id="phoneNo" type="text" required name="phoneNo" maxlength="10" placeholder="Phone No." class="textBox">
    			</div>
    			
    		</div>
    		<!---Phone No.---->


    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input id="email" type="email" required name="email" placeholder="Email Id" class="textBox">
    			</div>
    			
    		</div>
    		<!--Email ID----->


    		<!---Address------>
    		<div class="box">
          <label for="Address" class="fl fontLabel"> Address </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input id="add1" type="text" required name="address" placeholder="Address" class="textBox">
    			</div>
    			
    		</div>
    		<!---Address---->


    		<!---Gender----->
    		<div class="box radio">
          <label for="gender" class="fl fontLabel"> Gender: </label>
    				<input id="radiobtn" type="radio" name="Gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
    				<input id="radiobtn" type="radio" name="Gender" value="Female" required> Female
    		</div>
    		<!---Gender--->

 <label for="pic" class="fl fontLabel"> Profile Picture: </label>
    			
    		<input id="file" type="file" name="pic"/> 



    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input id="btn"  type="Submit" name="Submit" class="submit" value="SUBMIT">
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
