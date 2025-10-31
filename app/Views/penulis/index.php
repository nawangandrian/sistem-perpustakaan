<?= $this->include('layout/header'); ?>

<div class="container my-5">

  <!-- Header Section -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold text-info mb-0">
      <i class="bi bi-person-badge me-2"></i> Data Penulis
    </h3>
    <a href="/penulis/create" class="btn btn-info shadow-sm text-white">
      <i class="bi bi-plus-circle me-1"></i> Tambah Penulis
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
          <thead class="table-info">
            <tr>
              <th scope="col" class="text-center">No</th>
              <th scope="col">Nama Penulis</th>
              <th scope="col">Email</th>
              <th scope="col" class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if(empty($penulis)): ?>
              <tr>
                <td colspan="4" class="text-center text-muted py-4">
                  <i class="bi bi-emoji-frown"></i> Belum ada data penulis.
                </td>
              </tr>
            <?php else: ?>
              <?php $no=1; foreach($penulis as $p): ?>
                <tr>
                  <td class="text-center"><?= $no++ ?></td>
                  <td><?= esc($p['nama_penulis']) ?></td>
                  <td><?= esc($p['email']) ?></td>
                  <td class="text-center">
                    <a href="/penulis/edit/<?= $p['id_penulis'] ?>" class="btn btn-warning btn-sm me-1 shadow-sm">
                      <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="/penulis/delete/<?= $p['id_penulis'] ?>" 
                       class="btn btn-danger btn-sm shadow-sm"
                       onclick="return confirm('Yakin ingin menghapus penulis ini?')">
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
