<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "cafe";

$con = mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
    echo "connection error";
}
?>