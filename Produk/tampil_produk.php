<?php 
    include "../Login/header_petugas.php";
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tampil produk</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA produk</th>
                <th>ID produk</th>
                <th>deskripsi</th>
                <th>harga</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_produk = mysqli_query($conn,"SELECT * FROM produk");
            $no=0;
            while($data_produk = mysqli_fetch_array($qry_produk)){
                $no++;
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_produk['nama_produk'] ?></td>
                    <td><?= $data_produk['id_produk'] ?></td>
                    <td><?= $data_produk['deskripsi'] ?></td>
                    <td><?= $data_produk['harga'] ?></td>
                    <td>
                        <a href="ubah_produk.php?id_produk=<?= $data_produk['id_produk'] ?>" class="btn btn-success">Ubah</a> | 
                        <a href="hapus_produk.php?id_produk=<?= $data_produk['id_produk'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<?php 
    include "../Login/footer.php";
?>
