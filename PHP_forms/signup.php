<?php

if($_POST)
{
    echo "This is php login file";
    echo "<br/>";
    echo "The name is ".$_POST['user_name'];
    echo "<br/>";
    echo "The Password is ".$_POST['user_password'];
    echo "<br/>";
    echo "The Email is ".$_POST['user_email'];
}
?>