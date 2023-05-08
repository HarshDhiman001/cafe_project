<?php
include 'connection.php';
$email = $_POST['email'];
$sql = "INSERT INTO `subscribers`(`email`) VALUES ('$email')";
$result = mysqli_query($con,$sql);
if($result)
{
    echo '<script language="javascript">';
    echo 'alert("Submitted")';
    echo '</script>';
    include 'contactus.php';
}
else
{
    echo "error";
}
?>