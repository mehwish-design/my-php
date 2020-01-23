<?php
$table = $_POST['table'];
if(isset($_POST['table'])){
    if($table >= 1 && $table <=20){
        for($x = 1; $x <=10; $x++){
            echo "$table x $x = " . $table*$x . "<br>";
        }
    }
    else{
        echo "Type Number";
    }
}
?>

<form method = "post">
<label> Enter Number </label>
<input type = "text" name = "table">
<input type = "submit" value = "send">