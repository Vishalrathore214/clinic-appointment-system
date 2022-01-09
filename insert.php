<!DOCTYPE html>
<html>

<head>
	<title>Appointment confirm</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "clinic");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		$address = $_REQUEST['address'];
		$gender = $_REQUEST['gender'];
		$age = $_REQUEST['age'];
		$disease = $_REQUEST['disease'];
		$date = $_REQUEST['date'];
		$slot = $_REQUEST['slot'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO appointment VALUES (NULL,'$name',
			'$phone','$email','$address','$gender','$age','$disease','$date','$slot')";
		
		if(mysqli_query($conn, $sql)){
			echo "Your appointment is confirm. Please come on time...";

			echo nl2br("\n$name\n $phone\n "
				. "$email\n $address\n $gender\n $age\n $disease\n $date\n $slot");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
