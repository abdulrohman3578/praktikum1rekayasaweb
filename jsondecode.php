<?php
// JSON kompleks: ada nested object dan array
$jsonData = '{
    "nama": "Abdul0141",
    "umur": 25,
    "alamat": {
        "kota": "Jakarta",
        "kode_pos": 12345
    },
    "hobi": ["Membaca", "Bersepeda", "Coding"]
}';

// Decode ke PHP Object
$objectData = json_decode($jsonData);

// Decode ke PHP Array
$arrayData = json_decode($jsonData, true);

// Akses nilai dari PHP Object
echo "Dari Object:" . PHP_EOL;
echo "Nama: " . $objectData->nama . PHP_EOL;
echo "Kota: " . $objectData->alamat->kota . PHP_EOL;
echo "Hobi kedua: " . $objectData->hobi[1] . PHP_EOL;

// Akses nilai dari PHP Array
echo PHP_EOL . "Dari Array:" . PHP_EOL;
echo "Nama: " . $arrayData['nama'] . PHP_EOL;
echo "Kota: " . $arrayData['alamat']['kota'] . PHP_EOL;
echo "Hobi kedua: " . $arrayData['hobi'][1] . PHP_EOL;
?>

