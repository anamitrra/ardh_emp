<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View customers</title>
    <link rel="stylesheet" href="css/style.css">
   

    <style>
@import url('https://fonts.googleapis.com/css2?family=Klee+One&family=Varela+Round&display=swap');
        body,
        html {
            height: 100%;
            
        }

        .parallax {
            /* The image used */
            background-image: url('img/back2.png');

            /* Full height */
            height: 100%;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        header {
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .nav:hover {
            color: red;
            cursor: pointer;
        }

        .details {
            display: flex;
            justify-content: space-evenly;
            max-width: 1000px;
            font-size:18px;
            font-family: 'Klee One', cursive;
        }
        h1{
            font-size:48px;
            font-family: 'Varela Round', sans-serif;
        }
        td{
            height:70px;
            vertical-align:middle;
        }
        </style>


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



 ?>
<div class="my-threequarter">
                <div class="my-container my-white" style="height:460px; border-radius:5px;"><br>

                    <center><br><br>
                    <p>
                    <h1><b>
                            <?php echo $name ?>
                        </b></h1>
                    </p> <br>
                    <div class="my-container details">
                        <p>
                            Id.: <b>
                                <?php echo $id ?>
                            </b>
                        </p><br>
                        <p>
                           Name.: <b>
                                <?php echo $name ?>
                            </b>
                        </p> <br>

                        <p>
                            Care of: <b>
                                <?php echo $careof ?>
                            </b>
                        </p> <br>
                    </div>
                    <div class="my-container details">
                        <p>
                            Phone No.: <b>
                                <?php echo $phone ?>
                            </b>
                        </p> <br>


                        <p>
                            village: <b>
                                <?php echo $village ?>
                            </b>
                        </p><br>
                        <p>
                            PO: <b>
                                <?php echo $po ?>
                            </b>
                        </p> <br>
                    </div>
                    <div class="my-container details">
                        <p>
                            Pin: <b>
                                <?php echo $pin ?>
                            </b>
                        </p> <br>
                        <p>
                            Dist: <b>
                                <?php echo $dist ?>
                            </b>
                        </p><br>

                        <p>
                            State: <b>
                                <?php echo $state ?>
                            </b>
                        </p><br>
                        <p>
                            Nominee: <b>
                                <?php echo $nominee ?>
                            </b>
                        </p><br>
                        <p>
                            Dob: <b>
                                <?php echo $dob ?>
                            </b>
                        </p><br>
                     <br>
                
                    </div>
                    </center>
                </div>
                <br>
            </div>
</body>
</html>