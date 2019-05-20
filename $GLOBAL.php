<?php
$x=5;
$y =6;
function test(){
    $GLOBALS['asz']=$GLOBALS['x']+$GLOBALS['x'];

    echo $GLOBALS['asz']."<br>";
}

test();
echo $asz+5;





/* output
10
15


*/

?>