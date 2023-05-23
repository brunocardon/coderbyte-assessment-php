<?php 
    // Have the function DashInsert(num) insert dashes
    // ('-') between each two odd numbers in num. For example: if num is
    // 454793 the output should be 4547-9-3. Don't count zero as
    // an odd number.


    function DashInsert($num)
    {
        // odd = impar
        $return = "";
        $a_num = str_split((string)$num);
        
        foreach ($a_num as $k => $item) {
            if (!array_key_exists($k-1, $a_num)) {
                $return .= $item;
                continue;
            }

            if (!($item % 2)) {
                $return .= $item;
                continue;
            }

            if ($a_num[$k-1] % 2) {
                $return .= "-".$item;
                continue;
            }
            
            $return .= $item;
        }
        
        return $return;
    }

    $num = 454793;
    $num = 445577;
    echo DashInsert($num);
