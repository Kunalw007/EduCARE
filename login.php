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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<link rel="stylesheet" href="loginStyle.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Mulish&display=swap" rel="stylesheet">

<script>
    
</script>
</head>
<body id="container">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<div class="signup-form">
    <form action="loginProcess.php" method="post" enctype="multipart/form-data">
    <div class="navbar">
            <div class="logo"><a href="home.php">EduCARE</a></div>
            <ul>
                <li><a href="res_home.php">Resources</a></li>
                <li><a href="#" onclick="alert('Please loging first');">Donate</a></li>
                <li><a href="about_us.php">About</a></li>
                <li><a href="register.php">JoinUs</a></li>
            </ul>
        </div>
    <div class="head">
		<h2>EduCARE <section> Helping Hands for learners </section> </h2>
    </div>
    <div class="row">
            <p class="cls">Login In To EduCARE</p>
        <div class="row1" >
            <div class="emailpass">Enter your email and password below</div>
            <div class="txt">EMAIL</div>
        	<input type="email" class="row1 form-control1" name="email" placeholder="Email address" required="required">
        </div>
		<div class="row1 m-t-20">
            <div class="txt">PASSWORD</div>
            <input type="password" class="row1 form-control1" name="pass" placeholder="Password" required="required">
        </div>
		<div class="row1 btn2">
            <button type="submit" name="save" class="bttn btn btn-warning">Login</button>
        </div>
        <div class="row1 margin">Don't have an account? <a href="register.php" class="row2">Sign up</a></div>

  </form>
</div>

</body>
</html>