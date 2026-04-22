<?php

class Pengunjung {
    // Static variable untuk menyimpan jumlah pengunjung secara global di level class
    public static $jumlah = 0;

    public function __construct() {
        // Mengakses static property menggunakan keyword 'self'
        self::$jumlah++;
    }

    // Penambahan Method static untuk mereset jumlah menjadi 0
    public static function reset() {
        self::$jumlah = 0;
    }
}

// 1. Membuat 5 objek sesuai instruksi (Ubah jumlah objek menjadi 5)
$p1 = new Pengunjung();
$p2 = new Pengunjung();
$p3 = new Pengunjung();
$p4 = new Pengunjung();
$p5 = new Pengunjung();

// 2. Menampilkan hasil SEBELUM di-reset
echo "Jumlah Pengunjung (Sebelum Reset): " . Pengunjung::$jumlah . "<br>";

// 3. Menjalankan method reset
Pengunjung::reset();

// 4. Menampilkan hasil SESUDAH di-reset
echo "Jumlah Pengunjung (Sesudah Reset): " . Pengunjung::$jumlah;

?>