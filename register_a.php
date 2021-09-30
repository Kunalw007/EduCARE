<?php
extract($_POST);
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM register where Email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
else if(isset($_POST['save']))
{
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $folder="upload/";
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);
    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
       $var= "SELECT * FROM register where Password='$pass'";
       if ($result=mysqli_query($conn,$var))
       {
       // Fetch one and one row
       while ($row=mysqli_fetch_row($result))
           {
           printf ("%s (%s)\n",$row[0],$row[1]);
           }
       }
       $pass1=md5($pass);
        $query="INSERT INTO register(First_Name, Last_Name, Email, Password, File ) VALUES ('$first_name', '$last_name', '$email', '$pass1', '$final_file')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: login.php?status=success");
    }
    else 
    {
		echo "Error.Please try again";
	}
}

?>