<?php
//buat class laptop
class laptop{
	//buat property untuk class laptop
	private $pemilik="Anto";
	private $merk="Acer";
	
	//buat method untuk class laptop
	public function hidupkan_laptop($pemilik,$merk){
		return "Hidupkan laptop $merk punya $pemilik <br>";
	}
	
	public function hidupkan_laptop_anto(){
		return "hidupkan laptop $this->merk punya $this->pemilik";
	}
}

//buat objek dari class laptop
$laptop_andi=new laptop();

//value yang di set/dirubah
echo $laptop_andi->hidupkan_laptop("andi","lenovo");
//hasil :"hidupkan laptop lenovo punya andi"

//value default
echo $laptop_andi->hidupkan_laptop_anto();
//hasil:"hidupkan laptop acer punya anto"

?>