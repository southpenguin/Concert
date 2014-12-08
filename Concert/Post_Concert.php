<?php
session_start();
include 'includes/connectDB.php';

if (!isset($_SESSION["AID"])) {
    header("Location:Art_Entry.php");
} else {
    $aid = $_SESSION["AID"];
    if ($stmt0 = $mysqli->prepare("SELECT auname, artname, aemail, asite, alink, abio FROM Art WHERE aid = $aid;")){
        $stmt0->execute();
        $stmt0->bind_result($auname, $artname, $aemail, $asite, $alink, $abio);
        $stmt0->store_result();
        if ($stmt0->num_rows == 1){
            $stmt0->fetch();
        }
        $stmt0->close();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>Update</title>
<link rel ="stylesheet" href="css/style.css">

</head>
    <body>
        <div id ="navigation">
            <div id="topcontent">
                <div id="logo">
                    <a href="/Concert/Art_Index.php">Concert</a>
                </div>
            </div>
        </div>

<div class="center">
    <form action="includes/PostConcert.php" method="post" enctype="multipart/form-data">
    <div id = "left">
    <div id="potrait">
        <img src="Pictures/Concert/<?php echo $alink; ?>" width="300"> 
        <input id="fileChoose" type ="file" name ="Image">
    </div>

    </div>

    <div id ="signup">
        <h3>Information of the concert</h3><br>

        <input id="firstname" class="signuptext" type="text" name="ConcertName" placeholder="Concert Name">
        
        <div class="select"> 
            <h5>Time:</h5>
            <select name="Hour" id="hour" value = "hour">
                <option value="0" selected="1">Hour</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
            </select>
            
            <select name="Minute" id="minute" value = "minute">
                <option value="0" selected="1">Minute</option>
                <option value="00">0</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
                <option value="59">59</option>
            </select>
            <h5>Date:</h5>
            <select name="Month" id="month" value ="month">                  
                <option value="0" selected="1" class="selection">Month</option>
                <option value="01">Jan</option>
                <option value="02">Feb</option>
                <option value="03">Mar</option>
                <option value="04">Apr</option>
                <option value="05">May</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Aug</option>
                <option value="09">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
            </select>
                
            <select name="Day" id="day" value ="day">
                <option value="0" selected="1">Day</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>

            <select name="Year" id="year" value = "year">
                <option value="0" selected="1">Year</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
            </select>
        
            <h5>Location: </h5>
            <select name="Location" id="location" value = "location">
                <option value="0" selected="1">Location</option><?php
                if($stmt = $mysqli->prepare("SELECT lid, lname FROM Location WHERE 1")){
                    $stmt->execute();
                    $stmt->bind_result($lid, $lname);
                    while ($stmt->fetch()){?>
                        <option value="<?php echo $lid; ?>"><?php echo $lname; ?></option>
                    <?php }
                } ?>
            </select>
            </div>
        <br><br><input id="city" class="signuptext" type="text" name="Price" placeholder="Price">
        <input id="city" class="signuptext" type="text" name="Capacity" placeholder="Capacity">
        <input type="hidden" name="AID" value="<?php echo $aid;?>">
            <textarea name="Description" id="cconcert"  class="textarea" placeholder="Tell others about this concert."><?php if($cbio != null) {echo $cbio;}?></textarea>
          
            <br><input class="submitbutton" type="submit" name="SignUp" value="Update">

    </div>
</form> 
</div>
</body>
</html>