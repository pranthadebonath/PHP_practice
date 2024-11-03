<?php
include("./config_PDO.php");
$get_students= $conn->prepare("SELECT * from students");
$get_students->execute();
$students=$get_students->fetchAll();
echo "<pre>";
print_r($students);

echo "<br/>";
echo "<br/>";
echo "<table border=1>";
foreach($students as $student)
{

    echo "<tr>
   <td> ".$student['id'] ."</td>
   <td> ".$student['name'] ."</td>
   <td> ".$student['course'] ."</td>
   <td> ".$student['batch'] ."</td>
   <td> ".$student['city'] ."</td>
      </tr>";
}
echo "</table>";
?>