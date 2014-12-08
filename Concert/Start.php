<!DOCTYPE html>
<html>
<head>
<style>
    #bg {
        position: fixed; 
        top: 0; 
        left: 0; 
        width: 100%;
        min-width: 50%;
        min-height: 100%;
        z-index: -4;
    }
    #logo {
        position: relative;
        top: 200px;
        width: 100%;
        left:38%;
    }
    h1 {
        margin-right: auto;
        margin-left: auto;
        font-size: 100px;
        color: #EEEEEE;
        font-family: calibri;
        text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;  
        
    }
    .round-button {
        
        width:100px;
        float: left;
        
    }
    .round-button-circle {
        margin-left: 100px;
        width: 100%;
        height:0;
        padding-bottom: 100%;
        border-radius: 50%;
        border:10px solid #cfdcec;
        overflow:hidden;
        background: #FFE100; 
        box-shadow: 0 0 3px gray;
        text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;  
    }
    .round-button-circle:hover {
        background:#30588e;
    }
    .round-button a {
        display:block;
        float:left;
        width:100%;
        padding-top:50%;
        padding-bottom:50%;
        line-height:1em;
        margin-top:-0.5em;
        text-align:center;
        color:#e2eaf3;
        font-family:Verdana;
        font-size:20px;
        font-weight:bold;
        text-decoration:none;
    }
    #user {
        margin-left: 500px;
        margin-top:300px;
    }
    #art {
        margin-left: 100px;
        margin-top:300px;
    }
</style>
</head>
<body>
    <img src="/Concert/Pictures/Concert/index.jpg" id="bg">
    <div id="logo"><h1>Concert</h1></div>
    
    <div class="round-button" id="user">
        <div class="round-button-circle">
            <a href="/Concert/Entry.php" class="round-button">USER</a>
        </div>
    </div>
    <div class="round-button" id="art">
        <div class="round-button-circle">
            <a href="/Concert/Art_Entry.php" class="round-button">Artist</a>
        </div>
    </div>
    
</body>
</html>
