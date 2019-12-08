<?php
session_start();
session_destroy();
// Redirect to the login page:
// header('Location: index.php');
echo "Successfully logged out" . "<br>" . "<a href=\"index.php\">Back to home page</a>";
?>