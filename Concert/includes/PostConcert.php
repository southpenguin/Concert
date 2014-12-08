<?php
    session_start();
    include 'connectDB.php';
    $aid = $_POST["AID"];
    $cname = $_POST["ConcertName"];
    $pricenumber = $_POST["Price"];
    $price = $pricenumber + 0.00;
    $th = $_POST["Hour"];
    $tmt = $_POST["Minute"];
    $tmon = $_POST["Month"];
    $td = $_POST["Day"];
    $ty = $_POST["Year"];
    $holdtime = $ty."-".$tmon."-".$td." ".$th.":".$tmt.":00";
    $capacity = $_POST["Capacity"];
    $cbio = $_POST["Description"];
    $location = $_POST["Location"];
    
    $imageStorePath = "../Pictures/Concert/";    //the base directory which will store the upload files;
    $oriFilename = $_FILES["Image"]["name"];
    if ($oriFilename != null){
        $imageFileType = pathinfo($oriFilename, PATHINFO_EXTENSION);
        $newFilename = $username . '.' .$imageFileType;
        move_uploaded_file($_FILES["Image"]["tmp_name"], $imageStorePath.$newFilename);
        $newulink = $newFilename;
    }
    else {
        $newulink = "defalt.jpg";
    }
    if($stmt0 = $mysqli->prepare("INSERT INTO Concert VALUES (NULL, '$cname', '$holdtime', $price, $location, $capacity, $capacity, '$newulink', '$cbio');")){
        $stmt0->execute();
    }
    if($stmt1 = $mysqli->prepare("SELECT cid FROM Concert WHERE cname = '$cname';")){
        $stmt1->execute();
        $stmt1->bind_result($cid);
        $stmt1->fetch();
        $stmt1->close();
    }
    if($stmt = $mysqli->prepare("INSERT INTO Hold VALUES ($aid, $cid);")){
        $stmt->execute();
    }
?>
<script type="text/javascript"> 
    document.location = "/Concert/Art_Index.php";
</script>
