<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="/img/<?= $komik['sampul']; ?>" alt="..." class="card-img">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $komik['judul']; ?></h5>
        <p class="card-text"><b>Penulis : </b><?= $komik['penulis']; ?></p>
        <p class="card-text"><small class="text-muted"><b>Penerbit : </b><?= $komik['penerbit']; ?></small></p>

        <a href="/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>
        <a href="/delete/<?= $komik['id']; ?>" class="btn btn-danger">Delete</a>
        <br><br>
        <a href="/komik">Kembali ke menu awal</a>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>