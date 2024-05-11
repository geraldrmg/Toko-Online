<?php
// Mulai sesi
session_start();

// Hapus semua data sesi
session_unset();

// Hapus sesi dari server
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 50px;
        }
        .rounded-box {
            box-shadow: 4px 4px 5px -4px;
            padding: 10px;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md"></div>
            <div class="col-md rounded-box bg-light">
                <h3 class="text-center">Anda telah berhasil logout</h3>
                <center><a href="../Login/login.php" class="btn btn-success">Login Kembali</a></center>
            </div>
            <div class="col-md"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>