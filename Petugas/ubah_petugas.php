<!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ubah Petugas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>

    <body>
        <?php
        include "koneksi.php";
        $id_petugas = $_GET['id_petugas'];
        $qry_get_petugas = mysqli_query($conn, "SELECT * FROM petugas WHERE id_petugas = '$id_petugas'");
        $dt_petugas = mysqli_fetch_array($qry_get_petugas);
        ?>
        <div class="container">
            <h3>Ubah Petugas</h3>
            <form action="proses_ubah_petugas.php" method="post">
                <input type="hidden" name="id_petugas" value="<?= $dt_petugas['id_petugas'] ?>">
                <label for="nama_petugas">Nama Petugas :</label>
                <input type="text" name="nama_petugas" value="<?= $dt_petugas['nama_petugas'] ?>" class="form-control">
                <label for="level">Level :</label>
                <input type="text" name="level" value="<?= $dt_petugas['level'] ?>" class="form-control">
                <label for="password">Password :</label>
                <input type="password" name="password" value="" class="form-control">
        
                <br>
                <input type="submit" name="simpan" value="Simpan Perubahan" class="btn btn-primary">
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

    </html>