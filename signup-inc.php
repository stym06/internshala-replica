<?php 

	session_start();
	include('dbconnect.php');
	$nameErr=$emailErr=$passwordErr="";
	$name=$username=$email=$password=$type="";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($_POST['name'])){
			$nameErr="Name is required";
		}
		else{
			$name=test_input($_POST['name']);
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     	 $nameErr = "Only letters and white space allowed"; 
    		}
		}
		if(empty($_POST['username'])){
			$unameErr="Username is required";
		}else{
			$username=test_input($_POST['username']);
		}
		if (empty($_POST["email"])) {
   			 $emailErr = "Email is required";
  			} else {
   			 $email = test_input($_POST["email"]);
    		// check if e-mail address is well-formed
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     		 $emailErr = "Invalid email format"; 
    		}
  		}
  		if(empty(md5($_POST['password']))){
  			$passwordErr="Password required";
  		}else{
  			$password=md5($_POST['password']);
  		}

}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	$type=$_POST['type'];

	if($type==='student')
		$utype=0;
	else if($type==='employer')
		$utype=1;

	$query="INSERT INTO login(name,username,email,password,type) VALUES('$name','$username','$email','$password','$utype')";
	$result=mysqli_query($conn,$query);
	if($result){
		header('Location: login');
	}
	else
		header('Location: signup');

 ?>