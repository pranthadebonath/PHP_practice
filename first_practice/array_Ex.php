<?php
$user =["Prantha","Sajib","Taposh","Bissajit"];
$i=0;
echo "Using While Loop";
echo "<br/>";
while($i<count($user))
{
    echo $user[$i];
    echo "<br/>";
    $i++;
}
echo "<br/>";
echo "Using For Each Loop";
echo "<br/>";
foreach($user as $u)
{
    echo "$u";
    echo "<br/>";
}
echo "<br/>";
$userDet=["Prantha",194056,"CSE"];
foreach($userDet as $ud)
{
    if($ud=="CSE")
    {
        break;
    }
    echo $ud;
    echo "<br/>";
}

?>