<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>Forgot Your Password?</title>
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
            <h3>Forgot Your Password?</h3>
            <p>Enter your email address to reset your password.</p>
          </div>

          <!-- Display Flash message -->
          <?php if(session()->getFlashdata('message')): ?>
            <div class="alert alert-info">
              <?= session()->getFlashdata('message'); ?>
            </div>
          <?php endif; ?>

          <form class="form-signin" action="<?= base_url('Forgot-Password') ?>" method="POST">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter your email" name="email" required autofocus>
            </div>
            <div class="form-group text-center">
              <button class="btn btn-primary account-btn" type="submit">Send Reset Link</button>
            </div>
            <div class="text-center register-link">
              <a href="<?= base_url('Login') ?>">Back to Login</a>
            </div>
          </form>
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
