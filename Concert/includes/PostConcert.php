<?php
    session_start();
    include 'connectDB.php';
    $aid = $_POST["AID"];
    $cname = $_POST["ConcertName"];
    $price = $_POST["Price"];
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
    if($stmt0 = $mysqli->prepare("INSERT INTO Concert (cid) VALUES (NULL) ;")){
        $stmt0->execute();
    }
    if($stmt1 = $mysqli->prepare("SELECT cid FROM Concert WHERE cname IS NULL LIMIT 1;")){
        $stmt1->execute();
        $stmt1->bind_result($cid);
        $stmt1->fetch();
        echo $cid;
    }
    if ($stmt = $mysqli->prepare("UPDATE Concert SET cname = $cname, holdtime = $holdtime, price = $price, location = $location, capacity = $capacity, available = $capacity, clink = $newulink, cbio = $cbio WHERE cid = $cid;")){
        
        $stmt->execute();
    }
    
    
?>
<script type="text/javascript"> 
    document.location = "/Concert/Art_Index.php";
</script>
