<?php
$mysqli = new mysqli("project.cz9jstihzrzs.us-east-1.rds.amazonaws.com", "admin", "admin123", "project");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
