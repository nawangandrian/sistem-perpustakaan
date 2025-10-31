<?= $this->include('layout/header'); ?>

<div class="container my-5">
  <div class="card shadow-lg">
    <div class="card-header bg-warning text-white">Edit Kategori</div>
    <div class="card-body">
      <form action="/kategori/update/<?= $kategori['id_kategori'] ?>" method="post">
        <div class="mb-3">
          <label>Nama Kategori</label>
          <input type="text" name="nama_kategori" class="form-control" value="<?= esc($kategori['nama_kategori']) ?>" required>
        </div>

        <div class="text-end mt-3">
          <a href="/kategori" class="btn btn-secondary">Kembali</a>
          <button type="submit" class="btn btn-warning">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->include('layout/footer'); ?>
