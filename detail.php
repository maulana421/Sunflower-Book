<?php

include('daf/connection.php');
$query = pg_query($connection, "SELECT * FROM buku WHERE id=".$_GET['id']);
while($row = pg_fetch_array($query)){
    $id = $row['id'];
    $judul_buku = $row['judul_buku'];
    $penulis = $row['penulis'];
    $penerbit = $row['penerbit'];
}

$sorter = pg_query($connection, "SELECT * FROM tb_barang WHERE penulis='$penulis' AND id != $id");

?>

<!DOCTYPE html>
<html lang="en">

<?php include('daf/head.php'); ?>

<body>
    
    <?php include('daf/navbar.php'); ?>


    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
            <div class="pt-5">
                <h3 class="text-center"><b>Detail Buku</b></h3>
            </div>
            <div class="card mt-5">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Judul Buku</label>
                            <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo $judul_buku; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nama">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $penulis; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nama">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $penerbit; ?>" disabled>
                        </div>
                        <div class="card-footer">
                            <a href="ubah.php?id=<?php echo $id; ?>" class="btn btn-secondary mr-3">Ubah</a>
                            <a href="proses/hapus_proses.php?id=<?php echo $id; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    <?php include('daf/js.php'); ?>

</body>
</html>