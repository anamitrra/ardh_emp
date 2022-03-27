
<?php include "session.php"; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'nav.php' ?>
    <div class="container">
        <div class="title">Add new employee</div>
        <div class="content">
            <form action="add_employee_backend.php" method="POST" enctype="multipart/form-data">
                
                    <div class="user-details">
                        <div class="input">
                            <span class="details">Full name</span>
                            <input type="text" name="name" placeholder="Enter Name" required>
                        </div>


                        <div class="input">
                            <span class="details">Phone</span>
                            <input type="number" name="phone" placeholder="Enter Phone" required>
                        </div>

                        
                        <div class="input">
                            <span class="details">Password</span>
                            <input type="password" name="password" placeholder="Enter Password" required>
                        </div>
                        
                        
                    </div>


                <div class="button">
                    <input type="submit" name="submit" value="submit">
                </div>

            </form>
        </div>

    </div>
</body>

</html>