<?php include 'includes/Head.php';?>

<title>Artist Detail</title>
<link rel ="stylesheet" href="css/style.css">
<link rel ="stylesheet" href="css/artistdetail.css">

<?php include 'includes/Navigation.php';?>

<?php
    $aid = $_GET["Artist"];
    if ($stmt = $mysqli->prepare("SELECT artname, aemail, asite, alink, abio FROM Art WHERE aid = $aid;")){
        $stmt->execute();
        $stmt->bind_result($artname, $aemail, $asite, $alink, $abio);
        $stmt->store_result();
        if ($stmt->num_rows == 1){
            $stmt->fetch();
        }
        $stmt->close();
    }
?>

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
                   
                </ul>
            </div>
        </div>
        </div>
    </div>
    
    <div class="content2">
        <?php 
    if ($stmt=$mysqli->prepare(
            "SELECT DISTINCT cid, cname, holdtime, price, capacity, available, clink, cbio, lname, lnumber, street1, street2, city, state, zip "
            . "FROM Concert, Hold, Location "
            . "WHERE Hold.hcid = Concert.cid "
            . "AND Concert.location = Location.lid "
            . "AND holdtime > CURRENT_TIMESTAMP "
            . "AND haid = ?")){
        $stmt->bind_param("i", $aid);
        $stmt->execute();
        $stmt->bind_result($cid, $cname, $holdtime, $price, $capacity, $available, $clink, $cbio, $lname, $lnumber, $street1, $street2, $city, $state, $zip);
        $stmt->store_result();
        if ($stmt->num_rows >= 1){
?>
        <ul class="following">
            <li>This artist is going to present in <?php echo $stmt->num_rows;?> concerts</li>
        </ul>
        <ol>
<?php
            while ($stmt->fetch()) {
?>
                <li class='group'>
                    <div class="box">
                        <div class="pics">
                            <a href= "">
                                <img src="Pictures/Concert/<?php echo $clink; ?>" width="270px">
                            </a>
                        </div>
                        <div class="links">
                            <a href= "Concert_Detail.php?Concert=<?php echo $cid;?>">
                                <div class="discription">
                                    <h5><?php echo $cbio; ?></h5>
                                </div>
                            </a>
                        </div>
                        <ul>
                            <li id="cname"><?php echo ucwords($cname); ?></li>
                            
                          <li><img src="Pictures/Logos/date.png" width=13px height=13px> <?php echo date("m/d/Y", strtotime($holdtime)); ?></li>
                    <li><img src="Pictures/Logos/time.png" width=13px height=13px> <?php echo date("g:i A", strtotime($holdtime)); ?></li>
                    <li><img src="Pictures/Logos/join.png" width=13px height=13px> <?php echo $capacity." total seats"; ?></li>
                    <li id="price"><img src="Pictures/Logos/dollar.png" width=13px height=13px> <?php echo "$".($price+0)/*Let the amount be int if decimal part is 0*/; ?></li>
                    <li><img src="Pictures/Logos/at.png" width=13px height=13px> <?php echo $lname; ?></li>
                    <li><?php echo $lnumber." ".$street1; ?></li>
                    <?php if ($street2 != null){?>
                    <li><?php echo $street2; ?></li>
                    <?php }?>
                    <li><?php echo $city.", ".$state." ".$zip; ?></li>
                                
                    </div>
                </li>
<?php 
            }
        }else{?>
        <ul class="following">
            <li>This artist has no up comming concert right now</li>
        </ul>
<?php
            
        }
    }
?>
            </ol>
    </div>
</div>
</body>
</html>