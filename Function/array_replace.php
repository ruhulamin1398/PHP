<?php

$name=array(
    "a" =>"red",
    "b" =>"green",
    "c" =>"blue"
);
$name2=array(
    "d" =>"black",
    "g" =>"purple",
    "y" =>"yellow"
);


///if same value replace with last value , 

$result=array_replace($name,$name2);

echo "<pre>";
print_r($result);
echo "</pre>";





/*
output:


        Array
        (
            [a] => red
            [b] => green
            [c] => blue
            [d] => black
            [g] => purple
            [y2] => yellow
        )


*/


///////////////////////////////////////////////////







?>