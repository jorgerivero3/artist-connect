<?php
session_start();

/* MYSQL Connction
$DATABASE_HOST = 'ec2-52-86-116-94.compute-1.amazonaws.com';
$DATABASE_USER = 'exkdsjszufcyiv';
$DATABASE_PASS = 'b9b349ef1789507f99a76ea67d245e119c7f895f104cda9b772444efea26f929';
$DATABASE_NAME = 'dblt6pefh8nddm';




// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if ( mysqli_connect_error() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
*/

//Postgress
$con = pg_connect(getenv("DATABASE_URL"))

if (!$con){
	die('failed to connect to Postgres Server')
}




// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}

// Prepare statement to prevent injection
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
}

if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if ($_POST['password'] === $password) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['id'] = $id;
		echo "Login successful";
		header('Location: ./profile.php');
	} else {
		echo 'Incorrect password!';
	}
} else {
	echo 'Incorrect username!';
}
$stmt->close();
?>