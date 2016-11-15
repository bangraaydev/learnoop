<?php
//Part 15: Pengertian Abstract Class dan Abstract Method PHP
/*
Class Turunan Harus Mengimplementasikan Abstract Method

Jika sebuah class diturunkan dari abstract class, maka class tersebut harus membuat ulang seluruh abstract method yang terdapat dalam abstract class, dan juga harus sesuai dengan signature-nya.
*/

// buat abstract class
abstract class komputer {
	//buat abstract method
	abstract public function lihat_spec();
}

class laptop extends komputer {
	//implementasi abstract method
	public function lihat_spec(){
		return "Lihat spec laptop..";
	}

	//method 'biasa'
	public function beli_laptop(){
		return "Beli laptop..";
	}
}

//buat objek dari class laptop
$laptop_baru = new laptop();
echo $laptop_baru->lihat_spec();
//Lihat spec laptop...

echo "<br />";

echo $laptop_baru->beli_laptop();
//Beli laptop..

?>