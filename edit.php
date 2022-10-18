<?php 
include 'koneksi.php';
$id = $_POST["id_anas"];
$nama = $_POST["nama_anas"];
$alamat = $_POST["alamat_anas"];
$edit = "UPDATE tbl_anas SET  nama_anas='$nama' , alamat_anas='$alamat' WHERE id_anas=$id";
$hasil = mysqli_query($koneksi,$edit);

if ($hasil) {
    header("Location: data_mhs.php");
}else{
    echo"Data tidak berhasil diedit!";
    mysqli_error($hasil);
}
?>