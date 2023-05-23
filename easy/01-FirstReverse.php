<?php 
    # Question: Have the function FirstReverse(str_) take the str parameter
    # being passed and return the string in reversed order.

    function FirstReverse($str)
    {
        $str = strrev($str);
        return $str;
    }

    $str = "Praesent et finibus guardião. Sed condição nunc lectus, hend rerit";
    $str = "123456789";
    $str = "bruno roberto";
    echo FirstReverse($str);
