<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>Status</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/logo-icon.png') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
  <div class="main-wrapper account-wrapper bg-wrapper">
    <div class="account-page">
      <div class="account-center">
        <div class="account-logo">
          <a href="<?= base_url('index.html') ?>"><img src="<?= base_url('assets/img/logo-icon.png') ?>" alt="Logo"></a>
        </div>
        <div class="account-box">
          <div class="login-header">
            <h3>Status</h3>
            <p><?= $type === 'success' ? 'Your password has been successfully reset.' : 'There was an error with your request.' ?></p>
          </div>

          <!-- Display Status message -->
          <?php if ($type === 'success'): ?>
            <div class="alert alert-success">
              <?= $message ?>
            </div>
          <?php elseif ($type === 'error'): ?>
            <div class="alert alert-danger">
              <?= $message ?>
            </div>
          <?php endif; ?>

          <div class="text-center mt-3">
            <a href="<?= base_url('home/login') ?>">Back to Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>
</html>
