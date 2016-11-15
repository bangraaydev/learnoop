<?php
//buat class laptop
class laptop{
	//membuat property untuk class laptop
	public $pemilik="Andi";
	
	//membuat object untuk class laptop
	public function hidupkan_laptop(){
		return "Hidupkan laptop $this->pemilik";
	}
}

//buat object dari class laptop
$laptop_baru=new laptop();

echo $laptop_baru->hidupkan_laptop(); //"hidupkan laptop andi"
echo"<br>";

//ubah/set isi property $pemilik pada object $laptop_baru
$laptop_baru->pemilik="Arie"; 

echo $laptop_baru->hidupkan_laptop(); //"hidupkan laptop arie"
echo"<br>";

//buat objek baru dari class laptop dan panggil hidupkan_laptop()
$laptop_lama=new laptop();

echo $laptop_lama->hidupkan_laptop();

?>