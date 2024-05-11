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
    <h3>Tambah produk</h3>
    <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
        
    Nama produk :
        <input type="text" name="nama_produk" value="" class="form-control">
        
        ID produk : 
        <input type="text" name="id_produk" value="" class="form-control">
       
        deskripsi : 
        <input type="text" name="deskripsi" value="" class="form-control">
        
        harga :
        <input type="text" name="harga" value="" class="form-control">

        Foto produk:
        <input type="file" name="foto_produk" value="" class="card-img-top">
        

        <br/>
        <input type="submit" name="simpan" value="Tambah produk" class="btn btn-primary">
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<?php 
    include "../Login/footer.php";
?>