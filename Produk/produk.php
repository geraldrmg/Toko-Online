berikut:
<?php 
    include "../login/header.php";
?>
<h2>Daftar Produk</h2>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_produk=mysqli_query($conn,"select * from produk");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <img src="../assets/foto_produk/<?=$dt_produk['foto_produk']?>" class="card-img-top" style="height: 250px; object-fit: cover">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
                <p class="card-text"><?=substr($dt_produk['deskripsi'], 0,20)?></p>
                <a href="beli_produk.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-primary">Beli</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php 
    include "../login/footer.php";
?>
