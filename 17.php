<?php
//buat class laptop
class laptop{
	
	private $pemilik="Andi";
	private $merk="Lenovo";
	
	public function __construct(){
		echo"ini berasal dari constructor laptop";
	}
	
	public function hidupkan_laptop(){
		return "hidupkan laptop $this->merk punya $this->pemilik";
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

//hapus objek $laptop_andi
unset($laptop_andi);

echo"<br>";
echo"objek telah dihancurkan";

//jika object $laptop_andi dipanggil/digunakan lagi, maka object $laptop_andi tidak akan berfungsi

?>