<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>Aplikasi Manajemen Parkir</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/ayoarena.png') ?>">
  
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/fontawesome/css/fontawesome.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/fontawesome/css/all.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
  <div class="main-wrapper account-wrapper bg-wrapper">
    <div class="account-page">
      <div class="account-center">
        <div class="account-logo">
          <a href="<?= base_url('index.html') ?>"><img src="<?= base_url('assets/img/ayoarena2.png') ?>" alt="Logo"></a>
        </div>
        <div class="account-box">
          <div class="login-header">
            <h3>Let's Get Started</h3>
            <p>Sign in to continue to Parking</p>
          </div>
          
          <form action="<?= base_url('/gudang/aksi_login/') ?>" method="POST" class="form-signin">
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                <span class="profile-views">
                    <img src="<?= base_url('assets/img/icon/lock-icon-01.svg') ?>" alt="" />
                </span>
            </div>
            <div class="form-group" style="position: relative;">
              <input type="password" name="password" class="form-control" placeholder="Password" required id="loginPassword">
              <span class="profile-views" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;" id="toggleLoginPassword">
                  <img src="<?= base_url('assets/img/icon/lock-icon-02.svg') ?>" alt="Lock Icon" id="lockIcon">
              </span>
          </div>

          <script>
              const toggleLoginPassword = document.getElementById('toggleLoginPassword');
              const loginPasswordInput = document.getElementById('loginPassword');
              const lockIcon = document.getElementById('lockIcon');

              toggleLoginPassword.addEventListener('click', function() {

                  const type = loginPasswordInput.type === 'password' ? 'text' : 'password';
                  loginPasswordInput.type = type;

                  if (type === 'password') {
                      lockIcon.src = '<?= base_url('assets/img/icon/lock-icon-02.svg') ?>';
                  } else {
                      lockIcon.src = '<?= base_url('assets/img/icon/star.svg') ?>';
                  }
              });
          </script>

            
            <div class="forgotpass">
                <div class="remember-me">
                    <label class="custom_check me-2 mb-0 d-inline-flex remember-me"> Remember me
                        <input type="checkbox" name="remember" value="true">
                        <span class="checkmark"></span>
                    </label>
                </div>
                
                <a href="<?= base_url('home/forgot_password') ?>"><img src="<?= base_url('assets/img/icon/lock-icon.svg') ?>" class="me-1" alt="" />Forgot your password?</a>
            </div>
            
            
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LeHXukqAAAAANHsUovwe7Xeq5e5keY-nF6nhoMP"></div>
            </div>
            
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary account-btn">
                    Sign In <i class="fas fa-arrow-right ms-1"></i>
                </button>
            </div>
            <div class="text-center register-link">
                Don't have an account? <a href="<?= base_url('/home/register/') ?>">Sign Up</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="sidebar-overlay" data-reff=""></div>
  

  <script src="<?= base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.slimscroll.js') ?>"></script>
  <script src="<?= base_url('assets/js/app.js') ?>"></script>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
  