<?php include 'includes/Head.php';?>

<title>Profile</title>
<link rel ="stylesheet" href="css/style.css">
<link rel ="stylesheet" href="css/profile.css">

<?php include 'includes/Navigation.php';?>

<?php
$userid = $_GET["User"];
if ($stmt = $mysqli->prepare("SELECT uid, username, ufname, ulname, uemail, ucity, uphone, regtime, lastlogin, uscore, ulink, ubio FROM User WHERE uid = $userid;")){
        
        $stmt->execute();
        $stmt->bind_result($uid, $username, $ufname, $ulname, $uemail, $ucity, $uphone, $regtime, $lastlogin, $uscore, $ulink, $ubio);
        $stmt->store_result();
        if ($stmt->num_rows == 1){
            $stmt->fetch();
        }
        $stmt->close();
}
?>

<div id="content">
    <div class="center">
    <div id="potrait">
        <img src="Pictures/Users/<?php echo $ulink; ?>" width="200" height="200">
    </div>
    <div id="profile">

        <div id="bio">
            <ul>
                <li id="name"><?php echo $ufname." ".$ulname; ?></li>
                <li id="profileusername">@<?php echo $username; ?></li>
                <li><img src="Pictures/Logos/score.png" width=10px height=10px> <?php echo $uscore; ?></li>
                <li><img src="Pictures/Logos/at.png" width=10px height=10px> <?php echo $ucity; ?></li>
                <li><?php echo $uemail; ?></li>
                <li><?php echo $uphone; ?></li>
                <li>Member since: <?php echo date("m/d/Y", strtotime($regtime)); ?></li>
            </ul>
            <div id="biotitle">
                <h4>Something about yourself:</h4>
            </div>
            <div id="biocontent">
                <h5><?php echo $ubio; ?></h5>
            </div>
        </div>
    </div>
    </div>
</div>

</body>
</html>