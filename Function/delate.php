<?php

$array_one=array(
    "a" =>"red",
    "b" =>"green",
    "c" =>"blue",
    "d" =>"black",
    "g" =>"purple",
    "y2" =>"yellow"
);

$array_two=array(
    "a" =>"red",
    "dd" =>"black",
    "g" =>"2green",
    "g" =>"2green",
    "c" =>"yellow"
);

$array_three=array(
    "a" =>"red",
    "c" =>"black",
    "b" =>"green",
    "y" =>"yellow"
);


///conpare with only first array ( ck only value  !! need to be same in all array  )
$same=array_intersect_key($array_one,$array_two);


echo "<pre>";
print_r($same);
echo "</pre>";



/*
output:

        Array
        (
            [a] => red
            [c] => blue
        )

*/

?>