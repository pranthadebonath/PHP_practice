<?php
$host= "localhost";
$username= "root";
$password = null;
$database = "class";


$conn = new mysqli($host,$username,$password,$database);

if($conn->connect_error)
{
    die ("Some error".$conn->connect_error);
}
echo "Connection Successfull";

echo "<br/>";
$result = $conn->query("select name from students where id=1")->fetch_all();
print_r($result);
?>