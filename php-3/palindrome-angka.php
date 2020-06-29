<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  $status = true;

  $i = $angka;
  while($status) {
      $i++;

      if(strlen(strval($i)) == 1) {
        
        return $i . "<br>";
        break;

      } else {
          $angkabaru = '';

          for($j = strlen(strval($i)) - 1; $j >= 0; $j--) {
              $angkabaru .= strval($i)[$j];
          }

          if($angkabaru == strval($i)) {
            return $i . "<br>";
            break;
          }
      }
  }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>