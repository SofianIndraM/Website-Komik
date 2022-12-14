<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="my-2">Form Ubah Data Komik</h1>
            <form action="/update/<?= $komik['id']; ?>" method="POST">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
  <div class="form-group row">
    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= $komik['judul']; ?>">
      <div class="invalid-feedback">
        <?= $validation->getError('judul'); ?>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $komik['penulis']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $komik['penerbit']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sampul" name="sampul" value="<?= $komik['sampul']; ?>">
    </div>
  </div>

 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Ubah Data</button>
    </div>
  </div>
</form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>