
<?php
if(isset($_POST['loggedin'])){
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];

	if(!empty($Email)||!empty($Password)){


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
			// $SELECT ="SELECT Email FROM signup WHERE Email= ? LIMIT 1";
			$SELECT="SELECT * from signup WHERE Email='".$Email."' AND Password='".$Password."' limit 1";

			//prepare statement for selecr query
			$stmt =$conn->prepare($SELECT);
			// $stmt->bind_param("s",$Email);
			$stmt->execute();
			$stmt->store_result();
			$rnum=$stmt->num_rows;

			if($rnum==1){
				$stmt->close();
				echo "successfully loggedin";
				
			}else{
				echo "incorrect email or password";
			}
			$conn->close();

			}




	}else{
			echo "All fields are required";
	}
}else{
		echo"off";
}
?>






<!-- 





<?php
if(isset($_POST['loggedin'])){
$host="localhost";
$db_user="root";
$db_pass="";
$db_name="booksforme";

$conn = new mysqli($host,$db_user,$db_pass,$db_name);


if(isset($_POST['Email'])){
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];

	$SELECT="SELECT * from signup WHERE Email='".$Email."' AND Password='".$Password."' limit 1";
			$stmt =$conn->prepare($SELECT);
			$stmt->bind_param("s",$Email);
			$stmt->execute();
			$stmt->bind_result($Email);
			$stmt->store_result();
			$rnum=$stmt->num_rows;
	if($rnum==1){
		echo "You Have successfully loggend in";
		exit();
	}
	else{
			echo "you have entered incorrect password";
			exit();
	}
}
}
?> -->