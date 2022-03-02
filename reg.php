<?php
include('connect.php');


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
$file1 = $_FILES["photo1"];

$filename = $file1['name'];
	$filetemp = $file1['tmp_name'];

	$fileExt = explode('.', $filename);
	$fileActualEXt = strtolower(end($fileExt));

				$filenamenew = uniqid('', true) . "." . $fileActualEXt;
				$photo1 = 'uploads/' . $filenamenew;
				move_uploaded_file($filetemp, $$photo1);


$query="INSERT INTO `customer` (`id`, `name`, `careof`, `phone`, `village`, `po`, `pin`, `dist`, `state`, `nominee`, `dob`, `image`) VALUES (null, '$name', '$co', '$phone', '$vill', '$po', '$pin', '$dist', '$state', '$nominee', '$dob', '$photo1' ";

				if (mysqli_query($con, $query)) {
					header("location:registration.php");
				} else {
					echo mysqli_error($con);
				}
			
?>