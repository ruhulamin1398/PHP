<?php

//// only works in Associative Array 
$name= array(
    "Ruhul" =>20,
    "Saurov" =>20,
    "Tuhin" =>20
);
echo "<pre>";
print_r(array_change_key_case($name, CASE_UPPER));
echo "</pre>";


echo "<pre>";
print_r(array_change_key_case($name, CASE_LOWER));
echo "</pre>";


?>


<?php
/*
        OUTPUT:
        Array
        (
            [RUHUL] => 20
            [SAUROV] => 20
            [TUHIN] => 20
        )
        Array
        (
            [ruhul] => 20
            [saurov] => 20
            [tuhin] => 20
        )

*/
?>