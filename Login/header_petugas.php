<?php
session_start();
if (!isset($_SESSION['status_login']) || $_SESSION['status_login'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            padding-top: 70px;
            /* Mencegah navbar overlap content */
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff;
            transition: transform 0.3s;
        }

        .navbar-nav .nav-link:hover {
            transform: translateY(-3px);
        }

        .navbar-nav .nav-link.active {
            font-weight: bold;
        }

        .card {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-store"></i></i> Toko Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'home_petugas.php') ? 'active' : ''; ?>" href="../Login/home_petugas.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'tampil_produk.php') ? 'active' : ''; ?>" href="../Produk/tampil_produk.php"><i class="fas fa-book-open"></i> Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'tambah_produk.php') ? 'active' : ''; ?>" href="../Produk/tambah_produk.php"><i class="fa-solid fa-cart-plus"></i>Tambah</a>
                    </li>       
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4"> <!-- Container untuk konten -->
    </div> <!-- Penutup container konten -->
</body>

</html>