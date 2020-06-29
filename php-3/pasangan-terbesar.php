<?php
function pasangan_terbesar($angka){
// kode di sini
    $angka_huruf = strval($angka);

    $pasangan_angka = [];
    for($i = 0; $i < strlen($angka_huruf) - 1; $i++) {
        $temp = $angka_huruf[$i] . $angka_huruf[$i + 1];
        array_push($pasangan_angka, $temp);
    }

    $pasangan_max = 0;
    for($i = 0; $i < count($pasangan_angka); $i++) {
        if($pasangan_max > (int)$pasangan_angka[$i]) {
            $pasangan_max = $pasangan_max;
        } else {
            $pasangan_max = (int)$pasangan_angka[$i];
        }
    }

    return $pasangan_max . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>