<?php
    //require_once 'includes/Query-class.php';

    session_start();
    
    //$user = $dbquery->LoadUserObj($_SESSION["UID"]);
    
    if(!isset($_SESSION["UID"])){
        header("Location:login.php");
    }
    else $user = $_SESSION["UID"];
?>


<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        adsfasdf
    </body>
</html>
