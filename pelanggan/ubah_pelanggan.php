<!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ubah pelanggan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>

    <body>
        <?php
        include "koneksi.php";
        $id_pelanggan = $_GET['id_pelanggan'];
        $qry_get_pelanggan = mysqli_query($conn, "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'");
        $dt_pelanggan = mysqli_fetch_array($qry_get_pelanggan);
        ?>
        <div class="container">
            <h3>Ubah pelanggan</h3>
            <form action="proses_ubah_pelanggan.php" method="post">
                <input type="hidden" name="id_pelanggan" value="<?= $dt_pelanggan['id_pelanggan'] ?>">
                <label for="nama">Nama pelanggan :</label>
                <input type="text" name="nama" value="<?= $dt_pelanggan['nama'] ?>" class="form-control">
                <label for="tlp">Telp :</label>
                <input type="text" name="tlp" value="<?= $dt_pelanggan['tlp'] ?>" class="form-control">
                <label for="alamat">alamat :</label>
                <input type="alamat" name="alamat" value="" class="form-control">
        
                <br>
                <input type="submit" name="simpan" value="Simpan Perubahan" class="btn btn-primary">
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

    </html>