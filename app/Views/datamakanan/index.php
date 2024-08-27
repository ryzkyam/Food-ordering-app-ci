<?= $this->extend('layouts/tamplate'); ?>
<?= $this->section('content'); ?>

<body>
    <h1 class="txt text-5xl  m-5 text-center">Daftar Table Pesanan</h1>
    <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-5 mb-32 ">
        <select class="select select-secondary w-full max-w-xs ml-5 ">
            <option disabled selected>Pilih meja makan</option>
            <option>001</option>
            <option>002</option>
            <option>003</option>
            <option>004</option>
            <option>005</option>
            <option>006</option>
            <option>007</option>
            <option>008</option>
        </select>
    </div>
    <ul>
        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-5 mb-96">
        <?php foreach ($dummy_data as $dummy) : ?>
            <div class=" card w-96 'bg-red-200' : 'bg-white-700' ?> shadow-xl p-5">
            <li>
                <strong>Name:</strong> <?= $dummy['name'] ?><br>
                <strong>No-table:</strong> <?= $dummy['No-table'] ?><br>
                <strong>deskripsi:</strong> <?= $dummy['address'] ?><br>
                <hr>
            </li>
        </div>
    <?php endforeach; ?>
    </div>
    </ul>
    <iv class="containerbtn grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-5 ">
    <button class="btn btn-active btn-secondary " href="#">Pesan</button>
    </iv>
</body>
<?= $this->endSection(); ?>