<?php
include 'koneksi.php';
$id = (int)$_GET['id'];
$ubah = "SELECT * FROM tbl_anas WHERE id_anas=$id";
$hasil = mysqli_query($koneksi,$ubah);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Mahasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
    body{
        background-color: skyblue;
    }
  </style>
</head>
<body>
<div class="container mt-3">
    Nama  : Anas Khoiri Abdillah <br>
    NIM   : 210411100025 <br>
    Kelas : PAW C
    <hr>
    <h1>FORM EDIT DATA</h1>
    <p>Silahkan edit data dibawah ini</p>
    <?php
    while($row = mysqli_fetch_assoc($hasil)) {
    ?>
    <form action="edit.php" method="post">
        <input type="hidden" name="id_anas" value=<?= $id ?> >
        <div class="mb-3 mt-3">
            <label for="nama_anas">Nama : </label>
            <input value="<?= $row['nama_anas']; ?>" class="form-control" name="nama_anas" id="nama_anas">
        </li>
        </div>
        <div class="mb-3">
            <label for="alamat_anas">Alamat :</label>
            <input value="<?= $row['alamat_anas']; ?>" class="form-control" id="alamat_anas" name="alamat_anas">
        </div>
        <button type="submit" class="btn btn-secondary">Kirim</button>
    </form>
    <?php } ?>
    <a href="data_mhs.php" >Back to Data Table</a>
</div>
</body>
</html>