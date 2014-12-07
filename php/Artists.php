<?php include 'includes/Head.php';?>

<title>Artists</title>
<link rel ="stylesheet" href="css/style.css">
<link rel ="stylesheet" href="css/artists.css">

<?php include 'includes/Navigation.php';?>
<div id="connectioncontent">
    <div class="content">
            
<?php 
    if ($stmt=$mysqli->prepare("SELECT aid, artname, aemail, asite, alink, abio FROM Art, Fans WHERE Fans.follow = Art.aid AND fan = ? ORDER BY fantime ASC;")){
        $stmt->bind_param("i", $uid);
        $stmt->execute();
        $stmt->bind_result($aid, $fartname, $faemail, $fasite, $falink, $fabio);
        $stmt->store_result();
        if ($stmt->num_rows >= 1){
?>
        <ul class="following">
            <li>You are following <?php echo $stmt->num_rows;?> artists</li>
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
                            <a href= "Artist_Detail.php?Artist=<?php echo $aid; ?>" >
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
        </div>
    </body>
</html>
