<?php 


// Jualan produk
//komik
//Game

class produk{
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga;

	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga= 0) {
		$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;
	}

    public function getLabel(){
    	return"$this->penulis,$this->penerbit";
    }

    public function getinfoproduk() {
    	$str="{$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) ";
    	return $str;
    }
}

class komik extends produk{
	public $jmlHalaman;

	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga= 0 ,$jmlHalaman= 0){
		parent::__construct($judul,$penulis,$penerbit,$harga);

		$this->jmlHalaman= $jmlHalaman;
	}
	public function getinfoproduk(){
		$str="Komik : ". parent::getinfoproduk() . " - {$this->jmlHalaman} Halaman. ";
		return$str;
	}
}

class Game extends produk{
	public $waktuMain;

	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga= 0 ,$waktuMain= 0){
		parent::__construct($judul,$penulis,$penerbit,$harga);

		$this->waktuMain=$waktuMain;
	}
	public function getinfoproduk(){
		$str="Game : ". parent::getinfoproduk() . " ~ {$this->waktuMain} Jam. ";
		return$str;
	}
}

class cetakinfoproduk{
	public function cetak(produk $produk ){
		$str="{$produk->judul} | {$produk->getLabel()} ($produk->harga)";
		return"$str";
	}
}

$produk1 = new komik("Naruto","Masashi Kishimoto","Sonen Jump",30000 , 100);

$produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer",250000, 50 );

// Komik : Naruto | Masashi Kishimoto,Sonen Jump (30000) - 100 Halaman.
// Game : Uncharted | Neil Druckmann,Sony Computer (250000) ~ 50 Jam.

echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();