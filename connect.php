<?php
$server="localhost";
$user="root";
$password="";
$database="crud operation(2025)";

$conn=new mysqli($server, $user, $password, $database);

if($conn->connect_error)
{
    die("error".mysqli_connect_error($conn));

}


?>
