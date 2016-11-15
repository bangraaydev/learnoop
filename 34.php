<?php
//Part 13: Pengertian Konstanta Class dalam Pemrograman Objek
//Selain mengakses konstanta dengan menggunakan nama class, PHP juga memiliki cara lain, yakni dengan mengaksesnya dari objek

class laptop {
	//buat konstanta
	const DOLLAR = '12000';
}

//buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();

//panggil konstanta class
echo "Harga dollar saat ini = Rp. ".$laptop_baru::DOLLAR;

//Harga dollar saat ini = Rp. 12000

?>