<?php 
    # Have the function ExOh(str) take the str parameter being passed and return the string true if there is an equal number of x's and o's, 
    # otherwise return the string false. Only these two letters will be entered in the string, no punctuation or numbers.
    # For example: if str is "xooxxxxooxo" then the output should return false because there are 6 x's and 5 o's.

    function ExOh($str)
    {
        $str = strtolower($str);
        preg_match_all("/x/i", $str, $mx );
        preg_match_all("/o/i", $str, $mo );

        return count($mx[0]) == count($mo[0]) ? "true" : "false";
    }

    $str = "xooxxxxooxo"; // false x=6, o=5
    // $str = "xooxxxxooxoo"; // true x=6, o=6
    echo ExOh($str);
