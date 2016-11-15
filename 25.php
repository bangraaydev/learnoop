<?php
//lanjutan kasus materi sebelumnya
//Scope Resolution Operator PHP
/*
Scope Resolution Operator adalah operator khusus di dalam PHP yang memungkinkan kita untuk mengakses ‘informasi khusus‘ dari dalam class.

Informasi khusus ini terdiri dari: overridden property atau overridden method, static property atau static method, serta constanta class. 

Scope Resolution Operator ditulis dengan tanda dua kali titik dua (double colon), yakni “::”. Untuk mengakses property dan method dari class induk, kita mengaksesnya dengan perintah:
*/

class komputer
{
	public function lihat_spec()
	{
		return "Spec Komputer: Acer, 
     Processor Intel core i7, Ram 4GB";
	}
}

class laptop extends komputer
{
	public function lihat_spec()
	{
		return "Spec Laptop: Asus, 
     Processor Intel core i5, Ram 2GB";
	}

	public function lihat_spec_komputer()
	{
		return parent::lihat_spec();
	}
}

//buat objek baru dari class laptop (instansiasi)
$gadget_baru = new laptop();

//panggil method lihat_spec()
echo $gadget_baru->lihat_spec();

echo "<br>";

//panggil method lihat_spec_komputer()
echo $gadget_baru->lihat_spec_komputer();

/*
Spec Laptop: Asus, Processor Intel core i5, Ram 2GB
Spec Komputer: Acer, Processor Intel core i7, Ram 4GB
/*

?>