<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Sistem Perpustakaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center" style="min-height:100vh;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card shadow-lg">
          <div class="card-header bg-primary text-white text-center">
            <h4><i class="bi bi-book"></i> Login Perpustakaan</h4>
          </div>
          <div class="card-body">
            <?php if (session()->getFlashdata('error')): ?>
              <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <form action="/login/attempt" method="post">
              <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>

              <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>

              <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
          </div>
          <div class="card-footer text-center text-muted">
            Default admin: <b>admin@perpus.test / admin123</b>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
