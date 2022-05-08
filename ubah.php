<?php

include('daf/connection.php');

$query = pg_query($connection, "SELECT * FROM buku WHERE id=".$_GET['id']);
while($row = pg_fetch_array($query)){
    $id = $row['id'];
    $judul_buku = $row['judul_buku'];
    $penulis = $row['penulis'];
    $penerbit = $row['penerbit'];
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('daf/head.php') ?>

<body>
    
    <?php include('daf/navbar.php') ?>

    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <h3 class="mb-4">Ubah Detail Barang</h3>
        <?php if(!empty($_SESSION['message'])){
            echo $_SESSION['message'];
            echo '<meta http-equiv="refresh" content="3;url=ubah.php">';
            $_SESSION['message'] = null;
        } ?>
        <div class="card mt-5">
            <form action="proses/ubah_proses.php" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
                        <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo $judul_buku; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Kategori</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $penulis; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control mb-5" id="penerbit" name="penerbit" value="<?php echo $penerbit; ?>" required>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-secondary mr-3" type="button" onclick="history.back()">Batal</button>
                        <input type="submit" name="submit" class="btn btn-primary" value="Simpan" onclick="return confirm('Apakah Anda Yakin?')">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include('daf/js.php') ?>

</body>
</html>