<?php

$car=array(
    "Volvo" =>"xc0",
    "BMW" =>"x5",
    "TOYOTA" =>"highlaner",
    "TOY" =>"highlaner"
);
$keys= array_keys($car);
echo "<pre>";
print_r($keys);
echo "</pre>";

/* output:
        Array
        (
            [0] => Volvo
            [1] => BMW
            [2] => TOYOTA
            [3] => TOY
        )

*/

$key= array_keys($car,"highlaner");
echo "<pre>";
print_r($key);
echo "</pre>";
/* output:


        Array
        (
            [0] => TOYOTA
            [1] => TOY
        )

*/
?>