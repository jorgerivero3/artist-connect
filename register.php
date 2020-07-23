<?php
session_start();
// Change this to your connection info.
include 'sql_con.php';
// REGISTER USER
if (isset($_POST['reg_username'])) {
  // receive all input values from the form
  $username = pg_escape_string($con, $_POST['reg_username']);
  $password_1 = pg_escape_string($con, $_POST['reg_password_1']);
  $password_2 = pg_escape_string($con, $_POST['reg_password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); echo "Username Required";}
  if (empty($password_1)) { array_push($errors, "Password is required"); echo "password required";}
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
	echo "two passwords dont match";
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM accounts WHERE username='$username' LIMIT 1";
  $result = pg_query($con, $user_check_query);
  $user = pg_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
	  echo "user already exists";
    }

  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database

  	$sql = "INSERT INTO accounts (username, email, password, imagePath, name) VALUES('$username','blank@blank.com', '$password', './blank.jpg', '$username ')";
    //TODO: What does this do?
  	$result = $con->query($sql);

	if ($result == true) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
	}

  	$_SESSION['username'] = $username;
  	$_SESSION['loggedin'] = true;
  	header('location: profile.php');
  }
}