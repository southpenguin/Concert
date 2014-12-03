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
        echo "Username can not be empty. \r\n" . "\r\n";
        $errflag = true; 
    }
    if($firstname == ''){
        echo "Firstname can not be empty. \n" . "\n";
        $errflag = true;
    }
    if($email == ''){
        echo "Email can not be empty. \n" . "\n";
        $errflag = true;
    }
    if($pw == ''){
        echo "Password can not be empty. \n" . "\n";
        $errflag = true;
    }
    if($repw == ''){
        echo "Reenter your password. \n" . "\n";
        $errflag = true;
    }
    if($pw != $repw){
        echo "Enter the same password. \n" . "\n";
        $errflag = true;
    }
    if(strpos($email,'@') == false){
        echo "Please enter the corret format of email. \n" . "\n";
        $errflag = true;
    }
    if ($stmt0 = $mysqli->query("select uid from User where username = '$username'")){
        $s = $stmt0->num_rows;
        if($s != 0){
        $errflag = true;
        echo "Username is taken. \n" . "\n";
        }
    }
    
    
    if($errflag){
        //exit();
    }  else {
        $stmt = $mysqli->prepare("insert into User values ( 'NULL', '$username', '$pw', '$firstname', '$lastname', '$email', '$city', '$phone', CURRENT_TIMESTAMP, 0)");
        $stmt->execute();
    }
    
    

?>
