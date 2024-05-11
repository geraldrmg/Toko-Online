<?php 
    include "header.php";
?>
<style>
    /* CSS untuk mengatur posisi gambar */
    img {
        position: absolute;
        top: 55px; /* Mengatur jarak dari atas */
        right: 0px; /* Mengatur jarak dari kanan */
    }

    /* CSS untuk header */
    header {
        height: 1000px;
        min-height: 1000px;
        padding: 0 5%;
        background-repeat: no-repeat;
        background-size: contain;
        background-position: bottom right;
        position: relative; /* tambahkan properti position: relative */
    }

    h2 {
        width: 29%;
        bottom: 20%;
        margin:  9em 20% 0 20%; 
        text-align: center;
        background-color: rgba(255, 255, 255, 0.7);
        padding: 10px;
        border-radius: 10px;
        /* box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2); */
    }
</style>
<!-- Perbaiki sintaks PHP untuk menampilkan nama pengguna -->
<h2>Selamat Datang <?=$_SESSION['nama']?> Di Website Toko Online.</h2>
<img src="../assets/background_header.png" alt="">
<?php
    include "footer.php";
?>
