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
    <div class="title">Customers</div> <br>
        <div class="Ctable">
        <table>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
            </thead>
            <tbody>
            <?php
                      include "connect.php";
                      $sql="select * from customer;";
                      $result=mysqli_query($con,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          echo'<tr class="my-white" style="border-width: 0px;">';
                                echo'<td style="width:20%; text-align:center;">'.$row[0].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[1].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[2].'</td>';
                                echo'<td style="width:20%; text-align:center;" class="my-hover-text-red"> <a href="details.php?id='.$row[0].'">More Details</a></td>';
                                
                        echo'</tr>';
                          }   
                      ?>   
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>