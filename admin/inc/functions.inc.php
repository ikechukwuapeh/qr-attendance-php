<?php 
$conn = mysqli_connect("localhost","root","","attendance-system");
function sanitize($input)
{
	global $conn;
	$input= trim($input);
	$input = strip_tags($input);
	$input = mysqli_real_escape_string($conn,$input);
	
	return $input;
}

 ?>