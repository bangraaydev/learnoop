<?php
//Part 13: Pengertian Konstanta Class dalam Pemrograman Objek
//Cara Mengakses Konstanta Class dari dalam Class itu Sendiri

/*
Untuk mengakses class constant dari dalam class itu sendiri, PHP menggunakan cara yang sama dengan static property, yaitu dengan perintah self::nama_konstanta
*/

//buat class laptop
class laptop {
	//buat konstanta
	const DOLLAR = '12000';

	//buat method
	public function beli_laptop($harga){
		return "Beli komputer baru, Rp. Rp. ".$harga*self::DOLLAR;
	}
}

//buat objek dari class laptop(instansiasi)
$laptop_baru = new laptop();

echo $laptop_baru->beli_laptop(400);
//hasil : Beli komputer baru, Rp. 4800000

?>