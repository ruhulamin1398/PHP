<?php

$name= array("Ruhu","jasim","lisan","jasim","jasim","jasim","jasim","jasim","jasim","jasim","jasim","jasim","jasim","jasim","lisan","jasim","lisan","jasim","lisan","lisan","jasim","lisan","jasim","lisan","lisan","jasim","lisan","jasim","lisan","jasim","lisan");




echo "<pre>";
print_r(array_count_values($name));
echo "</pre>";



/*
output:
        Array
        (
            [Ruhu] => 1
            [jasim] => 19
            [lisan] => 11
        )
*/

?>