<?= $this->include('layout/header'); ?>

<!-- Hero Section / Jumbotron -->
<div class="bg-light p-5 mb-5 rounded shadow-sm text-center">
  <h1 class="display-5 fw-bold text-primary">Selamat Datang di Dashboard Perpustakaan</h1>
  <p class="lead text-secondary mb-4">
    Pantau data buku, kategori, dan penulis dengan mudah.  
    Gunakan menu navigasi di atas untuk mengelola koleksi perpustakaan Anda 📚
  </p>
  <a href="/buku" class="btn btn-primary btn-lg shadow-sm">
    <i class="bi bi-book"></i> Lihat Daftar Buku
  </a>
</div>

<!-- Statistik Cards -->
<div class="row g-4 text-center">
  <div class="col-md-4">
    <div class="card border-0 shadow-sm h-100">
      <div class="card-body">
        <div class="text-primary mb-2">
          <i class="bi bi-journal-bookmark-fill" style="font-size: 2rem;"></i>
        </div>
        <h5 class="card-title fw-bold">Total Buku</h5>
        <h2 class="fw-bold text-dark"><?= $total_buku ?></h2>
        <p class="text-muted">Jumlah seluruh koleksi buku</p>
        <a href="/buku" class="btn btn-outline-primary btn-sm mt-2">Kelola Buku</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card border-0 shadow-sm h-100">
      <div class="card-body">
        <div class="text-success mb-2">
          <i class="bi bi-tags-fill" style="font-size: 2rem;"></i>
        </div>
        <h5 class="card-title fw-bold">Total Kategori</h5>
        <h2 class="fw-bold text-dark"><?= $total_kategori ?></h2>
        <p class="text-muted">Jumlah kategori buku yang tersedia</p>
        <a href="/kategori" class="btn btn-outline-success btn-sm mt-2">Kelola Kategori</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card border-0 shadow-sm h-100">
      <div class="card-body">
        <div class="text-warning mb-2">
          <i class="bi bi-people-fill" style="font-size: 2rem;"></i>
        </div>
        <h5 class="card-title fw-bold">Total Penulis</h5>
        <h2 class="fw-bold text-dark"><?= $total_penulis ?></h2>
        <p class="text-muted">Jumlah penulis dalam database</p>
        <a href="/penulis" class="btn btn-outline-warning btn-sm mt-2">Kelola Penulis</a>
      </div>
    </div>
  </div>
</div>

<!-- Optional: Animasi sederhana (Bootstrap 5 + CSS) -->
<style>
  .card:hover {
    transform: translateY(-5px);
    transition: 0.3s ease;
  }
</style>

<?= $this->include('layout/footer'); ?>
