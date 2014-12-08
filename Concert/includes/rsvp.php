<?php include 'Head.php';?>

<title>RSVP Concert</title>
<link rel ="stylesheet" href="../css/style.css">
<link rel ="stylesheet" href="../css/connection.css"> 

<?php include 'Navigation.php';?>
<?php
    $cid = $_POST["CID"];
    if ($stmt = $mysqli->prepare("SELECT * FROM Attend WHERE auid = '$uid' AND acid = '$cid';")){
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows == 0){
            if ($stmt1 = $mysqli->prepare("INSERT INTO Attend VALUES ($uid, $cid, NULL, NULL, NULL);")){
                $stmt1->execute();
            }
        }
    }
        
    
?>
        <script type="text/javascript"> 
            document.location = "/Concert/My_Concert.php";
        </script>
    
        
</body>
</html>
