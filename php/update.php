<?php include 'includes/Head.php';?>

<title>Update</title>
<link rel ="stylesheet" href="css/style.css">

<?php include 'includes/Navigation.php';?>

<div class="center">
    <form action="includes/ProfileUpdate.php" method="post" enctype="multipart/form-data">
    <div id = "left">
    <div id="potrait">
        <img src="Pictures/Users/<?php echo $ulink; ?>" width="300" height="300"> 
        <input id="fileChoose" type ="file" name ="Image">
    </div>

    </div>

    <div id ="signup">
        <h3>Tell us more about yourself</h3><br>


            <input id="firstname" class="signuptext" type="text" name="FirstName" placeholder="First Name" 
                   value="<?php if($ufname != null) {echo $ufname;}?>">

            <input id="lastname" class="signuptext" type="text" name="LastName" placeholder="Last Name"
                   value="<?php if($ulname != null) {echo $ulname;}?>">

            <input id="email" class="signuptext" type="text" name="Email" placeholder="Email"
                   value="<?php if($uemail != null) {echo $uemail;}?>">

            <input id="city" class="signuptext" type="text" name="City" placeholder="City" 
                   value="<?php if($ucity != null) {echo $ucity;}?>">

            <input id="phone" class="signuptext" type="text" name="Phone" placeholder="Phone" 
                   value="<?php if($uphone != null) {echo $uphone;}?>">
            <textarea name="Description"  class="textarea" placeholder="Tell others about yourself. Write something here."><?php if($ubio != null) {echo $ubio;}?></textarea>
            <input class="submitbutton" type="submit" name="SignUp" value="Update">

    </div>
</form> 
</div>
</body>
</html>
