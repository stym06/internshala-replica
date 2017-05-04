<?php 
	include('dbconnect.php');
	$employer=$title=$description=$stipend="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $employer = test_input($_POST["employer"]);
  if (!preg_match("/^[a-zA-Z ]*$/",$employer)) {
  $nameErr = "Only letters and white space allowed"; 
	}
  $title = test_input($_POST["title"]);
  if (!preg_match("/^[a-zA-Z ]*$/",$title)) {
  $nameErr = "Only letters and white space allowed"; 
	}
  $description = test_input($_POST["description"]);
  if (!preg_match("/^[a-zA-Z ]*$/",$description)) {
  $nameErr = "Only letters and white space allowed"; 
	}
  $stipend = test_input($_POST["stipend"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

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