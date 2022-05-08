<?php

include('../daf/connection.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $sql = pg_query($connection,"UPDATE buku SET judul_buku='$judul_buku', penulis='$penulis', penerbit='$penerbit' WHERE id=$id ");
    // $result = pg_affected_rows(pg_query($connection,$sql));
    if($sql) {
        $_SESSION['message'] = '<div class="alert alert-success" role="alert">Berhasil Mengubah Data</div>';
        header("location:../index.php");
    }
    else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Mengubah Data</div>';
        header("location:../ubah.php?id=$id");
    }
}

?>