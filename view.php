<!DOCTYPE html>
<html>
<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: index.php');
    exit;
}

?>
<head>
	<title>Student Page-SIT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		.jumbotron {
  		background-color: #f4511e; /* Orange */
 		 color: #ffffff;
		}
	</style>
	<script type="text/javascript">
	function jump()
	{
		window.location.href="lsubmissions.php";
	}
	</script>
	<script>
function disable() {
  document.getElementById("aid").disabled = true;
  document.getElementById("did").disabled = true;
}
</script>

	<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.s1 {
  width: 49%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.s2 {
  width: 49%;
  background-color: #cc0033;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.s1:hover {
  background-color: #45a049;
}
.s2:hover {
  background-color: #a80920;
}

.a {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
	<link rel="stylesheet" type="text/css" href="editor.css">
</head>
<body>

<div class="jumbotron text-center" ><br/>
    <div><img  src="images/sitlogo.JFIF" alt="SIT" height="150px" width="150px">
    <h1>Srinivas Institute of Technology</h1>
    <h2 style="color:#000000;">RECORD SUBMISSION SYSTEM<h2>
  </div>
  </div>
  <?php
$usn=base64_decode($_GET['us']);
$sem=base64_decode($_GET['sm']);
$sub=base64_decode($_GET['sb']);
$prgno=base64_decode($_GET['pn']);
$prg=base64_decode($_GET['pg']);
$date=base64_decode($_GET['dt']);
$ss1=base64_decode($_GET['s1']);
$ss2=base64_decode($_GET['s2']);

$ss3=base64_decode($_GET['s3']);
$stmt=base64_decode($_GET['st']);
$comt=base64_decode($_GET['cmt']);
//echo $comt;

?>
<h3><b><center>Submissions</center></b></h3>
<div class="a">
  <form action="" method="POST">
    <label for="usn" style="color:red;">USN</label>
    <b><input type="text" id="us" name="usn" value="<?php  echo $usn;  ?>" readonly ></b>
	<label for="prgno" style="color:red;">Program Number</label>
   <b> <input type="text" id="pn" name="prgno" value="<?php  echo $prgno;  ?>" readonly></b>

    <label for="statement" style="color:red;">Problem Statement</label>
    <b><input type="text" id="stmt" name="stmt" style="height:80px;" value="<?php  echo $stmt;  ?>" readonly></b>
	<label for="date" style="color:red;">Uploaded On</label>
   <b> <input type="text" id="dat" name="dat" value="<?php  echo $date;  ?>" readonly></b>
	<label for="prg" style="color:red;">Program</label>
    <b><textarea name="txt" type="text"  rows="20" readonly><?php  echo $prg;  ?></textarea></b>
	<?php
	if($ss1!="b")
	{
		echo "<br/><br/>";
		$si1="uploads/".$ss1;
		echo "<label for='snap1' style='color:red;'>SnapShot 1</label><br/><br/>";
		echo "<img src='$si1' height='500px' width='100%'/>";
	}
	if($ss2!="b")
	{
		echo "<br/><br/>";
		$si2="uploads/".$ss2;
		echo "<label for='snap2' style='color:red;'>SnapShot 2</label><br/><br/>";
		echo "<img src='$si2' height='500px' width='100%'/>";
	}
	if($ss3!="b")
	{
		echo "<br/><br/>";
		$si3="uploads/".$ss3;
		echo "<label for='snap3' style='color:red;'>SnapShot 3</label><br/><br/>";
		echo "<img src='$si3' height='500px' width='100%'/>";
	}
	
	
	?>
	<br/><br/><br/>
	<label for="cmt" style="color:red;">Comments</label>
	<?php 
	if($comt == ""){
	?>
    <textarea name="cmt" type="text"  rows="5" placeholder="Comment Here...."></textarea>
	<?php
	}
	else {
	?>
	 <textarea name="cmt" type="text"  rows="5" ><?php echo $comt; ?></textarea>
	 <?php
	}
	?>
   <br/><br/><br/>
   <label for="grade" style="color:red;">Grade points</label>
   <select id="grade" name="grade">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
	<option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
	 <option value="9">9</option>
    <option value="10">10</option>
  </select>
   <center> <input type="submit" value="Approve" class="s1" id="aid" name="aprv">
	<input type="submit" value="Declain" class="s2" id="did" name="decln" ></center>
  </form>
</div>

<?php

if(isset($_POST["aprv"]))
{
	$un=$_POST["usn"];
	$us=$sub;
	$up=$_POST["prgno"];
	$comment=$_POST["cmt"];
	$grade=$_POST["grade"];
	$conn=mysqli_connect("localhost","root","","recordsubmit");
	$query="update submission set STATUS = 'APPROVED' ,COMMENTS = '$comment' ,grade='$grade' where USN='$un' and SUBJECT ='$us' and PRGNO='$up'";
	mysqli_query($conn,$query);
	session_start();
	$_SESSION['myValue1']="NONE"; 
	$_SESSION['myValue2']=$sub; 
	$_SESSION['myValue3']=$sem; 
	echo "<script>jump();</script>";
	//echo "<script type='text/javascript'> alert('This Problem Solving Technique is Approved'</script>";
	
	
	
}

if(isset($_POST["decln"]))
{
	$un=$_POST["usn"];
	$us=$sub;
	$up=$_POST["prgno"];
	$comment=$_POST["cmt"];
	$conn=mysqli_connect("localhost","root","","recordsubmit");
	$query="update submission set STATUS = 'DECLAINED' ,COMMENTS = '$comment' where USN='$un' and SUBJECT ='$us' and PRGNO='$up'";
	mysqli_query($conn,$query);
	session_start();
	$_SESSION['myValue1']="NONE"; 
	$_SESSION['myValue2']=$sub; 
	$_SESSION['myValue3']=$sem; 
	echo "<script>jump();</script>";
	//echo "<script type='text/javascript'> alert('This Problem Solving Technique is Approved'</script>";
	
	
	
}



?>




<footer class="container-fluid text-center">
  <a href="editor.html" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

  <p>&copy; 2020 Srinivas Institute of Technology | All rights are reserved | Designed by Nikhil Floyd-Jayasagar Y</p> <a href="https://www.sitmng.ac.in" title="SIT">www.srinivascollege.in</a></p>
</footer>
</body>
</html>