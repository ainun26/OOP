<?php 
require_once 'App/init.php';

$produk1 = new komik("Naruto","Masashi Kishimoto","Sonen Jump",30000 , 100);

$produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer",250000, 50 );

$cetakproduk = new cetakinfoproduk();
$cetakproduk->tambahProduk($produk1);
$cetakproduk->tambahProduk($produk2);
echo $cetakproduk->cetak();

echo "<hr>";

new Coba();