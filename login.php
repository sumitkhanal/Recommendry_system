
<?php
session_start();
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
			$db_name="csv_db";
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
				$_SESSION['Email']=$Email;
				$id= "SELECT id from signup WHERE Email='".$Email."'";
				$_SESSION['id']=$id;
				header("location:loggedin/home.html");

				// echo $Email;
				// echo $id;
				
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

