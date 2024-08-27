<?= $this->extend('layouts/tamplate'); ?>
<?= $this->section('content'); ?>

<?php
// Mulai atau lanjutkan sesi
session_start();

$categories = [
    ["img" => "/img/baked.jpg", "title" => "Ayam bakar", "price" => "20K", "link" => "/keranjang"],
    ["img" => "/img/OIP.jpg", "title" => "Bebek goreng", "price" => "30K", "link" => "/keranjang"],
    ["img" => "/img/new1.jpg", "title" => "Ayam asam manis", "price" => "20K", "link" => "/keranjang"],
    ["img" => "/img/new2.jpg", "title" => "Cumi goreng", "price" => "20K", "link" => "/keranjang"],
    ["img" => "/img/baked.jpg", "title" => "Ayam presto", "price" => "20K", "link" => "/keranjang"],
    ["img" => "/img/baked.jpg", "title" => "Soto banteng", "price" => "25K", "link" => "/keranjang"],
    ["img" => "/img/baked.jpg", "title" => "Cumi goreng", "price" => "20K", "link" => "/keranjang"],
    ["img" => "/img/baked.jpg", "title" => "Ayam presto", "price" => "20K", "link" => "/keranjang"]
];

// Periksa apakah kunci 'cart' ada dalam sesi, jika tidak, inisialisasi sebagai array kosong
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Proses klik tombol Beli Sekarang
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id']; // Anggap Anda memiliki ID produk yang unik untuk setiap item

    // Tambahkan produk ke keranjang
    $_SESSION['cart'][] = $categories[$productId];
}

// Proses klik tombol Clear Cart
if (isset($_SESSION['cart'])) {
    $_SESSION['cart'] = []; // Mengosongkan keranjang
}

?>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-5 mb-96">
    <?php foreach ($categories as $productId => $category) : ?>
        <form method="post">
            <div class="card w-96 bg-base-56 shadow-xl">
                <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                <figure class="px-10 pt-10">
                    <img src="<?php echo $category['img'] ?>" alt="logo" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title"><?php echo $category['title'] ?></h2>
                    <p><?php echo $category['price'] ?></p>
                    <div class="card-actions">
                        <button type="submit" class="btn btn-primary bg-blue-500 text-white ">pesan Sekarang</button>
                    </div>
                </div>
            </div>
        </form>
    <?php endforeach; ?>
</div>




  <?= $this->endSection(); ?>



  