<?php
include 'connection.php';
$email = $_POST['email'];
$password = $_POST['password'];
$sql="SELECT * FROM `admin_data` WHERE `email` LIKE '$email' AND `password` LIKE '$password'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
foreach($result as $row)
{
{
$_SESSION['email'] = $row['email'];
$_SESSION['password'] = $row['password'];
header("location: http://localhost/harsh_cafe/harsh_cafe/display.php");
}
}else
{
echo "User Not Found";   
}
?>