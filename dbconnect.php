<?php 
	$host="localhost";
	$user="root";
	$password="";
	$dbname="internshala";

	$conn=mysqli_connect($host,$user,$password,$dbname);
	if(!$conn)
		echo "Connection refused" . mysqli_connect_error();
?>