<?php


function hitung($string_data) 
{

    if(preg_match("/\*/", $string_data)) {
        $data = explode("*", $string_data);
        return $data[0] * $data[1] . "<br>";
    } elseif (preg_match("/\:/", $string_data)) {
        $data = explode(":", $string_data);
        return $data[0] / $data[1] . "<br>";   
    } elseif (preg_match("/\+/", $string_data)) {
        $data = explode("+", $string_data);
        return $data[0] + $data[1] . "<br>";
    } elseif (preg_match("/\-/", $string_data)) {
        $data = explode("-", $string_data);
        return $data[0] - $data[1] . "<br>";
    } elseif (preg_match("/\%/", $string_data)) {
        $data = explode("%", $string_data);
        return $data[0] % $data[1] . "<br>";
    }

}

echo hitung("102*2");
echo hitung("2+3");
echo hitung("100:25");
echo hitung("10%2");
echo hitung("99-2");

?>