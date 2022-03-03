<?php
 include "connect.php";

 require ('fpdf/fpdf.php');

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


	header("Content-type: image/jpeg");
  $font="AGENCYR.TTF";
  $image=imagecreatefromjpeg("card.jpg");
  $color=imagecolorallocate($image,19,21,22);
 
  imagettftext($image,35,0,320,254,$color,$font,$name);
  imagettftext($image,35,0,230,357,$color,$font,$id);
  imagettftext($image,35,0,270,462,$color,$font,$dob);
  imagettftext($image,35,0,830,462,$color,$font,$dob);

  $dir="card-photo/card.jpeg";
  imagejpeg($image, $dir);
  imagedestroy($image);

$pdf = new FPDF('L','cm',array(15.822083333,27.78125));
$pdf->AddPage();
$pdf->Image($dir,0,0);
$pdf->Output('D', 'id_card.pdf');

?>