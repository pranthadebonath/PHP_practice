<?php
function DisplayData($name,$roll)
{
    echo 'Name is : '.$name;
    echo "<br/>";
    echo 'The Roll Is : '.$roll;
    echo "<br/>";
}

DisplayData("Prantha Debonath",194056);
DisplayData("Sajib Debonath",194020);
$data= "DisplayData";
$data("pr",1405);
echo "<br/>";
echo date("d/m/y");
echo "<br/>";
echo date("D/M/Y");
echo "<br/>";
echo rand();
?>