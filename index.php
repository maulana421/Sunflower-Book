<?php 

include('daf/connection.php'); 
$show_data = pg_query($connection, "SELECT * FROM buku ORDER BY id DESC");
$hitung1 = pg_num_rows($show_data);

$ctg = pg_query($connection, "SELECT DISTINCT penulis FROM buku");
$hitung2 = pg_num_rows($ctg);

// $updated = pg_query($connection, "SELECT judul_buku, TO_CHAR(updated, 'DD Month YYYY') AS tgl FROM buku WHERE updated >= date_trunc('day', current_timestamp - interval '1 week')");

?>

<!DOCTYPE html>
<html lang="en">

<?php include('daf/head.php'); ?>


<body>

    <?php include('daf/navbar.php'); ?>

    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <h3 class="mb-4">Selamat Datang</h3>
            <?php if(!empty($_SESSION['message'])){
                echo $_SESSION['message'];
                echo '<meta http-equiv="refresh" content="3;url=index.php">';
                $_SESSION['message'] = null;
            } ?>
        <div class="row">
            <div class="col-md-12 mb-4">
                
                <div class="card">
                    <div class="card-header text-Black">
                      Daftar Buku
                    </div>
                    <?php while($row = pg_fetch_array($show_data)): ?>
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-7 col-sm-7 col-md-8">
                                    <p><?= $row['judul_buku']; ?></p>
                                </div>
                                <div class="col-2 col-sm-2 col-md-2">
                                    <p class="text-wrap"><?= $row['penerbit']; ?></p>
                                </div>
                                <div class="col-3 col-sm-3 col-md-2">
                                    <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-primary">Detail<i class="bi bi-caret-right-fill ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                  </div>
            </div>
        </div>
        <div class="col-md-4">
                <a href="tambah.php" class="btn btn-Primary w-100 mb-4">Tambah Buku Baru</a>                
        </div>
    </div>

    <?php include('daf/js.php'); ?>
    
</body>

</html>
