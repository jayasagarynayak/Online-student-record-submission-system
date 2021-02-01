<!DOCTYPE html>
<html>
<head>
	<title>Student Page-SIT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
	
	<link rel="stylesheet" type="text/css" href="editor.css">
	<script type="text/javascript">
function validateForm() {
  var a = document.forms["passrecovery"]["emlr"].value;
  var b = document.forms["passrecovery"]["opassr"].value;
  var c = document.forms["passrecovery"]["npassr"].value;
  var d = document.forms["passrecovery"]["cpassr"].value;
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
	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>
	<script type="text/javascript">
	history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
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
session_start();
$usns= $_SESSION['usn'];
$names= $_SESSION['name'];
?>

<form class="form-horizontal"  method="POST">
<!--<h2>Choose Your Option</h2><br/><br/>-->
  <div class="form-group">
  <center>  <label class="control-label col-sm-2" for="usn">USN:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="usns" value="<?php echo $usns; ?>" id="usnum" placeholder="Enter USN"  required readonly>
    </div></center>
  </div>
  <div class="form-group">
   <center> <label class="control-label col-sm-2" for="name">NAME:</label>
    <div class="col-sm-10">
     <input type="text" class="form-control"  name="names" value="<?php echo $names; ?>" id="nm" placeholder="Enter Name"  required readonly>
    </div></center>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
  <input type="submit" value="Submit Record" name="submit1" formaction="editor.php" class="txt2" ><br/>
    <input type="submit" value="Submissions" name="submit2" formaction="submissions.php" class="txt2"><br/>
    <input type="submit" value="Approvals" name="submit3" formaction="approval.php" class="txt2" ><br/>
    <input type="submit" value="Declained" name="submit4" formaction="declained.php" class="txt2" ><br/>
		<input type="submit" value="Pending" formaction="pending.php" name="submit6" class="txt2"><br/>

  
    
    </div>
  </div>

    </div>
  </div>
</form>
<!--<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input type="submit" value="Change Password"  name="submit7" class="txt2" style="margin-top:-5%" data-toggle="modal" data-target="#popUpWindow"><br/>

	<a href="index.php"><input type="submit" value="LOGOUT"  name="submit5" class="txt2"></a><br/>
	</div>
  </div>-->
 <!--  <div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popUpWindow1">Change Password</button>
  </div>
  <div class="btn-group">
   <a href="index.php"> <button type="button" class="btn btn-primary" >LogOut</button></a>
  </div>
  
</div> -->











<?php

if(isset($_POST['submit']))
{
   $conn= mysqli_connect("localhost","root","","recordsubmit");

$usn=$_POST['usn'];
$sem=$_POST['sem'];
$sub=$_POST['sub'];
$prgno=$_POST['pn'];
$prg=$_POST['prg'];

if($sem==1)
{
	if($sub==0)
	{
		$subject="Engineering Physics";
		
	}
	else
	{
		$subject="Engineering Chemistry";
	}
	if($sub==0)
	{
		if($prgno=="Program 1")
		{
			$prgstatement="Determination of spring constants in Series and Parallel combination";
		}
		else if($prgno=="Program 2")
		{
			$prgstatement="Determination of Magnetic field intensity is along the axis of a circular m coil carrying current(by deflection method)";
		}
		else if($prgno=="Program 3")
		{
			$prgstatement="n & l by Torsional pendulum(radius of the wire, mass and dimensions of the regular bodies to be given). (In the examination either nor I to be n asked)";
		}
		else if($prgno=="Program 4")
		{
			$prgstatement="Young's modulus of a beam by Single Cantilever experiment (breadth and thickness of the beam to be given)";
		}
		else if($prgno=="Program 5")
		{
			$prgstatement="Radius of curvature of piano convex lens using Newton's m rings(wavelength of light to be given)";
		}
		else if($prgno=="Program 6")
		{
			$prgstatement="Study Series and parallel LCR resonance and hence Calculate inductance, band width and quality factor using series LCR Resonance";
		}
		else if($prgno=="Program 7")
		{
			$prgstatement="Determine Acceptance angle and Numerical aperture of an optical m fiber";
		}
		else if($prgno=="Program 8")
		{
			$prgstatement="Determine Wavelength of semiconductor laser using Laser diffiaction by calculating grating constant.";
		}
		else if($prgno=="Program 9")
		{
			$prgstatement="Estimation of Fermi Energy of Copper";
		}
		else if($prgno=="Program 10")
		{
			$prgstatement="Study of input and output Transistor characteristics and hence calculate input resistance";
		}
		else
		{
			$prgstatement="Calculation of Dielectric constant by RC charging and Discharging";
		}
	}
	else
	{
	if($prgno=="Program 1")
		{
			$prgstatement="Potentiometric estimation ofF AS using standard k2Cr2O7 solution.";
		}
		else if($prgno=="Program 2")
		{
			$prgstatement="Conductometric estimation of acid mixture.";
		}
		else if($prgno=="Program 3")
		{
			$prgstatement="Determination of Vtseosity co-efficient of the given liquid using Ostwald's viscometer.";
		}
		else if($prgno=="Program 4")
		{
			$prgstatement=" Colorimetric estimation of Copper.";
		}
		else if($prgno=="Program 5")
		{
			$prgstatement="Determination of pKa of the given weak acid using pH meter.";
		}
		else if($prgno=="Program 6")
		{
			$prgstatement=" Flame photometric estimation of sodium and potassium.";
		}
		else if($prgno=="Program 7")
		{
			$prgstatement=" Estimation of percentage of available chlorine in the given sample of bleaching powder Qodometric method)";
		}
		else if($prgno=="Program 8")
		{
			$prgstatement="Estimation of Iron in haematite ore solution using standard K2Cr2O7 solution by external indicator method.";
		}
		else if($prgno=="Program 9")
		{
			$prgstatement=" Determination of percentage of Copper in brass using standard sodium thiosulphate solution.";
		}
		else if($prgno=="Program 10")
		{
			$prgstatement="Estimation of CaO in cement solution by rapid EDTA method.";
		}
		else
		{
			$prgstatement=" Determination of percentage of Copper in brass using standard sodium thiosulphate solution.";
		}
	}
}
else if($sem == 2)
{
	if($sub==0)
	{
		$subject="Programming In C And Datastructure";
	}
	else
	{
		$subject="CAED";
	}
	if($sub==0)
	{
		if($prgno=="Program 1")
		{
			$prgstatement="Design and develop a flowchart or an algorithm that takes three coefficients (a, b, and c) of a Quadratic equation (ax2+bx+c=0) as input and compute all possible roots. Implement a C  program  for  the  developed  flowchart/algorithm  and  execute  the  same  to  output  the possible roots for a given set of coefficients with appropriate messages.";
		}
		else if($prgno=="Program 2")
		{
			$prgstatement="Design  and  develop  an  algorithm  to  find  the reverseof  an  integer  number NUMand check  whether  it  is  PALINDROME  or  NOT.  Implement  a  C  program  for  the  developed algorithm  that  takes  an  integer  number  as  input  and  output  the  reverse  of  the  same  with suitable messages. Ex: Num: 2014, Reverse: 4102, Not a Palindrome.";
		}
		else if($prgno=="Program 3")
		{
			$prgstatement="Design anddevelop a flowchart to find the square root of a given number N. Implement a C  program  for  the  same  and  execute  for  all  possible  inputs  with  appropriate  messages. Note: Don’t use library functionsqrt(n).";
		}
		else if($prgno=="Program 4")
		{
			$prgstatement="Design and develop an algorithm for evaluating the polynomial f(x) = a4x4+ a3x3+ a2x2+a1x+ a0, for a given value ofxand its coefficients using Horner’s method. Implement a C program for the same and execute the program for different sets of values of coefficients and x.";
		}
		else if($prgno=="Program 5")
		{
			$prgstatement="Develop, implement and execute a C program that reads two matrices A(m x n) and B(p x q) and Compute the product Aand B. Read matrix Aand matrix Bin row major order and  in  column  major  order  respectively.  Print  both  the  input  matrices  and  resultantmatrix with suitable headings and output should be in matrix format only. Program must check the compatibility of orders of the matrices for multiplication. Report appropriate message in case of incompatibility.";
		}
		else if($prgno=="Program 6")
		{
			$prgstatement="Develop, implement and execute a C programto search a Name in a list of names using Binary searching Technique.";
		}
		else if($prgno=="Program 7")
		{
			$prgstatement="Develop, implement and execute a C programto search a Name in a list of names using Linear searching Technique.";
		}
		else if($prgno=="Program 8")
		{
			$prgstatement="Design  and  develop  a  C  function RightShift(x  ,n)that  takes  two  integers xand nas input  and  returns  value  of  the  integer xrotated  to  the  right  by npositions.  Assume  theintegers are unsigned. Write a C program that invokes this function with different values for xand nand tabulate the results with suitable headings.";
		}
		else if($prgno=="Program 9")
		{
			$prgstatement="Design and develop a C function isprime(num) that accepts an integer argument and returns  1  if  theargument  is  prime,  a  0  otherwise.  Write  a  C  program  that  invokes  this function to generate prime numbers between the given range.";
		}
		else if($prgno=="Program 10")
		{
			$prgstatement="Write  a  C  program  to  maintain  a  record  of “n”student  details  using  an  array  of structures with four fields (Roll number, Name, Marks, and Grade). Assume appropriate data type for each field. Print the marks of the student, given the student name as input";
		}
		else
		{
			$prgstatement="Write a C program using pointers to compute the sum, mean and standard deviation of all elements stored in an array of nreal numbers.";
		}
	}
	else
	{
	if($prgno=="Program 1")
		{
			$prgstatement="";
		}
		else if($prgno=="Program 2")
		{
			$prgstatement="";
		}
		else if($prgno=="Program 3")
		{
			$prgstatement="";
		}
		else if($prgno=="Program 4")
		{
			$prgstatement="";
		}
		else if($prgno=="Program 5")
		{
			$prgstatement="";
		}
		else if($prgno=="Program 6")
		{
			$prgstatement="";
		}
		else if($prgno=="Program 7")
		{
			$prgstatement="";
		}
		else if($prgno=="Program 8")
		{
			$prgstatement="";
		}
		else if($prgno=="Program 9")
		{
			$prgstatement="";
		}
		else if($prgno=="Program 10")
		{
			$prgstatement="";
		}
		else
		{
			$prgstatement="";
		}
	}
}
else if($sem == 3)
{
	if($sub==0)
	{
		$subject="Data Structure Lab";
	}
	else
	{
		$subject="Analog And Digital Electronics Lab";
	}
	if($sub==0)
	{
		if($prgno=="Program 1")
		{
			$prgstatement="Design,Develop and Implement a menudriven Program in C for the following Array operationsa.Creating an Array of N Integer Elements b.Display of Array Elements with Suitable Headings c.Inserting an Element (ELEM)at a given valid Position (POS) d.Deleting an Element at a given valid Position(POS) e.Exit.Support the program with functions for each of the above operations.";
		}
		else if($prgno=="Program 2")
		{
			$prgstatement="Design,  Develop  and  Implement  a  Program  in  C  for  converting  an  Infix  Expression  to  Postfix Expression. Program should support for both parenthesized and free parenthesized expressions with the operators: +, -, *, /, %( Remainder), ^ (Power) and alphanumeric operands.";
		}
		else if($prgno=="Program 3")
		{
			$prgstatement="Design, Develop and Implement a Program in C for the following Stack Applications a. Evaluation of Suffix expression with single digit operands and operators: +, -, *, /, %, ^ b. Solving Tower of Hanoi problem with n disks";
		}
		else if($prgno=="Program 4")
		{
			$prgstatement="Given a File of N employee records with a set K of Keys(4-digit) which uniquely determine the records in  file F.  Assume  that  file F is  maintained  in  memory  by  a  Hash  Table(HT)  of m memory  locations with L as the set of memory addresses (2-digit) of locations in HT. Let the keys in K and addresses in L are Integers. Design and develop a Program in C that uses Hash function H: K ®L as H(K)=K mod m (remainder method), and implement hashing  technique  to map a  given key K to  the  address  space L. Resolve the collision (if any) using linear probing.";
		}
		else if($prgno=="Program 5")
		{
			$prgstatement="Design, Develop and Implement a Program in C for the following operations on Graph(G) of Cities a.Create a Graph of N cities using Adjacency Matrix. b.Print  all  the  nodes reachable from  a  given  starting  node  in  a  digraph  using BFS/  DFS method";
		}
		else if($prgno=="Program 6")
		{
			$prgstatement="Design, Develop and Implement a Program in C for the  operations on Singly CircularLinked List (SCLL) ";
		}
		else if($prgno=="Program 7")
		{
			$prgstatement="Design, Develop and Implement a Program in C for  operations on  Doubly CircularLinked List (SCLL) ";
		}
		else if($prgno=="Program 8")
		{
			$prgstatement="Design,  Develop  and  Implement  a menu driven  Program in C  for the  following  operations  on Doubly Linked List (DLL) of Employee Data with the fields: SSN, Name, Dept, Designation, Sal, PhNo.";
		}
		else if($prgno=="Program 9")
		{
			$prgstatement="Design,  Develop  and  Implement  a  menu  driven  Program  in  C  for  the  following  operations  on Singly Linked List (SLL) of Student Data with the fields: USN, Name, Branch, Sem, PhNo";
		}
		else if($prgno=="Program 10")
		{
			$prgstatement="Design, Develop and Implement a menu driven Program in C for the following operations on Circular QUEUE of Characters (Array Implementation of Queue with maximum size MAX)";
		}
		else
		{
			$prgstatement="Design, Develop and Implement a menu driven Program in C for the following operations on STACK of Integers (Array Implementation of Stack with maximum size MAX)";
		}
	}
	else
	{
	if($prgno=="Program 1")
		{
			$prgstatement="Design and construct a Schmitt trigger using Op-Amp for given UTP and LTP values and demonstrate its working.";
		}
		else if($prgno=="Program 2")
		{
			$prgstatement="Design and implement Half adder, Full Adder, Half Subtractor, Full Subtractor using basic gates.";
		}
		else if($prgno=="Program 3")
		{
			$prgstatement="Design and implement code converter I) Binary to Gray  II) Gray to Binary Code using basic gates.";
		}
		else if($prgno=="Program 4")
		{
			$prgstatement="Design  and  verify  the  Truth  Table  of  3-bit  Parity  Generator  and  4-bit  Parity Checker using basic logic gates with an even parity bit.";
		}
		else if($prgno=="Program 5")
		{
			$prgstatement="Study experiment: To study 4-bitALU using IC-74181.";
		}
		else if($prgno=="Program 6")
		{
			$prgstatement="Design  and  implement  a  mod-n  (n<8)  synchronous  upcounterusing J-K Flip-Flop ICs & demonstrate its working.";
		}
		else if($prgno=="Program 7")
		{
			$prgstatement="Design  and  implement  a  mod-n  (n<8)  synchronous  downcounter using J-K Flip-Flop ICs & demonstrate its working.";
		}
		else if($prgno=="Program 8")
		{
			$prgstatement="Write the Verilog /VHDL code for mod-8 up counter. Simulateandverify its working";
		}
		else if($prgno=="Program 9")
		{
			$prgstatement="Design  and  implement  an  asynchronous  counter  using  decade  counter  IC  to count up from 0 to n (n<=9)  and demonstrate on 7 segment display  (using  IC 7447).";
		}
		else if($prgno=="Program 10")
		{
			$prgstatement="Write the  Verilog /VHDL code  for  an  8:1  multiplexer. Simulateand verify its working.";
		}
		else
		{
			$prgstatement="Given  any  4-variable  logic  expression,  simplify  using  Entered49-552Variable  Map  and  realize the  simplified logic  expression using 8:1 multiplexer IC.";
		}
	}
}
else if($sem == 4)
{
	if($sub==0)
	{
		$subject="Microprocessor Lab";	
	}
	else
	{
		$subject="Design And Analysis Of Algorithms Lab";
	}
	if($sub==0)
	{
		if($prgno=="Program 1")
		{
			$prgstatement="Write an ALP to find largest no. from the given array";
		}
		else if($prgno=="Program 2")
		{
			$prgstatement="Write an ALP to check bitwise palindrome or not";
		}
		else if($prgno=="Program 3")
		{
			$prgstatement="Write an ALP to find logical ones and zeros in a given data";
		}
		else if($prgno=="Program 4")
		{
			$prgstatement="Write an ALP to separate positive and negative numbers";
		}
		else if($prgno=="Program 5")
		{
			$prgstatement="Write an ALP to find the LCM of two 16bit numbers";
		}
		else if($prgno=="Program 6")
		{
			$prgstatement="Write an ALP to divide two numbers";
		}
		
		else if($prgno=="Program 7")
		{
			$prgstatement="Write an ALP to multiply two numbers";
		}
		else if($prgno=="Program 8")
		{
			$prgstatement="Write an ALP to multiply two 16-bit numbers";
		}
		else if($prgno=="Program 9")
		{
			$prgstatement="Write an ALP to add 2 Multibyte no.";
		}
		else if($prgno=="Program 10")
		{
			$prgstatement="Write an ALP to move block of data with overlap";
		}
		else
		{
			$prgstatement="Write an ALP to move block of data without overlap";
		}
	}
	else
	{
	if($prgno=="Program 1")
		{
			$prgstatement="Write  a  Java  program  to  implement  the  Stack  using  arrays.  Write  Push(),  Pop(), and Display() methods to demonstrate its working.";
		}
		else if($prgno=="Program 2")
		{
			$prgstatement="Write  a  Java  class  called Customerto  store  their  name  anddate_of_birth.  The date_of_birth format should be dd/mm/yyyy. Write methods to read customer data as <name,  dd/mm/yyyy>  and  display  as  <name,  dd,  mm,  yyyy>  using  StringTokenizer class considering the delimiter character as “/”.";
		}
		else if($prgno=="Program 3")
		{
			$prgstatement="Write a Java program to read two integers aandb. Compute a/band print, when bis not zero. Raise an exception when bis equal to zero";
		}
		else if($prgno=="Program 4")
		{
			$prgstatement="Write  a  Java  program  that  implements  a  multi-thread  application  that  has  three threads.  First  thread  generates  a  random  integer  for  every  1  second;  second  thread computes the square of the number andprints; third thread will print the value of cube of the number";
		}
		else if($prgno=="Program 5")
		{
			$prgstatement="Sort a given set of n integer elements using Quick Sort method and compute its time complexity. Run the program for varied values of n> 5000 and record the time taken to  sort.";
		}
		else if($prgno=="Program 6")
		{
			$prgstatement="Sort a given set of n integer elements using Merge Sort method and compute its time complexity. Run the program for varied values of n> 5000, and record the time taken to  sort. ";
		}
		else if($prgno=="Program 7")
		{
			$prgstatement="Sort a given set of n integer elements using Insertion Sort method and compute its time complexity. Run the program for varied values of n> 5000, and record the time taken to  sort. ";
		}
		else if($prgno=="Program 8")
		{
			$prgstatement="Implement in Java, the 0/1 Knapsackproblem using (a) Dynamic Programming method (b) Greedy method.";
		}
		else if($prgno=="Program 9")
		{
			$prgstatement="From  a  given  vertex  in  a  weighted  connected  graph,  find  shortest  paths  to  other vertices using Dijkstra's algorithm. Write the program in Java";
		}
		else if($prgno=="Program 10")
		{
			$prgstatement="Find  Minimum  Cost  Spanning  Tree  of  a  given  connected  undirected  graph using Prim's algorithm.";
		}
		else
		{
			$prgstatement="Design and implement in Java to find all Hamiltonian Cyclesin a connected undirected Graph G of nvertices using backtracking principle.";
		}
	}
}
else if($sem == 5)
{
	if($sub==0)
	{
		$subject="Computer Network";	
	}
	else
	{
		$subject="Database Management System Lab";
	}
	if($sub==0)
	{
		if($prgno=="Program 1")
		{
			$prgstatement="Simulate a three nodes point-to-point network with duplex links between them. Set the queue size vary the bandwidth and find the number of packets dropped.";
		}
		else if($prgno=="Program 2")
		{
			$prgstatement="Simulate a four node point-to-point network, and connect the links as follows: n0-n2, n1-n2 and  n2-n3.  Apply  TCP  agent  between  n0-n3  and  UDP  n1-n3.  Apply  relevant  applications over TCP and UDP agents changing the parameter and determine the number of packets by TCP/UDP.";
		}
		else if($prgno=="Program 3")
		{
			$prgstatement="Simulate  the  transmission  of  ping  messaged  over  a  network  topology  consisting  of  6  nodes and find the number of packets dropped due to congestion.";
		}
		else if($prgno=="Program 4")
		{
			$prgstatement="Simulate an Ethernet LAN using N-nodes(6-10), change error rate and data rate and compare the throughput.";
		}
		else if($prgno=="Program 5")
		{
			$prgstatement="Simulate an Ethernet LAN using N nodes and set multiple traffic nodes and plot congestion window for different source/destination.";
		}
		else if($prgno=="Program 6")
		{
			$prgstatement="Simulate  simple  ESS  and  with  transmitting  nodes  in  wire-less  LAN  by  simulation  and determine the performance with respect to transmission of packets.";
		}
		else if($prgno=="Program 7")
		{
			$prgstatement="Write a program for congestion control using Leaky bucket algorithm";
		}
		else if($prgno=="Program 8")
		{
			$prgstatement="Write a program for simple RSA algorithm to encrypt and decrypt the data.";
		}
		else if($prgno=="Program 9")
		{
			$prgstatement="Implement program using as message queues or FIFOs as IPC channels.";
		}
		else if($prgno=="Program 10")
		{
			$prgstatement="Implement program using as message queues or FIFOs as IPC channels.";
		}
		else
		{
			$prgstatement="Using TCP/IP sockets, write a client-server program to make client sending the file name and the server to send back the contents of the requested file if present.";
		}
	}
	else
	{
	if($prgno=="Program 1")
		{
			$prgstatement="Student Database";
		}
		else if($prgno=="Program 2")
		{
			$prgstatement="Market Database";
		}
		else if($prgno=="Program 3")
		{
			$prgstatement="Emplotee Database";
		}
		else if($prgno=="Program 4")
		{
			$prgstatement="Movie Database";
		}
		else if($prgno=="Program 5")
		{
			$prgstatement="";
		}
		else if($prgno=="Program 6")
		{
			$prgstatement="Marketing Database";
		}
		else if($prgno=="Program 7")
		{
			$prgstatement="Airlines Database";
		}
		else if($prgno=="Program 8")
		{
			$prgstatement="Department Database";
		}
		else if($prgno=="Program 9")
		{
			$prgstatement="";
		}
		else if($prgno=="Program 10")
		{
			$prgstatement="";
		}
		else
		{
			$prgstatement="";
		}
	}
}
else if($sem == 6)
{
	if($sub==0)
	{
		$subject="Computer Graphics Lab";
	}
	else
	{
		$subject="System Software And Compailer Design Lab";
	}
	if($sub==0)
	{
		if($prgno=="Program 1")
		{
			$prgstatement="Implement Brenham?s line drawing algorithm for all types of slope";
		}
		else if($prgno=="Program 2")
		{
			$prgstatement="Create and rotate a triangle about the origin and a fixed point";
		}
		else if($prgno=="Program 3")
		{
			$prgstatement="Draw a color cube and spin it using OpenGL transformation matrices";
		}
		else if($prgno=="Program 4")
		{
			$prgstatement="Draw  a  color  cube  and  allow  the  user  to  move  the  camera  suitably  to  experiment with perspective viewing";
		}
		else if($prgno=="Program 5")
		{
			$prgstatement="Clip a lines using Cohen-Sutherland algorithm";
		}
		else if($prgno=="Program 6")
		{
			$prgstatement="To  draw  a  simple  shaded  scene  consisting  of  a  tea  pot  on  a  table.  Define  suitably the  position  and  properties  of  the  light  source  along  with  the  properties  of  the surfaces of the solid object used in the scene";
		}
		else if($prgno=="Program 7")
		{
			$prgstatement="Design,  develop  and  implement  recursively  subdivide  a  tetrahedron  to  form  3D sierpinski gasket. The number of recursive steps is to be specified by the user";
		}
		else if($prgno=="Program 8")
		{
			$prgstatement="Develop a menu driven program to animate a flag using Bezier Curve algorithm";
		}
		else if($prgno=="Program 9")
		{
			$prgstatement="Develop a menudriven program to fill the polygon using scan line algorithm";
		}
		else if($prgno=="Program 10")
		{
			$prgstatement="Develop a menudriven program to fill the Pentagon using scan line algorithm";
		}
		else
		{
			$prgstatement="Develop 3D models.";
		}
	}
	else
	{
		if($prgno=="Program 1")
		{
			$prgstatement="Write a LEX program to  recognize  valid arithmetic expression. Identifiers in the expression could be only integers and operators could be + and *. Count the identifiers & operators present and printthem separately.";
		}
		else if($prgno=="Program 2")
		{
			$prgstatement="Write YACC  program to  evaluate  arithmetic expression involving operators: +, -, *, and /.";
		}
		else if($prgno=="Program 3")
		{
			$prgstatement="Develop, Implement and Execute a program using YACC tool to recognize all strings ending with preceded by na’s using the grammaranb (note: inputn value).";
		}
		else if($prgno=="Program 4")
		{
			$prgstatement=" Write a LEX program to eliminate comment linesin a31C program and copy the resulting program into a separatefile.";
		}
		else if($prgno=="Program 5")
		{
			$prgstatement="Write YACC program to recognize valid  identifier,operators and keywords in the given text (C program)file.";
		}
		else if($prgno=="Program 6")
		{
			$prgstatement="Design, develop and implement a C/C++/Java program to35simulate the working of  Shortest  remaining time andRound Robin (RR) scheduling algorithms.  Experiment with different quantum sizes for RR algorithm.";
		}
		else if($prgno=="Program 7")
		{
			$prgstatement="Design, develop and implement a C/C++/Java program to implement  Banker’s  algorithm.  Assume suitable inputrequired to demonstrate the results.";
		}
		else if($prgno=="Program 8")
		{
			$prgstatement="Design, develop and implement a C/C++/Java program to implement page replacement algorithms LRU and FIFO.Assume suitable input required to demonstrate the results.";
		}
		else if($prgno=="Program 9")
		{
			$prgstatement="Design,  develop  and implement  YACC/C  program to demonstrate Shift Reduce Parsingtechnique ";
		}
		else if($prgno=="Program 10")
		{
			$prgstatement="Design,  develop  and implement  YACC/C  program to construct  Predictive / LL(1) Parsing  Table";
		}
		else
		{
			$prgstatement="Design,  develop  and implement  a  C/Java  program to generate the machine code using Triples";
		}
	}
}
else if($sem == 7)
{
	if($sub==0)
	{
		$subject="Web Technology Lab";
	}
	else
	{
		$subject="Machine Learning Lab";
	}
	if($sub==0)
	{
		if($prgno=="Program 1")
		{
			$prgstatement="Write a JavaScript to design a simple calculator to perform the following operations:sum, product, difference and quotient.";
		}
		else if($prgno=="Program 2")
		{
			$prgstatement="Write a JavaScript that calculates the squares and cubes of the numbers from 0 to 10 and outputs HTML text that displays the resulting values in an HTML table format.";
		}
		else if($prgno=="Program 3")
		{
			$prgstatement="Write a JavaScript code that displays text “TEXT-GROWING” with increasing fontsize in the interval of 100ms in RED COLOR, when the font size reaches 50pt itdisplays “TEXT-SHRINKING” in BLUE color. Then the font size decreases to 5pt.";
		}
		else if($prgno=="Program 4")
		{
			$prgstatement="Design an XML document to store information about a student in an engineering college affiliated to VTU. The information must include USN, Name, and Name ofthe College, Branch, Year of Joining, and email id. Make up sample data for 3students. Create a CSS style sheet and use it to display the document.";
		}
		else if($prgno=="Program 5")
		{
			$prgstatement="Write a PHP program to keep track of the number of visitors visiting the web pageandto display this count of visitors, with proper headings.";
		}
		else if($prgno=="Program 6")
		{
			$prgstatement="Write a PHP program to display a digital clock which displays the current time of theserver.";
		}
		else if($prgno=="Program 7")
		{
			$prgstatement="Write the PHP programs to do the following: Find thetranspose of a matrix.";
		}
		else if($prgno=="Program 8")
		{
			$prgstatement="Write the PHP programs to do the following: Implement simple calculator operation";
		}
		else if($prgno=="Program 9")
		{
			$prgstatement="Write the PHP programs to do the following: Multiplication of two matrice";
		}
		else if($prgno=="Program 10")
		{
			$prgstatement="Write a PHP program named states.py that declares a variable states with value --Mississippi Alabama Texas Massachusetts Kansas--. write a PHP program that doesthe following: Search for a word in variable states that ends in xas. Store this word in element 0 of a list named statesList.";
		}
		else
		{
			$prgstatement="Write a PHP program to Search for a word in states that begins with k and ends in s. Perform a case insensitive comparison. ";
		}
	}
	else
	{
	if($prgno=="Program 1")
		{
			$prgstatement="Implement  and  demonstratethe FIND-Salgorithm  for  finding  the  most  specific hypothesis based on a given set of training data samples. Read the training data from a .CSV file.";
		}
		else if($prgno=="Program 2")
		{
			$prgstatement="For  a  given  set  of  training  data  examples  stored  in  a  .CSV  file,  implement  and demonstrate  the Candidate-Elimination  algorithmto  output  a  description  of  the  set of all hypotheses consistent with the training examples.";
		}
		else if($prgno=="Program 3")
		{
			$prgstatement="Write   a   program   to   demonstrate   the   working   of   the   decision   tree  based ID3 algorithm.  Use  an  appropriate  data  set  for  building  the  decision  tree  and  apply  this knowledge toclassify a new sample. ";
		}
		else if($prgno=="Program 4")
		{
			$prgstatement="Build   an   Artificial   Neural   Network   by   implementing the Backpropagation algorithm and test the same using appropriate data sets. ";
		}
		else if($prgno=="Program 5")
		{
			$prgstatement="Write  a  program  to  implement  the naive  Bayesian  classifier  for  a  sample  training data set stored as a .CSV file. Compute the accuracy of the classifier, considering few test data sets. ";
		}
		else if($prgno=="Program 6")
		{
			$prgstatement="Assuming  a  set  of  documents  that  need  to  be  classified,  use  the naive  Bayesian Classifier model to perform this task. Built-in Java classes/API  can be used to write the program. Calculate the accuracy, precision, and recall for your data set. ";
		}
		else if($prgno=="Program 7")
		{
			$prgstatement="Write an program to demonstrate gradient decent algorithm.";
		}
		else if($prgno=="Program 8")
		{
			$prgstatement="Write a program to construct a Bayesian network considering medical data. Use this model  to  demonstrate  the  diagnosis  of  heart  patients  using  standard  Heart  Disease Data Set. You can use Java/Python ML library classes/API. ";
		}
		else if($prgno=="Program 9")
		{
			$prgstatement="Write  a  program  to  implement k-Nearest  Neighbour  algorithm  to  classify  the  iris data set. Print both correct and wrong predictions. Java/Python ML library classes can be used for this problem. ";
		}
		else if($prgno=="Program 10")
		{
			$prgstatement="Implement  the  non-parametric Locally  Weighted  Regressionalgorithm  in  order  to fit data points. Select appropriate data set for your experiment and draw graphs";
		}
		else
		{
			$prgstatement="Apply EM algorithm to cluster a set of data stored in a .CSV file. Use the same data set  for  clustering  using k-Means  algorithm.  Compare  the  results  of  these  two algorithms  and  comment  on  the  quality  of  clustering.  You  can  add  Java/Python  ML library classes/API in the program. ";
		}
	}
}
else
{
	$subject="Final Project";
	$prgstatement="Final Year Project";
	
}
$target_dir = "C:/xampp/htdocs/check/uploads/";


$target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$target_file1a= basename($_FILES["fileToUpload1"]["name"]);


$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$target_file2a= basename($_FILES["fileToUpload2"]["name"]);

$target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
$target_file3a= basename($_FILES["fileToUpload3"]["name"]);

if($target_file1 == "C:/xampp/htdocs/check/uploads/")
{
	$target_file1="";
}
if($target_file2 == "C:/xampp/htdocs/check/uploads/")
{
	$target_file2="";
}
if($target_file3 == "C:/xampp/htdocs/check/uploads/")
{
	$target_file3="";
}


 if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1) || move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2) || move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) {
   
 
$query="insert into submission (USN,SEM,SUBJECT,PRGNO,PRG,SNAPSHOT1,SNAPSHOT2,SNAPSHOT3,DATETIME,STATEMENT,STATUS)values('$usn','$sem','$subject','$prgno','$prg','$target_file1a','$target_file2a','$target_file3a',now(),'$prgstatement','PENDING')";

mysqli_query($conn,$query);
mysqli_close($conn);
echo "<script type='text/javascript'> alert('Your Data Has Been Recorded..!');</script>";



   }
else
{
echo "<script type='text/javascript'> alert('Sorry, there was an error uploading your file.');</script>";
}

}


?>
  





<div class="modal fade" id="popUpWindow1">
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
<center><a href="index.php"><input type="button" value="LOGOUT" name="submit" class="txt2"></a></center>


<footer class="container-fluid text-center">
  <a href="homeStudent.php" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

  <p>&copy; 2020 Srinivas Institute of Technology | All rights are reserved | Designed by Nikhhil Floyd-Jayasagar Y</p> <a href="https://www.sitmng.ac.in/" title="SIT">www.srinivascollege.in</a></p>
</footer>

</body>

</html>









