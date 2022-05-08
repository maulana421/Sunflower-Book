<?php

include('../daf/connection.php');

if (isset($_POST['submit'])) {
    $judul_buku= $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $statement = pg_query($connection, "INSERT INTO buku(judul_buku, penulis, penerbit) VALUES('$judul_buku','$penulis', '$penerbit')");
    if ($statement) {   
        $_SESSION['message'] = '<div class="alert alert-success" role="alert">Berhasil Menambahkan Data</div>';
        header("location:../index.php");
    }
    else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Menambahkan Data</div>';
        header("location:../index.php");       
    }
}

?>