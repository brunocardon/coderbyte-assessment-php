<?php 
    // Have the function CountingMinutesI(str) take the str
    // parameter being passed which will be two times (each properly formatted with a
    // colon and am or pm) separated by a hyphen and return the total number of minutes
    // between the two times. The time will be in a 12 hour clock format.
    // For example: if str is 9:00am-10:00am then the output should be 60.
    // If str is 1:00pm-11:00am the output should be 1320.

    function CountingMinutesI($str)
    {
        $minutes = 0;
        $times = explode("-", $str);

        $h1 = strtotime($times[0]); // 1:00pm
        $h2 = strtotime($times[1]); // 11:00am
        $h2 = $h2 <= $h1 ? ( $h2 + (24*60*60) ) : $h2;
        $minutes = ($h2 - $h1) / 60;
        
        return print_r($minutes, true);
    }


    $str = "9:00am-10:00am"; // 60
    // $str = "1:00pm-11:00am"; // 1320
    // $str = "1:32pm-11:47am"; // 1335
    echo CountingMinutesI($str);
