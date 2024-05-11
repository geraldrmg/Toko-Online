<?php 
    include "header_petugas.php";
?>
<style>
    /* CSS untuk mengatur posisi gambar */
    img {
        position: absolute;
        top: 55px; /* Mengatur jarak dari atas */
        right: 0px; /* Mengatur jarak dari kanan */
        width: 1000px;
        height: 700px;
    }

    body {
        background-color: #E5F3FF;
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
        position: absolute;
        top: 100px; /* Mengatur jarak dari atas */
        right: 745px;
        width: 29%;
        bottom: 35%;
        margin:  9em 20% 0 20%; 
        text-align: center;
        background-color: #E5F3FF;
        color: #FFA078;
        padding: 5px;
        border-radius: 10px;
        /* box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2); */
    }

</style>
<!-- Perbaiki sintaks PHP untuk menampilkan nama pengguna -->
<h2>Selamat Datang <?=$_SESSION['nama_petugas']?> Di Website Toko Online.</h2>
<img src="../assets/image1.gif" alt="">

<?php 
    include "footer.php";
?>