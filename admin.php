<!DOCTYPE html>
<html>
<head><title>Admin-SIT</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
	history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
	</script>
	<style>
		.jumbotron {
  		background-color: #f4511e; /* Orange */
 		 color: #ffffff;
		}
	</style>

<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: index.php');
    exit;
}

?>



</head>
<body>


<div class="jumbotron text-center" ><br/>
    <div><img  src="images/sitlogo.JFIF" alt="SIT" height="150px" width="150px">
    <h1>Srinivas Institute of Technology</h1>
    <h2 style="color:#000000;">ADMIN PANEL<h2>
  </div>
  </div><center><table border="5" cellspacing="10" cellpadding="10">
  <tr><th>
  <center><b style="color:black;font-size:25px;">STAFF</b></center></br></th><tr><td>
<center><a href="addstaff.php"><b style="color:green;font-size:15px;">STAFF DETAIL</b></a></center></br></td></tr><tr><td>
<center><a href="allotsub.php"><b style="color:green;font-size:15px;">SUBJECT ALLOTMENT</b></a></center></br></td></tr><tr><td>
<center><a href="blocklist.php"><b style="color:red;font-size:15px;">BLOCK ALLOTMENT</b></a></center></br></td></tr></table></center>
<br/><br/><center>
<table border="5" cellspacing="10" cellpadding="10"> <tr><th>
  <center><b style="color:black;font-size:25px;">STUDENT</b></center></br></th><tr><td>

<center><a href="admins.php"><b style="color:green;font-size:15px;">STUDENT INFORMATION</b></a></center></br></td></tr><tr><td>
<center><a href="showdetail.php"><b style="color:green;font-size:15px;">VIEW DETAILS</b></a></center></br></td></tr></table></center><br/><br/>

<center><a href="index.php"><input type="submit" value="LOGOUT" name="submit2"  class="txt2" ></a></center>
<footer class="container-fluid text-center">
  <a href="editor.html" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

  <p>&copy; 2020 Srinivas Institute of Technology | All rights are reserved | Designed by Nikhil Floyd-Jayasagar Y</p> <a href="https://www.sitmng.ac.in/" title="SIT">www.srinivascollege.in</a></p>
</footer>
</body>
</html>
