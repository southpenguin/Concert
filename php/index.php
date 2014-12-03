<?php
    session_start();
    if(!isset($_SESSION["UID"])){
        header("Location:entry.php");
    }
    else {
        $uid = $_SESSION["UID"];
        $username = $_SESSION["Username"];
        $ufname = $_SESSION["FirstName"];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel ="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id ="navigation">
            <div id="topcontent">
                <div id="logo">
                    <a href="index.php">Concert</a>
                </div>
                
                <div id="hometop">
                    <ul>
                        <li><a href = "index.php">Home</a></li>
                        <li><a href = "artists.php">Artists</a></li>
                        <li><a href = "concerts.php">Concerts</a></li>
                        <li><a href = "connection.php">Connection</a></li>
                        <li><a href = "profile.php">My Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="center">
            Welcome Back, <?php echo $ufname;?>
        </div>
    </body>
</html>
