<?php
include("./config_PDO.php");
//receiving data from form
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

//code for querry
$get_user= $conn->prepare("SELECT * from login");
$get_user->execute();
$Users=$get_user->fetchAll();
$p=0;
foreach($Users as $user)
{
    if(($username==$user['username']) && ($password==$user['password']))
    {
        echo "Login successful, welcome ".$user['username'];
        $p=1;
        break;
    }
}
if($p==0)
{
     echo "Login Failed";
}
?>