<?php include 'Head.php';?>

<title>Concerts</title>
<link rel ="stylesheet" href="../css/style.css">
<link rel ="stylesheet" href="../css/concert.css">

<?php include 'Navigation.php';?>

<?php 
    $cids = $_POST["cids"];
    if(!isset($_POST["cids"])) {?>
<div id="connectioncontent">
You did not choose any concerts.<?php
    } 
    else {
        if ($stmt=$mysqli->prepare("INSERT INTO Lists VALUES(null, $uid, CURRENT_TIMESTAMP);")){
            $stmt->execute();
            $stmt->close();
        }
        if ($stmt=$mysqli->prepare("SELECT listid FROM Lists WHERE luid = $uid ORDER BY moditime DESC LIMIT 1;")){
            $stmt->execute();
            $stmt->bind_result($listid);
            $stmt->fetch();
            $stmt->close();
        }
        foreach ($cids as $cid){
            if ($stmt=$mysqli->prepare("INSERT INTO Content VALUES($listid, $cid);")){
            $stmt->execute();
            $stmt->close();
            }
        }
    }
?>
<script type="text/javascript"> 
    document.location = "/Concert/My_List.php";
</script>




</div>
</body>
</html>
