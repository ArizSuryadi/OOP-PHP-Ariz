<?php 

//define('NAMA', 'Ariz');
//echo NAMA;

//echo "<br>";

//const UMUR = 17;
//echo UMUR;

//class Coba {
// const NAMA = 'Ariz';
//}

//echo Coba::NAMA;

// FUNCTION Coba() {
//	return __FUNCTION__;
//}

//echo coba();

class Coba {
	public $kelas = __CLASS__;

}

$obj = new Coba;
echo $obj->kelas;
