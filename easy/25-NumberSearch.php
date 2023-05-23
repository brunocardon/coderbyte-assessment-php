<?php 
    // Have the function NumberSearch(str) take the
    // str parameter, search for all the numbers in the string, add them
    // together, then return that final number. For example: if str is
    // "88Hello 3World!" the output should be 91. You will have to
    // differentiate between single digit numbers and multiple digit numbers
    // like in the example above. So "55Hello" and "5Hello 5" should return
    // two different answers. Each string will contain at least one letter
    // or symbol.


    function NumberSearch($str)
    {
        $str = preg_replace(["#[[:punct:]]#", "/[a-zA-Z]/"], ["", ""], $str);
        return array_reduce(explode(" ", $str), function ($car, $item) {
            return $car + floatval($item);
        }, 0);
    }

    $str = "88Hello 3World!"; // 91
    // $str = "55Hello"; // 55
    // $str = "5Hello 5"; // 10
    // $str = "AAA0.5"; // 5
    echo NumberSearch($str);