<?php
//membuat class laptop
class laptop{
	
	//buat protected property
	protected $pemilik;
	
	//buat protected method
	protected function hidupkan_laptop(){
		return"hidupkan laptop";
	}
}

//membuat object dari class laptop
$laptop_anto	= new laptop();

//set protected property akan menghasilkan error
$laptop_anto->pemilik="Anto";
//Fatal error : cannot access protected property laptop::$pemilik

//tampilkan protected property akan menghasilkan error
echo $laptop_anto->pemilik;
//Fatal error : cannot access protected property laptop::$pemilik

//jalankan protected method dari class laptop akan menghasilkan erro
echo $laptop_anto->hidupkan_laptop();
//Fatal error: call to protected method laptop::hidupkan laptop()
//from context

?>