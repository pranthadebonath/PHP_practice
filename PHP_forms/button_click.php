<!DOCTYPE html>
<html lang="en">
<head>
    <title>Call PHP funciton</title>
</head>
<body>
   <form action="" method="get">
   <button name="button" value="btn1">
    Call Function
    </button>
    </form> 
</body>
</html>

<?php

if(isset($_GET['button']))
{
    btn_click_test();
}
function btn_click_test()
{
    echo "Function Called on Button click";
}
?>