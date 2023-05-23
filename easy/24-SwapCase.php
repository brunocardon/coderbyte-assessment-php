<?php 
    // Have the function SwapCase(str) take the str
    // parameter and swap the case of each character. For example: if str is
    // "Hello World" the output should be hELLO wORLD. Let numbers and symbols
    // stay the way they are.


    function SwapCase($str)
    {
        return preg_replace_callback("/[a-zA-Z]/", function ($m) {
            return ctype_upper($m[0]) ? strtolower($m[0]) : strtoupper($m[0]);
        }, $str);
    }


    $str = "Hello World";
    echo SwapCase($str);