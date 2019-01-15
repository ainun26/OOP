<?php 


// Jualan produk
//komik
//Game

class produk{
	public $judul="Judul",
	       $penulis= "Penulis",
	       $penerbit="penerbit",
	       $harga=0;

	public function __construct($judul,$penulis,$penerbit,$harga) {
		$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;
	}

    public function getLabel(){
    	return"$this->penulis,$this->penerbit";
    }
}

class cetakinfoproduk{
	public function cetak(produk $produk ){
		$str="{$produk->judul} | {$produk->getLabel()} ($produk->harga)";
		return"$str";
	}
}

$produk1 = new produk("Naruto","Masashi Kishimoto","Sonen Jump",30000);

$produk2 = new produk("Uncharted","Neil Druckmann","Sony Computer",250000);

echo "Komik : ".$produk1->getLabel();
echo "<br>";
echo "Game : ".$produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk;
echo $infoProduk1->cetak($produk1);
