<?php 
    # Have the function SimpleSymbols(str) take the str parameter being passed and determine if it is an acceptable 
    # sequence by either returning the string true or false. 
    # The str parameter will be composed of + and = symbols with several characters between them (ie. ++d+===+c++==a) 
    # and for the string to be true each letter must be surrounded by a + symbol. 
    # So the string to the left would be false. 
    # The string will not be empty and will have at least one letter.

    function SimpleSymbols($str)
    {
        $astr = str_split(strtolower($str));
        $c_astr = count($astr);

        if ($c_astr < 3) {
            return false;
        }
        
        $abc = range("a", "z");
        $return = true;
        
        for ($i=0; $i<$c_astr; $i++) {
            if (in_array($astr[$i], $abc)) {
                if (!array_key_exists($i-1, $astr) || !array_key_exists($i+1, $astr)) {
                    $return = false;
                    continue;
                }

                if (!($astr[$i-1]=="+" && $astr[$i+1]=="+")) {
                    $return = false;
                    continue;
                }
            }
        }

        return $return?'true':'false';
    }

    $str = "++d+===+c++==a"; // false
    $str = "++d+===+c++==+a+"; // true
    echo SimpleSymbols($str);
