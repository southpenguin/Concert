<?php
    include 'Head.php';
    $newufname = $_POST["FirstName"];
    $newulname = $_POST["LastName"];
    $newuemail = $_POST["Email"];
    $newucity = $_POST["City"];
    $newuphone = $_POST["Phone"];
    $newubio = $_POST["Description"];
    $sgidarray = $_POST["sgid"];
    $newulink = $ulink;
    
    $imageStorePath = "../Pictures/Users/";    //the base directory which will store the upload files;
    $oriFilename = $_FILES["Image"]["name"];
    if ($oriFilename != null){
        $imageFileType = pathinfo($oriFilename, PATHINFO_EXTENSION);
        $newFilename = $username . '.' .$imageFileType;
        move_uploaded_file($_FILES["Image"]["tmp_name"], $imageStorePath.$newFilename);
        $newulink = $newFilename;
    }
    if ($stmt = $mysqli->prepare("UPDATE User SET ufname = ?, ulname = ?, uemail = ?, ucity = ?, uphone = ?, ubio = ?, ulink = ? WHERE username = '$username';")){
        $stmt->bind_param("sssssss", $newufname, $newulname, $newuemail, $newucity, $newuphone, $newubio, $newulink);
        $stmt->execute();
    }
    foreach ($sgidarray as $sgid){
        if($stmt1=$mysqli->prepare("SELECT ggid FROM SubGenre WHERE sgid = $sgid AND ")){
            $stmt1->execute();
            $stmt1->bind_result($ggid);
            $stmt1->store_result();
            $stmt1->fetch();
            if($stmt2=$mysqli->prepare("INSERT INTO Likes VALUES ($uid, $ggid, $sgid)")){
                $stmt2->execute();
            }
        }
        
    }
    
?>
<script type="text/javascript"> 
    document.location = "/Concert/profile.php";
</script>
