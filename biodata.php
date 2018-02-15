<?php
class BIODATA{
	public function biodata_saya($nama, $alamat, $hobi, $skill){
	return "Nama saya $nama alamat di $alamat, mempunyai hobi $hobi dan skill sebagai $skill";
	}
}

$output = new biodata();
echo $output->biodata_saya("Manto", "Bekasi", "Travelling", "Front End Development")
?>
