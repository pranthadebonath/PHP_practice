<?php
$host= "localhost";
$username= "root";
$password = null;

$conn= new PDO("mysql:host=$host;dbname=class",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>