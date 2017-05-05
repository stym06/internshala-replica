<?php 
session_start();
include('dbconnect.php');
$employer=$_GET['employer'];
$title=$_GET['title'];
$usname=$_SESSION['username'];
$query="SELECT * FROM internships WHERE employer='$employer' AND title='$title'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
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
      <a class="navbar-brand" href="#">Internshala</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <li><a href="#">Logged in as <?php echo $usname; ?></a></li>
       <li><a href="student-profile.php"><span class="glyphicon glyphicon-arrow-left"></span><strong>  Back</strong></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-tasks"></span> Log Out</a></li>
      </ul>
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="jumbotron" style="width:70%; margin:0 auto;">
  
  <p class="text-info" style="font-size: 60px;"> Applying for </p>
  <div class="well well-lg bg-info">
  <p><strong>Employer: </strong><?php echo $row['employer']; ?></p>
    <h4><strong>Title: </strong><?php echo $row['title']; ?></h4>
    <p><strong>Description: </strong><?php echo $row['description']; ?></p>
    <p><strong>Stipend: Rs. </strong><?php echo $row['stipend']; ?></p>
  <?php 
  mysqli_close($conn);
  ?>
</div>
<form class="form-horizontal" action="register_intern-inc.php" method="post">
<input type="hidden" name="title" value="<?php echo $row['title']; ?>">
  <div class="form-group">
    <label class="col-sm-2 control-label">Name:</label>
    <div class="col-sm-8">
      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Email: </label>
    <div class="col-sm-8">
      <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Your e-mail">
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-2 control-label">Employer:</label>
    <div class="col-sm-8">
      <input type="text" name="employer" class="form-control" id="inputEmail3" value="<?php echo $row['employer']; ?>">
    </div>
  </div>
  <button class="btn btn-success btn-lg" name="loginBtn" style="position: relative; left:420px;">Apply</button>
</div>
</body>
</html>