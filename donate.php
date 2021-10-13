<?php  
session_start();
if(isset($_SESSION['name'])){
    echo '<script type="text/javascript"> 
            window.onload = function() {
            document.getElementById("myid").innerHTML = "Logout";
            document.getElementById("myid").href="logout.php";
            }
            </script>';
}
	else{
		header("location:login.php");
		
	}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="donate.css">
    <link rel= "stylesheet" href="style.css">
</head>
<body>
    <!-- navbar ka code goes here -->
    <div class="navbar">
        <div class="logo"><a href="home.php">EduCARE</a></div>
        <ul>
            <li><a href="res_home.php">Resources</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="about_us.php">About</a></li>
            <li><a href="register.php" id="myid"></a></li>
        </ul>
    </div>
    <!-- donate form section -->
    <section class="donate-form-ctn">
        <form>
            <h3 class="form-heading">INCLUDE SOME DETAILS</h3>
            <div class="mb-3">
              <label for="titleInput" class="form-label">Title *</label>
              <input type="text" class="form-control" id="titleInput" aria-describedby="textHelp" required>
              <div id="textHelp" class="form-text">Mention the key features of your item (eg.Name, type). <span>0/70</span></div>
            </div>
            <div class="mb-3">
              <label for="descriptionInput" class="form-label">Description *</label>
              <input type="text" class="form-control" id="descriptionInput">
              <div id="descpHelp" class="form-text">Include Description of you <span>0/4096</span></div>
            </div>
            <div class="mb-3">
                <label for="photoInput" class="form-label">UPLOAD UP TO 4 PHOTOS</label>
                <!-- <input type="file" name="file" class="form-control" required>
                <input type="file" name="file" class="form-control" required>
                <input type="file" name="file" class="form-control" required>
                <input type="file" name="file" class="form-control" required> -->
                <div class="form-label photo-upload">
                    <label for="photoUpload1"><img src="upload/outline_add_a_photo_black_24dp.png" alt="img" srcset=""></label>
                    <input type="file" accept="image/*" id="photoUpload1" class="choose_img" name="photo" required>
                    <label for="photoUpload2"><img src="upload/outline_add_a_photo_black_24dp.png" alt="img" srcset=""></label>
                    <input type="file" accept="image/*" id="photoUpload2" class="choose_img" name="photo" required>
                    <label for="photoUpload3"><img src="upload/outline_add_a_photo_black_24dp.png" alt="img" srcset=""></label>
                    <input type="file" accept="image/*" id="photoUpload3" class="choose_img" name="photo" required>
                    <label for="photoUpload4"><img src="upload/outline_add_a_photo_black_24dp.png" alt="img" srcset=""></label>
                    <input type="file" accept="image/*" id="photoUpload4" class="choose_img" name="photo" required>
                    <label for="photoUpload4"><img src="upload/outline_add_a_photo_black_24dp.png" alt="img" srcset=""></label>
                    <input type="file" accept="image/*" id="photoUpload4" class="choose_img" name="photo">
                </div>
                <div id="photoHelp" class="form-text">This field is Mandatory</div>
            </div>
            <button type="submit" class="btn btn-warning">Post Now</button>
        </form>
    </section>
</body>
</html>