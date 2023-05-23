<?php 
    // Have the function ArithGeo(arr) take the array of numbers stored in arr 
    // and return the string "Arithmetic" if the sequence follows an arithmetic pattern or return "Geometric" if 
    // it follows a geometric pattern. If the sequence doesn't follow either pattern return -1. An arithmetic 
    // sequence is one where the difference between each of the numbers is consistent, where as in a geometric sequence, 
    // each term after the first is multiplied by some constant or common ratio. Arithmetic example: [2, 4, 6, 8] 
    // and Geometric example: [2, 6, 18, 54]. Negative numbers may be entered as parameters, 0 will not be entered, 
    // and no array will contain all the same elements.


    function ArithGeo($arr)
    {
        $dif = $arr[1] - $arr[0];
        $ratio = $arr[1] / $arr[0];

        if ($arr[2] == ($arr[1] + $dif)) {
            return "Arithmetic";
        }

        if ($arr[2] == ($arr[1] * $ratio)) {
            return "Geometric";
        }

        return "-1";
    }


    // Arithmetic
    $arr = [2, 3, 4, 5, 6, 7, 8, 9, 10]; // 1
    $arr = [10, 20, 30]; // 10 
    $arr = [2, 0, -2, -4]; // -2
    $arr = [2, 4, 6, 8]; // 2
    
    // Geometric
    $arr = [2, 6, 18, 54];  // * 3
    $arr = [10, 100, 1000, 10000];  // * 10
    echo ArithGeo($arr);
