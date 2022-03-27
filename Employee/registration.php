
<?php include "session.php"; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'nav.php' ?>
    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
            <form action="reg.php" method="POST" enctype="multipart/form-data">
                
                    <div class="user-details">
                        <div class="input">
                            <span class="details">Full name</span>
                            <input type="text" name="name" placeholder="Enter Name" required>
                        </div>

                        <div class="input">
                            <span class="details">C/O</span>
                            <input type="text" name="co" placeholder="Enter C/O" required>
                        </div>

                        <div class="input">
                            <span class="details">Phone</span>
                            <input type="number" name="phone" placeholder="Enter Phone" required>
                        </div>

                        <div class="input">
                            <span class="details">Vill/Ward</span>
                            <input type="text" name="vill" placeholder="Enter Vill/Ward" required>
                        </div>

                        <div class="input">
                            <span class="details">P.O.</span>
                            <input type="text" name="po" placeholder="Enter Post office" required>
                        </div>

                        <div class="input">
                            <span class="details">PIN</span>
                            <input type="number" name="pin" placeholder="Enter Pin" required>
                        </div>

                        <div class="input">
                            <span class="details">District</span>
                            <select name="dist" id="">
                                <option value="Not selected" selected>Select district</option>
                                <option value="Baksa">Baksa</option>
                                <option value="Barpeta">Barpeta</option>
                                <option value="Biswanath">Biswanath</option>
                                <option value="Bongaigaon">Bongaigaon</option>
                                <option value="Cachar">Cachar</option>
                                <option value="Charaideo">Charaideo</option>
                                <option value="Chirang">Chirang</option>
                                <option value="Darrang">Darrang</option>
                                <option value="Dhemaji">Dhemaji</option>
                                <option value="Dhubri">Dhubri</option>
                                <option value="Dibrugarh">Dibrugarh</option>
                                <option value="Dima Hasao (North Cachar Hills)">Dima Hasao (North Cachar Hills)</option>
                                <option value="Goalpara">Goalpara</option>
                                <option value="Golaghat">Golaghat</option>
                                <option value="Hailakandi">Hailakandi</option>
                                <option value="Hojai">Hojai</option>
                                <option value="Jorhat">Jorhat</option>
                                <option value="Kamrup">Kamrup</option>
                                <option value="Kamrup Metropolitan">Kamrup Metropolitan</option>
                                <option value="Karbi Anglong">Karbi Anglong</option>
                                <option value="Karimganj">Karimganj</option>
                                <option value="Kokrajhar">Kokrajhar</option>
                                <option value="Lakhimpur">Lakhimpur</option>
                                <option value="Majuli">Majuli</option>
                                <option value="Morigaon">Morigaon</option>
                                <option value="Nagaon">Nagaon</option>
                                <option value="Nalbari">Nalbari</option>
                                <option value="Sivasagar">Sivasagar</option>
                                <option value="Sonitpur">Sonitpur</option>
                                <option value="South Salamara-Mankachar">South Salamara-Mankachar</option>
                                <option value="Tinsukia">Tinsukia</option>
                                <option value="Udalguri">Udalguri</option>
                                <option value="West Karbi Anglong">West Karbi Anglong</option>
                            </select>
                        </div>

                        <div class="input">
                            <span class="details">State</span>
                            <input type="text" name="state" placeholder="Enter State"  value="Assam" required readonly>
                        </div>

                        <div class="input">
                            <span class="details">Nominee</span>
                            <input type="text" name="nominee" placeholder="Enter Nominee" required>
                        </div>

                        <div class="input">
                            <span class="details">DOB</span>
                            <input type="date" name="dob" placeholder="Enter DOB" required>
                        </div>

                        <div class="input">
                            <span class="details">Upload Documents</span>
                            <input type="file" name="photo1">
                            <input type="file" name="photo2" >
                            <input type="file" name="photo3" >
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