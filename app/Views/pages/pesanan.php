<?= $this->extend('layouts/tamplate'); ?>
<?= $this->section('content'); ?>
<?php
// pesanan.php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan</title>
    <!-- Sertakan file CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-8">
    <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
        <h1 class="text-3xl font-bold mb-4">Detail Pesanan</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($_SESSION['cart'] as $product): ?>
                <div class="bg-white p-6 rounded-lg shadow-md mb-4">
                    <img src="<?= $product['img'] ?>" alt="<?= $product['title'] ?>" class="mb-4 max-w-full h-auto">
                    <h2 class="text-xl font-semibold"><?= $product['title'] ?></h2>
                    <p class="text-gray-700 mb-2">Harga: <?= $product['price'] ?></p>
                    <a href="<?= $product['link'] ?>" class="text-blue-500">Lihat Detail</a>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Tombol untuk proses pesanan -->
        <form action='/pages/shope' method='post'>
            <button type='submit' class='bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600'>Proses Pesanan</button>
        </form>
        <br>
        <form action='proses_pesanan.php' method='post'>
            <button type='submit' class='bg-red-500 text-white px-4 py-2 rounded-md '>Batalkan Pesanan</button>
        </form>
    <?php else: ?>
        <p class="text-xl">Keranjang belanja kosong.</p>
    <?php endif; ?>
</div >
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>

<?= $this->endSection(); ?>