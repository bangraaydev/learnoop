<?php
class laptop{
	//membuat property untuk class laptop
	var $pemilik;
	var $merk;
	var $ukuran_layar;
	
	//buat method untuk class laptop
	function hidupkan_laptop(){
		return "hidupkan laptop";
	}
	function matikan_laptop(){
		return "matika laptop";
	}
}

//membuat objek dari class laptop(instansiasi)
$laptop_anto = new laptop();

//mengisi isi dari class laptop
$laptop_anto->pemilik="Anto";
$laptop_anto->merk="Asus";
$laptop_anto->ukuran_layar="15 inci";

//tampilkan property
echo $laptop_anto->pemilik;
echo"<br>";


echo $laptop_anto->merk;
echo"<br>";

echo $laptop_anto->ukuran_layar;
echo"<br>";

//tampilkan method
echo $laptop_anto->hidupkan_laptop();
echo"<br>";

echo $laptop_anto->matikan_laptop();

?>