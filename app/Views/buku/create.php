<?= $this->include('layout/header'); ?>

<div class="container my-5">
  <div class="card shadow-lg">
    <div class="card-header bg-success text-white">Tambah Buku</div>
    <div class="card-body">
      <form action="/buku/store" method="post">
        <div class="mb-3">
          <label>Judul Buku</label>
          <!-- name sesuai field model: judul_buku -->
          <input type="text" name="judul_buku" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Penulis</label>
          <!-- pilih penulis dari tabel penulis, name sesuai: id_penulis -->
          <select name="id_penulis" class="form-select" required>
            <option value="">-- Pilih Penulis --</option>
            <?php foreach($penulis as $p): ?>
              <!-- gunakan key id_penulis sesuai migration/model -->
              <option value="<?= $p['id_penulis'] ?>"><?= esc($p['nama_penulis']) ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="mb-3">
          <label>Kategori</label>
          <!-- name sesuai: id_kategori -->
          <select name="id_kategori" class="form-select" required>
            <option value="">-- Pilih Kategori --</option>
            <?php foreach($kategori as $k): ?>
              <!-- gunakan key id_kategori sesuai migration/model -->
              <option value="<?= $k['id_kategori'] ?>"><?= esc($k['nama_kategori']) ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="mb-3 row">
          <div class="col">
            <label>Tahun Terbit</label>
            <!-- name sesuai: tahun_terbit -->
            <input type="number" name="tahun_terbit" class="form-control" min="1900" max="<?= date('Y') ?>" placeholder="2023">
          </div>
          <div class="col">
            <label>Stok</label>
            <!-- name sesuai: stok -->
            <input type="number" name="stok" class="form-control" min="0" value="1">
          </div>
        </div>

        <div class="text-end mt-3">
          <a href="/buku" class="btn btn-secondary">Kembali</a>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->include('layout/footer'); ?>
