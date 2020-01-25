<?php


$std = array(
         array("Name" => "Asad","Marks" => "101"),
         array("Name" => "Raza","Marks" => "102"),
         array("Name" => "Zaviya","Marks" => "103"),
         array("Name" => "Batool","Marks" => "104"),
         array("Name" => "Ali","Marks" => "105"),
         array("Name" => "Kiyaan","Marks" => "106"),
         array("Name" => "Sarwar","Marks" => "107"),
         array("Name" => "Mehdi","Marks" => "108"),
         array("Name" => "Hassan","Marks" => "109"),
         array("Name" => "Sakina","Marks" => "1010"),      
     );
     echo "<br/>";

    
$html = "<table border>";
   $html .= "<thead><tr>";
        $html .= "<th> Name </th>";
        $html .= "<th> Marks </th>";
    $html .= "</tr></thead><tbody>";


foreach($std as $key => $b){
    $html .= "<tr>";
        $html .= "<td>"  .$b["Name"]. "</td>";
        $html .= "<td>"  .$b["Marks"]. "</td>";
    $html .= "</tr>";
}
$html .= "</tbody></table>";
echo $html;


?>















