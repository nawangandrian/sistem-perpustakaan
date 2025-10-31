<?= $this->include('layout/header'); ?>

<div class="container my-5">
  <div class="card shadow-lg">
    <div class="card-header bg-success text-white">Tambah Penulis</div>
    <div class="card-body">
      <form action="/penulis/store" method="post">
        <div class="mb-3">
          <label>Nama Penulis</label>
          <input type="text" name="nama_penulis" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Email</label>
          <input type="email" name="email" class="form-control">
        </div>

        <div class="text-end mt-3">
          <a href="/penulis" class="btn btn-secondary">Kembali</a>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->include('layout/footer'); ?>
