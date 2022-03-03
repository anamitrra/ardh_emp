
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View customers</title>
    <link rel="stylesheet" href="css/style.css">

<body>
 
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
    <?php include 'nav.php' ?>
    <div class="container">
        <div class="title">Update Details</div>
        <div class="content">
            <form action="update.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="id"  <?php echo 'value="'.$id.'"'; ?> hidden >
                    <div class="user-details">
                   
                      
                        <div class="input">
                            <span class="details">Full name</span>
                            <input type="text" name="name" placeholder="Enter Name" <?php echo 'value="'.$name.'"'; ?> required>
                        </div>

                        <div class="input">
                            <span class="details">C/O</span>
                            <input type="text" name="co" placeholder="Enter C/O" <?php echo 'value="'.$careof.'"'; ?> required>
                        </div>

                        <div class="input">
                            <span class="details">Phone</span>
                            <input type="number" name="phone" placeholder="Enter Phone" <?php echo 'value="'.$phone.'"'; ?> required>
                        </div>

                        <div class="input">
                            <span class="details">Vill/Ward</span>
                            <input type="text" name="vill" placeholder="Enter Vill/Ward" <?php echo 'value="'.$village.'"'; ?> required>
                        </div>

                        <div class="input">
                            <span class="details">P.O.</span>
                            <input type="text" name="po" placeholder="Enter Post office" <?php echo 'value="'.$po.'"'; ?> required>
                        </div>

                        <div class="input">
                            <span class="details">PIN</span>
                            <input type="number" name="pin" placeholder="Enter Pin" <?php echo 'value="'.$pin.'"'; ?> required>
                        </div>

                        <div class="input">
                            <span class="details">District</span>
                            <input type="text" name="dist" placeholder="Enter District" <?php echo 'value="'.$dist.'"'; ?> required>
                        </div>

                        <div class="input">
                            <span class="details">State</span>
                            <input type="text" name="state" placeholder="Enter State" <?php echo 'value="'.$state.'"'; ?> required>
                        </div>

                        <div class="input">
                            <span class="details">Nominee</span>
                            <input type="text" name="nominee" placeholder="Enter Nominee" <?php echo 'value="'.$nominee.'"'; ?> required>
                        </div>

                        <div class="input">
                            <span class="details">DOB</span>
                            <input type="date" name="dob" placeholder="Enter DOB" <?php echo 'value="'.$dob.'"'; ?> required>
                        </div>

                        <!-- <div class="input">
                            <span class="details">Upload Documents</span>
                            <input type="file" name="photo1" >
                            <input type="file" name="photo2" >
                            <input type="file" name="photo3" >
                        </div> -->
                    </div>


                <div class="button">
                    <input type="submit" name="submit" value="submit" >
                </div>

            </form>
        </div>

    </div>
</body>
</html>