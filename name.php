<?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'cs329e_mitra_mmooring';
$DATABASE_PASS = 'banal5Fix3Soon';
$DATABASE_NAME = 'cs329e_mitra_mmooring';
$username = $_SESSION['username'];
$new_name = $_POST['bandName'];
// Try and connect using the info above.
$con = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( $con->connect_error ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . $con->connect_error);
}

//updates database with name
$sql = "UPDATE accounts SET name='$new_name' WHERE username='$username'";
$result = $con->query($sql);

if ($result == true) {
    echo "  and database record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
	
header('location: profile.php');


?>