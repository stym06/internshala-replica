<?php 
	include('dbconnect.php');
	$employer=$_POST['employer'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$stipend=$_POST['stipend'];
	$query="INSERT INTO internships(employer,title,description,stipend) VALUES('$employer','$title','$description','$stipend')";
	if(mysqli_query($conn,$query)){
		header("Location:employer-profile.php");
	}
	else
	{
		echo "Error in Query";
	}
	mysqli_close($conn);
?>