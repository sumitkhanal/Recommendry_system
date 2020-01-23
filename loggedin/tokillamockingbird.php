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
  
	<iframe src="http://www.kkoworld.com/kitablar/harper_li_masqarachini_oldurmek-eng.pdf" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="50px" marginwidth="50px" height="600px" width="1250px" align="centre" allowfullscreen></iframe>

<img src="tokillamockingbird.jpg"><font color="white"><h1>To Kill A Mockingbird</h1>
To Kill a Mockingbird is a novel by Harper Lee published in 1960. Instantly successful, widely read in high schools and middle schools in the United States, it has become a classic of modern American literature, winning the Pulitzer Prize. <br>
Originally published: July 11, 1960<br>
Author: Harper Lee<br>
Pages: 281<br>
Followed by: Go Set a Watchman<br>
Characters: Atticus Finch, Jean Louise 'Scout' Finch, Jem Finch, MORE<br>
Genres: Novel, Bildungsroman, Thriller, Southern Gothic, Domestic Fiction, Legal Story</font><br>
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