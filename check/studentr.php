<?php
$usn=base64_decode($_GET['us']);
$email=base64_decode($_GET['ei']);
$name=base64_decode($_GET['name']);


$conn=mysqli_connect("localhost","root","","recordsubmit");

		$q1="delete from  student where USN='$usn' and Email='$email' and Name='$name'";
		mysqli_query($conn,$q1);
		 echo "<br/><br/><center>Details Of Student Name: <b>". $name ."</b> having Email Id: <b>".$email."</b> is removed</center><br/>";
			echo "<center><a href='admin.php'>BACK</a></center>";
?>