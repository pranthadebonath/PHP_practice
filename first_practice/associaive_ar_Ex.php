<?php
$user =["Prantha","Sajib","Taposh","Bissajit"];
$userDetails=[
    "Name"=> "Prantha Debonath",
    "Age"=>30,                                        
    "City"=>"Dhaka",
    "State"=>"Dhaka"
];

foreach($userDetails as $key=>$data)
{
    echo $key." is ".$data;
    echo "<br/>";
}
echo "<br/>";
echo "Another Syntext <br/>";
foreach($userDetails as $key=>$data):
    echo $key." is ".$data;
    echo "<br/>";
endforeach

?>