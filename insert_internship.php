<?php
session_start();
include_once('dbconnect.php');

IF (isset($_POST['loginBtn'])) { // the form was submitted

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

IF (empty($s_date)) { $err .= "Start Date is empty & "; }

IF (empty($e_date)) { $err .= "End Date is empty & "; }

  IF (!empty($err)) {

    // there are errors

    echo "<script>alert('$err');</script>";
    echo "<script>setTimeout(\"location.href = 'employer-profile.php';\",200);</script>";


  }ELSE{

    // No errors
    $uemployer = mysqli_real_escape_string($employer);
    $utitle = mysqli_real_escape_string($title);
    $udesciption = mysqli_real_escape_string($description);
    $ustipend = mysqli_real_escape_string($stipend);
    $us_date = mysqli_real_escape_string($s_date);
    $ue_date = mysqli_real_escape_string($e_date);

    $query="INSERT INTO internships(employer,title,description,stipend,start_date,end_date) VALUES('$uemployer','$utitle','$udescription','$ustipend','$us_date','$ue_date')";

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

}ELSE{
  // form not submitted
  
  echo "<script>alert('Error. Enter again');</script>";
    echo "<script>setTimeout(\"location.href = 'employer-profile.php';\",200);</script>";
}
?>