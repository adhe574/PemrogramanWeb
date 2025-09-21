<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf : C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer. <br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);    
}
echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah : $totalSkor <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai : $nilai (Tidak Lulus) <br>";
        continue;
    } 
        echo "Nilai : $nilai (Lulus) <br>";
}

$daftarNilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($daftarNilai);
$jumlahSiswa = count($daftarNilai) - 4;
$totalNilai = 0;
for ($i = 2; $i < count ($daftarNilai); $i++) {
    $totalNilai += $daftarNilai[$i];
}

$rataRataNilai = $totalNilai / $jumlahSiswa;

echo "Total nilai setelah menghapus dua nilai tertinggi dan dua nilai terendah adalah : $totalNilai <br>";
echo "Rata-rata nilai setelah menghapus dua nilai tertinggi dan dua nilai terendah adalah : $rataRataNilai <br>";

$harga = 120000;
$diskon = 0;

if ($harga > 100000) {
    $diskon = 0.2 * $harga;
}

$hargaSetelahDiskon = $harga - $diskon;
echo "Harga setelah diskon adalah : $hargaSetelahDiskon <br>";

$poin = 510;

echo "Skor pemain adalah : $poin <br>";
$hadiah = ($poin > 500) ? "Ya" : "Tidak";
echo "Apakah pemain mendapatkan hadiah? $hadiah <br>";
?>