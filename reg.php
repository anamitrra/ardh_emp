<?php
include('connect.php');




$server = "localhost";
$username = "root";
$password = "";
$database = "ardhemp";
$db = mysqli_connect($server,$username,$password,$database);


if (isset($_POST['submit'])) {

$name = $_POST["name"];
$co = $_POST["co"];
$phone = $_POST["phone"];
$vill = $_POST["vill"];
$po = $_POST["po"];
$pin = $_POST["pin"];
$dist = $_POST["dist"];
$state = $_POST["state"];
$nominee = $_POST["nominee"];
$dob = $_POST["dob"];


mysqli_query($db, "INSERT INTO `customer` (`id`, `name`, `careof`, `phone`, `village`, `po`, `pin`, `dist`, `state`, `nominee`, `dob`, `image`) VALUES (null, '$name', '$co', '$phone', '$vill', '$po', '$pin', '$dist', '$state', '$nominee', '$dob')");
// $query = "INSERT INTO `customer` (`id`, `name`, `careof`, `phone`, `village`, `po`, `pin`, `dist`, `state`, `nominee`, `dob`, `image`) VALUES (null, '$name', '$co', '$phone', '$vill', '$po', '$pin', '$dist', '$state', '$nominee', '$dob')";

// 				if (mysqli_query($con, $query)) {
// 					header("location:registration.php");
// 				} else {
// 					echo mysqli_error($con);
// 				}
// 			}  
?>