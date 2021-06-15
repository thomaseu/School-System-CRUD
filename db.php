<?php


$servername='localhost';
$username='root';
$password='';
$database='sms';

$conn = mysqli_connect($servername,$username,$password);
$sql = "CREATE DATABASE IF NOT EXISTS $database";

if(mysqli_query($conn,$sql)){
    $conn=mysqli_connect($servername,$username,$password,$database);
    $sql="CREATE TABLE IF NOT EXISTS cms(


        ID INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        sc VARCHAR(250) NOT NULL,
        cname varchar(150) NOT NULL,
        cimage VARCHAR(500) NOT NULL); 
    ";
    mysqli_query($conn,$sql);
    return $conn;


}else{
    echo "failed".mysqli_error($conn);
}




?>