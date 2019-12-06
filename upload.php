<?php
session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$uploadOk = 1;
    } else {
        echo "Sorry, there was an error uploading your file.";
		$uploadOk = 0;
    }
}

// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'cs329e_mitra_mmooring';
$DATABASE_PASS = 'banal5Fix3Soon';
$DATABASE_NAME = 'cs329e_mitra_mmooring';
$username = $_SESSION['username'];
// Try and connect using the info above.
$con = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( $con->connect_error ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . $con->connect_error);
}

//updates database with photo
if ($uploadOk == 1) {

  	$sql = "UPDATE accounts SET imagePath='$target_file' WHERE username='$username'";
  	$result = $con->query($sql);

	if ($result == true) {
	    echo "  and database record updated successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
	}
	
  	header('location: profile.php');
  }


?>