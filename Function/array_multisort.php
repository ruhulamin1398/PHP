<?php

$name=array(
    "red",
    "green",
    "blue"
);
$name2=array(
    "black",
    "purple",
    "yellow"
);

///You can use it for only one array or multiple array
array_multisort($name,SORT_ASC,$name2,SORT_DESC);

echo "<pre>";
print_r($name);
echo "</pre>";

echo "<pre>";
print_r($name2);
echo "</pre>";


/*
    OUTPUT


            
            Array
        (
            [0] => blue
            [1] => green
            [2] => red
        )

        Array
        (
            [0] => yellow
            [1] => purple
            [2] => black
        )


    */





/*
output:




*/

?>