
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
	<title>Student Page-SIT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
	
	<link rel="stylesheet" type="text/css" href="editor.css">
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
	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>
		</head>
<body>
<div class="jumbotron text-center" ><br/>
    <div><img  src="images/sitlogo.JFIF" alt="SIT" height="150px" width="150px">
    <h1>Srinivas Institute of Technology</h1>
    <h2 style="color:#000000;">RECORD SUBMISSION SYSTEM<h2>
  </div>
  </div>
  
  
   <center><b style="color:green;font-size:20px;">Student Details</b></center><br/>
  
 <?php
 $conn=mysqli_connect("localhost","root","","recordsubmit");
 $q="select distinct Sem from student order by Sem";
 $rt=mysqli_query($conn,$q);
 if(mysqli_num_rows($rt)>0)
 {
	 while($r=mysqli_fetch_assoc($rt))
	 {
		 $s=$r["Sem"];
$query="select * from student where Sem=$s order by USN";
$result=mysqli_query($conn,$query);
$c=mysqli_num_rows($result);?>
<center><b style="font-size:20px;">Semister: </b><b style="color:red;font-size:20px;"><?php echo $s;?></b></center>
<?php
echo "<div class='table-responsive'>";
echo "<table id='student'>";
	
echo "<tr><th>Sl. No.</th><th>USN</th><th>Name</th><th>Email Id</th><th>Semister</th><th>Remove Details</th></tr>";
$i=1;	
if($c>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		 echo "<td>".$i."</td>";
		 ?>
		 <td><?php echo $row["USN"] ?></td>
		
		 
		<td><?php echo $row["Name"] ?></td>
		 <?php
		 echo "<td>".$row["Email"]."</td>";
		  echo "<td>".$row["Sem"]."</td>";
		 ?>
		<td><center><a href="studentr.php?us=<?php echo base64_encode($row["USN"]); ?>&ei=<?php echo base64_encode($row["Email"]); ?>&name=<?php echo base64_encode($row["Name"]); ?>"><input type='button' class='button' value='Remove' onclick="return confirm('Are you sure?')"></a></center></td>

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
	 }
 }

?> 
  
  
  
  
  

<footer class="container-fluid text-center">
  <a href="homeStudent.php" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

  <p>&copy; 2020 Srinivas Institute of Technology | All rights are reserved | Designed by Nikhil Floyd-Jayasagar Y</p> <a href="https://www.sitmng.ac.in/" title="SIT">www.srinivascollege.in</a></p>
</footer>

</body>


</html>