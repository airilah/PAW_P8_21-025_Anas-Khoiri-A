<?php
$koneksi = mysqli_connect("localhost","root","","db_025");
$sql = "SELECT * FROM tbl_anas";
$hasil = mysqli_query($koneksi,$sql);
?>