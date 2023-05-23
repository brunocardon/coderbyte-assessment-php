<?php 
    # Have the function LetterChanges(str) take the str parameter being passed and modify it using the following algorithm.
    # Replace every letter in the string with the letter following it in the alphabet (ie. c becomes d, z becomes a). 
    # Then capitalize every vowel in this new string (a, e, i, o, u) and finally return this modified string.

    function LetterChanges($str)
    {
        echo $str. "\r";

        // $str = mb_str_split($str);
        // print_r($str);

        $return = [];
        $avow = mb_str_split("aeiouáéíóúàèìòùâêîôûãõäëïöü"); // ç Ç
        $vow = [
            "a" => ["a", "á", "à", "â", "ã", "ä"],
            "e" => ["e", "é", "è", "ê", "ë"],
            "i" => ["i", "í", "ì", "î", "ï"],
            "o" => ["o", "ó", "ò", "ô", "õ", "ö"],
            "u" => ["u", "ú", "ù", "û", "ü"],
        ];
        
        $abc = range("a", "z");
        $zbc = range("b", "z");
        $zbc[] = "a";
        $abc_zbc = array_combine($abc, $zbc);
        //ctype_upper()

        // $pattern = array_map(function($ltr) use($vow){
        //     if (!array_key_exists($ltr, $vow)) {
        //         return "/[".$ltr."]/iu";
        //     }
        //     return "/[".implode('', $vow[$ltr])."]/iu";
        // }, $abc);

        $pattern = array_map(function($ltrs){
            return "/[".implode('', $ltrs)."]/u"; 
        }, $vow);

        // print_r(array_combine($abc, $pattern));
        // print_r($v_pattern);
        // print_r(array_keys($v_pattern));
        // print_r(array_values($abc_zbc));
        // print_r(array_keys($abc_zbc));

        $return[] = preg_replace_callback(array_merge($pattern, ["/[çÇ]/iu"]), function($m) use($pattern) {
            // var_dump($m);
            // ctype_upper()
            $p_keys = array_keys($pattern);
            $p_values = array_values($pattern);
            $m = implode('', $m);
            $r = preg_replace(array_merge($p_values, ["/[çÇ]/iu"]), array_merge($p_keys, ['c']), $m);
            // $r = in_array(mb_strtolower($r), $p_keys) ? mb_strtoupper($r) : $r;
            if (in_array(mb_strtolower($r), $p_keys)) {
                // return $r;
            }

            // $r =  strtoupper($m) == $m ? strtoupper($r) : $r;
            // $r = str_replace(array_keys($abc_zbc), array_values($abc_zbc), "t");
            // $r = $abc_zbc["b"];
            // $r = $abc_zbc[$r];
            // $r = $abc_zbc[strtolower($r)];
            // $r = strtolower($r);

            // echo "[".$m."]";
            // print_r(implode('-', array_keys($abc_zbc)));
            // print_r(implode('-', array_values($abc_zbc)));
            // return $m;
            return $r;
            // return "[".$r."]";
        }, $str);

        // print_r($return);

        // $return = array_map(function($ltr) use ($abc, $vow, $avow){
        //     echo $ltr ."";
        //     // return false;

        //     if (!in_array(mb_strtolower($ltr), array_merge($abc, $avow))) {
        //         return $ltr;
        //         return '['.$ltr.']';
        //     }
            

        //     return $abc[strtolower(preg_replace(["/[aáàâãä]/iu", "/[eéèêë]/iu", "/[iíìîï]/iu", "/[oóòôõö]/iu", "/[uúùûü]/iu"], ["a", "e", "i", "o", "u"], $ltr))];

        //     // var_dump(array_reduce($vow, function($car, $item) use($ltr){
        //     //     if (in_array(mb_strtolower($ltr), $item)) return $item[0];
        //     //     return $car;
        //     // }, false));

        //     // if (
        //     //     array_reduce($vow, function($car, $item) use($ltr){
        //     //         if (in_array(mb_strtolower($ltr), $item)) return $item[0];
        //     //         return $car;
        //     //     }, false)
        //     // ) {
        //     //     return mb_strtoupper($ltr);
        //     //     return "[".mb_strtoupper($ltr)."]";
        //     // }

        //     // return in_array($abc[mb_strtolower($ltr)], $vow) ? mb_strtoupper($abc[strtolower($ltr)]) : 
        //     //     (ctype_upper($ltr) ? strtoupper($abc[strtolower($ltr)]) : $abc[strtolower($ltr)]);
        // }, $str);




        echo "\r";
        return implode('', $return);
    }

    $str = "Praesent et finibus guardiÃo. Sed condiÇãoç nunc lectus, hend rerit";
    // $str = "abdef hijno ptu vz";
    echo LetterChanges($str);
