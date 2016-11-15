<?php
//buat class komputer
class komputer{
	
	//membuat property dengan hak akses private
	private $jenis_processor="Intel core i7-23424";
	
	public function tampilkan_processor(){
		return $this->jenis_processor;
	}
}

//buat class laptop
class laptop extends komputer{
	public function tampilkan_processor(){
		return $this->jenis_processor;
	}
}

//buat object dari class laptop (instansiasi)
$komputer_baru = new komputer();
$laptop_baru = new laptop();

//jalankan method dari class komputer
echo $komputer_baru->tampilkan_processor();
echo"<br>";

//jalankan method dari class laptop(error)
echo $laptop_baru->tampilkan_processor();
//Notice:Undefined property:laptop::$jenis_processor


?>