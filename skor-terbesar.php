<?php
function skor_terbesar($arr)
{
    //kode di sini
    $hasil = [];
    $kelasReactNative = [];
    $kelasReactJs = [];
    $kelasLaravel = [];

    foreach ($arr as $key => $row) {
        $nilai[$key] = $row["nilai"];
        $kelas[$key] = $row["kelas"];
    }

    array_multisort($kelas, SORT_DESC, $nilai, SORT_ASC, $arr);

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i]["kelas"] == "React Native") {
            $kelasReactNative += $arr[$i];
        }
        if ($arr[$i]["kelas"] == "React JS") {
            $kelasReactJs += $arr[$i];
        }
        if ($arr[$i]["kelas"] == "Laravel") {
            $kelasLaravel += $arr[$i];
        }
    }

    print_r($kelasReactNative);
    print_r($kelasReactJs);
    print_r($kelasLaravel);

    $hasil[] = $kelasReactNative[0];
    $hasil[] = $kelasReactJs[0];
    $hasil[] = $kelasReactNative[0];
    foreach ($hasil as $key => $data) {
        echo "Skor terbesar dari kelas " . $data["kelas"] . "";
    }
}

// TEST CASES
$skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
