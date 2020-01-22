<?php
$emp = [
    ["1","Asad","80","65","69","55","70"],
    ["2","Raza","70","75","65","60","77"],
    ["3","Zaviya","60","45","80","65","66"],
    ["4","Ali Kiyaan","65","30","60","45","85"],
    ["5","Sarwar","80","45","84","77","64"],
    ["6","Mohammad","70","55","62","55","80"],
  ];
   echo "<table border='2px' cellpadding='5px' cellpading='0px'>";
   echo "<tr> 
             <th> S.NO </th>
             <th> NAME </th>
             <th> MATHS </th>
             <th> URDU </th>
             <th> GEOGRAPHY </th>
             <th> ENGLISH </th>
             <th> PHYSICS </th>
        </tr>";
        
   foreach($emp as $v1){
       echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2</td>";
    }
    echo "</tr>";
}
echo "</table>"


?>
