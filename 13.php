<?php

//buat class laptop
class laptop{
	//buat method untuk class laptop
	public function hidupkan_laptop($pemilik,$merk){
		return "hidupkan laptop $merk punya $pemilik";
	}
}

//buat objek dari class laptop(instansiasi)
$laptop_andi = new laptop();

echo $laptop_andi->hidupkan_laptop("Andi","Lenovo");
//hasil:"hidupkan laptop lenovo punya andi";
?>