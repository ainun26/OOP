<?php 

// require_once 'produk/InfoProduk.php';
// require_once 'produk/produk.php';
// require_once 'produk/Komik.php';
// require_once 'produk/Game.php';
// require_once 'produk/cetakinfoproduk.php';


spl_autoload_register( function( $class ) {
	require_once 'produk/' .$class . '.php' ;
});