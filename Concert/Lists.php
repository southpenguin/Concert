<?php include 'includes/Head.php';?>

<title>Concerts</title>
<link rel ="stylesheet" href="css/style.css">
<link rel ="stylesheet" href="css/lists.css">

<?php include 'includes/Navigation.php';?>

<div id="connectioncontent">
    <div class="content"> 
        <ul class="following">
            <li><a href="Lists.php">Following Lists</a></li> <?php
            if($stmt2=$mysqli->prepare("SELECT listid FROM Lists WHERE luid = $uid")){
                $stmt2->execute();
                $stmt2->store_result();
                if ($stmt2->num_rows >= 1){?>
                <li><a href="My_List.php">My Lists</a></li><?php
            }}
            ?>
            <li><a href="Create_List.php">Create List</a></li>
        </ul><?php 
    if ($stmt=$mysqli->prepare("SELECT listid, uid, ufname, ulname FROM Lists, User, FollowList WHERE FollowList.flistid = Lists.listid AND Lists.luid = User.uid AND FollowList.fluid = $uid;")){
        $stmt->execute();
        $stmt->bind_result($listid, $adminid, $adminfname, $adminlname);
        $stmt->store_result();
        if ($stmt->num_rows >= 1){ 
            while ($stmt->fetch()) { ?>
        <div class="content2"> <?php
            if ($stmt4 = $mysqli->prepare("SELECT cid, cname, holdtime, price, capacity, available, clink, cbio, lname, city FROM Content, Concert, Location WHERE Content.ccid = Concert.cid AND Concert.location = Location.lid AND Content.clistid = $listid;")){
                $stmt4->execute();
                $stmt4->bind_result($cid, $cname, $holdtime, $price, $capacity, $available, $clink, $cbio, $lname, $city);
                $stmt4->store_result();
                $conertnumbers = $stmt4->num_rows;?>
                <ul class="following">
                <li>List made by <a href="User.php?User=<?php echo $adminid;?>"><?php echo $adminfname." ".$adminlname;?></a></li>
                </ul>
                     <?php
                if ($conertnumbers >= 1){
                    ?>
            <ol>
                <?php
                    while ($stmt4->fetch()) { ?>
                    
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
                            <li id="place"><img src="Pictures/Logos/at.png" width=13px height=13px><?php echo " ".$lname.", ".$city; ?></li>
                            <li id="join"><img src="Pictures/Logos/join.png" width=13px height=13px> <?php echo $available." / ".$capacity; ?></li>
                            <li id="price"><img src="Pictures/Logos/dollar.png" width=13px height=13px> <?php echo "$".($price+0)/*Let the amount be int if decimal part is 0*/; ?></li>
                            <?php if ($capacity-$available <= 0){ ?>
                            <div id="full">
                                This Event is Full
                            </div>
                            <?php } else { 
                                if ($stmt1 = $mysqli->prepare("SELECT * FROM Attend WHERE auid = $uid AND acid = $cid;")){
                                    $stmt1->execute();
                                    $stmt1->store_result();
                                    if ($stmt1->num_rows != 0){ ?>
                                        <div id="full">
                                            Already RSVP'd
                                        </div> <?php 
                                    } else { ?>
                                        <form action="includes/rsvp.php" method="post">
                                            <input type="hidden" name="CID" value="<?php echo $cid;?>">
                                            <input id="rsvp"  type="submit" name="rsvp" value="RSVP">
                                        </form> <?php
                                    }
                                }
                            }?>
                        </ul>
                    </div>
                </li> 
            
                <?php
            
                }
            }}
            ?></ol><?php
            }
        }
    }
?>
        </div>
    </div>
</div>
</body>
</html>