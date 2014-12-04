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
        $mysqli->query("UPDATE User SET uscore = uscore + (CURRENT_TIMESTAMP - lastlogin)/500000 WHERE username = '$username'");
        if ($stmt = $mysqli->prepare("SELECT uid, username, ufname, ulname, uemail, ucity, uphone, regtime, lastlogin, uscore, ulink, ubio FROM User WHERE username = ? AND upassword = ?;")){
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($uid, $rusername, $ufname, $ulname, $uemail, $ucity, $uphone, $regtime, $lastlogin, $uscore, $ulink, $ubio);
        $stmt->store_result();
        if ($stmt->num_rows == 1){
            echo "You have loged in successfully.";
            while ($stmt->fetch()) {
                $_SESSION["UID"] = $uid;
                $_SESSION["Username"] = $rusername;
                $_SESSION["FirstName"] = $ufname;
                $_SESSION["LastName"] = $ulname;
                $_SESSION["Email"] = $uemail;
                $_SESSION["City"] = $ucity;
                $_SESSION["Phone"] = $uphone;
                $_SESSION["RegTime"] = $regtime;
                $_SESSION["LastLogin"] = $lastlogin;
                $_SESSION["Score"] = $uscore;
                $_SESSION["Link"] = $ulink;
                $_SESSION["Bio"] = $ubio;
                
                session_write_close();
            }
            ?>
            <script type="text/javascript"> 
                document.location = "/Concert/index.php";
            </script>
            <?php
        }
        else{
            echo "User was not found. <br>"
            . "Please make sure you entered the right username and password. <br>"
            . "Page will be redirected to login page in 5 seconds.<br>";
            ?>
            <script type="text/javascript"> 
                setTimeout(function(){document.location = "/Concert/entry.php"}, 5000);
            </script>
            <?php
        }
        $stmt->close();
    }
}?>

    
            </div>
    </body>
</html>
    
