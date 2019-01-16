<?php 

// define('NAMA', 'Viola Salsabilla');
// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// echo UMUR;

// class Coba {
// 	const NAMA = 'Viola Salsabilla';
// }

// echo Coba::NAMA;

// echo __LINE__;

// function Coba() {
// 	return __FUNCTION__;
// }
// echo Coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;


 ?>