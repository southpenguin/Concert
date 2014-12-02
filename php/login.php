<?php
    //unset($_SESSION["UID"]);
    //unset($_SESSION["FID"]);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>

        <form action="includes/SignUp.php" method="post">
                <input id="username" type="text" name="Username" placeholder="Username"><span class="required">*</span><br><br>
                <input id="firstname" type="text" name="FirstName" placeholder="First Name"><span class="required">*</span><br><br>
                <input id="lastname" type="text" name="LastName" placeholder="Last Name"><span class="required">*</span> <br><br>
                
                <input id="email" type="text" name="Email" placeholder="Email"><span class="required">*</span><br><br>
                
                <input id="password" type="password" name="Password" placeholder="Password"><span class="required">*</span><br><br>
                
                <input id="repassword" type="password" name="Reenter_Password" placeholder="Re-enter Password"><span class="required">*</span><br><br> 
                
                
                <input id="city" type="text" name="City" placeholder="City"><span class="required">*</span><br><br>
                <input id="phone" type="text" name="Phone" placeholder="Phone"><span class="required">*</span><br><br>
                
                <input class="submitbutton" type="submit" name="SignUp" value="Sign Up">
                
                
            </form> 

    </body>
</html>
