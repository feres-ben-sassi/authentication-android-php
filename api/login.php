<?php 
	$con=mysqli_connect("localhost","root","","auth-android");
	
		$email = $_POST["email"];
		$password = $_POST["password"];

		$sql = "SELECT * FROM student WHERE  email = '$email' AND password = '$password'";
		$result = mysqli_query($con,$sql);
		
		
			echo "logged in successfully" ;
?>