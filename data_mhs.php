<?php
include 'koneksi.php';
$sql = "SELECT * FROM tbl_anas ORDER BY id_anas";
$hasil = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en"><head>
  <title>Data Prodi Teknik</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
    body{
      background-color: skyblue;
    }
    table {
      background-color: white;
    }
  </style>
</head>
<body>
<div class="container mt-3">
  Nama  : Anas Khoiri Abdillah <br>
  NIM   : 210411100025 <br>
  Kelas : PAW C
  <hr>
  <h2>DATA MAHASISWA TEKNIK</h2>
  <p>Data ini dari tabel MySQL punya Anas </p> 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Mahasiswa</th>
        <th>Nama Mahasiswa</th>
        <th>Alamat Mahasiswa</th>
        <th>action</th>
      </tr>
    </thead>
    <?php
    while($row = mysqli_fetch_assoc($hasil)) {
    ?>
    <tr>
        <td><?= $row["id_anas"]; ?></td>
        <td><?= $row["nama_anas"]; ?></td>
        <td><?= $row["alamat_anas"]; ?></td>
        <td>
        <a class="btn btn-info" href="form_edit.php?id=<?= $row["id_anas"]; ?>">ubah</a>
        <a class="btn btn-danger" href="hapus.php?id=<?= $row["id_anas"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
    </tr>
    <?php } ?>
  </table>
<a href="form_mhs.php" class="btn btn-primary">Tambah</a>

<br>

</div>

</body>
</html>