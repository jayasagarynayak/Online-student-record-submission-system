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
	<title>Recovery</title>
	<script type="text/javascript">
	history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
	</script>
	<script type="text/javascript">
	function jump()
	{
		window.location.href="admin.php";
	}
	</script>
</head>
<body>
<?php
if(isset($_POST["btn1"]))
{
	$email=$_POST["eml"];
	$oldpass=$_POST["opass"];
	$newpass=$_POST["npass"];
	$confirmpass=$_POST["cpass"];
	$conn=mysqli_connect("localhost","root","","recordsubmit");
	$query="select * from staff where emailid='$email' and password='$oldpass'";
	$result=mysqli_query($conn,$query);
	$count=mysqli_num_rows($result);
	if($count==0)
	{
		echo "<br/><br/><br/><br/><br/><br/><center><b>Provided Credentials are invalid. We cannot reset the password. If you have any problem please contact Administration Block. Please Login again for security reasons.</b></center>";
		echo "<br/><center><a href='index.php'>Please LogIn Again</a></center>";
	}
	else
	{
		if($newpass==$confirmpass)
		{
			$query1="update staff set password='$newpass' where emailid='$email'";
			mysqli_query($conn,$query1);
			echo "<br/><br/><br/><br/><br/><br/><center><b>Provided Credentials are Valid.We Updated Your Password. Please LogIn with new Password.</b></center>";
		echo "<br/><center><a href='index.php'> LogIn </a></center>";
			
		}
		else{
			echo "<br/><br/><br/><br/><br/><br/><center><b>Password Doesn't Match.</b></center>";
		echo "<br/><center><a href='index.php'> LogIn </a></center>";
		}
	}
		mysqli_close($conn);

}



if(isset($_POST["btnr"]))
{
	$email=$_POST["emlr"];
	$oldpass=$_POST["opassr"];
	$newpass=$_POST["npassr"];
	$confirmpass=$_POST["cpassr"];
	$conn=mysqli_connect("localhost","root","","recordsubmit");
	$query="select * from student where Email='$email' and Password='$oldpass'";
	$result=mysqli_query($conn,$query);
	$count=mysqli_num_rows($result);
	if($count==0)
	{
		echo "<br/><br/><br/><br/><br/><br/><center><b>Provided Credentials are invalid. We cannot reset the password. If you have any problem please contact Administration Block. Now Please Login again for security reasons.</b></center>";
		echo "<br/><center><a href='index.php'>Please LogIn Again</a></center>";
	}
	else
	{
		if($newpass==$confirmpass)
		{
			$query1="update student set Password='$newpass' where Email='$email'";
			mysqli_query($conn,$query1);
			echo "<br/><br/><br/><br/><br/><br/><center><b>Provided Credentials are Valid. We Updated Your Password. Please LogIn with new Password.</b></center>";
		echo "<br/><center><a href='index.php'> LogIn </a></center>";
			
		}
		else{
			echo "<br/><br/><br/><br/><br/><br/><center><b>Password Doesn't Match.</b></center>";
		echo "<br/><center><a href='index.php'> LogIn </a></center>";
		}
	}
	mysqli_close($conn);
}





if(isset($_POST["mallot"]))
{
		$emailid=$_POST["email"];
		$subject=$_POST["subjct"];
		$password=$_POST["psw1"];
		$rpassword=$_POST["psw2"];
		//echo $emailid;
		
		if($subject=="Select Subject" || $password=="" || $rpassword=="")
		{
			echo "<br/><br/><center>All Feilds Are Compulsary. Please Provide All the Details.</center><br/>";
			echo "<center><a href='admin.php'>BACK</a></center>";
		}
		else{
		$conn=mysqli_connect("localhost","root","","recordsubmit");
		$q="select * from stafflist where Email='$emailid'";
		$r=mysqli_query($conn,$q);
		$c=mysqli_num_rows($r);
		if($c==0)
		{
			echo "<center>EmailId Doesn't Exist in Database. Please LogIn Again for Security Reasons.</center>";
			echo "<center><a href='index.php'>Login Here</a></center>";
		}
		else
		{
			$row=mysqli_fetch_assoc($r);
			$name=$row["StaffName"];
			$q2="select * from subjectlist where SUBJECT='$subject'";
			$r2=mysqli_query($conn,$q2);
			$row1=mysqli_fetch_assoc($r2);
			$sem=$row1["SEM"];
			$q4="select * from staff where SUBJECT='$subject'";
			$r4=mysqli_query($conn,$q4);
			$cs=mysqli_num_rows($r4);
			if($cs==0)
			{
			if($password==$rpassword)
			{
				$q4="select * from staff where emailid='$emailid'";
				$ir=mysqli_query($conn,$q4);
				$irow=mysqli_fetch_assoc($ir);
				$ic=mysqli_num_rows($ir);
				if($ic==0)
				{
				$q3="insert into staff (emailid,staffname,password,subject,flag,semister) values('$emailid','$name','$password','$subject',1,'$sem')";
				mysqli_query($conn,$q3);
				echo "<br/><br/><center>Subject <b style='color:red;'>".$subject."</b> of semister <b style='color:red;'>".$sem."</b> is alloted to <b style='color:red;'>".$name."</b></center><br/>";
			echo "<center><a href='admin.php'>BACK</a></center>";
				}
				else{
					$subct=$irow["subject"];
					echo "<br/><br/><center>Subject <b style='color:red;'>".$subct."</b> is already alloted to <b style='color:red;'>".$name."</b></center><br/>";
			echo "<center><a href='admin.php'>BACK</a></center>";
				}
			}
			else
			{
				echo "<br/><br/><center>Password Feilds Doesn't Match.</center><br/>";
			echo "<center><a href='admin.php'>BACK</a></center>";
			}
			
			
			}
			else
			{
				echo "<br/><br/><center><b style='color:red;font-size:20px;'>Subject $subject is already Allotted.</b> </center><br/>";
			echo "<center><a href='admin.php'>BACK</a></center>";
			}
			
		}
		}
			mysqli_close($conn);

}



if(isset($_POST["addstu"]))
{
		$emailid=$_POST["email"];
				$sem=$_POST["sem"];
				$usn=$_POST["usn"];
		$name=$_POST["name"];
		$password=$_POST["psw1"];
		$rpassword=$_POST["psw2"];
		//echo $emailid;
		
		if( $password=="" || $rpassword=="")
		{
			echo "<br/><br/><center>All Feilds Are Compulsary. Please Provide All the Details.</center><br/>";
			echo "<center><a href='admin.php'>BACK</a></center>";
		}
		else{
		$conn=mysqli_connect("localhost","root","","recordsubmit");
		if($password==$rpassword)
		{
				$q3="insert into student (USN,Name,Sem,Email,Password) values('$usn','$name','$sem','$emailid','$password')";
				mysqli_query($conn,$q3);
				echo "<br/><br/><center>Student Name <b style='color:red;'>".$name."</b> of semister <b style='color:red;'>".$sem."</b> information Added Successfully </center><br/>";
			echo "<center><a href='admins.php'>BACK</a></center>";
				
			mysqli_close($conn);
		}
		}

}



/*if(isset($_POST["rallot"]))
{
		$emailid=$_POST["email"];
		$subject=$_POST["subjct"];
		
		//echo $emailid;
		if($subject=="Select Subject")
		{
			echo "<br/><br/><center>Please Select Subject.</center><br/>";
			echo "<center><a href='admin.php'>BACK</a></center>";
		}
		else{
		$conn=mysqli_connect("localhost","root","vinayaka","recordsubmit");
		$q="select * from staff where emailid='$emailid' and subject='$subject'";
		$r=mysqli_query($conn,$q);
		$c=mysqli_num_rows($r);
		if($c==0)
		{
			echo "<center>EmailId Doesn't Exist in Database or Subject Selected might be wrong. Please LogIn Again for Security Reasons.</center>";
			echo "<center><a href='index.php'>Login Here</a></center>";
		}
		else
		{
			
			$q2="delete from staff where emailid='$emailid' and subject='$subject'";
			$r2=mysqli_query($conn,$q2);
			echo "<center>Allotment of Staff with Email Id <b style='color:red;'>".$emailid."</b> for the Subject <b style='color:red;'>".$subject."</b> is Removed.</center>";
			echo "<center><a href='admin.php'>BACK </a></center>";
			
			
			
			
		}
		}
			mysqli_close($conn);

		
}*/

?>


<?php
if(isset($_POST["ainfo"]))
{
	$name=$_POST["name"];
		$email=$_POST["email"];
$conn=mysqli_connect("localhost","root","","recordsubmit");
		$q="insert into stafflist(Email,StaffName)values('$email','$name')";
		mysqli_query($conn,$q);
		echo "<center>Added Staff details: Staff name: <b style='color:red;'>".$name."</b> having Email Id: <b style='color:red;'>".$email."</b></center>";
			echo "<center><a href='admin.php'>BACK </a></center>";
}
?>


<?php
if(isset($_POST["rinfo"]))
{
	$name=$_POST["name"];
		$email=$_POST["email"];
$conn=mysqli_connect("localhost","root","","recordsubmit");
		$q="delete from stafflist where StaffName='$name' or Email='$email'";
		mysqli_query($conn,$q);
		echo "<center>Removed Staff details: Staff name: <b style='color:red;'>".$name."</b> having Email Id: <b style='color:red;'>".$email."</b></center>";
			echo "<center><a href='admin.php'>BACK </a></center>";
}
?>

</body></html>