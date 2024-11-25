<?php
include("../koneksi.php");

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$tanggal = $_POST['tanggal'];
$gaji = $_POST['gaji'];

$save = "INSERT INTO  karyawan (nama,jabatan,tanggal,gaji)
 VALUES ('$nama','$jabatan','$tanggal','$gaji')";

$proses = mysqli_query($koneksi, $save);

// header("location.index.php");
?>
<script>
    document.location="index.php";
</script>