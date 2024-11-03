<?php

$users=[
     [1,"Prantha Debonath",194056],
     [2,"Sajib Debnath",194019],
     [3,"Taposh Biswas",194024],
];
    echo "<br/>";
    echo "<pre>";
    print_r( $users );
    echo "<pre>";
    echo "<br/>"; echo "<br/>";

    for($i=0;$i<count($users);$i++){
        for( $j= 0;$j<count($users[$i]);$j++){
        echo $users[$i][$j];
         echo "<br/>";
        }
    }
    

?>