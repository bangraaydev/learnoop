<?php
//Part 14: Pengertian Final Method dan Final Class Pemrograman Objek
/*
emrograman objek juga membolehkan kita untuk ‘menimpa’ method milik parent class dengan method milik child class. Proses menimpa method atau dikenal dengan istilah overridden method ini dilakukan dengan cara membuat nama method yang sama dengan nama method yang ada di dalam parent class.

Bagaimana jika kita menginginkan sebuah mekanisme untuk melarang class anak untuk membuat method yang akan menimpa method class induk? Atau bahkan melarang sebuah class untuk diturunkan sama sekali? Untuk keperluan ini, pemrograman objek PHP menggunakan keyword: final.

Dengan menambahkan keyword final kepada sebuah method, maka method tersebut tidak dapat didefenisikan ulang di dalam child class. Dan jika sebuah class ditambahkan keyword final, maka class tersebut tidak bisa diturunkan sama sekali. Inilah pengertian dari final method dan final class.
*/

class komputer {
	final public function lihat_spec(){
		return "Lihat spesifikasi komputer";
	}
}

class laptop extends komputer {
	public function lihat_spec(){
		return "lihat spesifikasi laptop";
	}
}
$laptop_baru = new laptop();
// Fatal error: Cannot override final method
// komputer::lihat_spec()



/*
Pada kode program diatas, class komputer memiliki method lihat_spec() yang di-set sebagai final. Kemudian class komputer ini saya turunkan kepada class laptop. Di dalam class laptop, saya mendefenisikan ulang method lihat_spec(), sehingga method lihat_spec() milik class komputer akan tertimpa oleh method lihat_spec() milik class laptop.

Saat saya membuat objek $laptop_baru dari class laptop, PHP akan mengeluarkan error: Cannot override final method komputer::lihat_spec(). Error ini menjelaskan bahwa kita tidak bisa menimpa method lihat_spec() milik class komputer, karena method tersebut telah di set sebagai final.
*/

?>