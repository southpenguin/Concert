<?php 
include('includes/connectDB.php'); 
include('includes/Head.php');
$cid = 1;
if($_POST["submit"]){
	$conn = @mysql_connect("project.cz9jstihzrzs.us-east-1.rds.amazonaws.com", "admin", "admin123") or die("数据库连接出错!"); 
	mysql_select_db("project",$conn); 
	mysql_query("set names 'GBK'");
	$sql="UPDATE Attend SET rate = '$_POST[rate]', review = '$_POST[content]', reviewtime = now() WHERE auid = '$uid' AND acid = '$cid'"; 
	if(mysql_query($sql)){ 
	echo "update comment succeed"; }
	
} 
?>
 <script type="text/javascript"> 
            setTimeout(function(){document.location = "/Concert/comment.php"}, 2000);
        </script>