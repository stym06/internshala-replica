<?php session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="assets/js/jquery-3.2.0.min.js"></script>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
		<script src="js/bootstrap.js"></script>
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
<body>
<?php 
	$usname=$_SESSION['username'];
	include('dbconnect.php');
	$query="SELECT * FROM internships WHERE employer='$usname'";
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
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" role="button"><span class="glyphicon glyphicon-tasks"></span> Log Out</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
		<h2 class="text-center"><strong>Add another internship </strong></h2>
			<form role="form" action="insert.php" method="post">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			<div class="form-group">
					<label>Employer: </label>
					<input type="text" name="employer" class="form-control" value="<?php echo $usname ?>">
				</div>
				<div class="form-group">
					<label>Title: </label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label>Description: </label>
					<input type="text" name="description" class="form-control">
				</div>
				<div class="form-group">
					<label>Stipend: </label>
					<input type="text" name="stipend" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Add Internship</button>
			</form>
		</div>
		<div class="col-sm-4">
		<h2 class="text-center"><strong>Internships posted </strong></h2><br>
			<?php
	while($row=mysqli_fetch_assoc($result)){

 ?>
	<div class="well bg-info">
	<form action="delete.php">
		<h4><strong>Employer: </strong><?php echo $row['employer']; ?></h4>
		<h4><strong>Title: </strong><?php echo $row['title']; ?></h4>
		<p><strong>Description: </strong><?php echo $row['description']; ?></p>
		<p><strong>Stipend: Rs. </strong><?php echo $row['stipend']; ?></p>
	</form>
	</div>
	<?php 
	}
	mysqli_close($conn);
	?>
		</div>
		<div class="col-sm-4">
			<h2 class="text-center"><strong>Received Applications </strong></h2>
		</div>
		</div>
	</div>
</div>
</body>
</html>