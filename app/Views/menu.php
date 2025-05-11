<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="<?= base_url('gudang/dashboard') ?>" class="logo">
                    <img src="<?= esc($app_logo) ?>" width="40" height="40" alt="Logo <?= esc($app_name) ?>">
                    <span><?= esc($app_name) ?></span>
                </a>
            </div>

            <div class="left-right-menu">
                <a id="toggle_btn" class="left-chev" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a>
            </div>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars"></i></a>
            <div class="header-nav-blk">
                <h4>Dashboard</h4>
                <span>My Activity</span>
            </div>
            <ul class="nav user-menu user-menu-group float-end">
                <li class="nav-item dropdown d-none d-sm-block">
                    <!-- <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link bg-box">
                        <img src="<?= base_url('assets/img/icon/message-icon.svg') ?>" alt="">
                    </a> -->
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <!-- <a href="#" class="dropdown-toggle nav-link bg-box" data-bs-toggle="dropdown">
                        <img src="<?= base_url('assets/img/icon/note-icon.svg') ?>" alt="">
                    </a> -->
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="John Doe" src="<?= base_url('assets/img/user.jpg') ?>" class="img-fluid rounded-circle">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title"></span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown has-arrow user-profile-list">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="<?= base_url('assets/img/profile/user-03.jpg') ?>" width="40" alt="<?= session()->get('user'); ?>">
                            <span class="status online"></span>
                        </span>
                        <div class="user-names">
                            <h5><?= session()->get('user'); ?></h5>
                            <span>
                                <?php
                                if (session()->get('level') == 1) {
                                    echo 'Admin';
                                } elseif (session()->get('level') == 2) {
                                    echo 'Pengguna';
                                } elseif (session()->get('level') == 3) {
                                    echo 'Super Admin';
                                } elseif (session()->get('level') == 4) {
                                    echo 'Blocked User';
                                } elseif (session()->get('level') == 10) {
                                    echo 'Super Admin';
                                }
                                ?>
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('gudang/profile') ?>"><i class="bi bi-person"></i> My Profile</a>
                        <a class="dropdown-item" href="<?= base_url('home/profile') ?>"><i class="bi bi-gear"></i> Profile Settings</a>
                        <a class="dropdown-item" href="<?= base_url('home/pagesfaq') ?>"><i class="bi bi-question-circle"></i> Need Help?</a>
                        <a class="dropdown-item" href="<?= base_url('Login') ?>"><i class="bi bi-box-arrow-right"></i> Sign Out</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-end">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="<?= base_url('gudang/profile') ?>"><i class="bi bi-person"></i> My Profile</a>
                    <a class="dropdown-item" href="<?= base_url('gudang/settings') ?>"><i class="bi bi-gear"></i> Account Settings</a>
                    <a class="dropdown-item" href="<?= base_url('home/pagesfaq') ?>"><i class="bi bi-question-circle"></i> Need Help?</a>
                    <a class="dropdown-item" href="<?= base_url('gudang/logout') ?>"><i class="bi bi-box-arrow-right"></i> Sign Out</a>
                </div>
            </div>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <?php if (session()->get('level') == 2): ?>
                        <!-- Menu untuk level 2 -->
                        <li class="active">
                            <a href="<?= base_url('Dashboard') ?>">
                                <img src="<?= base_url('assets/img/icon/menu-icon-01.svg') ?>" alt="img">
                                <span>Home</span>
                            </a>
                        </li>
                    <?php elseif (in_array(session()->get('level'), [1, 3, 10])): ?>
                        <!-- Menu untuk level 1, 3, dan 10 -->
                        <li class="active">
                            <a href="<?= base_url('Dashboard-Admin') ?>">
                                <img src="<?= base_url('assets/img/icon/menu-icon-01.svg') ?>" alt="img">
                                <span>Home</span>
                            </a>
                        </li>
                    <?php endif; ?>

                        <?php if (session()->get('level') == 1 || session()->get('level') == 3 || session()->get('level') == 10) { ?>
                            <li class="submenu">
                                <a href="#">
                                    <i class="fas fa-briefcase"></i>
                                    <span>Data Master</span>
                                    <span class="menu-arrow"></span> </a>
                                <ul style="display: none;">
                                    <li><a href="<?= base_url('Pengguna') ?>"><i class="feather-more-horizontal"></i>Data Pengguna</a></li>
                                    <li><a href="<?= base_url('lapangan') ?>"><i class="feather-more-horizontal"></i>Data Salon</a></li>

                                    <!-- <li><a href="<?= base_url('ParkingController/cctv') ?>"><i class="feather-more-horizontal"></i>Kamera CCTV</a></li> -->
                                    <li><a href="<?= base_url('Log-Activity') ?>"><i class="feather-more-horizontal"></i>Activity Logs</a></li>
                                    <li><a href="<?= base_url('Menu-Settings') ?>"><i class="feather-more-horizontal"></i>Menu Settings</a></li>
                                    <li><a href="<?= base_url('Pengajuan-Banding') ?>"><i class="feather-more-horizontal"></i>Pengajuan Banding</a></li>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 3 || session()->get('level') == 10) { ?>
                            <li class="submenu">
                                <a href="#">
                                    <i class="fas fa-parking"></i>
                                    <span>My Salon</span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul style="display: none;">
                                    <li><a href="<?= base_url('Dashboard') ?>"><i class="feather-more-horizontal"></i>Map Salon</a></li>
                                    <li><a href="<?= base_url('Riwayat-Booking') ?>"><i class="feather-more-horizontal"></i>Riwayat Booking</a></li>
                                    <li><a href="<?= base_url('Riwayat-Pembayaran') ?>"><i class="feather-more-horizontal"></i>Riwayat Pembayaran</a></li>
                                </ul>

                            </li>
                        <?php } ?>
<div class="track-portfolio">
    <img src="<?= base_url('assets/img/logosalon.png') ?>" alt="Booking Salon Logo">
    <h4>Booking Salon Jadi Lebih Praktis</h4>
    <p>Pilih layanan perawatan rambut, atur jadwal, dan tampil menawan — semua bisa dari satu aplikasi.</p>
    <a href="#" class="btn">Cari Layanan</a>
</div>



                        <div class="need-btn">
                            <a href="<?= base_url('Home/rules') ?>"
                                class="btn btn-danger w-100 d-flex justify-content-center align-items-center gap-2 py-3 rounded-3 shadow-sm"
                                style="font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease;">
                                <i class="bi bi-info-circle-fill"></i>
                                Read Our Rules!
                            </a>
                        </div>

                        <!-- <div class="logout-btn">
                            <a href="<?= base_url('gudang/logout') ?>" 
                               class="btn btn-primary w-100 d-flex justify-content-center align-items-center gap-2 py-3 rounded-3 shadow-sm" 
                               style="font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease;">
                                <img src="<?= base_url('assets/img/icon/lock-out.svg') ?>" class="me-2" alt="Logout" style="width: 20px;">
                                Logout
                            </a>
                        </div>
 -->


                       <style>
    .track-portfolio {
        text-align: center;
        padding: 50px 20px;
        background: linear-gradient(135deg, #e0bbff, #d1c4e9); /* gradasi ungu muda */
        color: #4a2c6b; /* ungu gelap */
        border-radius: 12px;
    }

    .track-portfolio img {
        max-width: 80px;
        margin-bottom: 20px;
    }

    .track-portfolio h4 {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .track-portfolio p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .track-portfolio .btn {
        background-color: #fff;
        color: #6a1b9a; /* ungu sedang */
        padding: 10px 24px;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.3s, color 0.3s;
    }

    .track-portfolio .btn:hover {
        background-color: #ede7f6;
        color: #4a148c; /* ungu tua */
    }

    .need-btn a:hover {
        background-color: #8e24aa !important;
        transform: scale(1.02);
        box-shadow: 0 6px 20px rgba(142, 36, 170, 0.3);
        transition: all 0.3s ease;
    }

    .logout-btn a:hover {
        background-color: #6a1b9a !important;
        transform: scale(1.02);
        box-shadow: 0 6px 20px rgba(106, 27, 154, 0.3);
        transition: all 0.3s ease;
    }
</style>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>