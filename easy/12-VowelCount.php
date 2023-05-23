<?php 
    # Have the function VowelCount(str) take the str string parameter being passed and return the number of vowels the string contains 
    # (ie. "All cows eat grass" would return 5). 
    # Do not count y as a vowel for this challenge.  



    function VowelCount($str)
    {
        $str = strtolower($str);
        preg_match_all("/[aeiou]/", $str, $m);
        return count($m[0]);
    }

    $str = "Bruno Roberto Cardon"; // 7
    $str = "All cows eat grass"; // 5
    echo VowelCount($str);
