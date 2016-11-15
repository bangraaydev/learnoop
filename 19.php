<?php
//belajar inheritance di PHP

//buat class induk : komputer
class komputer {
	public $merk;
	public $processor;
	public $memory;
	
	public function beli_komputer(){
		return "beli komputer baru";
	}
}

//turunkan class komputer ke laptop
class laptop extends komputer{
	public function lihat_spec(){
		return "merk : $this->merk, processor: $this->processor, memory:$this->memory";
	}
}

//buat objek dari class laptop(istansiasi)
$laptop_baru=new laptop();

//isi property objek
$laptop_baru->merk="acer";
$laptop_baru->processor="intel core i5";
$laptop_baru->memory="2 GB";

//panggil method objek
echo $laptop_baru->beli_komputer();
echo"<br>";
echo $laptop_baru->lihat_spec();

?>