<?php

function myfunction($value){
    return ($value+$value);
}


$arr= array(1,2,3,4,5,6,7,89,0,2,33,33,4,444);
$result= array_map("myfunction",$arr);



echo "<pre>";
print_r($result);
echo "</pre>";


/*
OUTPUT

        Array
        (
            [0] => 2
            [1] => 4
            [2] => 6
            [3] => 8
            [4] => 10
            [5] => 12
            [6] => 14
            [7] => 178
            [8] => 0
            [9] => 4
            [10] => 66
            [11] => 66
            [12] => 8
            [13] => 888
        )


*/





?>