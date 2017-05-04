<?php 
	session_start();
	include('dbconnect.php');

	$name=$_POST['name'];
	$email=$_POST['email'];
	$employer=$_POST['employer'];

	$query="INSERT INTO student_applications(name,email,employer) VALUES('$name','$email','$employer')";
	$result=mysqli_query($conn,$query);
	if($result)
		header("Location: student-profile.php");
	else
		header("Location: register_intern.php");



?>