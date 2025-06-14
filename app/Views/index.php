﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Manajemen Parkir</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper">

        <div class="header">
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo-icon.png" width="40" height="40" alt=""> <span>Crypto</span>
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
                <li class="live-grp">
                    <h5>Live <span class="live-dark"></span></h5>
                </li>
                <li class="top-liv-search">
                    <form>
                        <input type="text" class="form-control" placeholder="Search here">
                        <button class="btn" type="submit"><img src="assets/img/icon/search-icon.svg" alt=""></button>
                    </form>
                </li>
                <li class="exchange-btn">
                    <a href="javascript:;" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#currency"><img src="assets/img/icon/exchange-icon.svg" alt=""
                            class="me-1">Currency Exchange</a>
                </li>
                <li class="currency-list">
                    <div class="form-group mb-0">
                        <select class="form-control select">
                            <option selected="">USD</option>
                            <option>USE</option>
                            <option>USD</option>
                        </select>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block ">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link bg-box"><img
                            src="assets/img/icon/message-icon.svg" alt=""></a>
                </li>
                <li class="nav-item dropdown d-none d-sm-block ">
                    <a href="#" class="dropdown-toggle nav-link bg-box " data-bs-toggle="dropdown"><img
                            src="assets/img/icon/note-icon.svg" alt=""> </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex ">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="John Doe" src="assets/img/user.jpg"
                                                    class="img-fluid rounded-circle">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> added
                                                    new task <span class="noti-title"></span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex ">
                                            <span class="avatar flex-shrink-0">V</span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
                                                    changed the task name <span class="noti-title"></span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex ">
                                            <span class="avatar flex-shrink-0">L</span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span>
                                                    added <span class="noti-title">Domenic Houston</span> and <span
                                                        class="noti-title">Claire Mapes</span> to project <span
                                                        class="noti-title"> module</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex ">
                                            <span class="avatar flex-shrink-0">G</span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span>
                                                    completed task <span class="noti-title"></span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex ">
                                            <span class="avatar flex-shrink-0">V</span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
                                                    added new task <span class="noti-title">Private chat module</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span>
                                                </p>
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
                        <span class="user-img"><img class="rounded-circle" src="assets/img/profile/user-03.jpg"
                                width="40" alt="Admin">
                            <span class="status online"></span>
                        </span>
                        <div class="user-names">
                            <h5>Soeng Souy</h5>
                            <span>Administrator</span>
                        </div>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-end">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fas fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a class="active" href="index.html"><img src="assets/img/icon/menu-icon-01.svg" alt="img">
                                <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="buy-crypto.html"><img src="assets/img/icon/menu-icon-02.svg" alt="img"> <span>Buy &
                                    Sell</span></a>
                        </li>
                        <li>
                            <a href="trading.html"><img src="assets/img/icon/menu-icon-03.svg" alt="img">
                                <span>Trading</span></a>
                        </li>
                        <li>
                            <a href="market.html"><img src="assets/img/icon/menu-icon-04.svg" alt="img">
                                <span>Marketcap</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/icon/menu-icon-13.svg" alt="img"> <span> Transactions
                                </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="transactions.html"><i class="feather-more-horizontal"></i><span> View
                                            Transactions</span></a></li>
                                <li><a href="transactions-search.html"><i class="feather-more-horizontal"></i><span>
                                            Transaction Search</span></a></li>
                                <li><a href="transactions-single.html"><i class="feather-more-horizontal"></i>
                                        <span>Single Transaction</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="wallet.html"><img src="assets/img/icon/menu-icon-05.svg" alt="img">
                                <span>Wallet</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/icon/menu-icon-06.svg" alt="img"> <span> Apps </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="chat.html"><i class="feather-more-horizontal"></i><span> Chats</span></a>
                                </li>
                                <li class="submenu">
                                    <a href="#"><i class="feather-more-horizontal"></i> <span> Calls</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="voice-call.html">Voice Call</a></li>
                                        <li><a href="video-call.html">Video Call</a></li>
                                        <li><a href="javascript:;" data-bs-toggle="modal"
                                                data-bs-target="#incoming">Incoming Call</a></li>
                                    </ul>
                                </li>
                                <li><a href="calendar.html"><i class="feather-more-horizontal"></i><span>
                                            Calendar</span></a></li>
                                <li><a href="inbox.html"><i class="feather-more-horizontal"></i><span> Email</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/icon/menu-icon-07.svg" alt="img"> <span> Employees </span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="employees.html">Employees List</a></li>
                                <li><a href="leaves.html">Leaves</a></li>
                                <li><a href="holidays.html">Holidays</a></li>
                                <li><a href="attendance.html">Attendance</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/icon/menu-icon-08.svg" alt="img"> <span> Accounts </span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="invoices.html">Invoices</a></li>
                                <li><a href="payments.html">Payments</a></li>
                                <li><a href="expenses.html">Expenses</a></li>
                                <li><a href="taxes.html">Taxes</a></li>
                                <li><a href="provident-fund.html">Provident Fund</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/icon/menu-icon-09.svg" alt="img"> <span> Payroll </span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="salary.html"> Employee Salary </a></li>
                                <li><a href="salary-view.html"> Payslip </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="activities.html"><img src="assets/img/icon/menu-icon-10.svg" alt="img">
                                <span>Activities</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/icon/menu-icon-11.svg" alt="img"> <span> Reports </span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="expense-reports.html"> Expense Report </a></li>
                                <li><a href="invoice-reports.html"> Invoice Report </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="settings.html"><img src="assets/img/icon/menu-icon-12.svg" alt="img">
                                <span>Settings</span></a>
                        </li>
                        <li class="menu-title">UI Elements</li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-laptop"></i> <span> Components</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="uikit.html">UI Kit</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-cube"></i> <span> Elements</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="sweetalerts.html">Sweet Alerts</a></li>
                                <li><a href="tooltip.html">Tooltip</a></li>
                                <li><a href="popover.html">Popover</a></li>
                                <li><a href="ribbon.html">Ribbon</a></li>
                                <li><a href="clipboard.html">Clipboard</a></li>
                                <li><a href="drag-drop.html">Drag & Drop</a></li>
                                <li><a href="rangeslider.html">Range Slider</a></li>
                                <li><a href="rating.html">Rating</a></li>
                                <li><a href="toastr.html">Toastr</a></li>
                                <li><a href="text-editor.html">Text Editor</a></li>
                                <li><a href="counter.html">Counter</a></li>
                                <li><a href="scrollbar.html">Scrollbar</a></li>
                                <li><a href="spinner.html">Spinner</a></li>
                                <li><a href="notification.html">Notification</a></li>
                                <li><a href="lightbox.html">Lightbox</a></li>
                                <li><a href="stickynote.html">Sticky Note</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-award"></i> <span> Icons</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a href="icon-feather.html">Feather Icons</a></li>
                                <li><a href="icon-ionic.html">Ionic Icons</a></li>
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                                <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                                <li><a href="icon-typicon.html">Typicon Icons</a></li>
                                <li><a href="icon-flag.html">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-edit"></i> <span> Forms</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="form-basic-inputs.html">Basic Inputs</a></li>
                                <li><a href="form-input-groups.html">Input Groups</a></li>
                                <li><a href="form-horizontal.html">Horizontal Form</a></li>
                                <li><a href="form-vertical.html">Vertical Form</a></li>
                                <li><a href="form-mask.html">Form Mask </a></li>
                                <li><a href="form-validation.html">Form Validation </a></li>
                                <li><a href="form-select2.html">Form Select2 </a></li>
                                <li><a href="form-fileupload.html">File Upload </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-table"></i> <span> Tables</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatables.html">Data Table</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chart-area" aria-hidden="true"></i><span> Charts</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="morris.html">Morris chart</a></li>
                                <li><a href="chartjs.html">Am4charts</a></li>
                                <li><a href="chart-apex.html">Apex Charts</a></li>
                                <li><a href="chart-js.html">Chart Js</a></li>
                                <li><a href="chart-flot.html">Flot Charts</a></li>
                                <li><a href="chart-peity.html">Peity Charts</a></li>
                                <li><a href="chart-c3.html">C3 Charts</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">Extras</li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-columns"></i> <span>Pages</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="login.html"> Login </a></li>
                                <li><a href="register.html"> Register </a></li>
                                <li><a href="forgot-password.html"> Forgot Password </a></li>
                                <li><a href="change-password2.html"> Change Password </a></li>
                                <li><a href="lock-screen.html"> Lock Screen </a></li>
                                <li><a href="profile.html"> Profile </a></li>
                                <li><a href="error-404.html">404 Error </a></li>
                                <li><a href="error-500.html">500 Error </a></li>
                                <li><a href="blank-page.html"> Blank Page </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fas fa-share-alt"></i> <span>Multi Level</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Level 1</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span
                                                    class="menu-arrow"></span></a>
                                            <ul style="display: none;">
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><span>Level 1</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="track-portfolio">
                        <img src="assets/img/icon/track-icon.png" alt="">
                        <h4>Track your Portfolio in Real-time</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="javascript:;" class="btn btn-primary">Know More</a>
                    </div>
                    <div class="need-btn">
                        <a href="javascript:;" class="btn btn-primary">Need help?</a>
                    </div>
                    <div class="logout-btn">
                        <a href="login.html" class="btn btn-primary"><img src="assets/img/icon/lock-out.svg"
                                class="me-2" alt="">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="page-wrapper bg-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="welcome-header">
                            <div class="row">
                                <div class="col-xl-6 col-lg-5 col-md-5 d-flex align-items-center">
                                    <div class="wel-come-name">
                                        <h4>Welcome , <span>Soeng Souy</span></h4>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-7 col-md-7">
                                    <div class="welcome-wallet">
                                        <div class="wallet-list">
                                            <span>Wallet : 56, 444658</span>
                                        </div>
                                        <div class="bookingrange btn-book ms-2 me-2">
                                            <img src="assets/img/icon/calendar-icon.svg" alt="">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dash-widget-blk">
                            <ul>
                                <li>
                                    <div class="premium-box box-blue">
                                        <img src="assets/img/icon/dash-icon-01.svg" alt="">
                                    </div>
                                    <div class="premium-name-blk title-blue">
                                        <h4>BTC</h4>
                                        <h3>$ 76,5498</h3>
                                    </div>
                                    <div class="premium-img">
                                        <img src="assets/img/wave-01.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="premium-box box-pink">
                                        <img src="assets/img/icon/dash-icon-02.svg" alt="">
                                    </div>
                                    <div class="premium-name-blk title-pink">
                                        <h4>Ethereum</h4>
                                        <h3>$ 11,723.40</h3>
                                    </div>
                                    <div class="premium-img">
                                        <img src="assets/img/wave-02.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="premium-box box-green">
                                        <img src="assets/img/icon/dash-icon-03.svg" alt="">
                                    </div>
                                    <div class="premium-name-blk title-green">
                                        <h4>Ripple </h4>
                                        <h3>$ 1,070.39</h3>
                                    </div>
                                    <div class="premium-img">
                                        <img src="assets/img/wave-03.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="premium-box box-orange">
                                        <img src="assets/img/icon/dash-icon-04.svg" alt="">
                                    </div>
                                    <div class="premium-name-blk title-orange">
                                        <h4>Cardeno </h4>
                                        <h3>$ 10,143,40</h3>
                                    </div>
                                    <div class="premium-img">
                                        <img src="assets/img/wave-04.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="premium-box box-light">
                                        <img src="assets/img/icon/dash-icon-05.svg" alt="">
                                    </div>
                                    <div class="premium-name-blk title-light">
                                        <h4>NEO </h4>
                                        <h3>$ 46,5198</h3>
                                    </div>
                                    <div class="premium-img">
                                        <img src="assets/img/wave-05.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="premium-box box-dark">
                                        <img src="assets/img/icon/dash-icon-06.svg" alt="">
                                    </div>
                                    <div class="premium-name-blk title-dark">
                                        <h4>Stellar </h4>
                                        <h3>$ 76,598</h3>
                                    </div>
                                    <div class="premium-img">
                                        <img src="assets/img/wave-06.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="premium-box box-sky">
                                        <img src="assets/img/icon/dash-icon-07.svg" alt="">
                                    </div>
                                    <div class="premium-name-blk title-sky">
                                        <h4>EOS </h4>
                                        <h3>$ 1,070.39</h3>
                                    </div>
                                    <div class="premium-img">
                                        <img src="assets/img/wave-07.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="premium-box box-litcoin">
                                        <img src="assets/img/icon/dash-icon-08.svg" alt="">
                                    </div>
                                    <div class="premium-name-blk title-litcoin">
                                        <h4>Litecoin </h4>
                                        <h3>$ 11,723.40</h3>
                                    </div>
                                    <div class="premium-img">
                                        <img src="assets/img/wave-08.png" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 mb-3">
                        <ul class="bit-coin-blk">
                            <li>
                                <h4>BITCOIN (BTC)</h4>
                                <h3>$3,245</h3>
                                <p><i class="fas fa-arrow-up me-1"></i>(2.38%) </p>
                            </li>
                            <li>
                                <h4>BITCOIN (BTC)</h4>
                                <h3>$3,245</h3>
                                <p class="low-range"><i class="fas fa-arrow-down me-1"></i>(2.38%) </p>
                            </li>
                            <li>
                                <h4>BITCOIN (BTC)</h4>
                                <h3>$3,245</h3>
                                <p><i class="fas fa-arrow-up me-1"></i>(2.38%) </p>
                            </li>
                            <li>
                                <h4>BITCOIN (BTC)</h4>
                                <h3>$3,245</h3>
                                <p><i class="fas fa-arrow-up me-1"></i>(2.38%) </p>
                            </li>
                            <li>
                                <h4>BITCOIN (BTC)</h4>
                                <h3>$3,245</h3>
                                <p><i class="fas fa-arrow-up me-1"></i>(2.38%) </p>
                            </li>
                            <li>
                                <h4>BITCOIN (BTC)</h4>
                                <h3>$3,245</h3>
                                <p><i class="fas fa-arrow-up me-1"></i>(2.38%) </p>
                            </li>
                            <li>
                                <h4>BITCOIN (BTC)</h4>
                                <h3>$3,245</h3>
                                <p><i class="fas fa-arrow-up me-1"></i>(2.38%) </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="buy-form">
                            <div class="border-watch">
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <div class="watch-head flow-time-blk">
                                            <h4>Money Flow</h4>
                                            <div class="flow-times">
                                                <h5>Last:</h5>
                                                <span class="flow-blue">0.03242000</span>
                                            </div>
                                            <div class="flow-times">
                                                <h5>24High:</h5>
                                                <span class="flow-green">0.03242000</span>
                                            </div>
                                            <div class="flow-times">
                                                <h5>24V:</h5>
                                                <span class="flow-light-blue">0.03242000</span>
                                            </div>
                                            <div class="flow-times">
                                                <h5>24Low:</h5>
                                                <span class="flow-red">0.03242000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="time-variant">
                                            <li><a href="javascript:;">1M</a></li>
                                            <li><a href="javascript:;">5M</a></li>
                                            <li class="active"><a href="javascript:;">20M</a></li>
                                            <li><a href="javascript:;">30M</a></li>
                                            <li><a href="javascript:;">1Hr</a></li>
                                            <li><a href="javascript:;">2Hr</a></li>
                                            <li class="time-range">
                                                <div class="down-range">
                                                    <a href="javascript:;"><img src="assets/img/icon/down-icon.svg"
                                                            alt=""></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="chartdiv"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex">
                        <div class="crypto-exchange d-flex">
                            <div class="card">
                                <div class="card-title">
                                    <h4 class="page-title">Exchange Cryptocurrency </h4>
                                </div>
                                <p class="ms-2 ps-2 pe-4">Transfer from one wallet to another within seconds. It's that
                                    simple.</p>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="exchange-form">
                                            <form>
                                                <div class="form-row ">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" placeholder="1.432">
                                                    </div>
                                                    <div class="form-group bg-hover col-md-12">
                                                        <select class="form-control select">
                                                            <option selected="">BTC</option>
                                                            <option>Ethereum</option>
                                                            <option>Ripple</option>
                                                            <option>Bitcoin</option>
                                                            <option>Cardano</option>
                                                            <option>Litecoin</option>
                                                            <option>NEO</option>
                                                            <option>Stellar</option>
                                                            <option>EOS</option>
                                                            <option>NEM</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="button"
                                                            class="btn btn-primary represh-btn mb-4"><i
                                                                class="fas fa-exchange-alt"
                                                                aria-hidden="true"></i></button>
                                                    </div>
                                                    <div class="form-group col-md-12 ">
                                                        <input type="text" class="form-control " placeholder="338">
                                                    </div>
                                                    <div class="form-group bg-hover col-md-12">
                                                        <select class="form-control select">
                                                            <option selected="">BTC</option>
                                                            <option>Ethereum</option>
                                                            <option>Ripple</option>
                                                            <option>Bitcoin</option>
                                                            <option>Cardano</option>
                                                            <option>Litecoin</option>
                                                            <option>NEO</option>
                                                            <option>Stellar</option>
                                                            <option>EOS</option>
                                                            <option>NEM</option>
                                                        </select>
                                                    </div>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary submit-btn mt-2">Exchange
                                                            Now</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex">
                        <div class="watch-list-blk buy-form">
                            <div class="row">
                                <div class="col d-flex align-items-center">
                                    <div class="watch-head">
                                        <h4>Watch List</h4>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="watch-view-all">
                                        <a href="javascript:;" class="btn btn-primary">View all <i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="activity-group">
                                <div class="activity-awards">
                                    <div class="award-boxs">
                                        <img src="assets/img/icon/watch-icon-01.svg" alt="Award">
                                    </div>
                                    <div class="award-list-outs">
                                        <h4>BTC / USDT</h4>
                                        <h5>+45.56</h5>
                                    </div>
                                    <div class="award-time-list">
                                        <span>594,87,87987</span>
                                    </div>
                                </div>
                                <div class="activity-awards">
                                    <div class="award-boxs">
                                        <img src="assets/img/icon/watch-icon-02.svg" alt="Award">
                                    </div>
                                    <div class="award-list-outs">
                                        <h4>ETH / USDT</h4>
                                        <h5 class="recoust-low">+45.56</h5>
                                    </div>
                                    <div class="award-time-list">
                                        <span>594,87,87987</span>
                                    </div>
                                </div>
                                <div class="activity-awards">
                                    <div class="award-boxs">
                                        <img src="assets/img/icon/watch-icon-03.svg" alt="Award">
                                    </div>
                                    <div class="award-list-outs">
                                        <h4>LINK / USDT</h4>
                                        <h5 class="recoust-low">-45.56</h5>
                                    </div>
                                    <div class="award-time-list">
                                        <span>594,87,87987</span>
                                    </div>
                                </div>
                                <div class="activity-awards">
                                    <div class="award-boxs">
                                        <img src="assets/img/icon/watch-icon-04.svg" alt="Award">
                                    </div>
                                    <div class="award-list-outs">
                                        <h4>Cardeno / USDT</h4>
                                        <h5>+45.56</h5>
                                    </div>
                                    <div class="award-time-list">
                                        <span>594,87,87987</span>
                                    </div>
                                </div>
                                <div class="activity-awards">
                                    <div class="award-boxs">
                                        <img src="assets/img/icon/watch-icon-05.svg" alt="Award">
                                    </div>
                                    <div class="award-list-outs">
                                        <h4>Stellar / USDT</h4>
                                        <h5>+45.56</h5>
                                    </div>
                                    <div class="award-time-list">
                                        <span>594,87,87987</span>
                                    </div>
                                </div>
                                <div class="activity-awards mb-0">
                                    <div class="award-boxs">
                                        <img src="assets/img/icon/watch-icon-06.svg" alt="Award">
                                    </div>
                                    <div class="award-list-outs">
                                        <h4>NEO / USDT</h4>
                                        <h5>+45.56</h5>
                                    </div>
                                    <div class="award-time-list">
                                        <span>594,87,87987</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex">
                        <div class="buy-form buy-sell">

                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="pill" href="#home">Buy Cryptocurrency</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="pill" href="#menu1">Sell Cryptocurrency</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="exchange-blk tab-pane active">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Exchange</label>
                                                <div class="ex-forms">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group bg-hover exchange-bg mb-0">
                                                                <select class="form-control select">
                                                                    <option selected="">BTC</option>
                                                                    <option>Ethereum</option>
                                                                    <option>Ripple</option>
                                                                    <option>Bitcoin</option>
                                                                    <option>Cardano</option>
                                                                    <option>Litecoin</option>
                                                                    <option>NEO</option>
                                                                    <option>Stellar</option>
                                                                    <option>EOS</option>
                                                                    <option>NEM</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="form-group mb-0 side-input">
                                                                <input type="text" class="form-control ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-primary represh-btn mb-4"><i
                                                        class="fas fa-exchange-alt" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="ex-forms mb-2">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group bg-hover exchange-bg mb-0">
                                                                <select class="form-control select">
                                                                    <option selected="">Ripple</option>
                                                                    <option>Debit</option>
                                                                    <option>Credit</option>
                                                                    <option>Net Banking</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="form-group mb-0 side-input">
                                                                <input type="text" class="form-control ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group bg-hover">
                                                    <label>Choose Payment Method</label>
                                                    <select class="form-control select">
                                                        <option selected="">BTC</option>
                                                        <option>Ethereum</option>
                                                        <option>Ripple</option>
                                                        <option>Bitcoin</option>
                                                        <option>Cardano</option>
                                                        <option>Litecoin</option>
                                                        <option>NEO</option>
                                                        <option>Stellar</option>
                                                        <option>EOS</option>
                                                        <option>NEM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-primary submit-btn mt-2">Buy Crypto</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="menu1" class="exchange-blk tab-pane fade">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Exchange</label>
                                                <div class="ex-forms">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group bg-hover exchange-bg mb-0">
                                                                <select class="form-control select">
                                                                    <option selected="">BTC</option>
                                                                    <option>Ethereum</option>
                                                                    <option>Ripple</option>
                                                                    <option>Bitcoin</option>
                                                                    <option>Cardano</option>
                                                                    <option>Litecoin</option>
                                                                    <option>NEO</option>
                                                                    <option>Stellar</option>
                                                                    <option>EOS</option>
                                                                    <option>NEM</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="form-group mb-0 side-input">
                                                                <input type="text" class="form-control ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-primary represh-btn mb-4"><i
                                                        class="fas fa-exchange-alt" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="ex-forms mb-2">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group bg-hover exchange-bg mb-0">
                                                                <select class="form-control select">
                                                                    <option selected="">Ripple</option>
                                                                    <option>Debit</option>
                                                                    <option>Credit</option>
                                                                    <option>Net Banking</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="form-group mb-0 side-input">
                                                                <input type="text" class="form-control ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group bg-hover">
                                                    <label>Choose Payment Method</label>
                                                    <select class="form-control select">
                                                        <option selected="">BTC</option>
                                                        <option>Ethereum</option>
                                                        <option>Ripple</option>
                                                        <option>Bitcoin</option>
                                                        <option>Cardano</option>
                                                        <option>Litecoin</option>
                                                        <option>NEO</option>
                                                        <option>Stellar</option>
                                                        <option>EOS</option>
                                                        <option>NEM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-primary submit-btn mt-2">Sell Crypto</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8 ">
                        <div class="buy-form">
                            <div class="border-watch">
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <div class="watch-head">
                                            <h4>Earnings</h4>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="bookingrange btn-book me-2">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="datatable table  custom-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th style="min-width:110px;">Currency </th>
                                            <th style="min-width:110px;">Platform</th>
                                            <th style="min-width:110px;">Email ID</th>
                                            <th style="min-width:110px;">Amount </th>
                                            <th style="min-width:90px;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01</td>
                                            <td>#34466767</td>
                                            <td>Ethereum</td>
                                            <td>dummy.com</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="0865616b6964486f65696164266b6765">[email&#160;protected]</a>
                                            </td>
                                            <td><span class="market-amount">$45,55847</span></td>
                                            <td>
                                                <span class="custom-status active-orange"><span
                                                        class="live-dark me-1"></span>Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 02</td>
                                            <td>#34466767</td>
                                            <td>Ethereum</td>
                                            <td>dummy.com</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="45282c262429052228242c296b262a28">[email&#160;protected]</a>
                                            </td>
                                            <td><span class="market-amount">$45,55847</span></td>
                                            <td>
                                                <span class="custom-status active-green"><span
                                                        class="live-dark me-1"></span>Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 03</td>
                                            <td>#34466767</td>
                                            <td>Ethereum</td>
                                            <td>dummy.com</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="8ae7e3e9ebe6caede7ebe3e6a4e9e5e7">[email&#160;protected]</a>
                                            </td>
                                            <td><span class="market-amount">$45,55847</span></td>
                                            <td>
                                                <span class="custom-status active-green"><span
                                                        class="live-dark me-1"></span>Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 04</td>
                                            <td>#34466767</td>
                                            <td>Ethereum</td>
                                            <td>dummy.com</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="a8c5c1cbc9c4e8cfc5c9c1c486cbc7c5">[email&#160;protected]</a>
                                            </td>
                                            <td><span class="market-amount">$45,55847</span></td>
                                            <td>
                                                <span class="custom-status active-green"><span
                                                        class="live-dark me-1"></span>Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 05</td>
                                            <td>#34466767</td>
                                            <td>Ethereum</td>
                                            <td>dummy.com</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="d3bebab0b2bf93b4beb2babffdb0bcbe">[email&#160;protected]</a>
                                            </td>
                                            <td><span class="market-amount">$45,55847</span></td>
                                            <td>
                                                <span class="custom-status active-green"><span
                                                        class="live-dark me-1"></span>Pending</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="credit-balance-group">
                            <div class="credit-balance">
                                <h4>BTC BALANCE</h4>
                                <h2>124.53 BTC</h2>
                            </div>
                            <div class="credit-btn">
                                <a href="javascript:;" class="btn btn-primary send-credit">Send</a>
                                <a href="javascript:;" class="btn btn-primary receive-credit">Recieve</a>
                            </div>
                        </div>
                        <div class="credit-balance-group">
                            <div class="credit-balance">
                                <h4>USD BALANCE</h4>
                                <h2>124.53 USD</h2>
                            </div>
                            <div class="credit-btn">
                                <a href="javascript:;" class="btn btn-primary send-credit">Deposit</a>
                                <a href="javascript:;" class="btn btn-primary receive-credit">Withdraw</a>
                            </div>
                        </div>
                        <div class="credit-balance-group new-users">
                            <div class="row">
                                <div class="col-md-4 d-flex align-items-center">
                                    <div class="credit-balance">
                                        <h4>Users</h4>
                                        <h2>2,843</h2>
                                        <span>New Users</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="buy-form-line">
                                        <div id="l-col"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="buy-form mb-0">
                            <div class="border-watch">
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <div class="watch-head">
                                            <h4>Market Capitalizations</h4>
                                        </div>
                                    </div>
                                    <div class="col-auto d-flex">
                                        <div class="bookingrange btn-book me-2">
                                            <span></span>
                                        </div>
                                        <div class="down-range">
                                            <a href="javascript:;"><img src="assets/img/icon/down-icon.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="datatable table  custom-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Currency</th>
                                            <th style="min-width:110px;">Price</th>
                                            <th style="min-width:110px;">Market Cap</th>
                                            <th style="min-width:110px;">Volume</th>
                                            <th style="min-width:110px;">Circulating Supply</th>
                                            <th style="min-width:90px;">Change(24h)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01</td>
                                            <td><img src="assets/img/icon/watch-icon-07.svg" alt="Award"
                                                    class="me-2">Ethereum</td>
                                            <td>$ 11,723.40</td>
                                            <td>$ 197,078,267,295</td>
                                            <td>$ 17,950,900,000</td>
                                            <td>16 973 112</td>
                                            <td>
                                                <span class="custom-badge status-green"><i class="fas fa-arrow-up"
                                                        aria-hidden="true"></i> 263.54 %</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td><img src="assets/img/icon/watch-icon-01.svg" alt="Award"
                                                    class="me-2">Ripple </td>
                                            <td>$ 1,070.39</td>
                                            <td>$ 103,892,495,504</td>
                                            <td>$ 7,564,310,000</td>
                                            <td>16 973 112</td>
                                            <td>
                                                <span class="custom-badge status-red"> <i class="fas fa-arrow-down"
                                                        aria-hidden="true"></i> 26.13%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td><img src="assets/img/icon/watch-icon-02.svg" alt="Award"
                                                    class="me-2">Cardeno </td>
                                            <td>$ 1.64</td>
                                            <td>$ 63,391,183,730</td>
                                            <td>$ 10,143,400,000</td>
                                            <td>16 973 112</td>
                                            <td>
                                                <span class="custom-badge status-green"><i class="fas fa-arrow-up"
                                                        aria-hidden="true"></i> 66.62%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td><img src="assets/img/icon/watch-icon-03.svg" alt="Award"
                                                    class="me-2">NEO </td>
                                            <td>$ 198.88</td>
                                            <td>$ 10,901,285,520</td>
                                            <td>$ 1,235,390,000</td>
                                            <td>16 973 112</td>
                                            <td>
                                                <span class="custom-badge status-green"><i class="fas fa-arrow-up"
                                                        aria-hidden="true"></i> 26.96%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>05 </td>
                                            <td><img src="assets/img/icon/watch-icon-08.svg" alt="Award"
                                                    class="me-2">BTC </td>
                                            <td>$ 11,723.40</td>
                                            <td>$ 197,078,267,295</td>
                                            <td>$ 17,950,900,000</td>
                                            <td>16 973 112</td>
                                            <td>
                                                <span class="custom-badge status-green"><i class="fas fa-arrow-up"
                                                        aria-hidden="true"></i> 263.54 %</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="notification-box">
            <div class="msg-sidebar notifications msg-noti">
                <div class="topnav-dropdown-header">
                    <span>Messages</span>
                </div>
                <div class="drop-scroll msg-list-scroll" id="msg_list">
                    <ul class="list-box">
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">R</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Richard Miles </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item new-message">
                                    <div class="list-left">
                                        <span class="avatar">J</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">John Doe</span>
                                        <span class="message-time">1 Aug</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">T</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Tarah Shropshire </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">M</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Mike Litorus</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">C</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Catherine Manseau </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">D</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Domenic Houston </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">B</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Buster Wigton </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">R</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Rolland Webber </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">C</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Claire Mapes </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">M</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Melita Faucher</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">J</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Jeffery Lalor</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">L</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Loren Gatlin</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">T</span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Tarah Shropshire</span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="chat.html">See all messages</a>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar-overlay" data-reff=""></div>

    <div class="modal fade exchange-currency-bg" id="currency">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <a class="btn-closes" data-bs-dismiss="modal"><i class="feather-x"></i></a>
                </div>

                <div class="modal-body">
                    <div class="crypto-exchange">
                        <div class="card-title">
                            <h4 class="page-title">Exchange Cryptocurrency </h4>
                        </div>
                        <p class="ms-2 ps-2 pe-4">Transfer from one wallet to another within seconds. It's that simple.
                        </p>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="exchange-form">
                                    <form>
                                        <div class="form-row ">
                                            <div class="form-group col-md-12">
                                                <input type="text" class="form-control" placeholder="1.432">
                                            </div>
                                            <div class="form-group bg-hover col-md-12">
                                                <select class="form-control select">
                                                    <option selected="">BTC</option>
                                                    <option>Ethereum</option>
                                                    <option>Ripple</option>
                                                    <option>Bitcoin</option>
                                                    <option>Cardano</option>
                                                    <option>Litecoin</option>
                                                    <option>NEO</option>
                                                    <option>Stellar</option>
                                                    <option>EOS</option>
                                                    <option>NEM</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-primary represh-btn mb-4"><i
                                                        class="fas fa-exchange-alt" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="form-group col-md-12 ">
                                                <input type="text" class="form-control " placeholder="338">
                                            </div>
                                            <div class="form-group bg-hover col-md-12">
                                                <select class="form-control select">
                                                    <option selected="">BTC</option>
                                                    <option>Ethereum</option>
                                                    <option>Ripple</option>
                                                    <option>Bitcoin</option>
                                                    <option>Cardano</option>
                                                    <option>Litecoin</option>
                                                    <option>NEO</option>
                                                    <option>Stellar</option>
                                                    <option>EOS</option>
                                                    <option>NEM</option>
                                                </select>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-primary submit-btn mt-2">Exchange Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade exchange-currency-bg" id="incoming">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="crypto-income-blk text-center">
                        <div class="voice-call-user">
                            <img src="assets/img/profile/avatar-01.jpg" alt="img">
                            <h3>Bernardo James</h3>
                            <p>Senior Developer</p>
                        </div>
                        <div class="calling-income">
                            <h4>Calling...</h4>
                        </div>
                        <div class="voice-menu-income comman-flex">
                            <a href="javascript:;" class="btn btn-primary call-remove comman-flex me-2"
                                data-bs-dismiss="modal"><img src="assets/img/icon/call-remove.svg" alt="img"></a>
                            <a href="javascript:;" class="btn btn-primary call-received comman-flex"><img
                                    src="assets/img/icon/call-received.svg" alt="img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min-1.js">
    </script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/datatables.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/plugins/amchart/js/core.js"></script>
    <script src="assets/plugins/amchart/js/charts.js"></script>
    <script src="assets/plugins/amchart/js/animated.js"></script>
    <script src="assets/plugins/amchart/js/am-charts.js"></script>

    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>

    <script src="assets/js/jquery.slimscroll.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>