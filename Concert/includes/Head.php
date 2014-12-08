<?php
session_start();
include 'connectDB.php';
include 'includes/connectDB.php';

if (!isset($_SESSION["UID"])) {
    header("Location:Entry.php");
} else {
    $uid = $_SESSION["UID"];
    if ($stmt0 = $mysqli->prepare("SELECT uid, username, ufname, ulname, uemail, ucity, uphone, regtime, lastlogin, uscore, ulink, ubio FROM User WHERE uid = $uid;")){
        
        $stmt0->execute();
        $stmt0->bind_result($uid, $username, $ufname, $ulname, $uemail, $ucity, $uphone, $regtime, $lastlogin, $uscore, $ulink, $ubio);
        $stmt0->store_result();
        if ($stmt0->num_rows == 1){
            $stmt0->fetch();
        }
        $stmt0->close();
    }
    $mysqli->query("UPDATE User SET uscore = uscore + (CURRENT_TIMESTAMP - lastlogin)/5000000 WHERE uid = '$uid'");
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">