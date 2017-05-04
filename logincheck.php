<?php 
	session_start();
	$_SESSION['username']=$_POST['username'];
	include('dbconnect.php');

	$username=$_POST['username'];
	$password=$_POST['password'];
	$_SESSION['uname']=$username;
	$query="SELECT * FROM login WHERE username='$username' AND password='$password'";
	$result=mysqli_query($conn,$query);
	$row = mysqli_fetch_assoc($result);
	$user_type=$row['type'];
	$num_rows=mysqli_num_rows($result);
	if($num_rows>0){
	if($user_type==1)
		header("Location: employer-profile.php");
	else
		header("Location: student-profile.php");
	}
	else
		header("Location: login.php");
?>