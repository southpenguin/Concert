<?php 
error_reporting(0);
include('includes/connectDB.php'); 
include('includes/Head.php');

$cid = 1;

echo '<br>current uid is: ',$uid,'<br>';
echo 'current cid is: ',$cid,'<br><br><br>';

if($stmt = $mysqli -> prepare("SELECT auid,ufname,ulname,rate,review,reviewtime FROM Attend, User where auid = uid and acid = ?")) {
	$stmt->bind_param("i",$cid);
	$stmt->execute();
	$stmt->bind_result($cuid,$fname,$lname,$rate,$review,$reviewtime);
	$stmt->store_result();
	while($stmt->fetch()){
		echo "name: ",$fname,'    ',"rate: ",$rate,'<br>';
		echo "concert number",$cid,'<br>';
		echo "review: ",$review,'<br>';
		echo '<br>';
	}
}
echo '<br>current uid is: ',$uid,'<br>';
echo 'current cid is: ',$cid,'<br>';

if($_POST["submit"]){
	if($stmt = $mysqli -> prepare("UPDATE Attend SET rate = '$_POST[rate]', review = '$_POST[review]', reviewtime = now() WHERE auid = ? AND acid = ?")) {
		$stmt->bind_param("ii",$uid,$cid);
		$stmt->execute();
		echo 'success';
	}else{echo 'failed';}
	
?>
	<script type="text/javascript"> 
            setTimeout(function(){document.location = "comment.php"}, 2000);
        </script>	
<?php
} 
?>
	<form action="comment.php" method="post"> 
	<table width="405" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<td height="25" align="right"> rate:</td>
			<td height="25" colspan="6" align="left"><select name='rate'>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select></td>
		</tr>
		<tr>
			<td height="25" align="right"> review:</td>
			<td height="25" colspan="2"><textarea name="review" cols="28" rows="4" id='review'></textarea></td>
		</tr>
	</table>
	<input type="submit" name="submit" value="submit" /> 
	</form> 


 
