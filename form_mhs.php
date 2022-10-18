<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Prodi</title>
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
    <h1>FORM TAMBAH DATA</h1>
    <p>Silahkan isi data dibawah ini</p>
    <form action="action.php" method="post">
        <div class="mb-3 mt-3">
            <label for="nama_anas">Nama Mahasiswa : </label>
            <input type="text" class="form-control" placeholder="Masukkan Namamu" name="nama_anas" id="nama_anas">
        </div>
        <div class="mb-3">
            <label for="alamat_anas">Alamat Mahasiswa :</label>
            <input type="text" class="form-control" id="alamat_anas" placeholder="Masukkan Alamatmu" name="alamat_anas">
        </div>
        <button type="submit" class="btn btn-secondary">Tambah Data!</button>
    </form>
    <a href="data_mhs.php" >Back to Data Table</a>
</div>
</body>
</html>