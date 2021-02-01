<?php
session_start();
$name="hello";
$_SESSION['myValue']=$name; 
echo "<a href='two.php'>hejj</a>";
// You can set the value however you like.
?>