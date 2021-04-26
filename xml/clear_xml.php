<?php 
	include 'koneksi.php';
	mysqli_query($koneksi,"delete from data_xml");
	header("location:index.php");
?>