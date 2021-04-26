<?php
	Header('Content-type: text/xml');
	include'koneksi.php';
	$xml = new SimpleXMLElement('<data/>');
	$sql = "select * from data_xml ";
	$result = mysqli_query($koneksi, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
	    $track = $xml->addChild('gunung');
	    $track->addChild('id', $row['id']);
	    $track->addChild('nama', $row['nama']);
	    $track->addChild('lokasi', $row['lokasi']);
	    $track->addChild('ketinggian', $row['ketinggian']);
	}
	print($xml->asXML());
?>

