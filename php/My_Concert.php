<?php include 'includes/Head.php';?>

<title>My Concerts</title>
<link rel ="stylesheet" href="css/style.css">
<link rel ="stylesheet" href="css/concert.css">

<?php include 'includes/Navigation.php';?>

<div id="connectioncontent">
    <div class="content"> <?php
    if ($stmt=$mysqli->prepare(
            "SELECT cid, cname, holdtime, price, capacity, available, clink, cbio, lname, city "
            . "FROM Concert, Location, Attend "
            . "WHERE Concert.location = Location.lid "
            . "AND Concert.cid = Attend.acid "
            . "AND Attend.auid = ?;")){
        $stmt->bind_param("i", $uid);
        $stmt->execute();
        $stmt->bind_result($cid, $cname, $holdtime, $price, $capacity, $available, $clink, $cbio, $lname, $city);
        $stmt->store_result();?>
                <ul class="following">
            <li><a href="Concerts.php">Upcoming Concerts</a></li>
            <li><a href="My_Concert.php">My Concert</a></li>
        </ul><?php
        if ($stmt->num_rows > 0){ ?>

        <ol> <?php
            while ($stmt->fetch()) { ?>
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
                </li> <?php 
            }
        }
    }
?>
        </ol>
    </div>
</div>
</body>
</html>
