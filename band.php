<!DOCTYPE html>
<html>
<head>
	<?php
		session_start();
	?>
	<title></title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Mason and Jorge">
	<!-- Custom styles for this template -->
	


  <link href="./css/all.css" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">
	<title>Artist Connect - {Band Name}</title>
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

	  <div class="container pb-5">
	  <div class="row">
	  	<div class="col-4-">
	  		<img alt="image of band" src="./img/band.jpg" class="img-thumbnail" style="width: 500px;">
	  	</div>
	  	<div class="col">
	  		<h2>Station One</h2>
	  		<p>Genre: Blues</p>
	  		<button>Save to Favorites</button>
	  		<button>Send a message</button>
	  	</div>
	  </div>
	  <br>
	  <div class="row">
	  <div class="col">
	  <h5>Bio</h5><br> 
	  		<p>From the heart of Texas. Starting out in their garage here in town, they have brought a unique mix of blues to the Austin live music scene.</p>
	  		</div>
	  </div>
	  <div class="row">
	  	<h5>Links</h5>
	  	<div class="col-lg-2 social">
		  <i class="fab fa-instagram"></i>
		  <i class="fab fa-twitter"></i>
		</div>
	  </div>
	</div>

	  

	  <footer class="py-5">
	    <div class="container">
	      <p class="m-0 text-center text-white">Copyright &copy; Artist Connect 2019</p>
	    </div>
	    <!-- /.container -->
	  </footer>

	  
</body>
</html>