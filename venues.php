<!DOCTYPE html>
<html lang="en">
<head>

	<?php
		session_start();
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
	                <a class="nav-link" href="#">About</a>
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
	            <?php else : ?>
	              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalLRForm">Login</a>
	            <?php endif ?>
	    		  </li>
	              </li>
	            </ul>
	          </div>
	        </div>
	      </nav>

	  <div class="container">
	  <h1 style="padding-top: 15px; padding-bottom: 15px;">Venues</h1>
	  <div class="row">
	  	<div class="col-2-">
	  		<img alt="image of band" src="./img/venue1.jpg" class="img-thumbnail" style="width: 300px;">
	  	</div>
	  	<div class="col">
	  		<a href="./band.html"><h2>Club 101</h2></a>
	  		<h5>Address</h5>
	  		<p>77 James Drive
Fullerton, CA 92831</p>
	  	</div>
	  </div>
	  <hr>

	  <div class="row">
	  	<div class="col-2-">
	  		<img alt="image of band" src="./img/venue2.jpg" class="img-thumbnail" style="width: 300px;">
	  	</div>
	  	<div class="col">
	  		<a href="./band.html"><h2>The Salty Spitoon</h2></a>
	  		<h5>Address</h5>
	  		<p>247 State Ave.
El Dorado, AR 71730</p>
	  	</div>
	  	</div>
	  <hr> 

	  <div class="row">
	  	<div class="col-1-">
	  		<img alt="image of band" src="./img/venue3.jpg" class="img-thumbnail" style="width: 300px;">
	  	</div>
	  	<div class="col">
	  		<a href="./band.html"><h2>Weenie Hut Jr's</h2></a>
	  		<h5>Address</h5>
	  		<p>8246 North Dr.
Fitchburg, MA 01420</p>
	  	</div>
	  </div>
	  </div>
</body>	
</html>