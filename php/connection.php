<?php include 'includes/Head.php';?>

<title>Connection</title>
<link rel ="stylesheet" href="css/style.css">
<link rel ="stylesheet" href="css/connection.css"> 

<?php include 'includes/Navigation.php';?>

<div id="connectioncontent">
<div class="content">
            
<?php 
    if ($stmt=$mysqli->prepare("SELECT ufname, ulname, ucity, uscore, ulink, ubio, regtime FROM User, Follow WHERE User.uid = Follow.followee AND follower = ? ORDER BY foltime ASC;")){
    $stmt->bind_param("i", $uid);
    $stmt->execute();
    $stmt->bind_result($fufname, $fulname, $fucity, $fuscore, $fulink, $fubio, $fregtime);
    $stmt->store_result();
    if ($stmt->num_rows >= 1){
        ?>
        <ul class="following">
                <li>You are following <?php echo $stmt->num_rows;?> people</li>
            </ul>
            <ol>
                <?php
        while ($stmt->fetch()) {
?>
                <li class='group'>
                    <div class="box">
                        <div class="pics">
                            <a href= "">
                                <img src="Pictures/Users/<?php echo $fulink; ?>" width=150px height=150px>
                                
                            </a>
                        </div>
                        <div class="links">
                            <a href= "" >
                                <div class="discription">
                                    <h5><?php echo $fubio; ?></h5>
                                    <em class="time">
                                        Member since <?php echo date("Y-m-d", strtotime($fregtime)); ?>
                                    </em>
                                </div>
                            </a>
                        </div>
                        <ul>
                            <li><?php echo $fufname." ".$fulname; ?></li>
                            <li><img src="Pictures/Logos/score.png" width=10px height=10px> <?php echo $fuscore; ?></li>
                            <li><img src="Pictures/Logos/at.png" width=10px height=10px> <?php echo $fucity; ?></li>
                        </ul>
                    </div>
                </li>
<?php 
            }
        }
    }
?>
            </ol>

        </div>
        
        <div class="content2">
            
            
<?php 
    if ($stmt=$mysqli->prepare("SELECT uid, ufname, ulname, ucity, uscore, ulink, ubio, regtime FROM User, Follow WHERE User.uid = Follow.follower AND followee = ? ORDER BY foltime ASC;")){
        $stmt->bind_param("i", $uid);
        $stmt->execute();
        $stmt->bind_result($fuid, $fufname, $fulname, $fucity, $fuscore, $fulink, $fubio, $fregtime);
        $stmt->store_result();
        if ($stmt->num_rows >= 1){
            ?><ul class="following">
                <li><?php echo $stmt->num_rows;?> people are following you</li>
            </ul>
            
            <ol>
                <?php
            while ($stmt->fetch()) {
    ?>
                    <li class='group'>
                        <div class="box" id="follower">
                            <div class="pics">
                                <a href= "">
                                    <img src="Pictures/Users/<?php echo $fulink; ?>" width=150px height=150px>

                                </a>
                            </div>
                            <div class="links">
                                <a href= "" >
                                    <div class="discription">
                                        <h5><?php echo $fubio; ?></h5>
                                        <em class="time">
                                            Member since <?php echo date("Y-m-d", strtotime($fregtime)); ?>
                                        </em>
                                    </div>
                                </a>
                            </div>
                            <ul>
                                <li><?php echo $fufname." ".$fulname; ?></li>
                                <li><img src="Pictures/Logos/score.png" width=10px height=10px> <?php echo $fuscore; ?></li>
                                <li><img src="Pictures/Logos/at.png" width=10px height=10px> <?php echo $fucity; ?></li>
                                <?php
                                if ($stmt1 = $mysqli->prepare("SELECT * FROM Follow WHERE follower = ? AND followee = ?;")){
                                    $stmt1->bind_param("ii", $uid, $fuid);
                                    $stmt1->execute();
                                    $stmt1->store_result();
                                    if ($stmt1->num_rows == 1){
                                ?>
                                <div id="alreadyFollow">
                                You are currently following this person
                                </div>
                                
                                <?php
                                    }
                                    else {
                                        ?>
                                <form action="includes/Follow.php" method="post">
                                    <input type="hidden" name="Followee" value="<?php echo $fuid;?>">
                                    <input type="hidden" name="UID" value="<?php echo $uid;?>">
                                    <input class="submitbutton" id="connectionFollow" type="submit" name="SignUp" value="Follow">
                                </form> 
                                <?php
                                    }
                                }
                                ?>
                                
                            </ul>
                            
                        </div>
                    </li>
    <?php 
                }
            }
    }
    
?>
            </ol>  
                
        </div>
        </div>
    </body>
</html>

    
                
