<?php
//buat class laptop
class laptop{
	
	//buat property untuk class laptop
	public $pemilik;
	public $merk;
	
	///buat method untuk class laptop
	public function hidupkan_laptop(){
		return "Hidupkan laptop $this->merk punya $this->pemilik";
	}
	
	public function matikan_laptop(){
		return "Matikan laptop $this->merk punya $this->pemilik";
	}
	
	public function restart_laptop(){
		$matikan=$this->matikan_laptop();
		$hidupkan=$this->hidupkan_laptop();
		$restart=$matikan."<br>".$hidupkan;
		return $restart;
	}
}

//buat object dari class laptop(instansiasi)
$laptop_anto=new laptop();

//isi property object
$laptop_anto->pemilik="Anto";
$laptop_anto->merk="Asus";

echo $laptop_anto->hidupkan_laptop();
//hasil : "hidupkan laptop asus punya anto"
echo"<br>";

echo $laptop_anto->matikan_laptop();
//hasil:"matikan laptop asus punya anto"
echo"<br>";

echo $laptop_anto->restart_laptop();
//hasil:
//"matikan laptop asus pnya anto";
//"hidupkan laptop asus punya anto";

?>