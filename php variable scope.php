<?php
$x=15; 
test();
function test(){
    global $x;
    echo $x;
}


?>