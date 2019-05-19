<?php

$name=array(
    "a" =>"red",
    "b" =>"green",
    "c" =>"blue",
    "d" =>"black",
    "g" =>"purple",
    "y" =>"yellow"
);


///if same value replace with last value , 

$result=array_reverse($name);

echo "<pre>";
print_r($result);
echo "</pre>";





/*
output:



        Array
        (
            [y] => yellow
            [g] => purple
            [d] => black
            [c] => blue
            [b] => green
            [a] => red
        )


*/


///////////////////////////////////////////////////







?>