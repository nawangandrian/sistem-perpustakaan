<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Perpustakaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="/" class="navbar-brand">📚 Perpustakaan</a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarNav" class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="/dashboard" class="nav-link">Dashboard</a></li>
          <li class="nav-item"><a href="/buku" class="nav-link">Buku</a></li>
          <li class="nav-item"><a href="/kategori" class="nav-link">Kategori</a></li>
          <li class="nav-item"><a href="/penulis" class="nav-link">Penulis</a></li>
          <?php if (session()->get('logged_in')): ?>
            <li class="nav-item"><a href="/logout" class="nav-link text-danger">Logout</a></li>
          <?php else: ?>
            <li class="nav-item"><a href="/login" class="nav-link text-success">Login</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten halaman -->
  <main class="flex-fill container mt-4">
