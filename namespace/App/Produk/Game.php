<?php 
class Game extends produk implements InfoProduk {
	public $waktuMain;

	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga= 0 ,$waktuMain= 0){
		parent::__construct($judul,$penulis,$penerbit,$harga);

		$this->waktuMain=$waktuMain;
	}

	public function getinfo() {
    	$str="{$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) ";
    	return $str;
    }

	
	public function getinfoproduk(){
		$str="Game : ". $this->getinfo() . " ~ {$this->waktuMain} Jam. ";
		return$str;
	}

}