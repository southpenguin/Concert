<?php
//wen's host
//$mysqli = new mysqli("localhost", "admin", "admin", "project");
//he's host
$mysqli = new mysqli("localhost", "root", "root", "Concert");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
