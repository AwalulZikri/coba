<?php
    header("Content-Type: application/json;charset=utf-8");
    $mhsData = [
        "Nama" => "Awalul Zikri Annur",
        "NIM" => "1957301028"
    ];

    $data = json_encode($mhsData);
    echo $data;
?>