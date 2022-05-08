<?php 

include('daf/connection.php'); 

?>

<!DOCTYPE html>
<html>

    <?php include('daf/head.php'); ?>

    <body>
        <?php include('daf/navbar.php'); ?>

        <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
            <div class="pt-5">
                <h3 class="text-center"><b>Tambah Buku</b></h3>
                <?php if(!empty($_SESSION['message'])){
                    echo $_SESSION['message'];
                    $_SESSION['message'] = null;
                } ?>
            </div>
            <div class="card mt-5">
                <form action="proses/tambah_proses.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul_buku">Judul Buku</label>
                            <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Masukan Judul Buku..." required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukan Penulis..." required>
                        </div>
                        <div class="form-group">
                            <label for="stok">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukan Penerbit..." required>
                        </div>
                    <div class="mt-5 text-right">
                        <button class="btn btn-secondary mr-3" type="button" onclick="history.back()">Batal</button>
                        <input type="submit" name="submit" value="Simpan" onclick="return confirm('Apakah anda yakin?')" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

        <?php include('daf/js.php'); ?>

    </body>
</html>