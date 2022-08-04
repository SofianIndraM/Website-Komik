<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="my-2">Form Tambah Komik</h1>
            <form action="/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
  <div class="form-group row">
    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= old('judul'); ?>">
      <div class="invalid-feedback">
        <?= $validation->getError('judul'); ?>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
    <div class="col-sm-10">
      <div class="custom-file">
  <input type="file" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>"" id="sampul" name="sampul">
  <div class="invalid-feedback">
        <?= $validation->getError('sampul'); ?>
      </div>
  <label class="custom-file-label" for="sampul">Pilih Gambar</label>
</div>
    </div>
  </div>

 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Tambah Data</button>
    </div>
  </div>
</form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>