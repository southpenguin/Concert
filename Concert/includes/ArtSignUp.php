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
    $pw = $_POST['Password'];
    $repw =$_POST['Reenter_Password'];

//////erro handle
    $errflag = false;
    
    if($username == ''){
        echo "Username can not be empty. <br>";
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
    /*
    if($firstname == ''){
        echo "Firstname can not be empty. <br>";
        $errflag = true;
    }
    if($email == ''){
        echo "Email can not be empty. <br>";
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
     * */
     
    if ($stmt0 = $mysqli->query("select aid from Art where auname = '$username'")){
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
            setTimeout(function(){document.location = "/Concert/Entry.php"}, 5000);
        </script>
        <?php
    }  else {
        if ($stmt = $mysqli->prepare("INSERT INTO Art VALUES ( 'NULL', '$username', '$pw', NULL, NULL, NULL, 'default.png', null)")){
            $stmt->execute();
            $stmt->close();
        }
        if ($stmt = $mysqli->prepare("SELECT aid, auname FROM Art WHERE auname = ?;")){
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($aid, $rusername);
            $stmt->store_result();
            if ($stmt->num_rows == 1){
                while ($stmt->fetch()) {
                    $_SESSION["AID"] = $aid;
                    $_SESSION["Username"] = $rusername;
                }
            }
            $stmt->close();
        }
        echo "You have signed up successfully. <br>"
        . "Page will be redirected to your page in 2 seconds.<br>";
        ?>
        <script type="text/javascript"> 
            setTimeout(function(){document.location = "/Concert/Edit_Art.php"}, 2000);
        </script>
        <?php
    }?>

    
            </div>
    </body>
</html>


