<?php
//Part 13: Pengertian Konstanta Class dalam Pemrograman Objek
//PHP versi 5.3 keatas juga membolehkan pemanggilan property dengan nama class yang berada di dalam variabel

//buat class 
class laptop {
	//buat konstanta
	const DOLLAR = '12000';
}

//buat variabel dengan nama class
$nama = "laptop";

//panggil konstanta class
echo "Harga dollar saat ini = Rp. ".$nama::DOLLAR;
//hasil : Harga dollar saat ini  = Rp. 12000


/*
Pada kode program diatas, saya tidak menggunakan objek, tetapi membuat variabel $nama dan memberikannya nilai laptop. Karena nama class kita juga adalah laptop, maka PHP membolehkan pemanggilan kosntanta DOLLAR dengan $nama::DOLLAR. Nama variabel yang digunakan boleh bebas, selama nilainya cocok dengan nama class tempat konstanta itu berada.
*/
?>