<?php
$users=[
    ["id"=>1,"Name"=>"Prantha Debonath","ID"=>194056],
    ["id"=> 2,"Name"=> "Sajib Debnath","ID"=> 194019],
    ["id"=> 3,"Name"=> "Taposh Biswas","ID"=> 194024],
    ["id"=> 4,"Name"=> "Prodip Chandra","ID"=> 194086],
];
echo "<table border= 1>";
foreach ($users as $user) {
    echo "<tr>";
    foreach ($user as $value) {
        echo "<td>";
             echo $value ."</td>";
    }
}
echo "</table>";

?>