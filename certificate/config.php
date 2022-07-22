<?php
$host = "localhost";
$username = "root";
$password = "";

$db_name = "certificate";
$conn = mysqli_connect($host, $username, $password, $db_name);

if(!$conn){
    echo "<script>alert('Connection Failed!')</script>";
    exit();
}

?>