<?php
	//Start database connection
	include 'sql_con.php';

	// get the q parameter from URL
	$q = $_REQUEST["q"];
	$sql = "SELECT 1 FROM accounts WHERE username = '$q'";
	$result = pg_query($con, $sql);
	// var_dump($result->num_rows > 0);
	if ($result->num_rows > 0){
		echo "Username is taken";
	}else{
		return false;
	}

?>