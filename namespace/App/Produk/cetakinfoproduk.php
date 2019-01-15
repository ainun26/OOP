<?php 

class cetakinfoproduk{
	public $daftarProduk = array();

	public function tambahProduk( produk $produk){
		$this->daftarProduk[] = $produk;
	}

	public function cetak(){
		$str="DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p) {
			$str .= "-{$p->getinfoproduk()} <br>";
		}


		return"$str";
	}
}