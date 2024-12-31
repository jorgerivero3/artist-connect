<!DOCTYPE html>
<html lang="en">
	<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Mason and Jorge">

  <title>Artist Connect - About</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Custom styles for this template -->
  <link href="./css/all.css" rel="stylesheet">
  <link href="./style.css" rel="stylesheet">
  
  <?php
  session_start(); 
  //connection to database
  include 'sql_con.php';
  $username = $_SESSION['username'];
  $photo = "SELECT imagePath, name FROM accounts WHERE username='$username'";
  $result = mysqli_query($con, $photo);
  $r = mysqli_fetch_array($result);

?>
  
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
	
	<div class="content" style="margin-top:20px">
		<div>
	
					<div class="col-sm-3 card" id="card1" style="position:fixed;">
						<!--<img class="card-img-top" src="" alt="Card image cap">-->
						<div class="card-body">
							<h5 class="card-title text-center"> Mason Mooring </h5>
							<p> Senior Economics major with an interest in computer science.</p>
							<p> </p>
							<p> </p>
						</div>
					</div>
					
					<div class="col-sm-3 card" id="card2">
						<!--<img class="card-img-top" src="" alt="Card image cap">-->
						<div class="card-body">
							<h5 class="card-title text-center"> Jorge Rivero </h5>
							<p> Senior Sustainability Studies Major and Computer Science Minor</p>
							<p> </p>
							<p> </p>
						</div>
					</div>
					
				
			
		</div>

	</div>