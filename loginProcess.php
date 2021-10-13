<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';

    $pass1=md5($pass);
    echo $pass1;
    $sql=mysqli_query($conn,"SELECT * FROM register where Email='$email' and Password='$pass1'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["First_Name"]=$row['First_Name'];
        $_SESSION["Last_Name"]=$row['Last_Name']; 
        $_SESSION['name'] = $row['First_Name'];
        header("Location: donate.php"); 
    }
    else
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("password incorrect");'; 
        echo 'window.location.href = "login.php";';
        echo '</script>';
    }
}
?>