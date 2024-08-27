<?= $this->extend('layouts/tamplate'); ?>
<?= $this->section('content'); ?>

<?php
$categories = [
  ["img" => "/img/OIUG6U0.jpg", "title" => "MAKANAN1", "link" => "/makanan"],
  ["img" => "/img/OIUG6U0.jpg", "title" => "MINUMAN", "link" => "/pages/latihan1"],

];
?>

<div class="container overflow-x-auto sticky top-0 bg-white">
  <div class="row">
    <?php foreach ($categories as $category) : ?>
      <div class="col-md-3 col-lg-2">
        <div class="card <?php echo $category['title'] === 'MINUMAN' || $category['title'] === 'seafood' ? 'color-white' : 'bg-light' ?>">
          <img src="<?php echo $category['img']; ?>" class="card-img-top" alt="<?php echo $category['title']; ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $category['title']; ?></h5>
            <p class="card-text">Klik untuk lihat detail ketersediaan <?php echo strtolower($category['title']); ?></p>
            <a href="<?php echo $category['link']; ?>" class="btn btn-primary">Lihat</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<?= $this->endSection(); ?>