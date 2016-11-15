<?php
class Mahasiswa
{
	public $nim;
	public $nama;
	public $nilai;

	//Constructor ini akan langsung dijalankan otomatis ketika Class di instantisasi ke dalam objek
	function __construct($nim, $nama, $nilai)
	{
		$this->nimOut 	= $nim;
		$this->namaOut 	= $nama;
		$this->nilaiOut = $nilai;
	}

	function StatusNilai()
	{
		if($this->nilaiOut >= 70)
		{
			$status = "Lulus";
		} else {
			$status = "Gagal";
		}
		return $status;
	}
}

//Instansiasi class otomatis menjalankan costructor dengan menambah nilai property 	class

$mahasiswa = new Mahasiswa(1122333,'Raden Ahmad',53);
echo "NIM : ".$mahasiswa->nimOut."<br>";
echo "Nama : ".$mahasiswa->namaOut."<br>";
echo "Nilai : ".$mahasiswa->nilaiOut."<br>";
echo "Status : ".$mahasiswa->StatusNilai()."<br>";

echo "<hr>";

//membuat Object baru untuk nama Sumanto
$mahasiswabaru = new Mahasiswa(565656,'Sumanto',96);
echo "NIM : ".$mahasiswabaru->nimOut."<br>";
echo "Nama : ".$mahasiswabaru->namaOut."<br>";
echo "Nilai : ".$mahasiswabaru->nilaiOut."<br>";
echo "Status : ".$mahasiswabaru->StatusNilai()."<br>";


?>