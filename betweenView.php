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
	
	<link rel="stylesheet" type="text/css" href="editor.css">
	
	<style>
		.jumbotron {
  		background-color: #f4511e; /* Orange */
 		 color: #ffffff;
		}
		#student {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
  align:center;
}

#student td, #student th {
  border: 1px solid #ddd;
  padding: 8px;
}

#student tr:nth-child(even){background-color: #f2f2f2;}

#student tr:hover {background-color: #ddd;}

#student th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
	</style>
	</head>
<body>
<div class="jumbotron text-center" ><br/>
    <div><img src="images/sitlogo.JFIF" alt="SIT" height="150px" width="150px">
    <h1>Srinivas Institute of Technology</h1>
    <h2 style="color:#000000;">RECORD SUBMISSION SYSTEM<h2>
  </div>
  </div>
  
  
  
  <?php
$usn=base64_decode($_GET['us']);
$sem=base64_decode($_GET['sm']);
$sub=base64_decode($_GET['sb']);



$conn=mysqli_connect("localhost","root","","recordsubmit");
$q="select * from submission where USN='$usn' and SEM='$sem' and SUBJECT='$sub' order by PRGNO";
$result=mysqli_query($conn,$q);
$count=mysqli_num_rows($result);
if($count>0)
{
	$i=1;
	echo "<center><h3><b>Submitted Program</b></h3></center>";
	echo "<center><table id='student'>";
	echo "<tr><th>Sl. No.</th><th>USN</th><th>Program Number</th><th>Status</th></tr>";
while($row=mysqli_fetch_assoc($result)){
$prgno=$row["PRGNO"];
$prg=$row["PRG"];
$date=$row["DATETIME"];
$smt=$row["STATEMENT"];
$status=$row["STATUS"];
$S1=$row["SNAPSHOT1"];
$cmts=$row["COMMENTS"];
if(!$S1)
{
	$S1="b";
}
$S2=$row["SNAPSHOT2"];
if(!$S2)
{
	$S2="b";
}
$S3=$row["SNAPSHOT3"];
if(!$S3)
{
	$S3="b";
}
$status=$row["STATUS"];
echo "<tr>";
		 echo "<td>".$i."</td>";
		 if($status=="PENDING" || $status=="DECLAINED"){
		 ?>
		 <td><a href="view.php?us=<?php echo base64_encode($row["USN"]); ?>&sm=<?php echo base64_encode($sem); ?>&sb=<?php echo base64_encode($sub); ?>&pn=<?php echo base64_encode($prgno); ?>&pg=<?php echo base64_encode($prg); ?>&dt=<?php echo base64_encode($date); ?>&s1=<?php echo base64_encode($S1); ?>&s2=<?php echo base64_encode($S2); ?>&s3=<?php echo base64_encode($S3); ?>&st=<?php echo base64_encode($smt); ?>&cmt=<?php echo base64_encode($cmts); ?>"><?php echo $row["USN"] ?></a></td>
		 <!--echo "<td><a href='details.php'".$row["USN"]."</td>";-->
		 
		<td><a href="view.php?us=<?php echo base64_encode($row["USN"]); ?>&sm=<?php echo base64_encode($sem); ?>&sb=<?php echo base64_encode($sub); ?>&pn=<?php echo base64_encode($prgno); ?>&pg=<?php echo base64_encode($prg); ?>&dt=<?php echo base64_encode($date); ?>&s1=<?php echo base64_encode($S1); ?>&s2=<?php echo base64_encode($S2); ?>&s3=<?php echo base64_encode($S3); ?>&st=<?php echo base64_encode($smt); ?>&cmt=<?php echo base64_encode($cmts); ?>"><?php echo $prgno; ?></a></td>
		 <?php
		 }
		 else
		 {
			 ?>
			 <td><?php echo $row["USN"] ?></td>
			 <td><?php echo $prgno; ?></td>
			 <?php
		 }
		
		if($status=="PENDING" || $status=="DECLAINED"){
		echo "<td style='color:red;'>".$status."</td>";
		}
		else{
			echo "<td>".$status."</td>";
		}
		 echo "</tr>";
		 $i++;
//echo $prg;
}
 echo "</table></center><br/><br/>";
}
else
{
	echo "<center><b>No Submissions Yet..!</b></center>";
}
?>
  
  
  
  <footer class="container-fluid text-center">
  <a href="editor.html" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

  <p>&copy; 2020 Srinivas institute of Technology | All rights are reserved | Designed by Nikhil Floyd-Jayasagar Y</p> <a href="https://www.sitmng.ac.in/" title="SIT">www.srinivascollege.in</a></p>
</footer>
</body>
</html>