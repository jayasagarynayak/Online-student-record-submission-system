<?php
$name=base64_decode($_GET['sn']);
$email=base64_decode($_GET['ei']);
$sub=base64_decode($_GET['sb']);
$sem=base64_decode($_GET['sm']);
$flag=$_GET['cd'];
$conn=mysqli_connect("localhost","root","","recordsubmit");
if($flag==0)
{
		$q1="update staff set flag=0 where staffname='$name' and emailid='$email' and subject='$sub' and semister='$sem'";
		mysqli_query($conn,$q1);
		 header("Location:blocklist.php");
		exit;
}
if($flag==1)
{
	$q2="update staff set flag=1 where staffname='$name' and emailid='$email' and subject='$sub' and semister='$sem'";
		mysqli_query($conn,$q2);
		
		 header("Location:blocklist.php");
		exit;
	
}
if($flag==3)
{
	$q2="delete from staff where staffname='$name' and emailid='$email' and subject='$sub' and semister='$sem'";
		mysqli_query($conn,$q2);
		
		 header("Location:blocklist.php");
		exit;
}
?>