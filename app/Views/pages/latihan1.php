<?= $this->extend('layouts/tamplate'); ?>
<?= $this->section('content'); ?>
<?php
// Mulai atau lanjutkan sesi
session_start();

$drinks = [
    ["img" => "/img/minuman1.jpg", "title" => "Jus Alpukat", "price" => "10K", "link" => "/keranjang"],
    ["img" => "/img/minuman2.jpg", "title" => "Fanta/Coca-Cola", "price" => "8K", "link" => "/keranjang"],
    ["img" => "/img/minuman3.jpg", "title" => "Teh Manis", "price" => "2K", "link" => "/keranjang"],
    ["img" => "/img/minuman5.jpg", "title" => "Coffe Capucino", "price" => "10K", "link" => "/keranjang"],
    ["img" => "/img/minuman5.jpg", "title" => "Coffe Capucino", "price" => "10K", "link" => "/keranjang"],
    ["img" => "/img/minuman6.jpg", "title" => "Americano", "price" => "8K", "link" => "/keranjang"],
    ["img" => "/img/minuman7.jpg", "title" => "Milo", "price" => "7K", "link" => "/keranjang"],
    ["img" => "/img/minuman3.jpg", "title" => "Teh Manis", "price" => "2K", "link" => "/keranjang"]
];

// Periksa apakah kunci 'cart' ada dalam sesi, jika tidak, inisialisasi sebagai array kosong
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Proses klik tombol Beli Sekarang
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $drinkId = $_POST['drink_id']; // Anggap Anda memiliki ID minuman yang unik untuk setiap item

    // Tambahkan minuman ke keranjang
    $_SESSION['cart'][] = $drinks[$drinkId];
}

?>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-5 mb-96 overflow-y-auto">
    <?php foreach ($drinks as $drinkId => $drink) : ?>
        <form method="post">
            <div class="card w-80 bg-base-56 shadow-xl m-10">
                <input type="hidden" name="drink_id" value="<?php echo $drinkId; ?>">
                <figure class="px-10 pt-10">
                    <img src="<?php echo $drink['img'] ?>" alt="logo" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title"><?php echo $drink['title'] ?></h2>
                    <p><?php echo $drink['price'] ?></p>
                    <div class="card-actions">
                        <button type="submit" class="btn btn-primary bg-blue-500 text-white">Pesan Sekarang</button>
                    </div>
                </div>
            </div>
        </form>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>