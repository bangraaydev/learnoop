<?php
class laptop{
	
	//membuat public property
	public $pemilik;
	
	//membuat public method
	public function hidupkan_laptop(){
		return "hidupkan laptop";
	}

}

//buat objek dari class laptop(instansiasi)
$laptop_anto	= new laptop();

//set property
$laptop_anto->pemilik="Anto";

//menampilkan property
echo $laptop_anto->pemilik; //Anto
echo"<br>";

//Tampilkan method
echo $laptop_anto->hidupkan_laptop(); //hidupkan laptop

?>