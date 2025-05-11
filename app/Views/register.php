<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.ico') ?>">
    <title>Register - Parking Management</title>
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
                    <a href="<?= base_url('/') ?>">
                        <img src="<?= base_url('assets/img/logosalon.png') ?>" alt="Logo">
                    </a>
                </div>
                <div class="account-box">
                    <div class="login-header">
                        <h3>Let's Get Started!</h3>
                        <p>Sign up to continue</p>
                    </div>
                    <form action="<?= base_url('/gudang/aksi_register') ?>" method="POST" class="form-signin" onsubmit="return validatePassword()">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" placeholder="Fullname" required>
                            <span class="profile-views"><i class="fas fa-user"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="no_hp" placeholder="Nomor Handphone" required pattern="^[+0-9]{1,}[0-9\-\(\)\s]*$" title="Masukkan nomor handphone yang valid">
                            <span class="profile-views"><i class="fas fa-phone"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" required title="Masukkan alamat lengkap, termasuk jalan, kota, dan kode pos">
                            <span class="profile-views"><i class="fas fa-home"></i></span>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                            <span class="profile-views"><i class="fas fa-envelope"></i></span>
                        </div>
                        <div class="form-group" style="position: relative;">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                            <span class="profile-views" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;" id="togglePassword">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                        <div>
                            <small class="form-text text-muted">
                                Password must contain at least one uppercase letter, one number, and be at least 8 characters long.
                            </small>
                        </div>
                        

                <script>
                    const togglePassword = document.getElementById('togglePassword');
                    const passwordInput = document.getElementById('password');
                    togglePassword.addEventListener('click', function() {
                        const type = passwordInput.type === 'password' ? 'text' : 'password';
                        passwordInput.type = type;
                        const icon = this.querySelector('i');
                        icon.classList.toggle('fa-lock', type === 'password');
                        icon.classList.toggle('fa-lock-open', type === 'text');
                    });
                </script>

                        <div class="forgotpass term-register">
                            <div class="remember-me">
                                <label class="custom_check me-2 mb-0 d-inline-flex remember-me">
                                    I agree to the <a href="javascript:;">Terms & Conditions</a>
                                    <input type="checkbox" name="terms" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Sign up <i class="fas fa-arrow-right ms-1"></i></button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="<?= base_url('/home/login/') ?>">Sign in</a>
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

    <script>
        function validatePassword() {
            var password = document.getElementById('password').value;
            // Regex to check password: at least one uppercase letter, one number, and minimum 8 characters
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
