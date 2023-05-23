<?php 
    # Have the function LongestWord(sen) take the sen parameter being passed and
    # return the largest word in the string. If there are two or more words that
    # are the same length, return the first word from the string with that length.
    # Ignore punctuation and assume sen will not be empty.

    function LongestWord($string) 
    {
        $string = preg_replace("/[\p{P}]/u", "", $string); 
        $wordsArray = explode(' ', $string);
        $wordsArraySmall = [];
        
        foreach ($wordsArray as $k => $j) {
            if (!array_key_exists(mb_strlen($j), $wordsArraySmall)) {
                $wordsArraySmall[mb_strlen($j)] = $j;
            }
        }

        usort($wordsArraySmall, function($a, $b) {
            return mb_strlen($a) - mb_strlen($b);
        });

        return end($wordsArraySmall);
    }
    
    // keep this function call here  
    // to see how to enter arguments in PHP scroll down

    $str = "Praesent et finibus guardião. Sed condição nunc lectus, hend rerit";
    $str = "123456789 98765432";
    echo LongestWord($str);