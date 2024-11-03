<?php
$num=35;
if($num%2==0)
{
    echo "The Number is Even";
}
else{
    echo "The Number is Odd";
}
echo "<br/>";
switch($num)
{
    case 10:
        echo "Number is 10";
        break;
    case 20:
        echo "Number is 20";
        break;
    default:
    echo "Nothing";
    break;
}
?>