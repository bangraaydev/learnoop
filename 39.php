<?php
//Part 14: Pengertian Final Method dan Final Class Pemrograman Objek
/*
Jika sebuah final method tidak bisa ditimpa nilainya, maka sebuah final class tidak bisa diturunkan kepada class lain. Sebagai contoh kedua kita
*/

final class komputer {
	function lihat_spec(){
		return "Lihat spesifikasi komputer";
	}
}

class laptop extends komputer {
}

$laptop_baru = new laptop();

// Fatal error: Class laptop may not inherit
// from final class (komputer)

/*
Saya membuat sebuah final class komputer, kemudian mencoba menurunkannya kepada class laptop. Saat proses pembuatan objek: $laptop_baru=new laptop(), PHP akan komplain dan mengeluarkan error: Fatal error: Class laptop may not inherit from final class (komputer). Dari hasil error yang didapat, PHP melarang kita untuk menurunkan class komputer, karena telah di set sebagai final class.
*/

?>