<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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
    $followee = $_POST["Followee"];
    
    if($stmt=$mysqli->prepare("INSERT INTO Follow VALUES (?, ?, CURRENT_TIMESTAMP)")){
        $stmt->bind_param("ii",$followee, $uid);
        $stmt->execute();
        $stmt->close();
    }
    ?>
        <script type="text/javascript"> 
            document.location = "/Concert/connection.php";
        </script>
        <?php

?>    
            </div>
    </body>
</html>


