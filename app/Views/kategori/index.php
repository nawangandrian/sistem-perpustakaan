<?= $this->include('layout/header'); ?>

<div class="container my-5">

  <!-- Header Section -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold text-primary mb-0">
      <i class="bi bi-tags me-2"></i> Data Kategori
    </h3>
    <a href="/kategori/create" class="btn btn-primary shadow-sm">
      <i class="bi bi-plus-circle me-1"></i> Tambah Kategori
    </a>
  </div>

  <!-- Card Container -->
  <div class="card shadow-lg border-0 rounded-4">
    <div class="card-body">

      <!-- Alert Section -->
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
          <thead class="table-primary">
            <tr>
              <th scope="col" class="text-center">No</th>
              <th scope="col">Nama Kategori</th>
              <th scope="col" class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if(empty($kategori)): ?>
              <tr>
                <td colspan="3" class="text-center text-muted py-4">
                  <i class="bi bi-emoji-frown"></i> Belum ada data kategori.
                </td>
              </tr>
            <?php else: ?>
              <?php $no=1; foreach($kategori as $k): ?>
                <tr>
                  <td class="text-center"><?= $no++ ?></td>
                  <td><?= esc($k['nama_kategori']) ?></td>
                  <td class="text-center">
                    <a href="/kategori/edit/<?= $k['id_kategori'] ?>" class="btn btn-warning btn-sm me-1 shadow-sm">
                      <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="/kategori/delete/<?= $k['id_kategori'] ?>" 
                       class="btn btn-danger btn-sm shadow-sm"
                       onclick="return confirm('Yakin ingin menghapus kategori ini?')">
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
