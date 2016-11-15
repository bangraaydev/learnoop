<?php
//Part 13: Pengertian Konstanta Class dalam Pemrograman Objek
//Cara Mengakses Konstanta Class milik Parent Class

/*
Pewarisan class (class inheritance) dari sebuah class kedalam class lain, juga akan menurunkan konstanta. Jika kebetulan class yang diturunkan (child class) memiliki nama konstanta yang sama dengan parent class, konstanta tersebut akan ‘tertimpa’.

PHP menggunakan operator parent::nama_konstanta untuk mengakses konstanta milik parent class.
*/

class komputer {
	//buat konstanta class komputer 
	const DOLLAR = '11000';
}

//turunkan class komputer ke class laptop
class laptop extends komputer {
	//buat konstanta class laptop
	const DOLLAR = '12000';

	//buat method dengan konstanta class komputer
	public function beli_komputer($harga) {
		return "Beli komputer baru, Rp. ".$harga*parent::DOLLAR;
	}

	//buat method dengan konstanta class laptop
	public function beli_laptop($harga) {
		return "Beli laptop baru, Rp. ".$harga*self::DOLLAR;
	}
}

//buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();

echo $laptop_baru->beli_laptop(400);
echo "<br />";
echo $laptop_baru->beli_komputer(400);


/*
---------------------------------
Beli laptop baru, Rp. 4800000
Beli komputer baru, Rp. 4400000
---------------------------------

Saya membuat konstanta DOLLAR di dalam class komputer. Class komputer kemudian diturunkan ke dalam class laptop. Di dalam class laptop, saya mendefenisikan kembali konstanta DOLLAR. Karena kedua konstanta ini memiliki nama yang sama, maka saya harus menggunakan perintah parent::DOLLAR untuk memanggil konstanta DOLLAR miliki class komputer.
*/

?>