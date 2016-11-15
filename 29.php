<?php
//Part 11: Cara Mengakses Constructor dan Destructor Parent Class
//buat class komputer

class komputer {
	public function __construct(){
		echo "Constructor dari class komputer <br>";
	}

	public function __destruct(){
		echo "Destructor dari class komputer <br>";
	}
}

//turunkan class komputer ke laptop
class laptop extends komputer{
	public function __construct(){
		parent::__construct();
		echo"Constructor dari class laptop <br>";
	}

	public function __destruct(){
		echo "Destructor dari class laptop <br />";
		parent::__destruct();
	}
}

//turunkan class laptop ke chromebook
class chromebook extends laptop{
	public function __construct(){
		parent::__construct();
		echo "Constructor dari class chromebook <br>";
	}

	public function __destruct(){
		echo "Destructor dari class chromebook <br>";
		parent::__destruct();
	}
}

//buat objek dari class chromebook (instansiasi)

$gadget_baru = new chromebook();
echo "Belajar OOP PHP <br>";



//hasil
/*Constructor dari class komputer
Constructor dari class laptop
Constructor dari class chromebook
Belajar OOP PHP
Destructor dari class chromebook
Destructor dari class laptop
Destructor dari class komputer
*/


/*
Dengan memanggil manual perintah parent::__construct() dan parent::__desctruct(), kita bisa menjalankan seluruh constructor dan destructor dari parent class.

Dalam tutorial belajar Object Oriented Programming (OOP) PHP kali ini, kita telah mempelajari cara kerja constructor dan destructor jika sebuah class diturunkan dari class lain (inheritance).

Constructor dan destructor parent class akan dijalankan jika child class tidak mendefenisikan constructor dan destructor sendiri. Namun jika child class juga memiliki constructor dan desctructor, maka kita harus memanggil constructor dan destructor parent class secara manual.
*/

?>