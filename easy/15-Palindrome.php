<?php 
    # Have the function Palindrome(str) take the str parameter being passed 
    # and return the string true if the parameter is a palindrome, (the string is the same forward as it is backward) 
    # otherwise return the string false. For example: "racecar" is also "racecar" backwards. Punctuation and numbers will not be part of the string.   


    function Palindrome($str)
    {
        $str = strtolower($str);
        $str = str_replace(" ", "", $str);
        return $str == strrev($str) ? "true" : "false";
    }

    $str = "Bruno"; // false
    $str = "Socorram me subi no onibus em marrocos"; // true
    // $str = "racecar"; // true
    echo Palindrome($str);
