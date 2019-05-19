<?php

$array_one=array(
    "a" =>"red",
    "ba" =>"green",
    "ac" =>"blue",
    "da" =>"black",
    "ga" =>"purple"
);

$array_two=array(
    "a" =>"red",
    "b" =>"green",
    "y" =>"yellow"
);

$array_three=array(
    "va" =>"red",
    "b" =>"green",
    "d" =>"black"
);
///conpare with only first array( ck key and value )
$differ=array_diff_assoc($array_one,$array_two,$array_three);


echo "<pre>";
print_r($differ);
echo "</pre>";



/*
output:

Array
(
    [ba] => green
    [ac] => blue
    [da] => black
    [ga] => purple
)


*/

?>