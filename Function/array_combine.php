<?php

$name= array("Ruhu","jasim","lisan");
$department=array("CSE","EEE","CIVIL");

$combinedArray= array_combine($name,$department);



echo "<pre>";
print_r($combinedArray);
echo "</pre>";



/*
output:
     Array
        (
            [Ruhu] => CSE
            [jasim] => EEE
            [lisan] => CIVIL
        )
*/

?>