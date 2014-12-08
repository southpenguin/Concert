<?php
    session_start();
    include 'connectDB.php';
    $aid = $_POST["AID"];
    $auname = $_POST["AUname"];
    $newartname = $_POST["ArtName"];
    $newaemail = $_POST["Email"];
    $newasite = $_POST["URL"];
    $newabio = $_POST["Description"];
    $sgidarray = $_POST["sgid"];
    $newulink = $_POST["Link"];
    
    $imageStorePath = "../Pictures/Art/";    //the base directory which will store the upload files;
    $oriFilename = $_FILES["Image"]["name"];
    if ($oriFilename != null){
        $imageFileType = pathinfo($oriFilename, PATHINFO_EXTENSION);
        $newFilename = $username . '.' .$imageFileType;
        move_uploaded_file($_FILES["Image"]["tmp_name"], $imageStorePath.$newFilename);
        $newulink = $newFilename;
    }
    if ($stmt = $mysqli->prepare("UPDATE Art SET artname = ?, aemail = ?, asite = ?, abio = ?, alink = ? WHERE auname = '$auname';")){
        $stmt->bind_param("sssss", $newartname, $newaemail, $newasite, $newabio, $newulink);
        $stmt->execute();
    }
    foreach ($sgidarray as $sgid){
        if($stmt1=$mysqli->prepare("SELECT ggid FROM SubGenre WHERE sgid = $sgid;")){
            $stmt1->execute();
            $stmt1->bind_result($ggid);
            $stmt1->store_result();
            $stmt1->fetch();
            if($stmt2=$mysqli->prepare("INSERT INTO Have VALUES ($aid, $ggid, $sgid);")){
                $stmt2->execute();
            }
        }
        
    }
    
?>
<script type="text/javascript"> 
    document.location = "/Concert/Art_Index.php";
</script>
