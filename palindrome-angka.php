<?php

function palindrome($str)
{
    $output = false;
    if (strrev($str) == $str) {
        $output = true;
    }
    return $output;
}

function palindrome_angka($angka)
{
    // tulis kode di sini
    if ($angka >= 1 && $angka <= 8) {
        return $angka + 1;
    }
    if (palindrome($angka)) {
        $angka++;
    }
    while (palindrome($angka) == false) {
        $angka++;
    }
    return $angka;
}

// TEST CASES
echo "<br>" . palindrome_angka(8); // 9
echo "<br>" . palindrome_angka(117); // 121
echo "<br>" . palindrome_angka(10); // 11
echo "<br>" . palindrome_angka(175); // 181
echo "<br>" . palindrome_angka(1000); // 1001
