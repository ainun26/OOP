<?php 
class komik extends produk implements InfoProduk {
	public $jmlHalaman;

	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga= 0 ,$jmlHalaman= 0){
		parent::__construct($judul,$penulis,$penerbit,$harga);

		$this->jmlHalaman= $jmlHalaman;
	}


    public function getinfo() {
    	$str="{$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) ";
    	return $str;
    }
	
	public function getinfoproduk(){
        $str="Komik : ". $this->getinfo() . " - {$this->jmlHalaman} Halaman. ";
		return$str;
	}
}
