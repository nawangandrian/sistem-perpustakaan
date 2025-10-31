<?= $this->include('layout/header'); ?>

<div class="container my-5">
  <div class="card shadow-lg">
    <div class="card-header bg-warning text-white">Edit Penulis</div>
    <div class="card-body">
      <form action="/penulis/update/<?= $penulis['id_penulis'] ?>" method="post">
        <div class="mb-3">
          <label>Nama Penulis</label>
          <input type="text" name="nama_penulis" class="form-control" value="<?= esc($penulis['nama_penulis']) ?>" required>
        </div>

        <div class="mb-3">
          <label>Email</label>
          <input type="email" name="email" class="form-control" value="<?= esc($penulis['email']) ?>">
        </div>

        <div class="text-end mt-3">
          <a href="/penulis" class="btn btn-secondary">Kembali</a>
          <button type="submit" class="btn btn-warning">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->include('layout/footer'); ?>
