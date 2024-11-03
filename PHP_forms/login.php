<?php
if($_GET)
{
    echo "This is php login file";
    echo "<br/>";
    echo "The name is ".$_GET['user_name'];
    echo "<br/>";
    echo "The Password is ".$_GET['user_password'];
}


?>