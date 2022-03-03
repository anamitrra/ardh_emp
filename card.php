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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>card</title>
    <link rel="stylesheet" href="css/card.css">
</head>
<body>
    <script>
        window.print();
  setTimeout(function(){
    window.close()
  },750)
    </script>


<div class="card">
   <div class="title">AARADHAYA HEALTH CARE</div>
<br>
<p><span>ID : </span><?php echo $id; ?></p>
<p><span>Name : </span><?php echo $id; ?></p>
<p><span>Phone : </span><?php echo $phone; ?></p>
<p><span>Address : </span><?php echo $village.', '. $state;?></p>
<p><span>Pin : </span><?php echo $pin; ?></p>
</div>

</body>
</html>