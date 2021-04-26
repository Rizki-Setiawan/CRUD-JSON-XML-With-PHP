<?php
	include "koneksi.php";
	$sql = "select * from data_json order by id asc";
	$run_sql = mysqli_query($koneksi, $sql);
	$result = array();
	while ($data = mysqli_fetch_array($run_sql)) {		
		array_push($result, array(
			'id' => $data['id'],
			'nama' => $data['nama'],
			'lokasi' => $data['lokasi'],
			'ketinggian' => $data['ketinggian'],
		));
	}
	echo json_encode($result);
?>
