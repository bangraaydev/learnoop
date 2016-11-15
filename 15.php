<?php
//buat class laptop
class laptop{
	//buat method hidupkan class_laptop
	public function hidupkan_laptop($pemilik="joko",$merk="samsung"){
		return "hidupkan laptop $merk punya $pemilik";
	}
}	
	//buat objek dari class laptop(instansiasi)
	$laptop_andi=new laptop();
	
	echo $laptop_andi->hidupkan_laptop();
	//hasil:"hidupkan laptop samsung punya joko";
	
	echo"<br>";
	
	echo $laptop_andi->hidupkan_laptop("Andi","lenovo");
	//hasil:"hidupkan aptop lenovo punya andi";


?>