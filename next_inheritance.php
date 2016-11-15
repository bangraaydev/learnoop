<?php

class Mahasiswa
{
	public $nim;
	private $nama;
	protected $nilai;

	function __construct($nim, $nama, $nilai)
	{
		$this->nimOut = $nim;
		$this->namaOut = $nama;
		$this->nilaiOut = $nilai;
	}

	public function NamaMhs()
	{
		return $this->namaOut;
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
}

class MataKuliah extends Mahasiswa
{
	public $matakuliah;
	public $dosen;
	public $status;

	public function Matkul($matkul, $dosen)
	{
		$this->matakuliahOut = $matkul;
		$this->dosenOut = $dosen;
	}

	//Mengambil property dari class turunan
	public function NilaiMhs()
	{
		return $this->nilaiOut;
	}

	public function Grade()
	{
		if($this->nilaiOut >= 90)
		{
			$grade = "A";
		} elseif ($this->nilaiOut >= 80 ) {
			$grade = "B";
		} elseif ($this->nilaiOut >= 60) {
			$grade = "C";
		} elseif ($this->nilaiOut >= 50) {
			$grade = "D";
		} else {
			$grade = "E";
		}
		return $grade;
	}

	//Mengambil method dari class turunan
	public function StatusNilaiMhs()
	{
		$this->statusSekarang = $this->StatusNilai();
		return $this->statusSekarang;
	}
}

$data = new Matakuliah(12333311,'Nurul Huda', 82);
$data->Matkul("Pemrograman PHP","Agus Purwanto");

echo "Nim : ".$data->nimOut."<br>";
echo "Nama : ".$data->NamaMhs()."<br>";
echo "Mata Kuliah : ".$data->matakuliahOut."<br>";
echo "Dosen : ".$data->dosenOut."<br>";
echo "Nilai : ".$data->NilaiMhs()."<br>";
echo "Grade : ".$data->Grade()."<br>";
echo "Status : ".$data->StatusNilaiMhs()."<br>";


?>