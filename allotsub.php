<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: index.php');
    exit;
}

?>


<!DOCTYPE html>
<html>
<head><title>Admin-SIT</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<script type="text/javascript">
function validateForm() {
  var a = document.forms["addf"]["email"].value;
  var b = document.forms["addf"]["subject"].value;
  var c = document.forms["addf"]["psw1"].value;
   var d = document.forms["addf"]["psw2"].value;

  if (a == "" || b=="Select Subject" || c=="" || d=="") {
    alert("All the Fields are Compulsary.");
    return false;
  }
}
</script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password],select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus ,select {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<form action="recovery.php" method="POST"  name="addf" style="border:1px solid #ccc">
  <div class="container">
    <h1>Allotment Of Subjects</h1>
    <p>Please fill in this form to Assign the Subject to the Respected Faculty.</p>
	 <p style="color:red;"><b>Please Note:If you want to remove the Allotment please click on the "Block Allotment" link.</b></p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
	
	 <label for="subject"><b>Subject</b></label>
	 
   
	<select id="sbt" name="subjct">
	<option>Select Subject</option>
	<option>Programming In C And Datastructure</option>
	<option>CAED</option>
	<option>Data Structure Lab</option>
	<option>Analog And Digital Electronics Lab</option>
	<option>Microprocessor Lab</option>
	<option>Design And Analysis Of Algorithms Lab</option>
	<option>Computer Network</option>
	<option>Database Management System Lab</option>
	<option>Computer Graphics Lab</option>
	<option>System Software And Compailer Design Lab</option>
	<option>Web Technology Lab</option>
	<option>Machine Learning Lab</option>
	<option>Engineering Physics</option>
	<option>Engineering Chemistry</option>
	<option>Final Project</option>
	</select>
	
    
	
	
	<label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw1" >
	
	
	
	<label for="psw"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw2" >
    
   
  

    <div class="clearfix">
     <!-- <button type="submit" class="cancelbtn"  name="rallot">Remove Allotment</button>-->
      <button type="submit" class="signupbtn"  name="mallot">Make Allotment</button>
    </div>
  </div>
</form>
<br/><br/>
<footer class="container-fluid text-center">
  <a href="editor.html" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

  <p>&copy; 2020 | All rights are reserved | Designed by Nikhil Floyd-Jayasagar Y</p> <a href="https://www.sitmng.ac.in" title="SIT">www.srinivascollege.in</a></p>
</footer>
</body>
</html>