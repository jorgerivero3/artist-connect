<?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'cs329e_mitra_mmooring';
$DATABASE_PASS = 'banal5Fix3Soon';
$DATABASE_NAME = 'cs329e_mitra_mmooring';
$username = $_SESSION['username'];
$new_name = $_POST['bandName'];
$ident = $_POST['radio'];
// Try and connect using the info above.
$con = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( $con->connect_error ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . $con->connect_error);
}

//updates database with name
if (isset($_POST['submit'])) {
	if(!empty($_POST['bandName'])){
	
	$sql = "UPDATE accounts SET name='$new_name' WHERE username='$username'";
	$result = $con->query($sql);
	}
	if (isset($_POST['radio'])) {
			$sql = "UPDATE accounts SET identity='$ident' WHERE username='$username'";
			$result = $con->query($sql);
			echo "You are currently a :".$_POST['radio'];
		  }
}

if ($result == true) {
    echo "  and database record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
	
header('location: profile.php');


?>