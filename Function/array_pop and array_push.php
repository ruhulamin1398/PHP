<?php

$name=array(
    "red",
    "green",
    "blue",
    "green",
    "blue",
    "green",
    "blue",
    "green",
    "blue"
);



echo "<pre>";
print_r($name);
echo "</pre>";

array_pop($name);
echo "<pre>";
print_r($name);
echo "</pre>";

array_push($name,"skyBlue","blue");
echo "<pre>";
print_r($name);
echo "</pre>";



/*
    OUTPUT


            Array
        (
            [0] => red
            [1] => green
            [2] => blue
            [3] => green
            [4] => blue
            [5] => green
            [6] => blue
            [7] => green
            [8] => blue
        )

        Array
        (
            [0] => red
            [1] => green
            [2] => blue
            [3] => green
            [4] => blue
            [5] => green
            [6] => blue
            [7] => green
        )

        Array
        (
            [0] => red
            [1] => green
            [2] => blue
            [3] => green
            [4] => blue
            [5] => green
            [6] => blue
            [7] => green
            [8] => skyBlue
            [9] => blue
        )





*/

?>