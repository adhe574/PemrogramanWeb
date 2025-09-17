<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: $a + $b = $hasilTambah <br>";
echo "Hasil Pengurangan: $a - $b = $hasilKurang <br>";
echo "Hasil Perkalian: $a * $b = $hasilKali <br>";
echo "Hasil Pembagian: $a / $b = $hasilBagi <br>";
echo "Sisa Hasil Bagi: $a % $b = $sisaBagi <br>";
echo "Hasil Pangkat: $a ** $b = $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSamaDengan = $a <= $b;
$hasilLebihBesarSamaDengan = $a >= $b;

echo "<br> Hasil a == b : ";
var_dump($hasilSama);
echo "<br> Hasil a != b : ";
var_dump($hasilTidakSama);
echo "<br> Hasil a < b : ";
var_dump($hasilLebihKecil);
echo "<br> Hasil a > b : ";
var_dump($hasilLebihBesar);
echo "<br> Hasil a <= b : ";
var_dump($hasilLebihKecilSamaDengan);
echo "<br> Hasil a >= b : ";
var_dump($hasilLebihBesarSamaDengan);
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br> Hasil a && b : ";
var_dump($hasilAnd);
echo "<br> Hasil a || b : ";
var_dump($hasilOr);
echo "<br> Hasil !a : ";
var_dump($hasilNotA);
echo "<br> Hasil !b : ";
var_dump($hasilNotB);
echo "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "<br> Hasil a += b : $a";
echo "<br> Hasil a -= b : $a";
echo "<br> Hasil a *= b : $a";
echo "<br> Hasil a /= b : $a";
echo "<br> Hasil a %= b : $a";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br> Hasil a === b : ";
var_dump($hasilIdentik);
echo "<br> Hasil a !== b : ";
var_dump($hasilTidakIdentik);
echo "<br><br>";

$total_kursi = 45;
$kursi_terisi = 28;

$kursi_kosong = $total_kursi - $kursi_terisi;

$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

echo "Total kursi: $total_kursi<br>";
echo "Kursi terisi: $kursi_terisi<br>";
echo "Kursi kosong: $kursi_kosong<br>";
echo "Persentase kursi kosong: " . round($persentase_kosong, 2) . "%";
echo "<br>";

?>