<?php
session_start();
            if(isset($_SESSION['name']))	
            {
            // echo $_SESSION['name'];
            // header("location:donate.php");
            echo '<script type="text/javascript"> 
            window.onload = function() {
            document.getElementById("myid").innerHTML = "Logout";
            document.getElementById("myid").href="logout.php";
            }
            </script>';
            }
            else{
                echo '<script type="text/javascript"> 
                window.onload = function() {
                document.getElementById("myid").innerHTML = "JoinUs";
                document.getElementById("myid").href="register.php";
                }
                </script>';
            }
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="aboutstyle.css">
</head>

<body>
    <div class="navbar">
        <div class="logo"><a href="home.php">EduCARE</a></div>
        <ul>
            <li><a href="res_home.php">Resources</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="about_us.php">About</a></li>
            <li><a href="register.php" id="myid"></a></li>
        </ul>
    </div>
    <div class="content">
        <p>
            Giving is the greatest act of grace!<br>
            We can change future of many by just our<br> one action.<br><br>
            We are providing a bridge to connect the<br> Donors with the needy ones.<br><br>
            Many learners can continue their<br> learning journey with the help of<br> Educational resources that we can<br> provide to them. Come ahead and do<br> your part to support someone’s education<br> by just providing some reference books,<br> stationary books or e-devices that can<br> help needy to go ahead!
        </p>
    </div>
    <div class="image-section"> 
        <img src="aboutus.jpg">
    </div>
</body>
</html>