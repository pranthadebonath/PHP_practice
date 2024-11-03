<?php
$users=["Prantha","Sajib","taposh","Bissajit"];

echo "<pre>";
print_r($users);
echo "<pre>";


array_push($users,"Prakash", "Bilash");

echo "<pre>";
print_r($users);
echo "<pre>";

array_pop($users);

echo "<pre>";
print_r($users);
echo "<pre>";

array_splice($users,-2);

echo "<pre>";
print_r($users);
echo "<pre>";

?>