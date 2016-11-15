<?php
//Part 12: Pengertian Static Property dan Static Method
//Cara Mengakses Static Property dan Static Method Parent Class

/*
Untuk class dengan penurunan (inheritance), kita bisa menggunakan keyword parent::nama_property dan parent::nama_method untuk mengakses static property dan static method dari parent class.

Misalnya class laptop adalah turunan dari class komputer, kita bisa menggunakan perintah parent::beli_komputer() untuk mengakses static method pada class komputer dari dalam class laptop.
*/

//buat class komputer
class komputer {

	//protected static method 
	protected static function beli_komputer(){
		return "Beli komputer baru";
	}
}

//turunkan class komputer ke laptop
class laptop extends komputer {

	//private static method
	private static function beli_laptop(){
		return "Beli Laptop Baru";
	}

	//public static method
	public static function beli_semua(){
		echo parent::beli_komputer();
		echo "<br />";
		echo self::beli_laptop();
	}
}

//panggil static method
laptop::beli_semua();

// coba panggil private static method
//laptop::beli_laptop();
// Fatal error: Call to private method laptop::beli_laptop()


/*
Pada kode diatas, saya membuat class komputer dengan sebuah static method beli_komputer(). Method ini memiliki hak akses protected, sehingga hanya bisa diakses dari dalam class itu sendiri atau dari dalam class turunan.

Class komputer kemudian ‘diturunkan’ kepada class laptop. Di dalam class laptop, saya membuat dua buah static method. Static method beli_laptop() di set dengan hak akses private, sehingga tidak bisa diakses dari luar class laptop.

Dalam method beli_semua(), saya memanggil method beli_komputer() milik class komputer menggunakan perintah parent::beli_komputer(). Ini adalah cara pemanggilan static method milik parent class. Kemudian masih di dalam method beli_semua(), saya memanggil method beli_laptop() dengan perintah self::beli_laptop(), karena method ini ada di dalam class leptop itu sendiri.

Untuk menguji apakah method beli_semua() sukses dijalankan, saya kemudian memanggilnya dengan perintah laptop::beli_semua().

Perhatikan juga pada bagian komentar di akhir kode diatas. Jika kita mencoba memanggil method laptop::beli_laptop(), PHP akan mengeluarkan error karena method beli_laptop() memiliki hak akses private, sehingga tidak bisa diakses dari luar class.

Dalam membuat program berbasis objek, penggunaan static property (dan juga static method) sebaiknya dibatasi, karena static method cenderung susah dideteksi jika terjadi kesalahan. Namun konsep property dan method yang melekat kepada class ini banyak juga digunakan untuk membuat design pattern. Bahkan di dalam framework PHP seperti laravel, static method merupakan mekanisme utama untuk menjalankan sebagian besar kode program.
*/

?>