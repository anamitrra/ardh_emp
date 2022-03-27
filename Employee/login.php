<?php

session_start();

include "connect.php";

if(isset($_POST["submit"]))
{
	$userid=$_POST["username"];
	$upass=$_POST["password"];
	
	$sql="SELECT * from employee where `username` ='$userid' AND `password` = '$upass' ";
	$result=mysqli_query($con,$sql);
	$n=mysqli_num_rows($result);
	if($n==1)
	{
		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $userid;

		header("location:registration.php");

        
	}
else
{
	header("location:index.php");
}
}
?>
	