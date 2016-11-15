<?php
class Mahasiswa { 
	//Property
	public $nim;
	public $nama;
	public $nilai;

	//Method
	function StatusNilai()
	{
		if($this->nilaiOut >=70)
		{
			$status="Lulus";
		}
		else{
			$status ="Gagal";
		}
		return $status;
	}
}

	//instansiasi Object
	$mahasiswaShow = new Mahasiswa();

	//memberikan Nilai pada property
	$mahasiswaShow->nimOut 		=11234;
	$mahasiswaShow->namaOut 	="Ahmad";
	$mahasiswaShow->nilaiOut   	=84;

	//Mencetak Hasil
	echo "Nim : ".$mahasiswaShow->nimOut."<br>";
	echo "Nama : ".$mahasiswaShow->namaOut."<br>";
	echo "Nilai : ".$mahasiswaShow->nilaiOut."<br>";
	echo "Status : ".$mahasiswaShow->StatusNilai()."<br>";

?>