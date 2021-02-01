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
	<script type="text/javascript">
	history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
	</script>
	<script type="text/javascript">
function validateForm() {
  var a = document.forms["frmLogin"]["eml"].value;
  var b = document.forms["frmLogin"]["opass"].value;
  var c = document.forms["frmLogin"]["npass"].value;
  var d = document.forms["frmLogin"]["cpass"].value;
  if (a == "" || b=="" || c=="" || d=="") {
    alert("All the Fields are Compulsary.");
    return false;
  }
}
</script>
	<style>
		.jumbotron {
  		background-color: #f4511e; /* Orange */
 		 color: #ffffff;
		}
	</style>
	<!--<script type="text/javascript">
	history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
	</script>-->
	<script type="text/javascript">
		function jump()
		{
			
			window.location.href="homeStudent.php";
		}
		function jump1()
		{
			window.location.href="index.php";
		}
		function jump2()
		{
			window.location.href="admin.php";
		}
		
		
	</script>
	
</head>
<body>

<?php

   if(isset($_POST['btn']))
    {
		
       $email = $_POST['eml'];
       $pass=$_POST['pass'];
	   $select=$_POST['slt'];
	
	if($select=="----Faculty/Student Page----")
	{
		echo '<script type="text/javascript">';
			echo ' alert("Select Whether you are requesting Faculty portal or Student Portal.")';  
			echo '</script>';
			echo "<script>jump1();</script>";
		
	}
	if($select=="Student")
	{
		
		$conn=mysqli_connect("localhost","root","","recordsubmit");
		
		$query="SELECT * FROM student WHERE Email='$email' AND Password='$pass'";
		$result=mysqli_query($conn,$query);
		$count=mysqli_num_rows($result);
		$row=mysqli_fetch_assoc($result);
		$us=$row["USN"];
		$nm=$row["Name"];
		
		if($count==1)
		{			
			
			session_start();
			$_SESSION['usn']=$us;
			$_SESSION['name']=$nm;
			echo "<script>jump();</script>";
			
  	    }
		if($count==0)
		{
			
			
			echo "<script type='text/javascript'> alert('UserName Or Password is Incorrect'); </script>";
			echo "<script>jump1();</script>";
			
		}
		 mysqli_close($conn);
		

		
	}
	if($select=="ADMIN")
	{
		
		$conn=mysqli_connect("localhost","root","","recordsubmit");
		
		$query="SELECT * FROM admin WHERE Email='$email' AND Password='$pass'";
		$result=mysqli_query($conn,$query);
		$count=mysqli_num_rows($result);
		
		if($count==1)
		{			
			
			
			
			echo "<script>jump2();</script>";
			
  	    }
		if($count==0)
		{
			
			
			echo "<script type='text/javascript'> alert('UserName Or Password is Incorrect'); </script>";
			echo "<script>jump1();</script>";
			
		}
		 mysqli_close($conn);
		

		
	}
	if($select=="Faculty")
	{
		
    $conn=mysqli_connect("localhost","root","","recordsubmit");
		$query="SELECT * FROM staff WHERE emailid='$email' AND password='$pass'";
		
		$result=mysqli_query($conn,$query);
		$count=mysqli_num_rows($result);
		
		if($count==1)
		{
			

			//echo "<script type='text/javascript'> alert('Credentials are Valid......!'); </script>";
			
			$row=mysqli_fetch_assoc($result);
			if($row["flag"]==0)
			{
				echo "<script type='text/javascript'> alert('Your Access is Denied.'); </script>";
			echo "<script>jump1();</script>";
			}
			else
			{
			$sub=$row["subject"];
			$name=$row["staffname"];
			$sem=$row["semister"];
			}
			//echo "<script> jump1();</script>";
			
  	   }
		if($count==0)
		{
			
			
			echo "<script type='text/javascript'> alert('UserName Or Password is Incorrect.'); </script>";
			echo "<script>jump1();</script>";
			
		}
    mysqli_close($conn);
	
    }
	}
?>
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
</div>
<?php
session_start();
echo "<div class='container'><div class='row'>";
echo "<h3 class='text-left'><b style='color:red;'>Name: </b><b>".$name."</b></h3>";
echo "<h3 class='text-left'><b style='color:red;'>Subject: </b><b>".$sub."</b></h3>";
echo "</div></div>";

$_SESSION['myValue1']=$name; 
$_SESSION['myValue2']=$sub; 
$_SESSION['myValue3']=$sem; 

// You can set the value however you like.

?>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
  
    <a href="lsubmissions.php"><input type="submit" value="View Submissions" name="submit2"  class="txt2" style="margin-left:25%;"></a><br/>
    <input type="submit" value="Change Password" name="submit3" class="txt2" style="margin-left:25%;" data-toggle="modal" data-target="#popUpWindow" ><br/>
	 <a href="index.php"><input type="submit" value="LOGOUT" name="submit2"  class="txt2" style="margin-left:25%;"></a><br/>
    
    </div>
  </div>




<div class="modal fade" id="popUpWindow">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Change Password</h3>
        </div>
      
        <div class="modal-header">
        <form role="form" name="frmLogin" action="recovery.php" onsubmit="return validateForm()" method="POST">
         <div class="form-group">
         <input type="email" class="form-control" placeholder="Email" name="eml" id="eid"/>
	<br/>
            <input type="password" class="form-control" placeholder="Old Password" name="opass" id="pid"/>
	<br/>
	 <input type="password" class="form-control" placeholder="New Password" name="npass" id="pid"/>
	<br/>
	 <input type="password" class="form-control" placeholder="Confirm Password" name="cpass" id="pid"/>
	<br/>
            
        </div>
      
       </div>
       
      <div class="modal-footer">
     <button class="btn btn-primary btn-block" name="btn1" id="btnid">Change Password</button>


    </div>
       </form>   
  </div>
</div>
</div>

</div>





<footer class="container-fluid text-center">
  <a href="editor.html" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

  <p>&copy; 2020 Srinivas Institute of Technology | All rights are reserved | Designed by Nikhil Floyd-Jayasagar Y</p> <a href="https://www.sitmng.ac.in/" title="SIT">www.srinivascollege.in</a></p>
</footer>
</body>
</html>