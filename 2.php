<?php
class laptop{
	//membuat property dari class laptop
	var $pemilik;
	
	//membuat method untuk class laptop
	function hidupkan_laptop(){
		return "hidupkan laptop";
	}	
}

//buat objek dari class laptop(instansiasi)
$laptop_anto	= new laptop();
$laptop_andi	= new laptop();
$laptop_dina	= new laptop();

//set property
$laptop_anto->pemilikOut="Anto";
$laptop_andi->pemilikOut="Andi";
$laptop_dina->pemilikOut="Dina";


//tampilkan property
echo $laptop_anto->pemilikOut; //Anto
echo"<br>";

echo $laptop_andi->pemilikOut; //Andi
echo"<br>";

echo $laptop_dina->pemilikOut; //Dina
echo"<br>";

?>