<?php

// Array
// index      0        1         2 
$produk = ["laptop", "mouse", "keyboard"];
echo $produk[0] . "<br>";
echo $produk[1] . "<br>";
echo $produk[2] . "<br>";

// Array asosiatif 
// kunci => nilai
$buah = [
    "nama" => "apel",
    "warna" => "hijau",
    "rasa" => "manis",
];

echo "nama buah" . $buah['nama'] . "<br>";
echo "warna buah" . $buah['warna'] . "<br>";
echo "rasa buah" . $buah['rasa'] . "<br>";

$produk2 = [ 
    ["nama" => "laptop", "harga" => 7000000, "stok" => 10],
    ["nama" => "mouse", "harga" => 10000000, "stok" => 5],
    ["nama" => "monitor", "harga" => 15000000, "stok" => 4],
];

echo "<h1>daftar produk</h1>";
foreach ($produk2 as $p) {
    echo "nama produk" . $p['nama'] . 
    "harga: Rp" .number_format ($p ['harga'], 0, ",", ".") . 
    ",stok" .$p ['stok'] . "<br> <hr>";
}