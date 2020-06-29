<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
    $array_temp = [];
    for($i = 0; $i < count($arr) - 1; $i++) {
        $temp = $arr[$i+1] - $arr[$i];
        array_push($array_temp, $temp);
    }

    $boolean_temp = [];
    for($i = 0; $i < count($array_temp); $i++) {
        if($array_temp[0] == $array_temp[$i]) {
            array_push($boolean_temp, 'true');
        }else{
            array_push($boolean_temp, 'false');
        }
    }

    if(in_array('false', $boolean_temp)) {
        return 'false' . "<br>";
    } else {
        return 'true' . "<br>";
    }
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>