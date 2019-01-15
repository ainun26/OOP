<?php 


// Jualan produk
//komik
//Game

class produk{
	public $judul="Judul",
	       $penulis= "Penulis",
	       $penerbit="penerbit",
	       $harga=0;

    public function getLabel(){
    	return"$this->penulis,$this->penerbit";
    }
}

//$produk1 = new produk();
//$produk1->judul="Tsurezure";
//var_dump($produk1);

//$produk2 = new produk();
//$produk2->judul="Hyouka";
//$produk2->Tambahproperty="wkwkLand";
//var_dump($produk2);

$produk3 = new produk();
$produk3->judul="Naruto";
$produk3->penulis="Masashi Kishimoto";
$produk3->penerbit="Sonen Jump";
$produk3->harga=30000;

$produk4 = new produk();
$produk4->judul="Uncharted";
$produk4->penulis="Neil Druckmann";
$produk4->penerbit="Sony Computer";
$produk4->harga=250000;

echo "Komik : ".$produk3->getLabel();
echo "<br>";
echo "Game : ".$produk4->getLabel();
