<?php
session_start();

if (!isset($_SESSION["UID"])) {
    header("Location:entry.php");
} else {
    $uid = $_SESSION["UID"];
    $username = $_SESSION["Username"];
    $ufname = $_SESSION["FirstName"];
    $ulname = $_SESSION["LastName"];
    $uemail = $_SESSION["Email"];
    $ucity = $_SESSION["City"];
    $uphone = $_SESSION["Phone"];
    $regtime = $_SESSION["RegTime"];
    $lastlogin = $_SESSION["RegTime"]; 
    $uscore = $_SESSION["Score"];
    $ulink = $_SESSION["Link"];
    $ubio = $_SESSION["Bio"];
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>
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
        <div id="content">
            <div class="center">
            <div id="potrait">
                <img src="Pictures/Users/<?php echo $ulink; ?>" width="200" height="200">
            </div>
            <div id="profile">
                
                <div id="bio">
                    <ul>
                        <li><?php echo $ufname." ".$ulname; ?></li>
                        <li id="profileusername">@<?php echo $username; ?></li>
                        <li><img src="Pictures/Logos/score.png" width=10px height=10px> <?php echo $uscore; ?></li>
                        <li><img src="Pictures/Logos/at.png" width=10px height=10px> <?php echo $ucity; ?></li>
                        <li><?php echo $uemail; ?></li>
                        <li><?php echo $uphone; ?></li>
                        <li id="reg">Member since: <?php echo date("Y-m-d", strtotime($regtime)); ?></li>
                        <li id="lastlg">Last log in: <?php echo date("Y-m-d", strtotime($lastlogin)); ?></li>
                        
                    </ul>
                    <div id="biocontent">
                        <?php echo $ubio; ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
            
            <div class="right">
                
            </div>

        
    </body>
</html>
