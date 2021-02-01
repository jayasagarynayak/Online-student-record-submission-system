<!DOCTYPE html>
<html>

<head>
	<title>Student Page-SIT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="editor.css">
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
<body>
<div class="jumbotron text-center" ><br/>
    <div><img  src="images/sitlogo.JFIF" alt="SIT" height="150px" width="150px">
    <h1>Srinivas Institute of Technology</h1>
    <h2 style="color:#000000;">RECORD SUBMISSION SYSTEM<h2>
  </div>
  </div>
  <?php
session_start();
$name= $_SESSION['myValue1'];
$sub= $_SESSION['myValue2'];
$sem= $_SESSION['myValue3'];
//echo $sem;
echo "<div class='container'><div class='row'>";
echo "<h2 class='text-left'><b>Subject Name :</b><b style='color:red;'>".$sub."</b></h2>";
echo "<h2 class='text-left'><b>Semister :</b><b style='color:red;'>".$sem."</b></h2>";
echo "</div></div><br/><br/>";
echo "<center><h3><b>List Of Students</b></h3></center>";
 $conn=mysqli_connect("localhost","root","","recordsubmit");
 $query="select * from student where Sem='$sem' order by USN";
 $result=mysqli_query($conn,$query);
 $count=mysqli_num_rows($result);
 if($count>0)
 {
	 $i=1;
	 echo "<div class='table-responsive'>";
	echo "<table id='student'>";
	echo "<tr><th>Sl. No.</th><th>USN</th><th>Name</th><th>Semister</th></tr>";
	 while($row=mysqli_fetch_assoc($result))
	 {
		 echo "<tr>";
		 echo "<td>".$i."</td>";
		 ?>
		 <td><a href="betweenview.php?us=<?php echo base64_encode($row["USN"]); ?>&sm=<?php echo base64_encode($row["Sem"]); ?>&sb=<?php echo base64_encode($sub); ?>"><?php echo $row["USN"] ?></a></td>
		 <!--echo "<td><a href='details.php'".$row["USN"]."</td>";-->
		 
		<td><a href="betweenview.php?us=<?php echo base64_encode($row["USN"]); ?>&sm=<?php echo base64_encode($row["Sem"]); ?>&sb=<?php echo base64_encode($sub); ?>"><?php echo $row["Name"] ?></a></td>
		 <?php
		 echo "<td>".$row["Sem"]."</td>";
		 echo "</tr>";
		 $i++;
	 }
	 echo "</table></div><br/><br/>";
 }
 else
 {
	 echo "<center><h3><b>No Students Found Studying in </b><b style='color:red;'>".$sem."</b><b> Semister.</b></h3></center>";
 }
 
?>




<center><a href="index.php"><input type="button" value="LOGOUT" name="submit" class="txt2"></a></center>







<footer class="container-fluid text-center">
  <a href="lsubmissions.html" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

  <p>&copy; 2020 Srinivas Institute of Technology | All rights are reserved | Designed by Nikhil Floyd-Jayasagar Y</p> <a href="https://www.sitmng.ac.in/" title="SIT">www.srinivascollege.in</a></p>
</footer>
</body>
</html>