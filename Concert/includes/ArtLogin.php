<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel ="stylesheet" href="/Concert/css/style.css">
    </head>
    <body>
        <?php include 'Navigation.php';?>
        <div class="center">



<?php 
    session_start(); 
    include 'connectDB.php';
    
    $entryPage = "Location:/Concert/entry.php"; 
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    
    ///////error handle//////

    $errFlag = false;       //if it is err occur
    
    if($username == ''){
        echo "Username or Email is empty.<br>";
        $errFlag = true;
    }
    
    if($password == ''){
        
        echo  "Password is empty.<br>";
        $errFlag = true;
    }
    
    if($errFlag){
        echo "Page will be redirected to login page in 2 seconds.<br>";
        ?>
        <script type="text/javascript"> 
            setTimeout(function(){document.location = "/Concert/entry.php"}, 2000);
        </script>
        <?php 
        //exit();                 
    }
    else {
        
        if ($stmt = $mysqli->prepare("SELECT aid, auname, artname, aemail, asite, alink, abio FROM Art WHERE auname = ? AND apassword = ?;")){
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($aid, $auname, $artname, $aemail, $asite, $alink, $abio);
        $stmt->store_result();
        if ($stmt->num_rows == 1){
            echo "You have loged in successfully.";
            while ($stmt->fetch()) {
                $_SESSION["AID"] = $aid;
                $_SESSION["Username"] = $auname;
                $_SESSION["Artname"] = $artname;
                $_SESSION["Email"] = $aemail;
                $_SESSION["Site"] = $asite;
                $_SESSION["Link"] = $alink;
                $_SESSION["Bio"] = $abio;
                
                session_write_close();
            }
            ?>
            <script type="text/javascript"> 
                document.location = "/Concert/Art_Index.php";
            </script>
            <?php
        }
        else{
            echo "User was not found. <br>"
            . "Please make sure you entered the right username and password. <br>"
            . "Page will be redirected to login page in 5 seconds.<br>";
            ?>
            <script type="text/javascript"> 
                setTimeout(function(){document.location = "/Concert/Art_Entry.php"}, 5000);
            </script>
            <?php
        }
        $stmt->close();
    }
}?>

    
            </div>
    </body>
</html>
    