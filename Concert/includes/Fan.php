<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fan</title>
        <link rel ="stylesheet" href="/Concert/css/style.css">
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
<?php 
    session_start(); 
    include 'connectDB.php';

    $uid = $_POST['UID'];
    $aid = $_POST["AID"];
    
    if($stmt=$mysqli->prepare("INSERT INTO Fans VALUES (?, ?, CURRENT_TIMESTAMP)")){
        $stmt->bind_param("ii",$uid, $aid);
        $stmt->execute();
        $stmt->close();
    }
    ?>
        <script type="text/javascript"> 
            document.location = "/Concert/Artists.php";
        </script>
        <?php

?>    
            </div>
    </body>
</html>


