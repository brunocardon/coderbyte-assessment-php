<?php 
    # Have the function AlphabetSoup(str) take the str string parameter being passed and 
    # return the string with the letters in alphabetical order (ie. hello becomes ehllo). 
    # Assume numbers and punctuation symbols will not be included in the string.



    function AlphabetSoup($str)
    {
        $str = preg_replace("[ ]", "", $str); // remove spaces
        $str = str_split($str);
        sort($str);
        return implode("", $str);
    }

    $str = "Bruno Roberto Cardon";
    echo AlphabetSoup($str);
