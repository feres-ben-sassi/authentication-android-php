<?php 
	$con=mysqli_connect("localhost","root","","auth-android");
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password =$_POST["password"];

	$sql = "INSERT INTO customers(name,email,password) VALUES ('$name','$email','$password')";
	$result = mysqli_query( $con,$sql );
	
	if($result) {
		echo "registered successfully";
	}
	else {
		echo "some error occured";
	}
?>