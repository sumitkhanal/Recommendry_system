<?php
session_start();
$Email1=$_SESSION['Email'];
echo $Email1;
$bookTitle = $_GET['title'];
$bookAuthor = $_GET['author'];
echo $bookAuthor;

if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	echo "db conn err";
}else{
	//decleration of dbname....
	$host="localhost";
	$db_user="root";
	$db_pass="";
	$db_name="csv_db";
	
	//connection creation
	$conn = new mysqli($host,$db_user,$db_pass,$db_name);

	echo "<br>Connected to db<br>";
	$INSERT = "INSERT INTO  $Email1 (BOOKTITLE,BOOKAUTHOR) VALUES(?,?)";
					$stmt=$conn->prepare($INSERT);
				$stmt->bind_param("ss",$bookTitle,$bookAuthor);
				$stmt->execute();


}


?>



