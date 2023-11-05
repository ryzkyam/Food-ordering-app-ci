<?= $this->extend('layouts/tamplate'); ?>
<?= $this->section('content'); ?>

<div class="card w-96 bg-white-700 shadow-xl">
  <figure><img src="/img/OIP.jpg" alt="Shoes" /></figure>
  <div class="card-body">
    <h1 class="card-title">MAKANAN</h1>
    <p>klik untuk lihat detail ketersediaan makanan</p>
    <div class="card-actions justify-end">
    <a  class="btn btn-primary" href="/pages/pesanan">Lihat</a>
    </div>
  </div>
</div>
<br>
<div class="card w-96  bg-white-700 shadow-xl">
  <figure><img src="/img/OIP.jpg" alt="Shoes" /></figure>
  <div class="card-body">
    <h1 class="card-title">MINUMAN</h1>
    <p>klik untuk lihat detail ketersediaan minuman</p>
    <div class="card-actions justify-end">
    <a  class="btn btn-primary" href="/pages/pesanan">Lihat</a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>


