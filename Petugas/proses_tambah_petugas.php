<?php
if ($_POST) {
    $nama_petugas = $_POST['nama_petugas'];
    $id_petugas = $_POST['id_petugas'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    if (empty($nama_petugas)) {
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='proses_tambah_petugas.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='proses_tambah_petugas.php';</script>";
    } elseif (empty($level)) {
        echo "<script>alert('level tidak boleh kosong');location.href='proses_tambah_petugas.php';</script>";
    } elseif (empty($id_petugas)) {
        echo "<script>alert('id petugas tidak boleh kosong');location.href='proses_tambah_petugas.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "insert into petugas (nama_petugas, id_petugas, password, level) value ('" . $nama_petugas . "','" . $id_petugas . "','" . ($password) . "','" . $level . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan petugas');location.href='tampil_petugas.php';</script>";
        } else 
            echo "<script>alert('Gagal menambahkan petugas');location.href='proses_tambah_petugas,.php';</script>";
        }
    }
