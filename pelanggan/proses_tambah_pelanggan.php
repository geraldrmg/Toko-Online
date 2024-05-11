<?php
if($_POST){
    $nama = $_POST['nama'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $alamat = $_POST['alamat'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $tlp = $_POST['tlp'];

    if(empty($nama)){
        echo "<script>alert('Nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($id_pelanggan)){
        echo "<script>alert('ID pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($tlp)){
        echo "<script>alert('Telepon tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO pelanggan (nama, id_pelanggan, alamat, username, pasword, tlp) VALUES ('".$nama."', '".$id_pelanggan."', '" .$alamat. "', '" .$username. "', '" .($password). "','" .$tlp. "')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='../Login/login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        }
    }
}
?>
