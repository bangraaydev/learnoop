<?php
//buat class laptop
class laptop{
	//buat property untuk class laptop
	public $pemilik="Andi";
	public $merk;
	
	//buat method untuk class laptop
	public function hidupkan_laptop(){
		return "Hidupkan laptop $this->pemilik";
	}
}

//buat object dari class laptop
$laptop_baru = new laptop();

//menjalankan object $laptop_baru
echo $laptop_baru->hidupkan_laptop(); //hidupkan laptop andi

?>