<?php
if($_POST){
    $nama_produk=$_POST['nama_produk'];
    $id_produk=$_POST['id_produk'];
    $deskripsi= $_POST['deskripsi'];
    $harga=$_POST['harga'];
    $foto_produk= $_FILES['foto_produk']['name'];
   
    if(empty($nama_produk)){
        echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";
    } else {
        include "koneksi.php";
        $target_dir = "../assets/foto_produk/"; // Direktori tempat Anda ingin menyimpan file yang diunggah
        $target_file = $target_dir . basename($_FILES["foto_produk"]["name"]);
        if (move_uploaded_file($_FILES["foto_produk"]["tmp_name"], $target_file)) {
        $insert=mysqli_query($conn,"insert into produk (nama_produk, id_produk, deskripsi, harga, foto_produk) value ('".$nama_produk."','".$id_produk."','".$deskripsi."','".$harga."','".$foto_produk."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan produk');location.href='produk.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php';</script>";
        }
    }
}
}
?>