<?php 

	session_start();
	include('dbconnect.php');

	$name=$_POST['name'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$type=$_POST['type'];

	if($type==='student')
		$utype=0;
	else if($type==='employer')
		$utype=1;

	$query="INSERT INTO login(name,username,email,password,type) VALUES('$name','$username','$email','$password','$utype')";
	$result=mysqli_query($conn,$query);
	if($result){
		header('Location: login.php');
	}
	else
		header('Location: signup.php');

 ?>