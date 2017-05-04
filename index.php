<html>
	<head>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="assets/js/jquery-3.2.0.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
<body>
<?php 
include('dbconnect.php');

$query="SELECT * FROM internships";
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
        <li><a href="login.php">Log In  <span class="glyphicon glyphicon-user"></span><span class="sr-only">(current)</span></a></li>
        
      </ul>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-tasks"></span> Log Out</a></li>
      </ul>
      -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container bg-success" id="content">
 <h1 class="text-primary text-center"> Available Internships </h1>
<?php
	while($row=mysqli_fetch_assoc($result)){

 ?>
	<div class="well bg-info">
		<h4><strong>Title: </strong><?php echo $row['title']; ?></h4>
		<p><strong>Description: </strong><?php echo $row['description']; ?></p>
		<p><strong>Stipend: Rs. </strong><?php echo $row['stipend']; ?></p>
		<a role="button" href="login.php" class="btn btn-block btn-success">Apply</a>
	</div>
	<?php 
	}
	mysqli_close($conn);
	?>
</div>
</body>
</html>