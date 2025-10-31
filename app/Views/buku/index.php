<?= $this->include('layout/header'); ?>

<div class="container my-5">

  <!-- Header Section -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold text-success mb-0">
      <i class="bi bi-book-half me-2"></i> Data Buku
    </h3>
    <a href="/buku/create" class="btn btn-success shadow-sm">
      <i class="bi bi-plus-circle me-1"></i> Tambah Buku
    </a>
  </div>

  <!-- Card Container -->
  <div class="card shadow-lg border-0 rounded-4">
    <div class="card-body">

      <!-- Alert Section (opsional) -->
      <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <i class="bi bi-check-circle-fill me-2"></i>
          <?= session()->getFlashdata('success'); ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      <?php endif; ?>

      <!-- Tabel -->
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-success">
            <tr>
              <th scope="col" class="text-center">No</th>
              <th scope="col">Judul Buku</th>
              <th scope="col">Kategori</th>
              <th scope="col">Penulis</th>
              <th scope="col" class="text-center">Tahun</th>
              <th scope="col" class="text-center">Stok</th>
              <th scope="col" class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if(empty($buku)): ?>
              <tr>
                <td colspan="7" class="text-center text-muted py-4">
                  <i class="bi bi-emoji-frown"></i> Belum ada data buku.
                </td>
              </tr>
            <?php else: ?>
              <?php $no=1; foreach($buku as $b): ?>
                <tr>
                  <td class="text-center"><?= $no++ ?></td>
                  <td class="fw-semibold"><?= esc($b['judul_buku']) ?></td>
                  <td><?= esc($b['nama_kategori']) ?></td>
                  <td><?= esc($b['nama_penulis']) ?></td>
                  <td class="text-center"><?= esc($b['tahun_terbit']) ?></td>
                  <td class="text-center">
                    <span class="badge bg-<?= $b['stok'] > 0 ? 'success' : 'danger' ?>">
                      <?= esc($b['stok']) ?>
                    </span>
                  </td>
                  <td class="text-center">
                    <a href="/buku/edit/<?= $b['id_buku'] ?>" class="btn btn-warning btn-sm me-1 shadow-sm">
                      <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="/buku/delete/<?= $b['id_buku'] ?>" 
                       class="btn btn-danger btn-sm shadow-sm" 
                       onclick="return confirm('Yakin ingin menghapus buku ini?')">
                      <i class="bi bi-trash3"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>

<?= $this->include('layout/footer'); ?>
