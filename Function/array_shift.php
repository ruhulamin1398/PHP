<?php

$name=array(
    "a" =>"red",
    "b" =>"green",
    "c" =>"blue",
    "d" =>"black",
    "g" =>"purple",
    "y" =>"yellow"
);



echo "before  shifted <br>";

echo "<pre>";
print_r($name);
echo "</pre>";


/// delate 1st item from array and return  delated item 
$result=array_shift($name);


echo "after shifted <br>";

echo "<pre>";
print_r($name);
echo "</pre>";

echo "<br><br><br>delated value is :  ".$result."<br><br><br>";




/*
output:

        before shifted 
        Array
        (
            [a] => red
            [b] => green
            [c] => blue
            [d] => black
            [g] => purple
            [y] => yellow
        )
        after shifted 
        Array
        (
            [b] => green
            [c] => blue
            [d] => black
            [g] => purple
            [y] => yellow
        )



        delated value is : red



*/


///////////////////////////////////////////////////







?>