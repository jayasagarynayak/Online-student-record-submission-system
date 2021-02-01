<!DOCTYPE html>
<html>
<head>
  	<title>Srinivas Institute of Technology</title>
  	<meta charset="utf-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$.clearInput = function () {
        $('form').find('input[type=email], input[type=password],select').val('');
};
	$('#popUpWindow').on('hidden', function () {
        $.clearInput();
});
	</script>
	<script type="text/javascript">
function validateForm() {
  var a = document.forms["frmLogin1"]["eml"].value;
  var b = document.forms["frmLogin1"]["pass"].value;
 
   var d = document.forms["frmLogin1"]["slt"].value;

  if (a == "" || b=="" || d=="----Faculty/Student Page----") {
    alert("All the Fields are Compulsary.");
    return false;
  }
}
</script>
	<script type="text/javascript">
	history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
	</script>
	<script type="text/javascript">
		window.history.forward();
		function noBack() { window.history.forward(); }

	</script>


	


	
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	

	<style>
		.jumbotron {
  		background-color: #f4511e; /* Orange */
 		 color: #ffffff;
		}
		
		
		
	</style>

	
</head>
<body >









  <div class="jumbotron text-center">
    <div><img  src="images/sitlogo.JFIF" alt="SIT" height="150px" width="150px">
    <h1>Srinivas Institute of Technology</h1>
    <p>Quality Education At Affordable Cost</p>
   <!-- <form class="form-inline" name="email" action="" method="POST">-->
  	  <div class="input-group">
      		<!--<input type="email" id="eml" name="emad" class="form-control" size="50" placeholder="Email Address" required>-->
      		<div class="input-group-btn">
        			<button type="button" name="btn1" class="btn btn-danger" class="btn btn-success" style="width:100px;background-color:green;" data-toggle="modal" data-target="#popUpWindow" >LogIn</button>

 <!--data-target="#popUpWindow"--> 

     		 </div>
    	</div>
  <!--</form>-->
  
   </div>
  </div>

<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">


 
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>SIT is....
<br><span style="font-style:normal;">"Srinivas Institute of Technology Engineering College (SIT) is a premier engineering institute of the Mangalore region with affiliated to VTU, Belgaum."</span></h4>
    </div>
    <div class="item">
      <h4>OUR MISSION
<br><span style="font-style:normal;">"Provide the right environment to develop quality education for all, irrespective of caste, creed or religion to produce future leaders."</span></h4>
    </div>
    <div class="item">
      <h4>OUR VISION
<br><span style="font-style:normal;">"To be an Engineering Institute of highest repute and produce world- class engineers catering to the needs of mankind."</span></h4>
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



	


<div class="container-fluid">
  <div class="text-center">
   <h2>Courses we offer</h2>
    <h4>Engineering is an application that involves in scientific and practical knowledge in order to invent, maintain, improve, build, design, system, devices, material, machine and process.</h4>
  </div>
  <div class="row">
   <a href="https://www.sitmng.ac.in/Department-Of-CSE/Overview" target="_blank"> <div class="col-sm-4" style="width:334px;">
      <div class="panel panel-default text-center">
        <div class="panel-heading" style="height:80px;">
          <h4>Computer Science & Engineering</h4>
        </div>
        <div class="panel-body">
          <img src="https://static.careers360.mobi/media/article_images/2012/12/14/cse-feating_2.jpg" style="width:250px;height:150px;" >
        </div>
        <div class="panel-footer" style="height:150px;">
         <p>To be recognized as a center of knowledge dissemination in Computer Science and Engineering by imparting value-added education to transform budding minds into competent computer professionals.</p>
        </div>
      </div>
    </div></a>
    <a href="https://www.sitmng.ac.in/Department-Of-ISE/Overview" target="_blank"> <div class="col-sm-4" style="width:334px;">
      <div class="panel panel-default text-center">
        <div class="panel-heading" style="height:80px;">
          <h4>Information Science & Engineering</h4>
        </div>
        <div class="panel-body">
         <img src="https://ichef.bbci.co.uk/news/660/cpsprodpb/16F87/production/_103278049_gettyimages-523052310.jpg" style="width:250px;height:150px;" >
        </div>
        <div class="panel-footer" style="height:150px;">
        <p>The Department of Information Science and Engineering strives to be a centre of learning in the field of Information Technology to produce globally competent engineers catering to the needs of the industry and society.</p>
        </div>
      </div>
    </div></a>
   <a href="https://www.sitmng.ac.in/Department-Of-EC/Overview" target="_blank"> <div class="col-sm-4" style="width:334px;">
      <div class="panel panel-default text-center">
        <div class="panel-heading" style="height:80px;">
          <h4>Electronics & Communication Engineering </h4>
        </div>
        <div class="panel-body">
         <img src="https://engineering.eckovation.com/wp-content/uploads/2018/10/eceminiproject.jpg" style="width:250px;height:150px;" >
        </div>
        <div class="panel-footer" style="height:150px;">
        <p>The Department of Electronics and Communication Engineering strives to be a centre of repute by imparting quality education to produce globally competent graduates with human values.</p>
        </div>
      </div>
    </div></a>
   <a href="https://www.sitmng.ac.in/Department-Of-ME/Overview" target="_blank"> <div class="col-sm-4" style="width:334px;">
      <div class="panel panel-default text-center">
        <div class="panel-heading" style="height:80px;">
          <h4>Mechanical Engineering</h4>
        </div>
        <div class="panel-body">
          <img src="https://sirtbhopal.ac.in/uploads/department/ME/me.jpg" style="width:250px;height:150px;"  >
        </div>
        <div class="panel-footer" style="height:150px;">
          <p>To impart state of the art quality Mechanical Engineering education and create competent professionals.</p>
        </div>
      </div>
    </div></a>
  </div>
</div>







<div class="container-fluid">
  <div class="text-center">
    <h2>Our Facilities...</h2>
    <h4>New facilities are about new beginning and endless possibilities....</h4>
  </div>
  <div class="row">
    <div class="col-sm-4" style="width:334px;">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Library</h1>
        </div>
        <div class="panel-body">
          <img src="images/sitlib.PNG" height="250px" width="250px"  >
        </div>
        <div class="panel-footer">
         <p>More than 43000 books of various genre congregated in a state of art infrastructure of 1300 square meters housing 300 readers and learners at a time. Library is also facilitated by a reference section and Digital Library.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-4" style="width:334px;">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Hostel</h1>
        </div>
        <div class="panel-body">
         <img src="images/sithostel.JPG" height="250px" width="250px"  >
        </div>
        <div class="panel-footer">
        <p>Spacious buildings homely environment providing all the basic facilities like water cooler and purifier, reading room and on-site medical health-care makes students stay a pleasant during their years at the college.</p>
        </div>
      </div>
    </div>
   <div class="col-sm-4" style="width:334px;">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Sports</h1>
        </div>
        <div class="panel-body">
         <img src="images/sitsports.JFIF" height="250px" width="250px"  >
        </div>
        <div class="panel-footer">
        <p>Sports plays an important role. Providing all indoor and outdoor facilities for games and physical activities, college motivates every student to participate in one or another activity and maintains a regular record of sports events and clubs.</p>
        </div>
      </div>
    </div>
   <div class="col-sm-4" style="width:334px;">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Cafetaria</h1>
        </div>
        <div class="panel-body">
          <img src="images/sitcanteen.JPG" height="250px" width="250px"  >
        </div>
        <div class="panel-footer">
          <p>Two canteens located within campus serve vegetarian and also non vegetarian food in Indian and Chinese style and taste, in a clean neat and hygienic environment. Canteens are spacious and have better arrangement of serving tables.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid bg-grey">
  <h2 class="text-center" style="align:center;" >CONTACT</h2>
<br/>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Mangalore, Karnataka, India</p>
      <p><span class="glyphicon glyphicon-phone"></span>  +91 824 2274732</p>
      <p><span class="glyphicon glyphicon-envelope"></span>  srinivassit@gmail.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
      	<h5>Have any Query? Drop down.</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
<br/>
<br/>
<center>
<div><div id="map-container-google-3" class="z-depth-1-half map-container-3">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10708.484063450916!2d74.93928256648714!3d12.872904914185758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba3585ea5927d6f%3A0xc65abe4f89ccf8ab!2sSrinivas%20Institute%20Of%20Technology(S.I.T.)!5e1!3m2!1sen!2sus!4v1607963484490!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>" frameborder="0"
    style="border:0" allowfullscreen></iframe></div></div></center>
<br/><br/>
<footer class="container-fluid text-center">
  <a href="index.php" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

  <p>&copy; 2020 Srinivas Institute of Technology | All rights are reserved | Designed by Nikhil Floyd-Jayasagar Y</p> <a href="https://www.sitmng.ac.in/" title="SIT">www.srinivascollege.in</a></p>
</footer>


<div class="modal fade" id="popUpWindow">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Login Form</h3>
        </div>
      
        <div class="modal-header">
        <form role="form" name="frmLogin1" action="homeStaff.php" onsubmit="return validateForm()" method="POST">
         <div class="form-group">
         <input type="email" class="form-control" placeholder="Email" name="eml" id="eid"/>
	<br/>
            <input type="password" class="form-control" placeholder="Password" name="pass" id="pid"/>
	<br/>
            <select  class='form-control' name="slt" id="sid">
	<option>----Faculty/Student Page----</option>
	<option>ADMIN</option>
<option>Faculty</option>
	<option>Student</option>
	</select>
        </div>
      
       </div>
       
      <div class="modal-footer">
     <button class="btn btn-primary btn-block" name="btn" id="btnid">Log In</button>


    </div>
       </form>   
  </div>
</div>
</div>





</body>
</html>