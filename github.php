<?php
class manusia{
 
	public $nama_saya;	
 
	function berinama($saya){
		$this->nama_saya=$saya;
	}
	
}
 
class teman extends manusia{
 
	public $nama_teman;
 
	function berinamateman($teman){
		$this->nama_teman=$teman;
	}
}

$duniaini = new teman;
 
$duniaini->berinama(" MALAS NGODING ");
$duniaini->berinamateman(" Diki ");
 
// menampilkan isi property
echo "Nama Saya :" . $duniaini->nama_saya . "<br/>";
echo "Nama Teman Saya : " . $duniaini->nama_teman;
 
?>