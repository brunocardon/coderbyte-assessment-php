<?php 
    // Have the function DivisionStringified(num1,num2) take both
    // parameters being passed, divide num1 by num2, and return the result as a string with
    // properly formatted commas. If an answer is only 3 digits long, return the number
    // with no commas (ie. 2 / 3 should output "1"). For example: if num1 is 123456789
    // and num2 is 10000 the output should be "12,345".

    function DivisionStringified($num1, $num2)
    {
        $div = $num1 / $num2;
        $div = $div < 1000 ? round($div) : floor($div);
        $div = number_format($div, 0, ".", ",");

        return (string)$div;
    }


    $num1 = 123456789;
    $num1 = 2;
    $num2 = 10000;
    $num2 = 3;
    echo DivisionStringified($num1, $num2);
