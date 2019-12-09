<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Mason and Jorge">

  <title>Profile</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Custom styles for this template -->

  <link href="./css/style.css" rel="stylesheet">

  <?php
  session_start(); 
  //connection to database
  $DATABASE_HOST = 'localhost';
  $DATABASE_USER = 'cs329e_mitra_mmooring';
  $DATABASE_PASS = 'banal5Fix3Soon';
  $DATABASE_NAME = 'cs329e_mitra_mmooring';
  // Try and connect using the info above.
  $con = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
  if ( $con->connect_error ) {
    // If there is an error with the connection, stop the script and display the error.
  die ('Failed to connect to MySQL: ' . $con->connect_error);
}
  $username = $_SESSION['username'];
  $photo = "SELECT imagePath, name FROM accounts WHERE username='$username'";
  $result = mysqli_query($con, $photo);
  $r = mysqli_fetch_array($result);
  
  //profile page  
  if (!isset($_SESSION['username'])) {
    echo "Please login to access this page" . "<br>";
    echo "<a href='./index.php'>Return home</a>";
    return;
  }

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

    <div class="container">
    <h1 class="pb-3">Edit Profile</h1>



    <h3 class="pb-2">Update Photo</h3>
    <div class="pb-3 pt-2">
      <form action="./upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
      </form>
    </div>

    <!--- name here -->
    <h3 class="pb-2">Update Name</h3>
    <div class="pb-3 pt-2">
      <form action="./name.php" method="post">
      <input type="text" name="bandName" id="bandName">
      <input type="submit" value="Submit Name" name="submit">
      </form>
    </div>

  </div>



</body>