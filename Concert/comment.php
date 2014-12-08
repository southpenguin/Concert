<?php include 'includes/Head.php';?>

<title>Review</title>
<link rel ="stylesheet" href="css/style.css">

<?php include 'includes/Navigation.php';?>
<?php 
$cid = $_POST["CID"];
$rate = $_POST["rate"];
$review = $_POST["review"];

if ($stmt6 = $mysqli->prepare("UPDATE Attend SET rate = $rate, review = '$review' WHERE auid = $uid AND acid = $cid;")){
    $stmt6->execute();
    $stmt6->store_result();
}?>
<script type="text/javascript"> 
            document.location = "/Concert/Concert_Detail.php?Concert=<?php echo $cid;?>";
        </script>
</body>
</html>