<?php 
include 'koneksi.php';
$id = $_GET['id'];
$del = "DELETE FROM tbl_anas WHERE id_anas=$id"; 
$hasil = mysqli_query($koneksi,$del);
if ($hasil) {
    echo "Data berhasil dihapus!";
    header("location: data_mhs.php");
}else{
    echo"Data tidak berhasil dihapus!";
}
?>