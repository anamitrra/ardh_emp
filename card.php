<?php
 include "connect.php";

 require ('fpdf/fpdf.php');

 $id=$_GET["id"];
 $str="Select * from customer where id='$id'";
 $result=mysqli_query($con,$str);
 $row=mysqli_fetch_array($result);
  $id=$row["id"];
 $name=$row["name"];
 $issuedate=new DateTime($row["issuedate"]);
$issuedate->format('d/m/Y');


	header("Content-type: image/jpeg");
  $font="AGENCYR.TTF";
  $image=imagecreatefromjpeg("card.jpg");
  $color=imagecolorallocate($image,19,21,22);
 
  imagettftext($image,35,0,320,254,$color,$font,$name);
  imagettftext($image,35,0,230,357,$color,$font,$id);
  imagettftext($image,35,0,270,462,$color,$font,$issuedate->format('d/m/Y'));
  imagettftext($image,35,0,830,462,$color,$font,$issuedate->format('d/m/Y'));

  $dir="card-photo/card.jpeg";
  imagejpeg($image, $dir);
  imagedestroy($image);

$pdf = new FPDF('L','cm',array(15.822083333,27.78125));
$pdf->AddPage();
$pdf->Image($dir,0,0);
$filename = $name."-id.pdf";
$pdf->Output('D', $filename);

?>