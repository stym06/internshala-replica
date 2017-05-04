<?php 
session_start();
include('dbconnect.php');
 ?>
 <!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="assets/js/jquery-3.2.0.min.js"></script>
		<script src="js/bootstrap.js"></script>
    	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
  <style>
    .well{
      width:50%;
      margin:0 auto;
    }
    .radio{
      width:70%;
      margin:0 auto;
      position: relative
      right:20px;
    }
    .register{
      position: relative
      right:30px;
    }
  </style>
<body>
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Internshala</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="login.php">Log In  <span class="glyphicon glyphicon-user"></span><span class="sr-only">(current)</span></a></li>
        
      </ul>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-tasks"></span> Log Out</a></li>
      </ul>
      -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="well">
<div>
  <h2 class="text-info text-center">Sign Up</h2><br>
</div>
  <form class="form-horizontal" action="signup-inc.php" method="post">
  <div class="form-group">
    <label class="col-sm-2 control-label">Name:</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Username: </label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Choose a username...">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Password:</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
 <div class="radio" >
  <label>
    <input type="radio" name="type" id="usertype" value="student" checked>
    Student
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="type" id="usertype2" value="employer">
    Employer
  </label>
</div><br>
  <div class="form-group register">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default btn-block">Register</button>
    </div>
  </div>
</form>
</div>
</body>
</html>