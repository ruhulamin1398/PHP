<?php

$name=array(
    "a" =>"red",
    "b" =>"green",
    "c" =>"blue",
    "d" =>"black",
    "g" =>"purple",
    "y2" =>"yellow"
);


if(array_key_exists("a",$name)){
    echo ( "Exist"."<br>");
}

$name=array("Ruhul","amin","Rul");
if(array_key_exists(1,$name))
   echo "exist\n";



/*
output:


    Exist
    exist 


*/

?>