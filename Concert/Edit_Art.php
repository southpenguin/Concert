<?php
session_start();
include 'includes/connectDB.php';

if (!isset($_SESSION["AID"])) {
    header("Location:Art_Entry.php");
} else {
    $aid = $_SESSION["AID"];
    if ($stmt0 = $mysqli->prepare("SELECT auname, artname, aemail, asite, alink, abio FROM Art WHERE aid = $aid;")){
        $stmt0->execute();
        $stmt0->bind_result($auname, $artname, $aemail, $asite, $alink, $abio);
        $stmt0->store_result();
        if ($stmt0->num_rows == 1){
            $stmt0->fetch();
        }
        $stmt0->close();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>Update</title>
<link rel ="stylesheet" href="css/style.css">

</head>
    <body>
        <div id ="navigation">
            <div id="topcontent">
                <div id="logo">
                    <a href="/Concert/index.php">Concert</a>
                </div>
            </div>
        </div>

<div class="center">
    <form action="includes/ArtUpdate.php" method="post" enctype="multipart/form-data">
    <div id = "left">
    <div id="potrait">
        <img src="Pictures/Art/<?php echo $alink; ?>" width="300" height="300"> 
        <input id="fileChoose" type ="file" name ="Image">
    </div>

    </div>

    <div id ="signup">
        <h3>Tell us more about yourself</h3><br>

            <input id="firstname" class="signuptext" type="text" name="ArtName" placeholder="Artist Name" 
                   value="<?php if($artname != null) {echo $artname;}?>">

            <input id="email" class="signuptext" type="text" name="Email" placeholder="Artist Email"
                   value="<?php if($aemail != null) {echo $aemail;}?>">

            <input id="city" class="signuptext" type="text" name="URL" placeholder="Artist Link" 
                   value="<?php if($asite != null) {echo $asite;}?>">
            <input type="hidden" name="AID" value="<?php echo $aid;?>">
            <input type="hidden" name="AUname" value="<?php echo $auname;?>">
            <input type="hidden" name="Link" value="<?php echo $alink;?>">
            <textarea name="Description"  class="textarea" placeholder="Tell others about yourself. Write something here."><?php if($abio != null) {echo $abio;}?></textarea>
            <?php
            if($stmt = $mysqli->prepare("SELECT sgid, ggid, sggenre FROM SubGenre WHERE 1")){
                $stmt->execute();
                $stmt->bind_result($sgid, $ggid, $sggenre);
                while ($stmt->fetch()) {?>
            <div class="genre">
                <input class="genreselection" type="checkbox" name="sgid[]" value="<?php echo $sgid;?>"><?php echo $sggenre; ?>
            </div>
                <?php }
            }?>
            
            
            <br><input class="submitbutton" type="submit" name="SignUp" value="Update">

    </div>
</form> 
</div>
</body>
</html>