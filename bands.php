<!DOCTYPE html>
<html lang="en">
<head>

	<?php
	session_start();
  $DATABASE_HOST = 'localhost';
  $DATABASE_USER = 'cs329e_mitra_mmooring';
  $DATABASE_PASS = 'banal5Fix3Soon';
  $DATABASE_NAME = 'cs329e_mitra_mmooring';
  // connect
  $con = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
  if ( $con->connect_error ) {
	// show error if connect fails
	die ('Failed to connect to MySQL: ' . $con->connect_error);
  }
  
  $result = mysqli_query($con, "SELECT * from accounts WHERE (identity = 'band')");
	?>
	
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Mason and Jorge">
	<!-- Custom styles for this template -->
	<link href="./css/style.css" rel="stylesheet">

	<title>Artist Connect - Bands</title>
	<meta charset="utf-8">
</head>
<body>
	  <!-- Navigation -->
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
	      <div class="container">
	        <a class="navbar-brand" href="./index.php">Artist Connect</a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarResponsive">
	          <ul class="navbar-nav ml-auto">
	            <li class="nav-item">
	              <?php  if (isset($_SESSION['username'])) : ?>
	              <a class="nav-link" href="./profile.php">Profile</a>
	              <?php endif ?>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="./about.php">About</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="./venues.php">Venues</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="./bands.php">Bands</a>
	            </li>
	  		  <li class="nav-item">
	          <?php  if (isset($_SESSION['username'])) : ?>
	              <a href="./logout.php" class="btn btn-primary">Logout</a>
	          <?php endif ?>
	  		  </li>
	            </li>
	          </ul>
	        </div>
	      </div>
	    </nav>

	  <div class="container">
	  <h1 style="padding-top: 15px; padding-bottom: 15px;">Bands</h1>
	  <?php 
	  while ($row = $result-> fetch_row())
	  {
		echo "<div class='row'>
	  	<div class='col-2-'>
	  		<img alt='image of band' src=". $row[4] . " class='img-thumbnail' style='width: 300px;'>
	  	</div><div class='col'>
	  		<a href='./band.php?data=".$row[1]."'><h2>".$row[5]."</h2></a>
	  		<h5>Bio</h5>
	  		<p>".$row[7]."</p>
	  	</div></div><hr>";
	  }?>
	  <!--
	  <div class="row">
	  	<div class="col-2-">
	  		<img alt="image of band" src="./img/band.jpg" class="img-thumbnail" style="width: 300px;">
	  	</div>
	  	<div class="col">
	  		<a href="./band.php"><h2>Station One</h2></a>
	  		<p>Genre: Blues</p>
	  		<h5>Bio</h5>
	  		<p>From the heart of Texas. Starting out in their garage here in town, they have brought a unique mix of blues to the Austin live music scene.</p>
	  	</div>
	  </div>
	  <hr>--> 
	</div>
</body>	
</html>