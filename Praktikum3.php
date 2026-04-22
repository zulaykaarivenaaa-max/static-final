<?php

class Produk {
    // Static property untuk menghitung total produk secara global
    public static $jumlahProduk = 0;
    
    // Properti instance untuk detail produk (Tugas No. 1)
    public $namaProduk;
    public $harga;

    public function __construct($nama, $harga) {
        $this->namaProduk = $nama;
        $this->harga = $harga;
    }

    public function tambahProduk() {
        self::$jumlahProduk++;
    }

    public function tampilkanDetail() {
        echo "Produk: " . $this->namaProduk . " | Harga: Rp" . number_format($this->harga, 0, ',', '.') . "<br>";
    }
}

class Transaksi {
    // Final method: method ini tidak bisa diubah oleh class turunan (Tugas No. 4)
    final public function prosesTransaksi($produk) {
        echo "--- Memproses Transaksi ---<br>";
        echo "Membeli: " . $produk->namaProduk . "<br>";
        echo "Status: Berhasil diproses.<br>";
        echo "---------------------------<br>";
    }
}

// 2. Buat minimal 3 produk (Tugas No. 2)
$p1 = new Produk("Laptop Gaming", 15000000);
$p1->tambahProduk();

$p2 = new Produk("Mouse Wireless", 250000);
$p2->tambahProduk();

$p3 = new Produk("Keyboard Mechanical", 750000);
$p3->tambahProduk();

// Menampilkan daftar produk
echo "<h3>Daftar Produk:</h3>";
$p1->tampilkanDetail();
$p2->tampilkanDetail();
$p3->tampilkanDetail();

echo "<br>";

// 3. Tampilkan total produk (Tugas No. 3)
echo "<strong>Total Jenis Produk: " . Produk::$jumlahProduk . "</strong><br><br>";

// 4. Simulasikan transaksi (Tugas No. 4)
$transaksi = new Transaksi();
$transaksi->prosesTransaksi($p1); // Simulasi transaksi produk 1
$transaksi->prosesTransaksi($p3); // Simulasi transaksi produk 3

?>