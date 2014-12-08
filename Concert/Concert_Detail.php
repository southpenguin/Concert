<?php 
    include 'includes/Head.php';
    error_reporting(0); 

?>

<title>Concert Detail</title>
<link rel ="stylesheet" href="css/style.css">
<link rel ="stylesheet" href="css/concertdetail.css">

<?php include 'includes/Navigation.php';?>

<?php
    $cid = $_GET["Concert"];
    if ($stmt = $mysqli->prepare(
            "SELECT cname, holdtime, price, capacity, available, clink, cbio, lname, lnumber, street1, street2, city, state, zip "
            ."FROM Concert, Location "
            ."WHERE Concert.location = Location.lid AND cid = $cid;")){
        $stmt->execute();
        $stmt->bind_result($cname, $holdtime, $price, $capacity, $available, $clink, $cbio, $lname, $lnumber, $street1, $street2, $city, $state, $zip);
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
                <img src="Pictures/Concert/<?php echo $clink; ?>" height="320">
            </div>
            <div id="bio">
                <ul>
                    <li id="name"><?php echo ucwords($cname); ?></li>
                    <li id="cbio"><?php echo $cbio; ?></li>
                    <li><img src="Pictures/Logos/date.png" width=13px height=13px> <?php echo date("m/d/Y", strtotime($holdtime)); ?></li>
                    <li><img src="Pictures/Logos/time.png" width=13px height=13px> <?php echo date("g:i A", strtotime($holdtime)); ?></li>
                    <li><img src="Pictures/Logos/join.png" width=13px height=13px> <?php echo $capacity." total seats"; ?></li>
                    <li id="price"><img src="Pictures/Logos/dollar.png" width=13px height=13px> <?php echo "$ ".($price+0)/*Let the amount be int if decimal part is 0*/; ?></li>
                    <li><img src="Pictures/Logos/at.png" width=13px height=13px> <?php echo $lname; ?></li>
                    <li><?php echo $lnumber." ".$street1; ?></li>
                    <?php if ($street2 != null){?>
                    <li><?php echo $street2; ?></li>
                    <?php }?>
                    <li><?php echo $city.", ".$state." ".$zip; ?></li>
                    <?php if ($capacity-$available <= 0){ ?>
                    <div id="full">
                        This Even is Full
                    </div> <?php 
                    } else{
                        if ($stmt1 = $mysqli->prepare("SELECT * FROM Attend WHERE auid = $uid AND acid = $cid;")){
                            $stmt1->execute();
                            $stmt1->store_result();
                            if ($stmt1->num_rows != 0){ 
                                $attended = 1;
                            ?>
                                <div id="full">
                                You have already RSVP'd this event
                                </div> <?php
                            } else { 
                                $attended = 0;
                            ?>
                                <form action="includes/rsvp.php" method="post">
                                    <input type="hidden" name="CID" value="<?php echo $cid;?>">
                                    <input id="rsvp"  type="submit" name="rsvp" value="<?php echo "RSVP to this Concert\n".($capacity-$available)." Spots Available"; ?>">
                                </form> <?php
                            }
                        }
                    }?>
                </ul>
            </div>
        </div>
        </div>
    </div>
    
    <div class="content2">
        <?php 
    if ($stmt=$mysqli->prepare(
            "SELECT DISTINCT aid, artname, aemail, asite, alink, abio "
            . "FROM Art, Hold "
            . "WHERE Hold.haid = Art.aid "
            . "AND hcid = ?")){
        $stmt->bind_param("i", $cid);
        $stmt->execute();
        $stmt->bind_result($faid, $fartname, $faemail, $fasite, $falink, $fabio);
        $stmt->store_result();
        if ($stmt->num_rows >= 1){
?>
        <ul class="following">
            <li><?php echo $stmt->num_rows;?> artists are participating this concert</li>
        </ul>
        <ol>
<?php
            while ($stmt->fetch()) {
?>
                <li class='group'>
                    <div class="box">
                        <div class="pics">
                            <a href= "">
                                <img src="Pictures/Art/<?php echo $falink; ?>" width=250px height=250px>
                            </a>
                        </div>
                        <div class="links">
                            <a href= "Artist_Detail.php?Artist=<?php echo $faid; ?>" >
                                <div class="discription">
                                    <h5><?php echo $fabio; ?></h5>
                                </div>
                            </a>
                        </div>
                        <ul>
                            <li><a href="
                                <?php 
                                if(substr($fasite, 0, 4) != "http")echo "http://".$fasite; 
                                ?>"><?php echo $fartname; ?></a></li>
                            <li><img src="Pictures/Logos/email.png" width=15px height=14px> <?php echo $faemail; ?></li>
                            <li><img src="Pictures/Logos/at.png" width=10px height=10px> <?php echo substr($fasite, 0, 21); ?></li>
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
    if ($stmt=$mysqli->prepare(
            "SELECT DISTINCT aid, artname, aemail, asite, alink, abio "
            . "FROM Art, Hold "
            . "WHERE Hold.haid = Art.aid "
            . "AND hcid = ?")){
        $stmt->bind_param("i", $cid);
        $stmt->execute();
        $stmt->bind_result($faid, $fartname, $faemail, $fasite, $falink, $fabio);
        $stmt->store_result();
        if ($stmt->num_rows >= 1){
?>
        <ul class="following">
            <li>Comments from other users</li>
        </ul>
        <ol>
<?php

    if($stmt = $mysqli -> prepare("SELECT auid,ufname,ulname,rate,review,reviewtime,ulink FROM Attend, User where auid = uid and acid = ?")) {
        $stmt->bind_param("i",$cid);
        $stmt->execute();
        $stmt->bind_result($cuid,$fname,$lname,$rate,$review,$reviewtime, $fulink);
        $stmt->store_result();
        if ($stmt->num_rows >= 1){ 
            while($stmt->fetch()){
                ?>
            <li class='group'>
                    <div class="box">
                        <div class="pics">
                            <a href= "">
                                <img src="Pictures/Users/<?php echo $fulink; ?>" width=250px>
                                
                            </a>
                        </div>
                        <div class="links">
                            <a href= "User.php?User=<?php echo $fuuid;?>" >
                                <div class="discription">
                                    <h5><?php echo $review; ?></h5>
                                </div>
                            </a>
                        </div>
                        <ul>
                            <li><?php echo $fname." ".$lname; ?></li>
                            <li><img src="Pictures/Logos/score.png" width=10px height=10px> Rate: <?php if ($rate == null){echo "No rate yet";}else{echo $rate;} ?></li>
                        </ul>
                    </div>
                </li><?php
            }
        }else{echo "There is no review left here.",'<br>';}
    }

    if($_POST["submit"]){
        if($stmt = $mysqli -> prepare("UPDATE Attend SET rate = '$_POST[rate]', review = '$_POST[review]', reviewtime = now() WHERE auid = ? AND acid = ?")) {
            $stmt->bind_param("ii",$uid,$cid);
            $stmt->execute();
            echo 'success';
        }else{echo 'failed';}
    
?>
    <script type="text/javascript"> 
            setTimeout(function(){document.location = "comment.php"}, 2000);
        </script>   
<?php
    }
    if($attended == 1){
?>

        <form action="comment.php" method="post"> 
            <div id ="reviewcontent">
        <table width="405" border="0" cellpadding="1" cellspacing="1">
            <tr>
                <td height="25" align="left"> rate:</td>
                <td height="25" colspan="6" align="left">
                    <select name='rate'>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select></td>
            </tr>
            <input type="hidden" name="CID" value="<?php echo $cid;?>">
            
                <tr>
                    <td height="25" align="left"> review:</td>
                    <td height="25" colspan="2"><textarea name="review" cols="100" rows="4" id='review'></textarea></td>
                </tr>
            
            </table>
                </div>
        <input type="submit" name="submit" value="submit" /> 
        </form> 
<?php
            }
    else{
        echo "RVSP to leave a review",'<br>';
    }
        }
    }
?>
            </ol>
    </div>

</div>
</body>
</html>