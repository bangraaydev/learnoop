<?php
//buat class komputer
class komputer{
	//property dengan hak akses protected
	protected $jenis_processor = "Inter core i7-4535";
}

//buat class laptop
class laptop extends komputer{

	public function tampilkan_processor(){
		return $this->jenis_processor;
	}
	
}

//buat object dari class laptop(instansiasi)
$laptop_baru	= new laptop();

//jalankan method
echo $laptop_baru->tampilkan_processor();

?>