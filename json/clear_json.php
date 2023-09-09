<?php
include 'koneksi.php';
mysqli_query($koneksi, "delete from data_json");
header("location:index.php");
