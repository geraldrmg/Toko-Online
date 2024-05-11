<?php include "../Login/header.php"; ?>

<h2>Keranjang Belanja</h2>

<?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
    <table class="table table-hover striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total_harga = 0;
            foreach ($_SESSION['cart'] as $key_produk => $val_produk): 
            ?>
                <tr>
                    <td><?=($key_produk+1)?></td>
                    <td><?=$val_produk['nama_produk']?></td>
                    <td><?=$val_produk['qty']?></td>
                    <td><?=$val_produk['harga']?></td>
                    <td><?=$subtotal = $val_produk['harga'] * $val_produk['qty'];
                $total_harga += $subtotal;?></td>
                    <td>
                        <a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" align="right"><strong>Total Harga:</strong></td>
                <td><?=$total_harga?></td>
                <td>
                    <a href="hapus_semua_cart.php" class="btn btn-danger"><strong>Hapus Semua</strong></a>
                </td>
            </tr>
        </tfoot>
    </table>
    <a href="checkout.php" class="btn btn-primary">Check Out</a>
<?php else: ?>
    <p>Keranjang belanja Anda kosong.</p>
<?php endif ?>

<?php include "../Login/footer.php"; ?>