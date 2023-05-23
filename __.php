<?php

    // $str = "Praesent et finibus guardião. Sed condição nunc lectus, hend rerit";
    // echo preg_replace();

    // var_dump(mb_strtoupper("ã"));
    // $string = "coraçÃo verdão";
    // $result = preg_replace('/[aeiouáéíóúàèìòùâêîôûãõäëïöüç]/iu', '1', $string);

    // echo $result;  // Output: c1r1çã1õ v1rdã1

    

    // print_r();
    // implode(',', $vow);

    // var_dump(array_reduce($vow, function($car, $item){
    //     if () {

    //     }
    //     return false;
    // }, false));
    function ppVow($str)
    {
        $return = '--';
        $vow = [
            "a" => ["a", "á", "à", "â", "ã", "ä"],
            "e" => ["e", "é", "è", "ê", "ë"],
            "i" => ["i", "í", "ì", "î", "ï"],
            "o" => ["o", "ó", "ò", "ô", "õ", "ö"],
            "u" => ["u", "ú", "ù", "û", "ü"],
        ];

        $return = array_reduce($vow, function($car, $item) use($str){
            if (in_array($str, $item)) {
                return $item[0];
            }
            return $car;
        }, false);

        return $return;
    }

    function a_ppVow($str)
    {
        $return = '--';
        $return = preg_replace(["/[aáàâãä]/iu", "/[eéèêë]/iu", "/[iíìîï]/iu", "/[oóòôõö]/iu", "/[uúùûü]/iu"], ["a", "e", "i", "o", "u"], $str);
        // preg_replace('/[aeiouáéíóúàèìòùâêîôûãõäëïöüç]/iu', '1', $string);

        return $return;
    }

    echo a_ppVow("Coração");

    var_dump("Ç" == "Ç");