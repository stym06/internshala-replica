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
	$s_date=$_POST['start_date'];
	$s_date=date("Y-m-d",strtotime($s_date));
	$e_date=$_POST['end_date'];
	$e_date=date("Y-m-d",strtotime($e_date));

	$query="INSERT INTO internships(employer,title,description,stipend,start_date,end_date) VALUES('$employer','$title','$description','$stipend','$s_date','$e_date')";
	if(mysqli_query($conn,$query)){
		header("Location:employer-profile.php");
	}
	else
	{
		echo "Error in Query";
	}
	mysqli_close($conn);
?>