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
                <th>Issue Date</th>
                <th>Actions</th>
            </thead>
            <tbody>
            <?php
                      include "connect.php";
                      $sql="select * from customer ORDER BY issuedate DESC;";
                      $result=mysqli_query($con,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          echo'<tr class="my-white" style="border-width: 0px;">'; ?>
                                <td style="width:20%; text-align:center;"><?php echo $row[0] ?></td>
                                <td style="width:20%; text-align:center;"><?php echo $row[1] ?></td>
                                <td style="width:20%; text-align:center;"><?php echo $row[3] ?></td>
                                <td style="width:20%; text-align:center;"><?php echo $row[11] ?></td>
                                <td style="width:10%; text-align:center;"> <button class="green" onclick="location.href='details.php?id=<?php echo $row[0] ?>'">Details</button> </td>
                                
                        </tr>
                        <?php
                          }   
                      ?>   
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>