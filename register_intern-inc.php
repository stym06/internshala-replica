<?php 
	session_start();
	include('dbconnect.php');

	$name=$_POST['name'];
	$email=$_POST['email'];
	$employer=$_POST['employer'];
	$title=$_POST['title'];

	$query="INSERT INTO student_applications(name,email,employer,job_title) VALUES('$name','$email','$employer','$title')";
	$result=mysqli_query($conn,$query);
	if($result)
		header("Location: student-profile.php");
	else
		header("Location: register_intern.php");



?>