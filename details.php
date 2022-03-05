
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View customers</title>
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    <?php include 'nav.php' ?>
    <div class="container">
    <div class="title">Details</div> <br>
    <?php
	include "connect.php";
	$id=$_GET["id"];
	$str="Select * from customer where id='$id'";
	$result=mysqli_query($con,$str);
	$row=mysqli_fetch_array($result);
    $id=$row["id"];
	$name=$row["name"];
	$careof=$row["careof"];
    $phone=$row["phone"];
	$village=$row["village"];
	$po=$row["po"];
	$pin=$row["pin"];
	$dist=$row["dist"];
    $state=$row["state"];
    $nominee=$row["nominee"];
    $dob=$row["dob"];
    $issuedate=new DateTime($row["issuedate"]);
    $image1=$row["image1"];
    $image2=$row["image2"];
    $image3=$row["image3"];
 ?>

 <div class="details">
 <h2><?php echo $name ?></h2>
     <h2><span>ID : </span><?php echo $id ?></h2>
     
     <br>
     <div class="row">
     <p><span>Phone : </span><?php echo $phone ?></p>
     <p><span>Issue date : </span><?php echo $issuedate->format('d/m/Y') ?></p>
     </div>
     <div class="row">
     <p><span>Care of :</span> <?php echo $careof ?></p>
     <p><span>Village : </span><?php echo $village ?></p>
     </div>
     <div class="row">
     <p><span>PO : </span><?php echo $po ?></p>
     <p><span>Pin : </span><?php echo $pin ?></p>
     </div>
     <div class="row">
     <p><span>District : </span><?php echo $dist ?></p>
     <p><span>State : </span><?php echo $state ?></p>
     </div>
    <div class="row">
    <p><span>Nominee : </span><?php echo $nominee ?></p>
     <p><span>Date of birth : </span><?php echo $dob ?></p>
    </div>

    <br>
    <u><h3>Documents</h3></u>
    <br>
    <div class="row-wrap">
        <div class="image" style="background-image: url(<?php echo $image1 ?>);" onclick="location.href='<?php echo $image1 ?>'"></div>
        <div class="image" style="background-image: url(<?php echo $image2 ?>);" onclick="location.href='<?php echo $image2 ?>'"></div>
        <div class="image" style="background-image: url(<?php echo $image3 ?>);" onclick="location.href='<?php echo $image3 ?>'"></div>
        
    </div>
    <br>

    <div class="row-wrap">
        <button class="green"  onclick="location.href='card.php?id=<?php echo $id ?>'">Generate ID Card</button>
        <button class="orange" onclick="location.href='edit.php?id=<?php echo $id ?>'">Update</button></a>
    </div>
    
 </div>

</body>
</html>