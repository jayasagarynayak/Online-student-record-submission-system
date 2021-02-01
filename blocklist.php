<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: index.php');
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
  	<title>Srnivas Institute of Technology</title>
  	<meta charset="utf-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	<script type="text/javascript">
	history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
	</script>
	
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	

	<style>
		.jumbotron {
  		background-color: #f4511e; /* Orange */
 		 color: #ffffff;
		}
		
		#student {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
<body >
<div class="jumbotron text-center">
    <div><img  src="images/sitlogo.JFIF" alt="SIT" height="150px" width="150px">
    <h1>Srinivas Institute of Technology</h1>
    <p>Quality Education At Affordable Cost</p>
    
  
   </div>
  </div>
  </br>
  <center><b style="color:green;font-size:20px;">Allotment Details</b></center>
  
 <?php
 $conn=mysqli_connect("localhost","root","","recordsubmit");
$query="select * from staff where flag=1 order by semister";
$result=mysqli_query($conn,$query);
$c=mysqli_num_rows($result);
$k=0;
$j=1;

$m=3;
echo "<div class='table-responsive'>";
echo "<table id='student'>";
	
echo "<tr><th>Sl. No.</th><th>Name</th><th>Email Id</th><th>Subject</th><th>Semister</th><th>Block</th><th>Remove Allotment</th></tr>";
$i=1;	
if($c>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		 echo "<td>".$i."</td>";
		 ?>
		 <td><?php echo $row["staffname"] ?></td>
		
		 
		<td><?php echo $row["emailid"] ?></td>
		 <?php
		 echo "<td>".$row["subject"]."</td>";
		  echo "<td>".$row["semister"]."</td>";
		 ?>
		  <td><center><a href="adminr.php?sn=<?php echo base64_encode($row["staffname"]); ?>&ei=<?php echo base64_encode($row["emailid"]); ?>&sb=<?php echo base64_encode($row["subject"]); ?>&sm=<?php echo base64_encode($row["semister"]);?>&cd=<?php echo $k; ?>"><input type='button' class='button' value='Block' onclick="return confirm('Are you sure?')"></a></center></td>
			<td><center><a href="adminr.php?sn=<?php echo base64_encode($row["staffname"]); ?>&ei=<?php echo base64_encode($row["emailid"]); ?>&sb=<?php echo base64_encode($row["subject"]); ?>&sm=<?php echo base64_encode($row["semister"]);?>&cd=<?php echo $m; ?>"><input type='button' class='button' value='Remove' onclick="return confirm('Are you sure?')"></a></center></td>

		 <?php
		 echo "</tr>";
		 $i++;
		
	}
}
else
{
	echo "<tr><td colspan='7' style='text-align:center;'><b>No Alloted Details...!</b></td></tr>";
}
echo "</table></div><br/><br/>";

?> 

 </br>
  
  
  <center><b style="color:red;font-size:20px;">Blocked Details</b></center>
  
 <?php
 $conn=mysqli_connect("localhost","root","","recordsubmit");
$query="select * from staff where flag=0 order by semister";
$result=mysqli_query($conn,$query);
$c=mysqli_num_rows($result);
$k=0;
$j=1;

$m=3;
echo "<div class='table-responsive'>";
echo "<table id='student'>";
	
echo "<tr><th>Sl. No.</th><th>Name</th><th>Email Id</th><th>Subject</th><th>Semister</th><th>UnBlock</th><th>Remove Allotment</th></tr>";
$i=1;	
if($c>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		 echo "<td>".$i."</td>";
		 ?>
		 <td><?php echo $row["staffname"] ?></td>
		
		 
		<td><?php echo $row["emailid"] ?></td>
		 <?php
		 echo "<td>".$row["subject"]."</td>";
		  echo "<td>".$row["semister"]."</td>";
		 ?>
		  <td><center><a href="adminr.php?sn=<?php echo base64_encode($row["staffname"]); ?>&ei=<?php echo base64_encode($row["emailid"]); ?>&sb=<?php echo base64_encode($row["subject"]); ?>&sm=<?php echo base64_encode($row["semister"]);?>&cd=<?php echo $j; ?>"><input type='button' class='button' value='UnBlock' onclick="return confirm('Are you sure?')"></a></center></td>
			<td><center><a href="adminr.php?sn=<?php echo base64_encode($row["staffname"]); ?>&ei=<?php echo base64_encode($row["emailid"]); ?>&sb=<?php echo base64_encode($row["subject"]); ?>&sm=<?php echo base64_encode($row["semister"]);?>&cd=<?php echo $m; ?>"><input type='button' class='button' value='Remove' onclick="return confirm('Are you sure?')"></a></center></td>

		 <?php
		 echo "</tr>";
		 $i++;
		
	}
}
else
{
	echo "<tr><td colspan='7' style='text-align:center;'><b>No Blocked Details...!</b></td></tr>";
}
echo "</table></div><br/><br/>";

?> 

 </br>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
<footer class="container-fluid text-center">
  <a href="index.php" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

  <p>&copy; 2020 Srinivas Institute of Technology | All rights are reserved | Designed by Nikhil Floyd-Jayasagar Y</p> <a href="https://www.sitmng.ac.in/" title="SIT">www.srinivascollege.in</a></p>
</footer>
</body>
</html>