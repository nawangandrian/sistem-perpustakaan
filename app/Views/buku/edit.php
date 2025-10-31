<?= $this->include('layout/header'); ?>

<div class="container my-5">
  <div class="card shadow-lg">
    <div class="card-header bg-warning text-white">Edit Buku</div>
    <div class="card-body">
      <form action="/buku/update/<?= $buku['id_buku'] ?>" method="post">
        <div class="mb-3">
          <label>Judul Buku</label>
          <input type="text" name="judul_buku" class="form-control" value="<?= esc($buku['judul_buku']) ?>" required>
        </div>

        <div class="mb-3">
          <label>Penulis</label>
          <select name="id_penulis" class="form-select" required>
            <?php foreach($penulis as $p): ?>
              <option value="<?= $p['id_penulis'] ?>" <?= $p['id_penulis'] == $buku['id_penulis'] ? 'selected' : '' ?>>
                <?= esc($p['nama_penulis']) ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="mb-3">
          <label>Kategori</label>
          <select name="id_kategori" class="form-select" required>
            <?php foreach($kategori as $k): ?>
              <option value="<?= $k['id_kategori'] ?>" <?= $k['id_kategori'] == $buku['id_kategori'] ? 'selected' : '' ?>>
                <?= esc($k['nama_kategori']) ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="mb-3 row">
          <div class="col">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control" value="<?= esc($buku['tahun_terbit']) ?>">
          </div>
          <div class="col">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="<?= esc($buku['stok']) ?>">
          </div>
        </div>

        <div class="text-end mt-3">
          <a href="/buku" class="btn btn-secondary">Kembali</a>
          <button type="submit" class="btn btn-warning">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->include('layout/footer'); ?>
