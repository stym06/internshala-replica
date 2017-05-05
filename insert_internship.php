<?php
session_start();
include_once('dbconnect.php');



  $err = ""; // default error as empty
  $employer= trim($_POST['employer']);
  $title= trim($_POST['title']);
  $description= trim($_POST['description']);
  $stipend = trim($_POST['stipend']);

  $s_date=trim($_POST['start_date']);
  $s_date=date("Y-m-d",strtotime($s_date));
  $e_date=trim($_POST['end_date']);
  $e_date=date("Y-m-d",strtotime($e_date));

  // validation
  IF (empty($employer)) { $err .= "Employer is empty & "; }

  IF (empty($title)) { $err .= "Title is empty & "; }

IF (empty($description)) { $err .= "Desciption is empty & "; }


  IF (empty($stipend)) { $err .= "Stipend is empty."; }

  IF (!empty($err)) {

    // there are errors

    echo "<script>alert('$err');</script>";
    echo "<script>setTimeout(\"location.href = 'employer-profile.php';\",200);</script>";


  }ELSE{

    // No errors
    $uemployer = mysqli_real_escape_string($conn,$employer);
    $utitle = mysqli_real_escape_string($conn,$title);
    $udescription = mysqli_real_escape_string($conn,$description);
    $ustipend = mysqli_real_escape_string($conn,$stipend);
    $s_date = mysqli_real_escape_string($conn,$s_date);
    $e_date = mysqli_real_escape_string($conn,$e_date);

    $query="INSERT INTO internships(employer,title,description,stipend,start_date,end_date) VALUES('$uemployer','$utitle','$udescription','$ustipend','$s_date','$e_date')";

    $result = mysqli_query($conn,$query);

    if($result){
    echo "<script>alert('Internship added');</script>";
    echo "<script>setTimeout(\"location.href = 'employer-profile.php';\",200);</script>";
  }
  ELSE{
      echo "<script>alert('Error. Enter again');</script>";
    echo "<script>setTimeout(\"location.href = 'employer-profile.php';\",200);</script>";
    }

    // Close DB connection
    mysqli_close($conn);

  }

?>