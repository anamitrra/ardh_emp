<?php include "session.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="./jQueryAssets/jquery-1.8.3.min.js"></script>
<script src="./DataTables/datatables.min.js"></script>
<link rel="stylesheet" href="./DataTables/datatables.css">
    
</head>
<body>
    <?php include 'nav.php' ?>
    <div class="container">
    <div class="title">Employee</div> <br>
        <div class="Ctable">
        <table id="myTable">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Username</th>
                <th>Password</th>
            </thead>
            <tbody>
            <?php
                      include "connect.php";
                      
                      $sql="SELECT * from employee;";
                      $result=mysqli_query($con,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          echo'<tr style="border-width: 0px;">'; ?>
                                <td style="width:20%; text-align:center;"><?php echo $row[0] ?></td>
                                <td style="width:20%; text-align:center;"><?php echo $row[1] ?></td>
                                <td style="width:20%; text-align:center;"><?php echo $row[3] ?></td>
                                <td style="width:20%; text-align:center;"><?php echo $row[4] ?></td>
                                <td style="width:20%; text-align:center;"><?php echo $row[5] ?></td>
                               
                                
                        </tr>
                        <?php
                          }   
                      ?>   
            </tbody>
        </table>
        </div>
    </div>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        "order": [[ 3, "desc" ]],
        responsive: true,
    });
    
} );
</script>    

</body>


</html>
