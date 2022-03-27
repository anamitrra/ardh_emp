<?php
include ('connect.php');

$name = $_POST["name"];

$phone = $_POST["phone"];

$username = $phone;

$password = $_POST["password"];

				$query="INSERT INTO `employee` (`id`, `name`, `phone`, `username`, `password`) VALUES (null, '$name', '$phone',  '$username','$password') ";

				if (mysqli_query($con, $query)) {
				
					{
						   echo '<script>alert("Records inserted successfully")</script>';
						   header("location:add_employee.php");	
					}
			   } else {
				   echo mysqli_error($con);
			   }
			
?>