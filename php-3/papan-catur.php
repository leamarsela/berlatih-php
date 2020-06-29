<?php

function papan_catur($angka) {
// tulis kode di sini

    $papan = '';
    for($i = 0; $i < ($angka); $i++) {
        for($j = 0; $j < (2 * $angka) - 1; $j++) {
            if($j % 2 == 0) {
                if($i % 2 == 0) {
                    $papan .= '#';
                } else {
                    $papan .= '&nbsp';
                }
            } else {
                if($i % 2 != 0) {
                    $papan .= '#';
                } else {
                    $papan .= '&nbsp';
                }
            }
        }
        $papan .= "<br>";
    }

    return $papan . "<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/