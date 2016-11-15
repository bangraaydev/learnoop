<?php
//Cara Mengakses Property dan Method Parent Class
/*
Konsep pewarisan/inheritance dimana sebuah class bisa memiliki property dan method dari class lain, bisa menjadi permasalahan ketika property atau method dari class anak memiliki nama yang sama dengan class induk, atau dikenal dengan istilah overridden property dan overridden method.
*/

class komputer
{
	public function lihat_spec()
	{
		return "Spec Komputer: Acer, 
     Processor Intel core i7, Ram 4GB";
	}
}

//turunkan class komputer ke laptop
class laptop extends komputer 
{
	public function lihat_spec()
	{
		return "Spec Laptop: Asus, 
     Processor Intel core i5, Ram 2GB";
	}
}

//buat object dari class laptop (instansiasi)
$gadget_baru = new laptop();

//panggil method lihat_spec()
echo $gadget_baru->lihat_spec();


/*
Di dalam PHP, ketika nama property atau nama method child class memiliki nama yang sama dengan parent class, maka yang dijalankan adalah property atau method milik child class.

Jadi, bagaimana cara mengakses property dan method milik class komputer? PHP mengatasi hal ini dengan menggunakan ‘Scope Resolution Operator’.
*/
?>