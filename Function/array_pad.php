<?php

$name=array(
    "red",
    "green",
    "blue"
);


///You can use it for only one array or multiple array
//   array_pad(orginal array ,totalsize willbe here - mean add in firast and + mean add in last ,"black");
$result = array_pad($name,-10,"black");
$result = array_pad($result,15,"white");

echo "<pre>";
print_r($result);
echo "</pre>";



/*
    OUTPUT


        Array
        (
            [0] => black
            [1] => black
            [2] => black
            [3] => black
            [4] => black
            [5] => black
            [6] => black
            [7] => red
            [8] => green
            [9] => blue
            [10] => white
            [11] => white
            [12] => white
            [13] => white
            [14] => white
        )

    */





/*
output:




*/

?>