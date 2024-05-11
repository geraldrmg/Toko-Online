<?php
if($_POST){
    $nama=$_POST['nama'];
    $id_pelanggan=$_POST['id_pelanggan'];
    $alamat= $_POST['alamat'];
    $tlp=$_POST['tlp'];

    if(empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    } 
    else {
        include "koneksi.php";
        if(empty($alamat)){
            $update=mysqli_query($conn,"update pelanggan set nama='".$nama."',tlp='".$tlp."' where id_pelanggan = '".$id_pelanggan."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_siswa=".$id_pelanggan."';</script>";
            }
        } else {
            $update=mysqli_query($conn, "update pelanggan set nama='".$nama."',tlp='".$tlp."', alamat='".$alamat."' where id_pelanggan = '".$id_pelanggan."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
            }
        }
        
    } 
}  
?>