<?php
function ubah_huruf($string){
    //kode di sini
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';

    $array_temp = [];
    for($i = 0; $i < strlen($string); $i++) {
        for($j = 0; $j < strlen($alphabet); $j++) {
            if($string[$i] == $alphabet[$j]) {
                array_push($array_temp, $j);
            }
        }
    }

    $index_temp = [];
    for($i = 0; $i < count($array_temp); $i++) {
        array_push($index_temp, $array_temp[$i] + 1);
    }


    $temp = [];
    for($i = 0; $i < count($index_temp); $i++) {
        if($index_temp[$i] == 26) {
            array_push($temp, $alphabet[0]);
        } else {
            for($j = 0; $j < strlen($alphabet); $j++) {
                if($index_temp[$i] == $j) {
                    array_push($temp, $alphabet[$j]);
                }
            }
        }
    }

    return implode("", $temp) . "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu
?>
