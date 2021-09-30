<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Welcome to Finance Portal</title>

<link rel="stylesheet" href="loginStyle.css">

</head>
<body>
<div class="signup-form">
    <form action="loginProcess.php" method="post" enctype="multipart/form-data">
    <div class="head">
		<h2>EduCARE <section> Helping Hands for learners </section> </h2>
    </div>

    <div class="row">
            <p class="cls">Login To EduCARE</p>
        <div class="row1" >
            <div class="emailpass">Enter your email and password below</div>
            <div class="txt">EMAIL</div>
        	<input type="email" class="row1" name="email" placeholder="Email address" required="required">
        </div>
		<div class="row1">
            <div class="txt">PASSWORD</div>
            <input type="password" class="row1" name="pass" placeholder="Password" required="required">
        </div>
		<div class="row1">
            <button type="submit" name="save" class="btn">Login</button>
        </div>
        <div class="row1">Don't have an account? <a href="register.php" class="row2">Sign up</a></div>
</div>
    </div>
  </form>
</div>

</body>
</html>