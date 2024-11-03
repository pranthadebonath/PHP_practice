<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="user" placeholder="Enter user Name">
        <br/>
        <br/>
        <button name="button" value="set">Set cookie</button>
        <br/>
        <br/>
        <button name="button" value="display">Display cookie</button>
        <br/>
        <br/>
        <button name="button" value = "delete">Delete Cookie</button>
        <br/>
        <br/>
    </form>
</body>
</html>

<?php
if(isset($_POST['button']))
{
    if($_POST['button']=="set")
    {
        $val = $_POST['user'];
        setcookie("user", $val);
        echo "<br/>";
        echo "cookie is set";
    }
    if($_POST['button']=="display")
    {
        if(isset($_POST['user']))
        {
            echo $_COOKIE['user'];
        }
    }
    if($_POST['button']=="display")
    {
        if(isset($_POST['user']))
        {
            setcookie("user",null,-1);
        }
    }
}

?>