<?php
include 'koneksi.php';
$id = $_POST["id_anas"];
$nama = $_POST["nama_anas"];
$alamat = $_POST["alamat_anas"];

$tmbh= "INSERT INTO tbl_anas
        VALUES (NULL,'$nama','$alamat')";
$hasil = mysqli_query($koneksi,$tmbh);
if ($hasil) {
    header("location: data_mhs.php");
}else{
    echo"Salah dalam pengisian data <a href='form_mhs.php'>From</a>";
}
?>