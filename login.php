$host="localhost";
$dbname="booksforme";
$dbuser="root";
$dbpass=""

<?php
if(isset($_POST['LOGIN'])){
	$Email=$_POST['FirstName'];
	$Password=$_POST['LastName'];

	if(!empty($Password)||!empty($Email)){


		if(mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

		}else{
			//decleration of dbname....
			$host="localhost";
			$db_user="root";
			$db_pass="";
			$db_name="booksforme";
	//connection creation


			$conn = new mysqli($host,$db_user,$db_pass,$db_name);
			$SELECT = "SELECT Email FROM signup WHERE Email = '$Email' and Password = '$Password'";
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
				echo "New record inserted successfully";
				
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