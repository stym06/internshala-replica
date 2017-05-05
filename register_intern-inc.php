<?php 
	session_start();
	include('dbconnect.php');

	$err="";
	$name=trim($_POST['name']);
	$email=trim($_POST['email']);
	$employer=trim($_POST['employer']);
	$title=trim($_POST['title']);

	if(empty($name)) {$err.="Name is empty &";}
	if(empty($email)) {$err.="Email is empty";}
	if(empty($employer)) {$err.="Employer is empty &";}

	if(!empty($err)) {
		echo "<script>alert('$err'); </script>";
		echo "<script>setTimeout(\"location.href='student-profile.php';\",200)</script>";
	}
	else{
				//No errors
				$uname=mysqli_real_escape_string($conn,$name);
				$uemail=mysqli_real_escape_string($conn,$email);
				$uemployer=mysqli_real_escape_string($conn,$employer);
				$utitle=mysqli_real_escape_string($conn,$title);

				$req="SELECT id FROM student_applications WHERE job_title='$utitle' AND email='$uemail'";
				$verification_result=mysqli_query($conn,$req);
				if(mysqli_num_rows($verification_result)==0){
					//user hasn't applied
					$query="INSERT INTO student_applications(name,email,employer,job_title) VALUES('$uname','$uemail','$uemployer','$utitle')";
					$result=mysqli_query($conn,$query);
					if($result){
						echo "<script>alert('Application sent!');</script>";
						echo "<script>setTimeout(\"location.href='student-profile.php'\",200);</script>";
					}
					else
						header("Location: register_intern.php");
				}
				else{
				//user already applied
				echo "<script>alert('Already applied');</script>";
				echo "<script>setTimeout(\"location.href = 'student-profile.php';\",200);</script>";
			}

	}
	mysqli_close($conn);

?>