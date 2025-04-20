<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>Reset Your Password</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/logo-icon.png') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
  
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            <h3>Reset Your Password</h3>
            <p>Enter a new password to continue.</p>
          </div>

          <!-- Display Flash message -->
          <?php if(session()->getFlashdata('message')): ?>
            <div class="alert alert-info">
              <?= session()->getFlashdata('message'); ?>
            </div>
          <?php endif; ?>

          <form class="form-signin" action="<?= base_url('/home/update_password') ?>" method="POST" onsubmit="return validatePassword()">
            <input type="hidden" name="token" value="<?= $token ?>">

            <div class="form-group" style="position: relative;">
              <input type="password" class="form-control" placeholder="New Password" name="password" id="password" required>
              <span class="profile-views" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;" id="togglePassword">
                <i class="fas fa-lock"></i>
              </span>
            </div>

            <div>
              <small class="form-text text-muted">
                Password must contain at least one uppercase letter, one number, and be at least 8 characters long.
              </small>
            </div>

            <div class="form-group" style="position: relative;">
              <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" required>
              <span class="profile-views" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;" id="toggleConfirmPassword">
                <i class="fas fa-lock"></i>
              </span>
            </div>

            <div class="form-group text-center">
              <button class="btn btn-primary account-btn" type="submit">Update Password</button>
            </div>
            <div class="text-center register-link">
              <a href="<?= base_url('home/forgot_password') ?>">Back to Forgot Password</a>
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

  <script>
    // Get the toggle button and password input fields
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
    const confirmPasswordInput = document.getElementById('confirm_password');

    // Toggle password visibility for the new password
    togglePassword.addEventListener('click', function() {
      const type = passwordInput.type === 'password' ? 'text' : 'password';
      passwordInput.type = type;
      const icon = this.querySelector('i');
      icon.classList.toggle('fa-lock', type === 'password');
      icon.classList.toggle('fa-lock-open', type === 'text');
    });

    // Toggle password visibility for the confirm password
    toggleConfirmPassword.addEventListener('click', function() {
      const type = confirmPasswordInput.type === 'password' ? 'text' : 'password';
      confirmPasswordInput.type = type;
      const icon = this.querySelector('i');
      icon.classList.toggle('fa-lock', type === 'password');
      icon.classList.toggle('fa-lock-open', type === 'text');
    });

    // Validate password pattern before submitting
    function validatePassword() {
      var password = document.getElementById('password').value;
      var passwordPattern = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;

      if (!passwordPattern.test(password)) {
        alert("Password must contain at least one uppercase letter, one number, and be at least 8 characters long.");
        return false; // Prevent form submission if password is not valid
      }

      return true; // Proceed with form submission if password is valid
    }
  </script>
</body>
</html>
