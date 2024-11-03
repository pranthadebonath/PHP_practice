<?php
include("./config_PDO.php");
//receiving data from form
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

//code for querry
$login=$conn->prepare("
    INSERT INTO `login`(`username`, `password`) VALUES ('$username','$password')");
$result=$login->execute();
if($result)
{
    echo "Sign Up Succcessfull";
    echo "<br/>";
}
else
{
    echo "Sign Up Failed";
    echo "<br/>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goback</title>
</head>
<body>
<button><a href="login_form.html">LogIn</a></button>
<br/>
<br/>
<button><a href="sighup.html">Try Again To signUp</a></button>
</body>
</html>