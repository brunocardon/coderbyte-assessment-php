<?php 
    // Have the function ArrayAdditionI(arr) take the array of numbers stored in arr and return the string true if any combination 
    // of numbers in the array can be added up to equal the largest number in the array, otherwise return the string false. For example: if arr 
    // contains [4, 6, 23, 10, 1, 3] the output should return true because 4 + 6 + 10 + 3 = 23. The array will not be empty, will not contain 
    // all the same elements, and may contain negative numbers.  

    function ArrayAdditionI($arr)
    {
        rsort($arr);
        $lgst = $arr[0];
        unset($arr[0]);
        
        if (array_sum($arr) == $lgst) {
            return "true";
        }

        $sum = 0;
        foreach ($arr as $k => $j) {
            $sum = $j;
            
            foreach ($arr as $ak => $aj) {
                if ($ak == $k) {
                    continue;
                }

                $sum += $aj;

                if ($sum == $lgst) {
                    return "true";
                }
            }
        }
        
        return "false";
    }

    // true
    $arr = [4, 6, 23, 10, 1, 3];
    $arr = [3, 5, -1, 8, 12];

    //false
    // $arr = [5, 7, 16, 1, 2];
    // $arr = [1, 5, 9, 8, -8, -56, 500];
    echo ArrayAdditionI($arr);
