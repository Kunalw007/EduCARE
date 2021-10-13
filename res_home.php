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
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Resources</title>
  <link rel="stylesheet" href="res_style.css">
</head>

<body>
    <div class="navbar">
        <div class="logo"><a href="home.php">EduCARE</a></div>
        <ul>
          <li><a href="res_home.php">Resources</a></li>
          <li><a href="donate.php">Donate</a></li>
          <li><a href="about_us.php">About</a></li>
          <li><a id="myid" href="register.php"></a></li>
        </ul>
    </div>
    <section>
        <div class="activities">
          <center>
            <h2>Resources</h2>
          </center>
          <div class="fit">
              <div class="row1">
            <div class="image1">
              <img src="./res_img/Frame 2.png" alt="">
            </div>
            <div class="image2">
              <img src="./res_img/Frame 3.png" alt="">
            </div>
            <div class="image3">
              <img src="./res_img/Frame 4.png"
                alt="">
            </div>
        </div>
        <div class="row2">
            <div class="image1">
              <img
                src="./res_img/Frame 5.png"
                alt="">
            </div>
            <div class="image2">
              <img src="./res_img/Frame 6.png" alt="">
            </div>
            <div class="image3">
              <img src="./res_img/Frame 7.png" alt="">
            </div>
        </div>
          </div>
        </div>
      </section>
</body>
</html>