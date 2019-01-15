<?php 

abstract class produk{
 protected $judul,
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

	abstract public function getinfo();

}