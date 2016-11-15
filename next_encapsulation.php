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

	private function StatusNilai()
	{
		if($this->nilaiOut >= 70)
		{
			$status = "Lulus";
		} else {
			$status = "Gagal";
		}
		return $status;
	}

	public function BacaStatus()
	{
		echo $this->StatusNilai();
	}
}


$mahasiswa = new Mahasiswa(123444,'Rudianto',92);
echo "Nim : ".$mahasiswa->nimOut."<br>";
echo "Nama : ".$mahasiswa->namaOut."<br>";
echo "Nilai : ".$mahasiswa->nilaiOut."<br>";
echo "Status : ".$mahasiswa->StatusNilai()."<br>";

//Fatal error: Call to private method Mahasiswa::StatusNilai() from context '' in C:\xampp\htdocs\oop\next_encapsulation.php on line 38

?>