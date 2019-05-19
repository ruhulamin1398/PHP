<?php

$name=array(
    "a" =>"red",
    "b" =>"green",
    "c" =>"blue",
    "d" =>"black",
    "a" =>"red",
    "b" =>"green",
    "c" =>"blue",
    "d" =>"black",
    "a" =>"red",
    "b" =>"green",
    "c" =>"blue",
    "d" =>"black",
    "g" =>"purple",
    "y" =>"yellow"
);




$result=array_unique($name);

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
        [y] => yellow
    )

*/


///////////////////////////////////////////////////







?>