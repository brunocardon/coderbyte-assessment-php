<?php 
    // Have the function MeanMode(arr) take the array
    // of numbers stored in arr and return 1 if the mode equals the mean, 0 if
    // they don't equal each other (ie. [5, 3, 3, 3, 1] should return 1
    // because the mode (3) equals the mean (3)). 
    // * The array will not be empty, 
    // * will only contain positive integers, 
    // * and will not contain more than one mode.


    function MeanMode($arr)
    {
        $mode = array_count_values($arr);
        arsort($mode);
        $mode = array_key_first($mode);

        $mean = array_sum($arr) / count($arr);

        return $mode == $mean ? "1" : "0";
    }

    $arr = [5, 3, 3, 3, 1]; // true
    $arr = [4, 4, 4, 6, 2]; // true
    $arr = [1,2,3]; // false
    echo MeanMode($arr);
