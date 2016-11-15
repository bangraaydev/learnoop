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

	// Membuat Method Untuk Memanggil Property Protected ($nilai)
	public function BacaNilai()
	{
		return $this->nilaiOut;
	}
}


$mahasiswa = new Mahasiswa(123444,'Rudianto',92);
echo "Nim : ".$mahasiswa->nimOut."<br>";
echo "Nama : ".$mahasiswa->BacaNama()."<br>";
echo "Nilai : ".$mahasiswa->BacaNilai()."<br>";
echo "Status : ".$mahasiswa->StatusNilai()."<br>";

//hasil : Fatal error: Call to protected method Mahasiswa::StatusNilai() from context '' in C:\xampp\htdocs\oop\next_encapsulation2.php on line 45

?>