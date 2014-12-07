<?php include 'includes/Head.php';?>

<title>Create A List</title>
<link rel ="stylesheet" href="css/style.css">
<link rel ="stylesheet" href="css/createlist.css">

<?php include 'includes/Navigation.php';?>

<div id="connectioncontent">
    <form action="includes/SubmitList.php" method="POST">
    <div class="content">
        <ul class="following">
            <li>Please select the concerts</li>
        </ul>
 <?php 
    if ($stmt=$mysqli->prepare("SELECT cid, cname, holdtime, price, capacity, available, clink, cbio, lname, city "
            . "FROM Concert, Location "
            . "WHERE Concert.location = Location.lid;")){
        $stmt->execute();
        $stmt->bind_result($cid, $cname, $holdtime, $price, $capacity, $available, $clink, $cbio, $lname, $city);
        $stmt->store_result();
        if ($stmt->num_rows >= 1){ ?>
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
                            <li><img src="Pictures/Logos/date.png" width=13px height=13px> <?php echo date("m/d/Y", strtotime($holdtime)); ?></li>
                        <li><img src="Pictures/Logos/time.png" width=13px height=13px> <?php echo date("g:i A", strtotime($holdtime)); ?></li>
                        <li><img src="Pictures/Logos/join.png" width=13px height=13px> <?php echo $capacity." total seats"; ?></li>
                            <li id="place"><img src="Pictures/Logos/at.png" width=13px height=13px><?php echo " ".$lname.", ".$city; ?></li>
                            
                            <li><input  type="checkbox" name="cids[]" value="<?php echo $cid;?>">Select this concert</li>
                        </ul>
                    </div>
                </li> <?php 
            }
        }
    }
?>
            </ol>
        <div class="content2">
        <input id="rsvp"  type="submit" value="Submit My List">
        </div>
        </div>
        </form>
</div>

</body>
</html>