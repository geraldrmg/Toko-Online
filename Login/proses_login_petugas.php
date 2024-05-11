<?php
    include "koneksi.php"; // Pastikan file koneksi.php tersedia dan sesuai dengan konfigurasi server Anda.

    if($_POST){
        $nama_petugas = $_POST['nama_petugas'];
        $password = $_POST['password']; // Ambil password dari input POST
        
        if(empty($nama_petugas)){
            echo "<script>alert('Nama petugas tidak boleh kosong');location.href='login_petugas.php';</script>";
            exit(); // Keluar dari skrip setelah menampilkan pesan kesalahan
        } 
        elseif (empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login_petugas.php';</script>";
            exit(); // Keluar dari skrip setelah menampilkan pesan kesalahan
        } 
        else {
            $qry_login = mysqli_query($conn, "SELECT * FROM petugas WHERE nama_petugas = '".$nama_petugas."' AND password = '".$password."'");
            if($qry_login){
                if(mysqli_num_rows($qry_login) > 0){
                    $dt_login = mysqli_fetch_array($qry_login);
                    session_start();
                    $_SESSION['id_petugas'] = $dt_login['id_petugas'];
                    $_SESSION['nama_petugas'] = $dt_login['nama_petugas'];
                    $_SESSION['status_login'] = true;
                    header("location: home_petugas.php"); // Alamat file home.php setelah login berhasil
                    exit(); // Keluar dari skrip setelah pengalihan header
                } 
                else {
                    echo "<script>alert('Username atau password tidak benar');location.href='login_petugas.php';</script>";
                    exit(); // Keluar dari skrip setelah menampilkan pesan kesalahan
                }
            } 
            else {
                echo "<script>alert('Gagal melakukan koneksi ke database atau query tidak berhasil');location.href='login_petugas.php';</script>";
                exit(); // Keluar dari skrip setelah menampilkan pesan kesalahan
            }
        }
    }
?>