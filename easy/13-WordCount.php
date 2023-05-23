<?php 
    # Have the function WordCount(str) take the str string parameter being passed and return the number of words the string contains 
    # (ie. "Never eat shredded wheat" would return 4). 
    # Words will be separated by single spaces. 


    function WordCount($str)
    {
        $str = preg_replace("#[[:punct:]]#", "", $str);
        $str = explode(" ", $str);
        return count($str);
    }

    $str = "Bruno Roberto Cardon"; // 3
    $str = "Never eat shredded wheat"; // 4
    echo WordCount($str);
