<?php 
    // Have the function SecondGreatLow(arr)
    // take the array of numbers stored in arr and return the second lowest
    // and second greatest numbers, respectively, separated by a space.
    // For example: if arr contains [7, 7, 12, 98, 106] the output should
    // be 12 98. The array will not be empty and will contain at least 2
    // numbers. It can get tricky if there's just two numbers!

    function SecondGreatLow($arr)
    {
        $return = [];
        $u_arr = array_unique($arr);
        if (count($u_arr) < 2) {
            $u_arr = $arr;
        }
        
        // second lowest
        sort($u_arr);
        $return[] = $u_arr[1];

        // second greatest
        rsort($u_arr);
        $return[] = $u_arr[1];


        print_r($u_arr);
        return implode(" ", $return);
    }


    $arr = [7, 7, 12, 98, 106];
    // $arr = [20, 10];
    // $arr = [10, 10];
    echo SecondGreatLow($arr);
