<?php session_start();
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
<?php 
include('dbconnect.php');
$usname=$_SESSION['username'];
$query="SELECT * FROM internships WHERE end_date>CURDATE()";
$result=mysqli_query($conn,$query);
?>
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
      </ul>
        
      </ul>
     <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-tasks"></span> Log Out</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Hello!</strong> Welcome to your profile <?php echo $usname; ?>
</div>
<div class="container bg-success" id="content">
 <h1 class="text-primary text-center"> Available Internships </h1>
<?php
	while($row=mysqli_fetch_assoc($result)){

 ?>
	<div class="well bg-info">
  <h4><strong>Employer: </strong><?php echo $row['employer']; ?></h4>
		<h4><strong>Title: </strong><?php echo $row['title']; ?></h4>
		<p><strong>Description: </strong><?php echo $row['description']; ?></p>
		<p><strong>Stipend: Rs. </strong><?php echo $row['stipend']; ?></p>
    <p><strong>Start Date: </strong><?php echo $row['start_date']; ?></p>
    <p><strong>End Date: </strong><?php echo $row['end_date']; ?></p>
		<a role="button" href="register_intern.php?employer=<?php echo $row['employer']?>&title=<?php echo $row['title'] ?>" class="btn btn-block btn-success">Apply</a>
	</div>
	<?php 
	}
	mysqli_close($conn);
	?>
</div>
</body>
</html>