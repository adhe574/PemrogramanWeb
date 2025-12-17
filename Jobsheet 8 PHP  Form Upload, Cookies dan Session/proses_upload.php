<?php
$targetDirectory = "documents/"; // Direktori tujuan penyimpanan file unggahan

if (!file_exists($targetDirectory)) {        // Membuat direktori jika belum ada
    mkdir($targetDirectory, 0777, true);
}

if (!empty($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");    // Ekstensi file yang diizinkan
    $maxsize = 5 * 1024 * 1024; // Ukuran maksimum file (5MB)

    for($i = 0; $i < $totalFiles; $i++) {          // Looping untuk setiap file yang diunggah
        $fileName = $_FILES['files']['name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileTmp = $_FILES['files']['tmp_name'][$i];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . $fileName;

        if (in_array($fileType, $allowedExtensions) && $fileSize < $maxsize) {      // Validasi ekstensi dan ukuran file
            if (move_uploaded_file($fileTmp, $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
            echo "File $fileName tidak valid (bukan berupa gambar dan melebihi 5MB.<br>";
        }
    }

} else { 
    echo "Tidak ada file yang diunggah.";
}
?>