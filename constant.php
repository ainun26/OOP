<?php 

// define('NAME', 'Ainun Nadifah');
// echo NAME;

// echo "<br>";

// const UMUR = 16;
// echo UMUR;

// echo "<br>";

// class Coba{
// 	const SEKOLAH = 'SMK N 1 PADAHERANG';
// }

// echo Coba::SEKOLAH;

echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo __LINE__;

echo "<br><hr>";
function coba() {
	return __FUNCTION__;
}

echo coba();
echo "<br><hr>";

class Coba{
	public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;



?>