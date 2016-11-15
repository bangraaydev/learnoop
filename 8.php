<?php
class laptop{
	
	//buat property untuk class laptop
	public $pemilik;
	public $merk;
	public $ukuran_layar;
	
	//buat method untuk class laptop
	public function hidupkan_laptop(){
		return "hidupkan laptop";
	}
	
	public function matikan_laptop(){
		return "matikan laptop";
	}
}

//buat object dari class laptop (instansiasi)
$laptop_anto=new laptop(); 
$laptop_andi=new laptop();

echo $laptop_anto->pemilik="Anto";
echo "<br>";

echo $laptop_andi->pemilik="Andi";



?>