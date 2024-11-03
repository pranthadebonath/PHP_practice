<?php
$num=10;
if($num>10)
{
    goto jump;
}
echo "<br/>";
for($i=1;$i<=10;$i++)
{
    if($i==5)
    {
        continue;
    }
    echo 'The number is: '.$i;
    echo "<br/>";
}
jump:
while($num!=0)
{
    echo "This is for while Loop";
    echo "<br/>";
    $num--;
}
?>