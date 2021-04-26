<?php
	include'koneksi.php';
	$file = simplexml_load_file("gunung.xml");
	foreach ($file as $key => $value) {
	    $sql = "INSERT into data_xml(id,nama,lokasi,ketinggian) VALUES('".$value->id."','".$value->nama."','".$value->lokasi."','".$value->ketinggian."')";
	    mysqli_query($koneksi, $sql);
	}
	header("location:index.php");
?>