<html>
    <head>
        <title>
            table
        </title>
    </head>
    <body>
        <h3>Simple Table</h3>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Roll</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Prantha Debonath</td>
                <td>194056</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Sajib Debnath</td>
                <td>194019</td>
            </tr>
        </table>
    </body>
</html>

<?php

$users=[
    [1,"Prantha Debonath",194056],
    [2,"Sajib Debnath",194019],
    [3,"Taposh Biswas",194024],
    [4,"Bissajit Kumar",194028],
    [5,"Prodip",194086]
];
echo "</br>";
echo "Table by loop in multi_dimentional array";
echo "</br>";
echo "</br>";
echo "<table border=1>";
for ($i = 0; $i < count($users); $i++) {   
    echo "<tr>"; 
    for( $j = 0; $j < count($users[$i]); $j++) {
    echo "<td>";
    echo $users[$i][$j]."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>