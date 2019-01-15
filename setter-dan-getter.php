<?php 

class produk{
   private $judul,
	       $penulis,
	       $penerbit,
	       $harga,
	       $diskon=0;

	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga= 0) {
		$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;
	}

	public function setDiskon($diskon){
    	$this->diskon=$diskon;
	}

	public function getDiskon(){
		return $this->diskon;
	}

	public function setjudul($judul){
		$this->judul= $judul;
	}

	public function getjudul(){
		return $this->judul;
	}

	public function setpenulis($penulis){
		$this->penulis= $penulis;
	}

	public function getpenulisl(){
		return $this->penulis;
	}

	public function setpenerbit($penerbit){
		$this->penerbit= $penerbit;
	}

	public function getpenerbit(){
		return $this->penerbit;
	}

    public function getLabel(){
    	return"$this->penulis,$this->penerbit";
    }

	public function getharga(){
		return $this->harga - ($this->harga * $this->diskon/100);
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

echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getharga();
echo "<hr>";


echo $produk1->getjudul();
