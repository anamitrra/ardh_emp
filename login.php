<?php

session_start();

include "connect.php";

if(isset($_POST["submit"]))
{
	$userid=$_POST["username"];
	$upass=$_POST["password"];
	
	$sql="SELECT * from admin where `username` ='$userid' AND `password` = '$upass' ";
	$result=mysqli_query($con,$sql);
	$n=mysqli_num_rows($result);
	if($n==1)
	{
		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $userid;

		header("location:view-customers.php");

        
	}
else
{
	header("location:index.php");
}
}
?>
	