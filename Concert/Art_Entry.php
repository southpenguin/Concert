<?php unset($_SESSION["UID"]);?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel ="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id ="navigation">
            <div id="topcontent">
                <div id="logo">
                    <a href="index.php">Concert</a>
                </div>
                
                <div class="login">
                    <form action ="includes/ArtLogin.php" method="post">
                        <div class ="inputs">
                        <input type="text" name="Username" id="username" placeholder="Username"> 
                        <input type="password" name="Password" id="password" placeholder="Password">
                        </div>
                        <input id="loginbutton" type="submit" name="Login" value="Log In">
                        
                    </form>
                </div>
                
            </div>
        </div>
        <div class="center">
            <div id = "left">
                <h2>Welcome to Concert!</h2>
                <h4>Connect with your fans.</h4>
                <h4>Post your concerts.</h4>
                <h4>Show your interest of different concerts.</h4>
                <h4>Let your fans connect with you.</h4>
                
            </div>
            
            <div id ="signup">
                <h3>Don't have an account?</h3>
                <h2>Sign Up Now!</h2>
                <form action="includes/ArtSignUp.php" method="post">
                    <input id="username" class="signuptext" type="text" name="Username" placeholder="Username"><span class="required">*</span>
                    <input id="password" class="signuptext" type="password" name="Password" placeholder="Password"><span class="required">*</span>
                    <input id="repassword" class="signuptext" type="password" name="Reenter_Password" placeholder="Re-enter Password"><span class="required">*</span> 
                    
                    <input class="submitbutton" type="submit" name="SignUp" value="Sign Up">
                </form> 
            </div>
        
        </div>
    </body>
</html>
