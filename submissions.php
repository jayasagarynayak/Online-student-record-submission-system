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
	<script type="text/javascript">
	history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
	</script>
	<link rel="stylesheet" type="text/css" href="editor.css">
	<style>
	
		#color1
		{
			background-color:#abebc6;
			
		}

		.color2
		{
	
			background-color:#abebc6;
			height:250px;
		}

		.color3
		{
		
			background-color:#abebc6;
			height:250px;
		}
		#show
		{
			background-color:red;
			height:3px;
		}


	
		.jumbotron {
  		background-color: #f4511e; /* Orange */
 		 color: #ffffff;
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
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">


 
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>DID YOU KNOW......
<br><span style="font-style:normal;">"China has banned YouTube, Facebook, Gmail, Twitter, Instagram, Dropbox and Skype from public use."</span></h4>
    </div>
    <div class="item">
      <h4>DID YOU KNOW......
<br><span style="font-style:normal;">"Around the year 1500, Leonardo da Vinci sketched plans for a robot."</span></h4>
    </div>
    <div class="item">
      <h4>DID YOU KNOW......
<br><span style="font-style:normal;">"An ecofriendly car that can act as a backup power generator for your house in the event of a blackout? That’s the futuristic Toyota FCV."</span></h4>
    </div>
<div class="item">
      <h4>DID YOU KNOW......
<br><span style="font-style:normal;">"The first ever domain to be registered, symbolics.com, is still in existence today 31 years and 275 million domain names later."</span></h4>
    </div>
<div class="item">
      <h4>DID YOU KNOW......
<br><span style="font-style:normal;">"In 1999, PayPal, with its original business model, was voted top ten worst business ideas. As of 2015, they are a $9.24 billion dollar business."</span></h4>
    </div>
<div class="item">
      <h4>DID YOU KNOW......
<br><span style="font-style:normal;">"The only state that can be typed on the same line of a QWERTY keyboard is Alaska. You just checked didn’t you?"</span></h4>
    </div>
<div class="item">
      <h4>DID YOU KNOW......
<br><span style="font-style:normal;">"80% of YouTube’s videos are viewed from outside the United States."</span></h4>
    </div>
  </div>

  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br/><br/>
<h2 style="color:red;text-align:center;">Your Submissions</h2>
<?php
if(isset($_POST['submit2']))
{
	$colors=array('color1','color2','color3');
	$usn=$_POST['usns'];
	  $conn= mysqli_connect("localhost","root","","recordsubmit");
	$query="select * from submission where USN='$usn' order by SUBJECT";
	$result=mysqli_query($conn,$query);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		$i=0;
		
		
		while($row=mysqli_fetch_assoc($result))
		{
			//echo "<div class='row'>";
			//echo "<div class='jumbotron text-center' id='show'></div>";
			echo "<div class='container' id='color1'>";
			echo "<h3 style='color:#071df4;text-align:center;'><b>Subject Name: ".$row["SUBJECT"]."</b></h3>";
			echo "<h4 ><b style='color:red';>Program Number: </b>".$row["PRGNO"]."</h4>";
			echo "<h4 ><b style='color:red';>Problem Statement: </b><b>".$row["STATEMENT"]."</b></h4>";
			//echo "<h4><b>".$row["STATEMENT"]."</b></h4>";
			$status=$row["STATUS"];
			$s1=$row["SNAPSHOT1"];
			$s2=$row["SNAPSHOT2"];
			$s3=$row["SNAPSHOT3"];
			$count=0;
			if($s1 != "")
			{
				$count=$count+1;
			}
			if($s2 != "")
			{
				$count=$count+1;
			}
			if($s3 != "")
			{
				$count=$count+1;
			}
			echo "<h4><b style='color:red';>Uploaded Snapshots: </b>".$count."</h4>";
			
			echo "<h4><b style='color:red';>Uploaded On: </b> Date & Time:".$row["DATETIME"]."</h4>";
			//echo "<h4> Date & Time: ".$row["DATETIME"]."</h4>";
			echo "<h4><b style='color:red';>Status: </b>".$status."</h4>";
			echo "</div>";
			//	echo "</div>";
			echo "<br/><br/>";
			if($i>2)
			{
				$i=0;
			}
		}
	}
	else
	{
		echo "<h3 style='text-align:center;'><b> No Submissions Yet...!</b></h3>";
	}
	mysqli_close($conn);

	

}

?>








 <center><a href="homeStudent.php"><input type="submit" value="BACK" name="submit2"  class="txt2" ></a></center>


<footer class="container-fluid text-center">
  <a href="editor.html" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

  <p>&copy; 2020 Srinivas Institute of Technology | All rights are reserved | Designed by Nikhil Floyd-Jayasagar Y</p> <a href="https://www.sitmng.ac.in/" title="SIT">www.srinivascollege.in</a></p>
</footer>
</body>
</html>
