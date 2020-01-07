<?php
    date_default_timezone_set('Asia/Kathmandu');
   
    include 'tokillamockingbirdcomments.inc.php';
?>


<!DOCTYPE html>
<html>
<HEAD>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="iframe.css">
</HEAD>
<body>
	
<?php
		$cid=$_POST['cid']; 
		$uid=$_POST['uid'];
		$date=$_POST['date'];
		$message=$_POST['message'];

echo "<form method='POST' action='".eidtComments($conn)."'>
  
	<input type='hidden' name='cid' value='".$cid."'>
  <input type='hidden' name='uid' value='".$uid."'>
  <input type='hidden' name='date' value='".$date."'>
  <textarea name='message'>".$message."</textarea> <br>
  <button type='submit' name='commentSubmit'>Edit</button>
</form>";


?>

</body>
</html>