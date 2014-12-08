<?php
session_start();
include 'includes/connectDB.php';

if (!isset($_SESSION["AID"])) {
    header("Location:Art_Entry.php");
} else {
    $aid = $_SESSION["AID"];
    if ($stmt = $mysqli->prepare("SELECT aid, auname, artname, aemail, asite, alink, abio FROM Art WHERE aid = $aid;")){
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($aid, $auname, $artname, $aemail, $asite, $alink, $abio);
        $stmt->store_result();
        $stmt->fetch();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
<link rel ="stylesheet" href="css/style.css">
<link rel ="stylesheet" href="css/artistdetail.css"> 
</head>
    <body>
        <div id ="navigation">
            <div id="topcontent">
                <div id="logo">
                    <a href="/Concert/index.php">Concert</a>
                </div>
            </div>
        </div>
      

<div id="connectioncontent">
    <div id="content">
        <div class="center">
        <div id="profile">
            <div id="concertpic">
                <img src="Pictures/Art/<?php echo $alink; ?>" height="320">
            </div>
            <div id="bio">
                <ul>
                    <li id="name"><?php echo ucwords($artname); ?></li>
                    <li><img src="Pictures/Logos/email.png" width=13px height=13px> <?php echo $aemail; ?></li>
                    <li><img src="Pictures/Logos/join.png" width=13px height=13px> <?php 
                        if(substr($asite, 0, 4) != "http") $newasite = "http://".$asite;?>
                        <a href='<?php echo $newasite;?>'><?php echo $newasite;?></a>
                    </li>
                    <li id="cbio"><?php echo $abio; ?></li>
                    <div id ="genreblock">
                    <?php
                if($stmt=$mysqli->prepare("SELECT DISTINCT sggenre FROM Have, SubGenre WHERE Have.hsgenre = SubGenre.sgid AND Have.haid = $aid;")){
                    $stmt->execute();
                    $stmt->bind_result($sggenre);
                    $stmt->store_result();
                    while ($stmt->fetch()) {
                        ?>
                        <div class="genres">
                            <?php echo $sggenre;?>
                        </div>
                        <?php
                    }
                }
                    ?>
                    </div>
                    <div class="editart">
                        <a href="Edit_Art.php" style="text-decoration: none;">Edit Profile</a>
                    </div>
                    <div class="editart">
                        <a href="Post_Concert.php" style="text-decoration: none;">Post Concerts</a>
                    </div>
                </ul>
            </div>
        </div>
        </div>
    </div>