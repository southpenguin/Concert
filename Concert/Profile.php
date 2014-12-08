<?php include 'includes/Head.php';?>

<title>Profile</title>
<link rel ="stylesheet" href="css/style.css">
<link rel ="stylesheet" href="css/profile.css">

<?php include 'includes/Navigation.php';?>
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
                <?php
                if($stmt=$mysqli->prepare("SELECT DISTINCT sggenre FROM Likes, SubGenre WHERE Likes.lsgenre = SubGenre.sgid AND Likes.luid = $uid;")){
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
            <div id="editinfo">
                <form action="Update.php" method="post">
                    <input type="hidden" name="UID" value="<?php echo $uid;?>">
                    <input id="edit"  type="submit" name="SignUp" value="Edit">
                </form>
            </div>
            <?php
                if($stmt=$mysqli->prepare("SELECT uscore FROM User WHERE uid = $uid;")){
                    $stmt->execute();
                    $stmt->bind_result($nuscore);
                    $stmt->store_result();
                    $stmt->fetch();
                    if ($nuscore>=50){ ?>
                        <div id="editinfo2">
                            <form action="Create_List.php" method="post">
                                <input type="hidden" name="UID" value="<?php echo $uid;?>">
                                <input id="list"  type="submit" name="SignUp" value="Creat a list">
                            </form>
                        </div> <?php
                    }
                } ?>
        </div>
    </div>
    </div>
</div>

</body>
</html>