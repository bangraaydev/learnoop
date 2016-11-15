<?php
//Inheritance - II
//PHP tidak membatasi berapa banyak penurunan objek yang bisa dilakukan

class komputer {
	protected function beli_komputer()
	{
		return "Beli komputer baru";
	}
}

//turunkan class komputer ke class laptop
class laptop extends komputer
{
	protected function beli_laptop()
	{
		return "Beli laptop baru";
	}
}

//turunkan class laptop ke class chromebook
class chromebook extends laptop
{
	protected function beli_chromebook()
	{
		return "Beli chromebook baru";
	}

	public function beli_semua()
	{
		$a = $this->beli_komputer();
		$b = $this->beli_laptop();
		$c = $this->beli_chromebook();
		return "$a <br> $b <br> $c <br>";
	}

	//buat public method baru untuk menampilkan method beli_chromebook 
	public function hanya_chromebook()
	{
		$tampil = $this->beli_chromebook();
		return $tampil;
	}
}

//buat objek dari class chromebook (instansiasi)
$gadget_baru = new chromebook();
echo $gadget_baru->beli_semua();

echo "<br>";
echo $gadget_baru->hanya_chromebook();


// echo $gadget_baru->beli_komputer();
// Fatal error: Call to protected method komputer::beli_komputer()
// error karena hak aksesnya protected

/*
Inilah yang dimaksud dengan enkapsulasi dalam OOP. Membatasi method yang tidak boleh diakses akan membuat kode program menjadi lebih terstruktur
*/

?>