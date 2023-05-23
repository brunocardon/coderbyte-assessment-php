<?php 
    // Have the function LetterCountI(str) take the str
    // parameter being passed and return the first word with the greatest number
    // of repeated letters. For example: "Today, is the greatest day ever!"
    // should return greatest because it has 2 e's (and 2 t's) and it comes
    // before ever which also has 2 e's. If there are no words with repeating
    // letters return -1. Words will be separated by spaces.

    function LetterCountI($str)
    {
        $str = preg_replace("#[[:punct:]]#", "", $str);
        $str = explode(" ", $str);
        $word = "-1";
        
        $str = array_filter($str, function($v, $k){
            $ltrs = array_count_values(str_split($v));

            if (max($ltrs) < 2) {
                return false;
            }

            return true;
        }, ARRAY_FILTER_USE_BOTH);

        if (!$str) {
            return $word;
        }

        $rank = 0;
        foreach ($str as $item) {
            $ltrs = array_reduce(array_count_values(str_split($item)), function ($car, $item) {
                return $car+($item > 1?1:0);
            }, 0);
            
            if ($ltrs > $rank) {
                $rank = $ltrs;
                $word = $item;
            }
        }
        
        return $word;
    }


    $str = "Today, is the greatest day ever!"; // greatest
    $str = "Today, is the greatest day ever!"; // greatest
    $str = "Today, is the day ever loop!"; // ever
    echo LetterCountI($str);
