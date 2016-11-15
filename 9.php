<?php
//buat class laptop
class laptop{
	//buat property untuk class laptop
	public $pemilik="Andi";
	
	//buat method untuk class laptop
	public function hidupkan_laptop(){
		return "hidupkan laptop";
	}
}

//buat object dari class laptop
$laptop_baru = new laptop();
$laptop_lama = new laptop();

//menjalankan property dari class laptop
echo $laptop_baru->pemilik; //Andi
echo"<br>";

echo $laptop_lama->pemilik; //Andi
echo"<br>";

echo $laptop_baru->hidupkan_laptop();
echo"<br>";

echo $laptop_lama->hidupkan_laptop();
echo"<br>";

?>