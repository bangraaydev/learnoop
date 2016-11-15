<?php

//buat class laptop
class laptop {

	private $pemilik;
	private $merk;

	//contructor sebagai pembuat nilai awal
	public function __construct ($pemilik, $merk)
	{
		$this->pemilikShow = $pemilik;
		$this->merkShow = $merk;
	}

	public function hidupkan_laptop()
	{
		return "Hidupkan laptop $this->merkShow punya $this->pemilikShow";
	}
}

//buat objek dari class latop(instansiasi)
$laptop_andi = new laptop("Andi","Toshiba");

echo $laptop_andi->hidupkan_laptop();
echo "<br />";

$laptop_anto = new laptop("Anto", "Acer");
echo $laptop_anto->hidupkan_laptop();

?>