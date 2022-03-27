<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include 'adminnav.php' ?>
    <div class="container">
        <div class="title">Employee Login</div>
        <div class="content">
            <form action="login.php" method="POST" >
                
                    <div class="user-details" style="flex-direction: column;">
                        <div class="input" style="width: 100%;">
                            <span class="details">Username</span>
                            <input type="text" name="username" placeholder="Enter Username" required>
                        </div>

                        <div class="input" style="width: 100%;">
                            <span class="details">Password</span>
                            <input type="password" name="password" placeholder="Enter Password" required>
                        </div>

                        

                        
                    </div>


                <div class="button">
                    <input type="submit" name="submit" value="Login">
                </div>

            </form>
        </div>

    </div>
</body>

</html>