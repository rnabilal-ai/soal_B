<?php
include("../koneksi.php");

$id = $_GET['xyz'];

$hapus = "DELETE FROM karyawan WHERE id='$id'";

$proses = mysqli_query($koneksi,$hapus);

// header("location.index.php");
?>
<script>
    document.location="index.php";
</script>