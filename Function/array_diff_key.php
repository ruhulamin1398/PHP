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
    "y" =>"blue"
);

$array_three=array(
    "va" =>"red",
    "b" =>"green",
    "d" =>"black"
);
///conpare with only first array( ck only key  )
$differ=array_diff($array_one,$array_two,$array_three);


echo "<pre>";
print_r($differ);
echo "</pre>";



/*
output:

Array
(
    [ac] => blue
    [ga] => purple
)


*/

?>