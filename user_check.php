<?php
	//Start database connection
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

	// get the q parameter from URL
	$q = $_REQUEST["q"];
	$sql = "SELECT 1 FROM accounts WHERE username = '$q'";
	$result = $con->query($sql);
	// var_dump($result->num_rows > 0);
	if ($result->num_rows > 0){
		echo "Username is taken";
	}else{
		return false;
	}

?>