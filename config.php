<?php
if(isset($_POST['signupbutton'])){
	$FirstName=$_POST['FirstName'];
	$LastName=$_POST['LastName'];
	$Password=$_POST['Password'];
	$Email=$_POST['Email'];

	if(!empty($FirstName)||!empty($LastName)||!empty($Password)||!empty($Email)){


		if(mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

		}else{
			//decleration of dbname....
			$host="localhost";
			$db_user="root";
			$db_pass="";
			$db_name="csv_db";
	//connection creation


			$conn = new mysqli($host,$db_user,$db_pass,$db_name);
			$SELECT ="SELECT Email FROM signup WHERE Email= ? LIMIT 1";
			$INSERT = "INSERT INTO signup (FirstName,LastName,Password,Email) VALUES (?,?,?,?)";

			//prepare statement for selecr query
			$stmt =$conn->prepare($SELECT);
			$stmt->bind_param("s",$Email);
			$stmt->execute();
			$stmt->bind_result($Email);
			$stmt->store_result();
			$rnum=$stmt->num_rows;

			if($rnum==0){
				$stmt->close();
				$stmt=$conn->prepare($INSERT);
				$stmt->bind_param("ssss",$FirstName,$LastName,$Password,$Email);
				$stmt->execute();
				$ID = "UPDATE signup SET id = id + 1 WHERE id BETWEEN 1 AND 1000";
								$sql="CREATE TABLE ".$Email." (userid INT NOT NULL AUTO_INCREMENT,
					BOOKTITLE VARCHAR(32),
					BOOKAUTHOR VARCHAR(32),
					PRIMARY KEY(userid))
					";
				$result=mysqli_query($conn,$sql) or die("BAD CREATE:$sql");
				header("location:cong.html");
				header("location:cong.html");
				
			}else{
				echo "Someone already registered using this email";
			}
			$stmt->close();
			$conn->close();

			}




	}else{
			echo "All fields are required";
	}
}else{
		echo"off";
}
?>