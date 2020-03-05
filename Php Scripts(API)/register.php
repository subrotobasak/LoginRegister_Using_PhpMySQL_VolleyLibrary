<?php 
	$con=mysqli_connect("localhost","id12226132_subroto","12345678","id12226132_studentmanagementsystem");
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password =$_POST["password"];

	$sql = "INSERT INTO student(name,email,password) VALUES ('$name','$email','$password')";
	$result = mysqli_query( $con,$sql );
	
	if($result) {
		echo "registered successfully";
	}
	else {
		echo "some error occured";
	}
?>