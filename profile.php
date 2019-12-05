<?php
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	echo "Please login to access this page";
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>
		
</body>
</html>