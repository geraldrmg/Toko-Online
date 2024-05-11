<!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ubah produk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>

    <body>
        <?php
        include "koneksi.php";
        $id_produk = $_GET['id_produk'];
        $qry_get_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '$id_produk'");
        $dt_produk = mysqli_fetch_array($qry_get_produk);
        ?>
        <div class="container">
            <h3>Ubah produk</h3>
            <form action="proses_ubah_produk.php" method="post">
                <input type="hidden" name="id_produk" value="<?= $dt_produk['id_produk'] ?>">
                <label for="nama_produk">Nama produk :</label>
                <input type="text" name="nama_produk" value="<?= $dt_produk['nama_produk'] ?>" class="form-control">
                <label for="harga">harga :</label>
                <input type="text" name="harga" value="<?= $dt_produk['harga'] ?>" class="form-control">
                <label for="deskripsi">deskripsi :</label>
                <input type="deskripsi" name="deskripsi" value="" class="form-control">
        
                <br>
                <input type="submit" name="simpan" value="Simpan Perubahan" class="btn btn-primary">
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

    </html>