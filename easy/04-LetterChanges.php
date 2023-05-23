<?php 
    # Have the function LetterChanges(str) take the str parameter being passed and modify it using the following algorithm.
    # Replace every letter in the string with the letter following it in the alphabet (ie. c becomes d, z becomes a). 
    # Then capitalize every vowel in this new string (a, e, i, o, u) and finally return this modified string.

    function LetterChanges($str)
    {
        $str = str_split($str);
        $v = str_split("aeiou");
        $zbc = range("b", "z");
        $zbc[] = "a";
        $abc = array_combine(range("a", "z"), $zbc);
        
        $return = array_map(function ($item) use ($abc, $v) {
            if (!array_key_exists(strtolower($item), $abc)) {
                return $item;
            }
            if (in_array($abc[strtolower($item)], $v)) {
                return strtoupper($abc[strtolower($item)]);
            }
            return ctype_upper($item) ? strtoupper($abc[strtolower($item)]) : $abc[strtolower($item)];
        }, $str);
        
        return implode('', $return);
    }

    $str = "Abdef Hijno Ptu Vz";
    echo LetterChanges($str);
