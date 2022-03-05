<?php
include ('connect.php');

$getid=mysqli_query($con, "SELECT id from customer order by issuedate DESC LIMIT 1");
$n=mysqli_num_rows($getid);
if($n==0){
	$id =  "AHCCSLHSC101";
}
else{
	$ids=mysqli_fetch_array($getid);
	$idnum = end(explode('HSC10', $ids[0]));
	$newidnum = $idnum+1;
	$id = "AHCCSLHSC10".$newidnum;
}

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
$file1 =  empty($_FILES['photo1']) ? null : $_FILES['photo1'];
$file2 =  empty($_FILES['photo2']) ? null : $_FILES['photo2'];
$file3 =   empty($_FILES['photo3']) ? null : $_FILES['photo3'];



$allowed = array('jpg', 'jpeg', 'png');

				if (isset($_POST['submit'])) {

					//photo1
					if(empty($_FILES['photo1'])){
						$photo1 = null;
					}else{

					$filename = $file1['name'];
					$filetemp = $file1['tmp_name'];
				
					$fileExt = explode('.', $filename);
					$fileActualEXt = strtolower(end($fileExt));
				
				
					if (in_array($fileActualEXt, $allowed)) {
						
								$filenamenew = uniqid('', true) . "." . $fileActualEXt;
								$photo1 = 'uploads/' . $filenamenew;
								move_uploaded_file($filetemp, $photo1);
					}
								
					}
					//photo2
					if(empty($_FILES['photo2'])){
						$photo2 = null;
					}else{

					$filename2 = $file2['name'];
					$filetemp2 = $file2['tmp_name'];
				
					$fileExt2 = explode('.', $filename2);
					$fileActualEXt2 = strtolower(end($fileExt2));
				
					if (in_array($fileActualEXt2, $allowed)) {
						
								$filenamenew2 = uniqid('', true) . "." . $fileActualEXt2;
								$photo2 = 'uploads/' . $filenamenew2;
								move_uploaded_file($filetemp2, $photo2);
					}
								
					}
					//photo3
					if(empty($_FILES['photo3'])){
						$photo3 = null;
					}else{

					$filename3 = $file3['name'];
					$filetemp3 = $file3['tmp_name'];
				
					$fileExt3 = explode('.', $filename3);
					$fileActualEXt3 = strtolower(end($fileExt3));
				
					if (in_array($fileActualEXt3, $allowed)) {
						
								$filenamenew3 = uniqid('', true) . "." . $fileActualEXt3;
								$photo3 = 'uploads/' . $filenamenew3;
								move_uploaded_file($filetemp3, $photo3);
					}
								
					}
				
							


				$query="INSERT INTO `customer` (`id`, `name`, `careof`, `phone`, `village`, `po`, `pin`, `dist`, `state`, `nominee`, `dob`,`issuedate`, `image1`, `image2`, `image3`) VALUES ('$id', '$name', '$co', '$phone', '$vill', '$po', '$pin', '$dist', '$state', '$nominee', '$dob',CURRENT_TIMESTAMP, '$photo1','$photo2','$photo3') ";

				if (mysqli_query($con, $query)) {
				
					{
						   echo '<script>alert("Records inserted successfully")</script>';
						   header("location:registration.php");	
					}
			   } else {
				   echo mysqli_error($con);
			   }
			}
?>