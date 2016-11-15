<?php
//Part 14: Pengertian Final Method dan Final Class Pemrograman Objek
/*
walaupun PHP memang tidak memiliki final property, namun mari kita coba membuatnya:
*/

class komputer {
	final $merk;
}

$laptop_baru = new komputer();


// Fatal error: Cannot declare property komputer::$merk final,
// the final modifier is allowed only for methods and classes

/*
Dari hasil error yang didapat, ternyata PHP memang tidak mendukung final property
*/

?>