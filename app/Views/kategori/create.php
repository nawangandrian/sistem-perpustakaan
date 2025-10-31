<?= $this->include('layout/header'); ?>

<div class="container my-5">
  <div class="card shadow-lg">
    <div class="card-header bg-success text-white">Tambah Kategori</div>
    <div class="card-body">
      <form action="/kategori/store" method="post">
        <div class="mb-3">
          <label>Nama Kategori</label>
          <input type="text" name="nama_kategori" class="form-control" required>
        </div>
        <div class="text-end mt-3">
          <a href="/kategori" class="btn btn-secondary">Kembali</a>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->include('layout/footer'); ?>
