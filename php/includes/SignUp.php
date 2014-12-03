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

    $username = $_POST['Username'];
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $email = $_POST['Email'];
    $pw = $_POST['Password'];
    $repw =$_POST['Reenter_Password'];
    $city =$_POST['City'];
    $phone = $_POST['Phone'];

//////erro handle
    $errflag = false;
    
    if($username == ''){
        echo "Username can not be empty. <br>";
        $errflag = true; 
    }
    if($firstname == ''){
        echo "Firstname can not be empty. <br>";
        $errflag = true;
    }
    if($email == ''){
        echo "Email can not be empty. <br>";
        $errflag = true;
    }
    if($pw == ''){
        echo "Password can not be empty. <br>";
        $errflag = true;
    }
    if($repw == ''){
        echo "Reenter your password. <br>";
        $errflag = true;
    }
    if($pw != $repw){
        echo "Enter the same password. <br>";
        $errflag = true;
    }
    if(strpos($email,'@') == false){
        echo "Please enter the corret format of email. <br>";
        $errflag = true;
    }
    if ($stmt0 = $mysqli->query("select uid from User where username = '$username'")){
        $s = $stmt0->num_rows;
        if($s != 0){
        $errflag = true;
        echo "Username is taken. <br>";
        }
    }
    
    
    if($errflag){
        echo "<br>Page will be redirected to sign up page in 5 seconds.<br>";
        ?>
        <script type="text/javascript"> 
            setTimeout(function(){document.location = "/Concert/entry.php"}, 5000);
        </script>
        <?php
    }  else {
        if ($stmt = $mysqli->prepare("insert into User values ( 'NULL', '$username', '$pw', '$firstname', '$lastname', '$email', '$city', '$phone', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 0)")){
            $stmt->execute();
            $stmt->close();
        }
        if ($stmt = $mysqli->prepare("SELECT uid, username, ufname, ulname, uemail, ucity, uphone, regtime, lastlogin, uscore FROM User WHERE username = ?;")){
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($uid, $rusername, $ufname, $ulname, $uemail, $ucity, $uphone, $regtime, $lastlogin, $uscore);
            $stmt->store_result();
            if ($stmt->num_rows == 1){
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
                }
            }
            $stmt->close();
        }
        echo "You have signed up successfully. <br>"
        . "Page will be redirected to your profile in 3 seconds.<br>";
        ?>
        <script type="text/javascript"> 
            setTimeout(function(){document.location = "/Concert/profile.php"}, 3000);
        </script>
        <?php
    }?>

    
            </div>
    </body>
</html>


