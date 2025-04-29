<?php
// Membuat variabel array
$data = [
    "nama" => "Abdul0141",
    "umur" => 25,
    "pekerjaan" => "Programmer"
];

// Encode array ke format JSON
$jsonData = json_encode($data);

// Tampilkan hasil
echo $jsonData;
?>
