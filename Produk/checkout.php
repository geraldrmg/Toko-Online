<?php 
session_start();
include "koneksi.php";
$cart = @$_SESSION['cart'];
if(count($cart) > 0){
    // Hitung total harga
    $total_harga = 0;
    foreach ($cart as $key_produk => $val_produk) {
        $subtotal = $val_produk['harga'] * $val_produk['qty'];
        $total_harga += $subtotal;
    }

    // Insert data into pembelian_produk table
    $insert_pembelian = mysqli_query($conn, "INSERT INTO pembelian_produk (id_pelanggan, id_produk, nama_produk, tgl_pembelian, total_harga, qty) VALUES ('".$_SESSION['id_pelanggan']."', '".$val_produk['id_produk']."', '".$_SESSION['nama_produk']."', '".date('Y-m-d')."', ".$total_harga.", '".$val_produk['qty']."')");
    
    if($insert_pembelian) {
        // Get the last inserted ID
        $id_pembelian = mysqli_insert_id($conn);
        
        // Insert data into detail_pembelian_produk table
        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn, "INSERT INTO detail_pembelian_produk (id_pembelian_produk, id_produk, qty) VALUES ('".$id_pembelian."', '".$val_produk['id_produk']."', '".$val_produk['qty']."')");
        }
        
        // Unset the cart session
        unset($_SESSION['cart']);
        
        // Redirect with success message
        echo '<script>alert("Anda berhasil membeli produk");location.href="histori_pembelian.php"</script>';
    } else {
        // Handle insertion error
        echo "Error: " . mysqli_error($conn);
    }
}
?>