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
	<title>Record Submission-CEC</title>
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
$name=base64_decode($_GET['nm']);
$prgno=base64_decode($_GET['pn']);


$conn=mysqli_connect("localhost","root","","recordsubmit");
$query="delete from submission where USN='$usn' and SUBJECT ='$sub' and PRGNO='$prgno'";
mysqli_query($conn,$query);



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
	  <input type="text" required=""  name="sem" class="txt" id="sem" value="<?php echo $sem; ?>" style="font-size:18px;" readonly>
		<input type="text" required=""  name="sub" class="txt" id="lab" value="<?php echo $sub; ?>" style="font-size:18px;" readonly>
		<input type="text" required=""  name="pn" class="txt" id="prg" value="<?php echo $prgno; ?>" style="font-size:18px;" readonly>

	
                
                    
                	 <textarea placeholder="Drop your Code Here....." name="prg" type="text" class="txt_3" style="font-size:16px;" ></textarea>
	<br/>
	<br/>
	  <label for="ss" >SNAP SHOTS</label>
       <input type="file" name="fileToUpload1" id="fileToUpload1" onchange="preview_image1(event)"><br/>
		<img id="output_image1"/><br/><br/>
	  <input type="file" name="fileToUpload2" id="fileToUpload2" onchange="preview_image2(event)"><br/>
		<img id="output_image2"/><br/><br/>
	  <input type="file" name="fileToUpload3" id="fileToUpload3" onchange="preview_image3(event)"><br/>
	  <img id="output_image3"/><br/><br/>
 
                     <input type="submit" value="submit" name="submit" class="txt2">
                </form>
            </div>
            </div>
            </div>
	</div>
</div>
<footer class="container-fluid text-center">
  <a href="editor.html" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

  <p>&copy; 2020 Srinivas institute of Technology | All rights are reserved | Designed by Nikhil Floyd-Jayasagar Y</p> <a href="https://www.sitmng.ac.in/" title="SIT">www.srinivascollege.in</a></p>
</footer>
</body>
</html>
