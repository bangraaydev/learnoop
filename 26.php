<?php
//lanjutan materi sebelumnya [25]
/*
Lalu bagaimana dengan cara mengakses parent property dari child class? Jika anda berfikir sama seperti saya, maka kita bisa tebak bahwa caranya adalah menggunakan parent::nama_property, apakah bisa? 

parent 	= class komputer
child 	= class laptop

*/

class komputer 
{
	public $merk = "Acer";

	public function lihat_spec()
	{
		return "Spec Komputer: Acer, 
     Processor Intel core i7, Ram 4GB";
	}
}

//turunkan class komputer ke laptop
class laptop extends komputer
{
	public $merk = "Asus";

	public function lihat_spec()
	{
		return "Spec Laptop: Asus, 
     Processor Intel core i5, Ram 2GB";
	}

	public function lihat_spec_komputer()
	{
		return parent::lihat_spec();
	}

	public function lihat_merk_komputer()
	{
		return parent::$merk;
	}
}

//buat objeck dari class laptop
$gadget_baru = new laptop();

//panggil method lihat_spec()
echo $gadget_baru->lihat_spec();
echo"<br />";

//panggil method lihat_spec_komputer()
echo $gadget_baru->lihat_spec_komputer();

//panggil method lihat_merk_komputer()
echo $gadget_baru->lihat_merk_komputer();


/*
Spec Laptop: Asus, Processor Intel core i5, Ram 2GB
Spec Komputer: Acer, Processor Intel core i7, Ram 4GB
Fatal error: Access to undeclared static property: komputer::$merk in C:\xampp\htdocs\oop\26.php on line 36
==========================================
Kode error diatas berarti kita mencoba mengakses property static $merk dari class komputer, bukan property public $merk dari class komputer sebagaimana kode error (Property static tidak sama dengan property biasa

kita akan mempelajarinya sesaat lagi di: Pengertian static property dan static method).
*/
?>