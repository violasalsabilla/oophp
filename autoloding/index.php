<?php 

require_once 'app/init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 50000, 100);

$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 150000,  50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";
new Coba();