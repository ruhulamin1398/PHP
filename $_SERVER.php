<?php 

/// print file path
    echo $_SERVER['PHP_SELF'];
    ///OUTPUT  /github/PHP/$_SERVER.php

    echo "<br>"; 
    /// same as php self 
    echo $_SERVER['SCRIPT_NAME'];
    //output    /github/PHP/$_SERVER.php

    echo "<br>"; 
    echo $_SERVER['SERVER_NAME'];
    //output    localhost

    echo "<br>";

    // BROWSER
    echo $_SERVER['HTTP_USER_AGENT'];
    // output   Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36

    echo "<br>";  
    // IP ADDRESS
    echo $_SERVER['SERVER_ADDR'];
    //output    127.0.0.1
    echo "<br>"; 
    


?>