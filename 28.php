<?php
//Pengertian Overridden Constructor dan Overridden Destructor
//Dalam kode program diatas, saya tidak membuat constructor dan destructor untuk class laptop dan class chromebook. Tapi bagaimana jika ketiga class ini juga memiliki constructor dan destructor?

//buat class komputer
class komputer{

	//buat constructor class komputer
	public function __construct(){
		echo "Constructor dari class komputer <br>";
	}

	//buat destructor class komputer
	public function __destruct(){
		echo "Destructor dari class komputer <br>";
	}
}

//turunkan class komouter ke laptop
class laptop extends komputer{

	//buat constructor class laptop
	public function __construct(){
		echo "Constructor dari class laptop <br>";
	}

	//buat constructor class laptop
	public function __destruct(){
		echo "Destructor dari class laptop";
	}
}

//turunkan class laptop ke chromebook
class chromebook extends laptop{

	//buat constructor class chromebook
	public function __construct(){
		echo "Constructor dari class chromebook <br>";
	}

	//buat destructor class chromebook
	public function __destruct(){
		echo "Destructor dari class chromebook <br>";
	}
}

//buat objek dari class chromebook (instansiasi)
$gadget_baru = new chromebook();
echo "Belajar OOP PHP <br>";

//hasilnya
//Constuctor dari class chromebook
//Belajar OOP PHP
//Destructor dari class chromebook

//Kemana constructor dan destructor class lainnya?
//Di dalam PHP, ketika child class memiliki constructor dan destructor sendiri, maka PHP akan melewatkan constructor dan destructor parent class, kasus ini disebut dengan Overridden Constructor dan Overridden Destructor. Karena di dalam contoh kita class chromebook memiliki constructor dan destructor, maka constructor dan destructor class induknya tidak dijalankan.
//Bagaimana jika kita ingin constructor dan destructor parent class tetap dijalankan?

//Solusinya, kita harus memanggil constructor dan destructor parent class secara manual dengan Scope Resolution Operator, yakni: parent::__construct() dan parent::__desctruct().

//Berikut adalah modifikasi kode program kita diatas: =>di page 29.php

?>