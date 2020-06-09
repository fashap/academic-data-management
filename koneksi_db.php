<?php

$connection = mysqli_connect("localhost", "root", "fasha12345", "academic_data_management");

if($connection){
	echo "Sukses terhubung ke MySQL";
}else{
	echo "Gagal terhubung ke MySQL : " . PHP_EOL;
}

?>