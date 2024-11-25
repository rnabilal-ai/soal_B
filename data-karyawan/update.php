<?php
include("../koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$tanggal = $_POST['tanggal'];
$gaji = $_POST['gaji'];

$sunting = "UPDATE karyawan SET nama='$nama',jabatan='$jabatan',tanggal='$tanggal',gaji='$gaji' WHERE id='$id' ";

$proses = mysqli_query($koneksi,$sunting);

// header("location.index.php");
?>
<script>
    document.location="index.php";
</script>