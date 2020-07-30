<?php

function papan_catur($angka)
{
    // tulis kode di sini
    for ($i = 0; $i < $angka; $i++) {
        echo "<br>";
        for ($j = 0; $j < ($angka * 2) - 1; $j++) {
            if (($i % 2 == 0 && $j % 2 == 0) || ($i % 2 == 1 && $j % 2 == 1)) {
                echo "# &nbsp;";
                // echo "<br>";
            } else {
                echo "&nbsp;";
            }
        }
    }
    echo "<br>";
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
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/