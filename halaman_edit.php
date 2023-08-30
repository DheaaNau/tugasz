<?php
 include 'koneksi.php';

 $id = $_GET['id_pengaduan'];
 $query = $koneksi->query("select * from pengaduan where id_pengaduan='$id'");
 $data = $query->fetch();
 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" hreft="bs/css/bootstrap.min.css">
</head>
<body>
    <?php include("navbar.php")?>
    <div class="container">
        <h1>Edit Pengaduan</h1>
        <from action="backend/proses-edit-pengaduan.php?id=<?= $id ?>" method="post">
        <div class="mb-3">
            <label for="" clas="form-label">Isi Laporan</label>
            <textarea class="form-control" name="Isi_Laporan" id="" rows="3"><?= $data['isi_laporan']?></textarea>
</div>
<button type="submit" class="btn btn-success">Update</button>
</form>
</div>
</body>
</html>