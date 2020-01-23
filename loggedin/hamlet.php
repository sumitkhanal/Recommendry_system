<?php
    date_default_timezone_set('Asia/Kathmandu');
   
    include 'hamletcomments.inc.php';
?>


<!DOCTYPE html>
<html>
<HEAD>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="iframe.css">
</HEAD>
<body>
  
	<iframe src="https://www.w3.org/People/maxf/XSLideMaker/hamlet.pdf" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="50px" marginwidth="50px" height="600px" width="1250px" align="centre" allowfullscreen></iframe>

<img src="Hamlet.jpg"><font color="white"><h1>Hamlet</h1>
The Tragedy of Hamlet, Prince of Denmark, often shortened to Hamlet, is a tragedy written by William Shakespeare sometime between 1599 and 1602.<br><br>
First performance: 1609<br><br>
Playwright: William Shakespeare<br><br>
Country: United Kingdom<br><br>
Characters: Ophelia, Polonius, Claudius, Horatio, Laertes, Gertrude, MORE<br><br>
Genres: Tragedy, Drama</font><br>
<br><br><br><br><br><br>
<?php
echo "<form method='POST' action='".setComments($conn)."'>
  <input type='hidden' name='uid' value='Anonymous'>
  <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
  <textarea name='message'></textarea> <br>
  <button type='submit' name='commentSubmit'>Comment</button>
</form>";

getComments($conn); 
?>


</body>
</html>