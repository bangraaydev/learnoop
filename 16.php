<?php
//buat class laptop
class laptop{
	private $pemilik="andi";
	private $merk="lenovo";
	
	public function __construct(){
		echo "ini berasalah dari constructor laptop";
	}
	
	public function hidupkan_laptop(){
		return "hdupkan laptop $this->merk punya $this->pemilik";
	}
	
	public function __destruct(){
		echo"ini berasal dari destruct laptop";
	}
}

//buat objek dari class laptop
$laptop_andi=new laptop();

echo"<br>";
echo $laptop_andi->hidupkan_laptop();
echo"<br>";

?>