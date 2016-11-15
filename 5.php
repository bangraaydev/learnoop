<?php
//buat class laptop
class laptop{
	
	//buat protected property
	protected $pemilik="Anto";
	
	public function akses_pemilik(){
		return $this->pemilik;
	}
	
	protected function hidupkan_laptop(){
		return "Hidupkan laptop";
	}
	
	public function paksa_hidup(){
		return $this->hidupkan_laptop();
	}
}

//buat objek dari class laptop(instansiasi)
$laptop_anto	= new laptop();

//jalankan method akses_pemilik()
echo $laptop_anto->akses_pemilik(); //"anto"
echo"<br>";

//jalankan method paksa_hidup()
echo $laptop_anto->paksa_hidup(); //"hidupkan laptop"

?>