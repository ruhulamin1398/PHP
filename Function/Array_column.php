<?php

    $name = array(

      
        array(
            "id"    =>101,
            "first_name"  =>"Ruhul",
            "last_name"  =>"Amin"
        ),
        array(
            "id"    =>102,
            "first_name"  =>"kazi",
            "last_name"  =>"arif"
        ),
        array(
            "id"    =>103,
            "first_name"  =>"Shuvo",
            "last_name"  =>"Ahmed"
        ),  
        array(
            "id"    =>104,
            "first_name"  =>"saidur",
            "last_name"  =>"Rahman"
        )
    );


$name_s=array_column($name , "first_name","id");


echo "<pre>";
print_r($name_s);
echo "</pre>";



/*
output:
        Array
        (
            [101] => Ruhul
            [102] => kazi
            [103] => Shuvo
            [104] => saidur
        )
*/

?>