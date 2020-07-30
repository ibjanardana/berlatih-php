<?php
function tentukan_deret_aritmatika($arr)
{
    // kode di sini
    if (sizeof($arr) <= 1) {
        return true;
    }

    $rasio = $arr[1] / $arr[0];

    for ($i = 1; $i < sizeof($arr); $i++) {
        if (($arr[$i] / ($arr[$i - 1])) != $rasio) {
            echo "<br>";
            return "false";
        }
    }
    echo "<br>";
    return "true";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]); // true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]); // false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]); // false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
