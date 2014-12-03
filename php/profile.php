<?php
session_start();

if (!isset($_SESSION["UID"])) {
    header("Location:entry.php");
} else {
    $user = $_SESSION["UID"];
    $username = $_SESSION["Username"];
    $ufname = $_SESSION["FirstName"];
    $ulname = $_SESSION["LastName"];
    $ufname = $_SESSION["FirstName"];
    $uemail = $_SESSION["Email"];
    $ucity = $_SESSION["City"];
    $uphone = $_SESSION["Phone"];
    $regtime = $_SESSION["RegTime"];
    $lastlogin = $_SESSION["RegTime"]; 
    $uscore = $_SESSION["Score"];
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
        <link rel ="stylesheet" href="css/style.css">
        <link rel ="stylesheet" href="css/profile.css">
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
            
            <div class="box" id="profile">
                <ul>
                    <li>Welcome Back, <?php echo $ufname; ?></li>
                    <li>Name: <?php echo $ufname." ".$ulname; ?></li>
                    <li>Username: <span id="profileusername">@<?php echo $username; ?></span></li>
                    <li>Email: <?php echo $uemail; ?></li>
                    <li>City: <?php echo $ucity; ?></li>
                    <li>Phone: <?php echo $uphone; ?></li>
                    <li>Contribution Points: <?php echo $uscore; ?></li>
                    <li>Last Login: <?php echo $lastlogin; ?></li>
                    <li>Registered: <?php echo $regtime; ?></li>
                    
                </ul>

            </div>
            
            <div class="right">
                
            </div>

        </div>
    </body>
</html>
