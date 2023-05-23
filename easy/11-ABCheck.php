<?php 
    # Have the function ABCheck(str) take the str parameter being passed and return
    # the string true if the characters a and b are separated by exactly 3 places
    # anywhere in the string at least once (ie. "lane borrowed" would result in
    # true because there is exactly three characters between a and b). Otherwise
    # return the string false.

    function ABCheck($str)
    {
        $pattern = '/[aA].{3}[bB]|[aB].{3}[aA]/'; // Regular expression pattern
        return preg_match($pattern, $str) ? "true" : "false";
    }

    $str = "Praesent et finibus guardião. Sed condição nunc lectus, hend rerit";
    $str = "123456789 98765432";
    $str = "lAne borrowed";
    echo ABCheck($str);
?>


<script>
    
    (function () {
        function ABCheck(str) {
            var pattern = /[aA].{3}[bB]|[aB].{3}[aA]/; // Regular expression pattern
            return pattern.test(str) ? "true" : "false";
        }

        // Test cases
        console.log(ABCheck("lane borrowed")); // Output: true
        console.log(ABCheck("abcde")); // Output: false
        console.log(ABCheck("a b")); // Output: false
    }());
</script>