<?php
include 'connection.php';
$name=$_POST['name'];
$phone=$_POST['phone'];
// echo $phone;
// die;
$subject=$_POST['subject'];
$date=$_POST['date'];
$persons=$_POST['persons'];
$message=$_POST['message'];
$sqli="SELECT * FROM `table_booking` WHERE `phone` LIKE '$phone'";
$num = mysqli_query($con,$sqli);
if(mysqli_num_rows($num)<1)
{
$sql = "INSERT INTO `table_booking`(name, phone, subject, date, persons, message) 
VALUES ('$name','$phone','$subject','$date','$persons','$message')";
$result = mysqli_query($con,$sql);
if($result)
{
    echo '<script language="javascript">';
    echo 'alert("Booking Done")';
    echo '</script>';
    // header("location: http://localhost/harsh_cafe/harsh_cafe/booktable.php");
    include 'menu.php';
}
}
else
{
    echo "data already exist";
}
?>