<?php
include 'connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sql="INSERT INTO `contact`(`name`, `email`, `subject`, `message`) 
VALUES ('$name','$email','$subject','$message')";
$result = mysqli_query($con,$sql);
if($result)
{
    echo '<script language="javascript">';
    echo 'alert("Request Submitted")';
    echo '</script>';
    include 'contactus.php';
}
else
{
    echo "error";
}
?>