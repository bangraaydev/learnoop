<?php

class Matematika {
	private $x;  //$x adalah nilai variabel yang diambil dari inputan/yang diberikan
	private $y;  //$y adalah nilai variabel yang diambil dari inputan/yang diberikan

	public function Tambah($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
		$hasil = $this->x + $this->y;
		return $hasil;
	}

	public function Kali($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
		$hasil= $this->x * $this->y;
		return $hasil;
	}

	public function Kurang($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
		$hasil = $this->x - $this->y;
		return $hasil;
	}

	public function Bagi($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
		$hasil = $this->x / $this->y;
		return $hasil;
	}

	public function TampilkanForm()
	{
		echo '<form method="POST">';
		echo '<input type="text" name="x">&nbsp; &nbsp;';
		echo '<select name="operasi"> 
			 	<option value="tambah"> + </option>
			 	<option value="kali"> * </option>
			 	<option value="kurang"> - </option>
			 	<option value="bagi"> / </option>
			  </select> &nbsp; ';
		echo'<input type="text" name="y"> &nbsp;';
		echo '<label> = </label> &nbsp;';
		echo '<input type="submit" value="Hitung">';
		echo '</form>';
	}
}

$data = new Matematika();
$data->TampilkanForm();

if($_POST)
{
	$x = $_POST['x'];
	$y = $_POST['y'];

	if($_POST['operasi'] == "tambah")
	{
		echo "Hasil ".$x." + ".$y." = ".$data->Tambah($x, $y)."<br /><br />";
	}
	elseif($_POST['operasi'] == "kali")
	{
		echo "Hasil ".$x." * ".$y." = ".$data->Kali($x, $y)."<br /><br />";
	}
	elseif($_POST['operasi'] == "kurang")
	{
		echo "Hasil ".$x." - ".$y." = ".$data->Kurang($x, $y)."<br /><br />";
	}
	elseif($_POST['operasi'] == "bagi")
	{
		echo "Hasil ".$x." / ".$y." = ".$data->Bagi($x, $y)."<br /><br />";
	}
}

?>