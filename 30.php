<?php
//12- Pengertian Static Property dan Static Method

/*
Static property dan static method adalah property (variabel) dan method (function) yang melekat kepada class, bukan kepada objek. Konsep static property memang ‘agak keluar’ dari konsep objek sebagai tempat melakukan proses, karena sebenarnya class hanya merupakan ‘blueprint’ saja.

Untuk membuat static property dan static method, kita menambahkan keyword ‘static’ setelah penulisan akses level property atau method, seperti contoh berikut:
*/


//buat class laptop
class laptop {
	public $merk;
	public $pemilik;

	//static property
	public static $harga_beli;

	//static method
	public static function beli_laptop(){
		return "Beli laptop";
	}
}

//set static property
laptop::$harga_beli=4000000;

//get static property
echo "harga beli : Rp.".laptop::$harga_beli;

echo "<br /";

//panggil static method
echo laptop::beli_laptop();

?>