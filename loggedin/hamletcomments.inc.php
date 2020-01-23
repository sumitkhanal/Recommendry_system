<?php

$conn =mysqli_connect('localhost','root','','booksforme');

if(!$conn){
	die("Connection failed:".mysqli_connect_error());

}


function setComments($conn){
	if(isset($_POST['commentSubmit'])){
		$uid=$_POST['uid'];
		$date=$_POST['date'];
		$message=$_POST['message'];

		$sql ="INSERT INTO hamletcomments (uid, date, message) VALUES ('$uid','$date', '$message')";
		$result= $conn-> query($sql);
	}

}



function getComments($conn) {
	$sql ="SELECT *FROM hamletcomments";
	$result= $conn-> query($sql);
	while ($row=$result->fetch_assoc()){
	echo"<div class='comment-box'><p>";	
	echo $row['uid']."<br>" ;
	echo $row['date']."<br>";
	echo nl2br($row['message']);
	echo"</p>

	<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
		<input type='hidden' name='cid' value='".$row['cid']."'>
		
		<button type='submit' name='commentDelete'>Delete</button>
	</form>

	<form class='edit-form' method='POST' action='editcomment.php'>
		<input type='hidden' name='cid' value='".$row['cid']."'>
		<input type='hidden' name='uid' value='".$row['uid']."'>
		<input type='hidden' name='date' value='".$row['date']."'>
		<input type='hidden' name='message' value='".$row['message']."'>
		<button>Edit</button>
	</form>


	</div>";	
}
}


function eidtComments($conn){
	if(isset($_POST['commentSubmit'])){
		$cid=$_POST['cid'];
		$uid=$_POST['uid'];
		$date=$_POST['date'];
		$message=$_POST['message'];

		$sql ="UPDATE hamletcomments SET message='$message' WHERE cid='$cid'";
		$result= $conn-> query($sql);
		header("Location:hamlet.php");
	}

}

function deleteComments($conn){
	if(isset($_POST['commentDelete'])){
		$cid=$_POST['cid'];

		$sql ="DELETE FROM hamletcomments WHERE cid='$cid'";
		$result= $conn-> query($sql);
		header("Location:hamlet.php");
	}
}
