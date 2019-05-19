<?php

$array_one=array(
    "a" =>"red",
    "b" =>"green",
    "c" =>"blue",
    "d" =>"black",
    "g" =>"purple"
);

$array_two=array(
    "a" =>"red",
    "b" =>"green",
    "y" =>"yellow"
);

$array_three=array(
    "a" =>"red",
    "b" =>"green",
    "d" =>"black"
);

///conpare with only first array ( ck only value )
$differ=array_diff($array_one,$array_two,$array_three);


echo "<pre>";
print_r($differ);
echo "</pre>";



/*
output:

    Array
    (
        [c] => blue
        [g] => purple
    )



*/

?>