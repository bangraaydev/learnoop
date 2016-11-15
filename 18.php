<?php
//buat class laptop
class laptop{
	private $pemilik;
	private $merk;
	
	//constructor sebagai pembuat nilai awal
	public function __construct($pemilik,$merk){
		$this->merk_laptop=$merk;
		$this->pemilik_laptop=$pemilik;
	}
	
	public function hidupkan_laptop(){
		return "hidupkan laptop $this->merk_laptop punya $this->pemilik_laptop";
	}
}

//buat objek dari class laptop(instansiasi)
//jika constructor sebagai pembuat nilai, maka set valuenya diinputkan didalam object.nya
$laptop_andi=new laptop("andi","lenovo");
echo $laptop_andi->hidupkan_laptop();

echo"<br>";
$laptop_anto=new laptop("anto","acer");
echo $laptop_anto->hidupkan_laptop();

?>