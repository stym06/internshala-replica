<?php
session_start();
include_once('dbconnect.php');

IF (isset($_POST['loginBtn'])) { // the form was submitted

  $err = ""; // default error as empty
  $name= trim($_POST['name']);
  $username= trim($_POST['username']);
  $email= trim($_POST['email']);
  $password = trim($_POST['password']);
  $type=$_POST['type'];

  // validation
  IF (empty($name)) { $err .= "Name is empty & "; }

  IF (empty($uername)) { $err .= "Username is empty & "; }

  IF (empty($email)) { $err .= "Email is empty & ";
  }ELSE{
    IF (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $err .= "Email is not valid<br>";
    }
  }

  IF (empty($password)) { $err .= "Password is empty."; }

  IF (!empty($err)) {

    // there are errors

    echo "<script>alert('$err');</script>";
    echo "<script>setTimeout(\"location.href = 'signup.php';\",200);</script>";


  }ELSE{

    // No errors
    $uname = mysqli_real_escape_string($name);
    $usname = mysqli_real_escape_string($username);
    $uemail = mysqli_real_escape_string($email);
    $upass = mysqli_real_escape_string(md5($password));
    $query = "INSERT INTO login(name,username,email,password,type) VALUES('$uname','$usname','$uemail','$upass','$type')";
    $result = mysqli_query($conn,$query);

    IF ($result) {
      // set session
      header('Location: login');

    }ELSE{
      echo("<p>Email address and or your password was incorrect.<br>If you do not have an account please create one.</p>");
    }

    // Close DB connection
    mysqli_close($conn);

  }

}ELSE{
  // form not submitted
  header("Location: signup");
}
?>