<?php
class Mahasiswa
{
	//Public=>diluar Class, Private=>Di dalam Class, Protected=>didalam Class dan Turunan
	public $nim;
	private $nama;
	protected $nilai;

	function __construct($nim,$nama,$nilai)
	{
		$this->nimOut=$nim;
		$this->namaOut=$nama;
		$this->nilaiOut=$nilai;
	}

	protected function StatusNilai()
	{
		if($this->nilaiOut >= 70)
		{
			$status = "Lulus";
		} else {
			$status = "Gagal";
		}
		return $status;
	}

	// Membuat Method Untuk Memanggil Property Private ($nama)
	public function BacaNama()
	{
		return $this->namaOut;
	}

	// Membuat Method Untuk Memanggil Property Private ($nilai)
	public function BacaNilai()
	{
		return $this->nilaiOut;
	}
}

class Nilai extends Mahasiswa 
{
	public $status;

	//Set Public jika ingin di akses yang di extends(Private/Protected)
	public function BacaStatusNilai()
	{
		$this->statusOut = $this->StatusNilai();
		return $this->statusOut;
	}
}

$turunan = new Nilai(123444,'Rudianto',82);
echo "Nim : ".$turunan->nimOut."<br>";
echo "Nama : ".$turunan->BacaNama()."<br>";
echo "Nilai : ".$turunan->BacaNilai()."<br>";
echo "Status : ".$turunan->BacaStatusNilai()."<br>";

//result : success
/*
Nim : 123444
Nama : Rudianto
Nilai : 82
Status : Lulus
*/

?>