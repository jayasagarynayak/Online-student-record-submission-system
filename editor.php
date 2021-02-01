<!DOCTYPE html>
<html>

<head>
	<title>Record Submission-SIT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="editor.css">
	<script type='text/javascript'>
function preview_image1(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image1');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
<script type='text/javascript'>
function preview_image2(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image2');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
<script type='text/javascript'>
function preview_image3(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image3');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
	<style>
		.jumbotron {
  		background-color: #f4511e; /* Orange */
 		 color: #ffffff;
		}
		img {
		<!--vertical-align: middle;-->
		max-width: 300px;
		max-height: 150px;
		}



	</style>
	
	<script type="text/javascript">
	var subjects = { };
subjects['1'] = ['Engineering Physics','Engineering Chemistry'];
subjects['2'] = ['Programming In C And Datastructure','CAED'];
subjects['3'] = ['Data Structure Lab','Analog And Digital Electronics Lab'];
subjects['4'] = ['Microprocessor Lab','Design And Analysis Of Algorithms Lab'];
subjects['5'] = ['Computer Network','Database Management System Lab'];
subjects['6'] = ['Computer Graphics Lab','System Software And Compailer Design Lab'];
subjects['7'] = ['Web Technology Lab','Machine Learning Lab'];
subjects['8'] = ['Final Project'];


function ChangeLabList() {
  var semList = document.getElementById("sem");
  var labList = document.getElementById("lab");
  var selsem = semList.options[semList.selectedIndex].value;

  while (labList.options.length) {
    labList.remove(0);
  }

  var sub = subjects[selsem];
  if (sub) {
    var i;
    for (i = 0; i < sub.length; i++) {
      var sub1 = new Option(sub[i], i);
      labList.options.add(sub1);
    }
  }
}
	</script>
</head>
<body>
<!-- <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="editor.html">SUBMIT NOW</a></li>
        <li><a href="#services">SUBMISSIONS</a></li>
        <li><a href="#portfolio">APPROVAL</a></li>
        <li><a href="#pricing">DECLAINED</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
<div style="background-color:blue;width:100%;height:4px;"></div>
</nav> -->
  <div class="jumbotron text-center" ><br/>
    <div><img  src="images/sitlogo.JFIF" alt="SIT" height="150px" width="150px">
    <h1>Srinivas Institute of Technology</h1>
    <h2 style="color:#000000;">RECORD SUBMISSION SYSTEM<h2>
  </div>
  </div>
<?php


if(isset($_POST['submit1']))
{
	$name=$_POST['names'];
	$usn=$_POST['usns'];
	$conn=mysqli_connect("localhost","root","","recordsubmit");
	$q="select * from student where USN='$usn'";
	$result=mysqli_query($conn,$q);
	$row=mysqli_fetch_assoc($result);
	$sem=$row["Sem"];
	//echo $sem;
	mysqli_close($conn);
	
	echo "<h2 style='color:red;'>"."Hi ".$name."</h2>";
	
	
	
	
}

?>
<div class="container">
	<div class="row">
    <div class="col-md-4" style="width:100%;">
		<div class="form_main">
                <h4 class="heading"><strong>Record </strong> Submission <span></span></h4>
                <div class="form">
                <form action="homeStudent.php" method="POST" name="contactFrm" enctype="multipart/form-data">
                    <input type="text" required="" placeholder="Please enter your Name"  name="name" class="txt" id="nm" value="<?php echo $name; ?>" style="font-size:18px;" readonly>
	  <input type="text" required="" placeholder="Please enter your University Seat Number" name="usn" class="txt" id="usn" value="<?php echo $usn; ?>" style="font-size:18px;" readonly>
	 	 <!-- <input type="text" required="" onchange="ChangeLabList()" placeholder="Please enter your University Seat Number" name="sem" class="txt" id="sem" value="" style="font-size:18px;"/>-->

	<select id="sem" required="" onchange="ChangeLabList()" style="font-size:18px;" name="sem" >
	<option value="">-- Semister --</option> 
          	<option value="1">1</option>

	     <option value="2">2</option>
	     <option value="3">3</option>
	     <option value="4">4</option>
	     <option value="5">5</option>
	     <option value="6">6</option>
	     <option value="7">7</option>
	     <option value="8">8</option>
	    
        	</select>
                   <select id="lab" required="" style="font-size:18px;" name="sub"> </select>	       
                 <select id="prg" required="" style="font-size:18px;" name="pn">
	<option value="">-- Program Number --</option> 
          	<option value="Program 1">Program 1</option>

	     <option value="Program 2">Program 2</option>
	     <option value="Program 3">Program 3</option>
	     <option value="Program 4">Program 4</option>
	     <option value="Program 5">Program 5</option>
	     <option value="Program 6">Program 6</option>
	     <option value="Program 7">Program 7</option>
	     <option value="Program 8">Program 8</option>
	    
        	</select>
                    
                	 <textarea placeholder="Drop your Code Here....." name="prg" type="text" class="txt_3" style="font-size:16px;" ></textarea>
	<br/>
	<br/>
	  <label for="ss" >SNAP SHOTS</label>
       <input type="file" name="fileToUpload1" id="fileToUpload1" onchange="preview_image1(event)"><br/>
		<img id="output_image1"/><br/><br/>
	  <input type="file" name="fileToUpload2" id="fileToUpload2" onchange="preview_image2(event)"><br/>
		<img id="output_image2"/><br/><br/>
	  <input type="file" name="fileToUpload3" id="fileToUpload3" onchange="preview_image3(event)"><br/>
	  <img id="output_image3" /><br/><br/>

	 
                     <input type="submit" value="submit" name="submit" class="txt2">
                </form>
            </div>
            </div>
            </div>
	</div>
</div>
<footer class="container-fluid text-center">
  <a href="editor.php" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

  <p>&copy; 2020 | All rights are reserved | Designed by Nikhil Floyd-Jayasagar Y</p> <a href="https://www.sitmng.ac.in/" title="Sit">www.srinivascollege.in</a></p>
</footer>
</body>
</html>
