<?php
$user="root";
$pass="";
$host="localhost";
$dbname="face";

$con=mysqli_connect($host,$user,$pass,$dbname);
if(!$con)
{
    die("connection failed: " . mysqli_connect_error());
}
?>