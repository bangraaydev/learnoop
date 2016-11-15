<?php
//direkomendasikan dalam OOP untuk memberikan nilai property dengan menggunakan method

class Mahasiswa
{
	public $nim;
	public $nama;
	public $nilai;

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

	function SetNim($nim)
	{
		$this->nimOut = $nim;
	}

	function SetNama($nama)
	{
		$this->namaOut = $nama;
	}

	function SetNilai($nilai)
	{
		$this->nilaiOut = $nilai;
	}

	function BacaNim()
	{
		echo $this->nimOut;
	}

	function BacaNama()
	{
		echo $this->namaOut;
	}

	function BacaNilai()
	{
		echo $this->nilaiOut;
	}
}

$mahasiswabaru = new Mahasiswa();
$mahasiswabaru->SetNim(1221233);
$mahasiswabaru->SetNama('Raden');
$mahasiswabaru->SetNilai(92);
$mahasiswabaru->StatusNilai();


echo "Nim : ";
$mahasiswabaru->BacaNim();
echo"<br>";

echo"Nama : ";
$mahasiswabaru->BacaNama();
echo"<br>";

echo"Nilai : ";
$mahasiswabaru->BacaNilai();
echo "<br>";

echo "Status : ";
echo $mahasiswabaru->StatusNilai();

?>