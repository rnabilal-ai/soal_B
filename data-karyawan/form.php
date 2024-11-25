<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Event</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php
    include_once('../navbar.php');
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Data Karyawan</h3>
                <span class="float-end"><a class="btn btn-primary"><i class="fa-solid fa-plus"></i>Tambah data</a></span>
            </div>
            <div class="card-body">
            <form action="proses.php" method="post">
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Karyawan</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jabatan</label>
                <input type="text" name="lokasi" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Gaji</label>
                <input type="text" name="gaji" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>
    
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>