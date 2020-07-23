<?php
session_start();
// Change this to your connection info.
include 'sql_con.php';

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