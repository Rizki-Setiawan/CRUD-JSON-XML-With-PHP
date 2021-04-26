<?php
	include "koneksi.php";
	$filename = "gunung.json"; 
	$data = file_get_contents($filename);
	$array = json_decode($data, true);
	foreach ($array as $row) {
		$sql = "insert into data_json(id, nama, lokasi, ketinggian) values ('".$row["id"]."','".$row["nama"]."','".$row["lokasi"]."','".$row["ketinggian"]."')";
		mysqli_query($koneksi, $sql);
	}
	header("location:index.php");
?>
