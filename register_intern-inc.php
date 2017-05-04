<?php 
	session_start();
	include('dbconnect.php');
	$name=$_POST['name'];
	$email=$_POST['email'];
	$employer=$_POST['employer'];
	$title=$_POST['title'];
	$req="SELECT id FROM student_applications WHERE job_title='$title' AND email='$email'";
	$verification_result=mysqli_query($conn,$req);
	if(mysqli_num_rows($verification_result)==0){
		//user hasn't applied
	$query="INSERT INTO student_applications(name,email,employer,job_title) VALUES('$name','$email','$employer','$title')";
	$result=mysqli_query($conn,$query);
	if($result)
		header("Location: student-profile.php");
	else
		header("Location: register_intern.php");
	}
	else{
		//user already applied
		echo "<script>alert('Already applied');</script>";
		echo "<script>setTimeout(\"location.href = 'student-profile.php';\",200);</script>";

	}


?>