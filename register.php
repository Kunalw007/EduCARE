<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Welcome to Finance Portal</title>

<link rel="stylesheet" href="registerStyle.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Mulish&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body class="clr">
        <div class="navbar">
            <div class="logo"><a href="home.php">EduCARE</a></div>
            <ul>
                <li><a href="res_home.php">Resources</a></li>
                <li><a href="#" onclick="alert('Please Register first');">Donate</a></li>
                <li><a href="about_us.php">About</a></li>
                <li><a href="register.php">JoinUs</a></li>
            </ul>
        </div>
<div class="head">
		<h2>EduCARE <section> Helping Hands for learners </section> </h2>
    </div>

<div class="signup-form1">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <form action="register_a.php" method="post" enctype="multipart/form-data">
		<h2 class="txt">Register In To EduCARE</h2>
		<p class="hint-text txt3">Create your account</p>
        <div class="form-group center">
        <div class="txt1">FIRST NAME</div>
        <div class="col"><input type="text" id="sample" class="form-control1" name="first_name" placeholder="First Name" required="required"></div>
        </div>
        <div class="form-group center">

			
			<div class="txt1">LAST NAME</div>
				<div class="col"><input type="text" class="form-control1" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        
        <div class="form-group center">
        <div class="txt1">EMAIL</div>
        	<input type="email" class="form-control1" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group center">
        <div class="txt1">PASSWORD</div>
            <input type="password" class="form-control1" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group center">
        <div class="txt1">CONFIRM PASSWORD</div>
            <input type="password" class="form-control1" name="cpass" placeholder="Confirm Password" required="required">
        </div>
        <div class="form-group txt">
            <input type="file" class=file name="file" required>
            <!-- <input type="submit" name="upload" value="Upload" class="btn"> -->
        </div>        
        <div class="form-group mar">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#" class="row2">Terms of Use</a> & <a href="#" class="row2">Privacy Policy</a></label>
		</div>
		<div class="form-group mar">
            <button type="submit" name="save" class="bttn btn btn-warning ">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php" class="row2">Sign in</a></div>
    </form>
	
</div>
</body>
</html> 