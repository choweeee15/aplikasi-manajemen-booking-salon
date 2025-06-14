﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
<title>Cryptocurrency - Bootstrap 5 Admin Template</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
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
<a href="javascript:;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#currency"><img src="assets/img/icon/exchange-icon.svg" alt="" class="me-1">Currency Exchange</a>
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
<a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link bg-box"><img src="assets/img/icon/message-icon.svg" alt=""></a>
</li>
<li class="nav-item dropdown d-none d-sm-block ">
<a href="#" class="dropdown-toggle nav-link bg-box " data-bs-toggle="dropdown"><img src="assets/img/icon/note-icon.svg" alt=""> </a>
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
<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid rounded-circle">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title"></span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
 </li>
<li class="notification-message">
<a href="activities.html">
<div class="media d-flex ">
<span class="avatar flex-shrink-0">V</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title"></span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media d-flex ">
<span class="avatar flex-shrink-0">L</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title"> module</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media d-flex ">
<span class="avatar flex-shrink-0">G</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title"></span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media d-flex ">
<span class="avatar flex-shrink-0">V</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
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
<span class="user-img"><img class="rounded-circle" src="assets/img/profile/user-03.jpg" width="40" alt="Admin">
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
<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
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
<li>
<a href="index.html"><img src="assets/img/icon/menu-icon-01.svg" alt="img"> <span>Dashboard</span></a>
</li>
<li>
<a href="buy-crypto.html"><img src="assets/img/icon/menu-icon-02.svg" alt="img"> <span>Buy & Sell</span></a>
</li>
<li>
<a href="trading.html"><img src="assets/img/icon/menu-icon-03.svg" alt="img"> <span>Trading</span></a>
</li>
<li>
<a href="market.html"><img src="assets/img/icon/menu-icon-04.svg" alt="img"> <span>Marketcap</span></a>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/icon/menu-icon-13.svg" alt="img"> <span> Transactions </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="transactions.html"><i class="feather-more-horizontal"></i><span> View Transactions</span></a></li>
<li><a href="transactions-search.html"><i class="feather-more-horizontal"></i><span> Transaction Search</span></a></li>
<li><a href="transactions-single.html"><i class="feather-more-horizontal"></i> <span>Single Transaction</span></a></li>
</ul>
</li>
<li>
<a href="wallet.html"><img src="assets/img/icon/menu-icon-05.svg" alt="img"> <span>Wallet</span></a>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/icon/menu-icon-06.svg" alt="img"> <span> Apps </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="chat.html"><i class="feather-more-horizontal"></i><span> Chats</span></a></li>
<li class="submenu">
<a href="#"><i class="feather-more-horizontal"></i> <span> Calls</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="voice-call.html">Voice Call</a></li>
<li><a href="video-call.html">Video Call</a></li>
<li><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#incoming">Incoming Call</a></li>
</ul>
</li>
<li><a href="calendar.html"><i class="feather-more-horizontal"></i><span> Calendar</span></a></li>
<li><a href="inbox.html"><i class="feather-more-horizontal"></i><span> Email</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/icon/menu-icon-07.svg" alt="img"> <span> Employees </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="employees.html">Employees List</a></li>
<li><a href="leaves.html">Leaves</a></li>
<li><a href="holidays.html">Holidays</a></li>
<li><a href="attendance.html">Attendance</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/icon/menu-icon-08.svg" alt="img"> <span> Accounts </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="invoices.html">Invoices</a></li>
<li><a href="payments.html">Payments</a></li>
<li><a href="expenses.html">Expenses</a></li>
<li><a href="taxes.html">Taxes</a></li>
<li><a href="provident-fund.html">Provident Fund</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/icon/menu-icon-09.svg" alt="img"> <span> Payroll </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="salary.html"> Employee Salary </a></li>
<li><a href="salary-view.html"> Payslip </a></li>
</ul>
</li>
<li>
<a href="activities.html"><img src="assets/img/icon/menu-icon-10.svg" alt="img"> <span>Activities</span></a>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/icon/menu-icon-11.svg" alt="img"> <span> Reports </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="expense-reports.html"> Expense Report </a></li>
<li><a href="invoice-reports.html"> Invoice Report </a></li>
</ul>
</li>
<li>
<a href="settings.html"><img src="assets/img/icon/menu-icon-12.svg" alt="img"> <span>Settings</span></a>
</li>
<li class="menu-title">UI Elements</li>
<li class="submenu">
<a href="#"><i class="fas fa-laptop"></i> <span> Components</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="uikit.html">UI Kit</a></li>
<li><a href="typography.html">Typography</a></li>
<li><a href="tabs.html">Tabs</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-cube"></i> <span> Elements</span> <span class="menu-arrow"></span></a>
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
<a href="#"><i class="fas fa-award"></i> <span> Icons</span> <span class="menu-arrow"></span></a>
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
<a href="#"><i class="fas fa-edit"></i> <span> Forms</span> <span class="menu-arrow"></span></a>
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
<li class="submenu active-bg">
<a href="#"><i class="fas fa-table"></i> <span> Tables</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class="active" href="tables-basic.html">Basic Tables</a></li>
<li><a href="tables-datatables.html">Data Table</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-chart-area" aria-hidden="true"></i><span> Charts</span> <span class="menu-arrow"></span></a>
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
<a href="#"><i class="fas fa-columns"></i> <span>Pages</span> <span class="menu-arrow"></span></a>
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
 <a href="javascript:void(0);"><i class="fas fa-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="javascript:void(0);"><span>Level 1</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
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
<a href="login.html" class="btn btn-primary"><img src="assets/img/icon/lock-out.svg" class="me-2" alt="">Logout</a>
</div>
</div>
</div>
</div>


<div class="page-wrapper bg-wrapper">
<div class="content">
<div class="row">
<div class="col-sm-12">
<h4 class="page-title">Basic Tables</h4>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="card-box">
<div class="card-block">
<h4 class="card-title">Basic Table</h4>
<div class="table-responsive">
<table class="table mb-0">
<thead>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
</tr>
</thead>
<tbody>
<tr>
<td>John</td>
<td>Doe</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d272225230d28352c203d2128632e2220">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Mary</td>
<td>Moe</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2b464a59526b4e534a465b474e05484446">[email&#160;protected]</a></td>
</tr>
<tr>
<td>July</td>
<td>Dooley</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d0baa5bca990b5a8b1bda0bcb5feb3bfbd">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card-box">
<div class="card-block">
<h5 class="text-bold card-title">Striped Rows</h5>
<div class="table-responsive">
<table class="table table-striped mb-0">
<thead>
<tr>
<th>Firstname</th>
<th>Lastname</th>
 <th>Email</th>
</tr>
</thead>
<tbody>
<tr>
<td>John</td>
<td>Doe</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="264c494e4866435e474b564a430845494b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Mary</td>
<td>Moe</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6904081b10290c11080419050c470a0604">[email&#160;protected]</a></td>
</tr>
<tr>
<td>July</td>
<td>Dooley</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="68021d0411280d10090518040d460b0705">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="card-box">
<div class="card-block">
<h5 class="text-bold card-title">Bordered Table</h5>
<div class="table-responsive">
<table class="table table-bordered mb-0">
<thead>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
</tr>
</thead>
<tbody>
<tr>
<td>John</td>
<td>Doe</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2e444146406e4b564f435e424b004d4143">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Mary</td>
<td>Moe</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="513c302328113429303c213d347f323e3c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>July</td>
<td>Dooley</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f399869f8ab3968b929e839f96dd909c9e">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card-box">
<div class="card-block">
<h4 class="card-title">Hover Rows</h4>
<div class="table-responsive">
<table class="table table-hover mb-0">
<thead>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
</tr>
</thead>
<tbody>
<tr>
<td>John</td>
<td>Doe</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e983868187a98c91888499858cc78a8684">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Mary</td>
<td>Moe</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="caa7abb8b38aafb2aba7baa6afe4a9a5a7">[email&#160;protected]</a></td>
</tr>
<tr>
<td>July</td>
<td>Dooley</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2c465940556c49544d415c4049024f4341">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>



<div class="row">
<div class="col-lg-6">
<div class="card-box">
<div class="card-block">
<h4 class="card-title">Contextual Classes</h4>
<div class="table-responsive">
<table class="table mb-0">
<thead>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
</tr>
</thead>
<tbody>
<tr>
<td>Default</td>
<td>Defaultson</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a8cccdcee8dbc7c5cdc5c9c1c486cbc7c5">[email&#160;protected]</a></td>
</tr>
<tr class="table-primary">
<td>Primary</td>
<td>Doe</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="acc6c3c4c2ecc9d4cdc1dcc0c982cfc3c1">[email&#160;protected]</a></td>
</tr>
<tr class="table-secondary">
<td>Secondary</td>
<td>Moe</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2f424e5d566f4a574e425f434a014c4042">[email&#160;protected]</a></td>
</tr>
<tr class="table-success">
<td>Success</td>
<td>Dooley</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3d574851447d58455c504d5158135e5250">[email&#160;protected]</a></td>
</tr>
<tr class="table-danger">
<td>Danger</td>
<td>Refs</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9bbb699bca1b8b4a9b5bcf7bab6b4">[email&#160;protected]</a></td>
</tr>
<tr class="table-warning">
<td>Warning</td>
<td>Activeson</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="50313324103528313d203c357e333f3d">[email&#160;protected]</a></td>
</tr>
<tr class="table-info">
<td>Info</td>
<td>Activeson</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3455574074514c55594458511a575b59">[email&#160;protected]</a></td>
</tr>
<tr class="table-light">
<td>Light</td>
<td>Activeson</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ee8f8d9aae8b968f839e828bc08d8183">[email&#160;protected]</a></td>
</tr>
<tr class="table-dark">
<td>Dark</td>
<td>Activeson</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1475776054716c75796478713a777b79">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card-box">
<div class="card-block">
<h4 class="card-title">Responsive Tables</h4>
<div class="table-responsive">
<table class="table mb-0">
<thead>
<tr>
<th>#</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th style="min-width:90px;">City</th>
<th>Country</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Anna</td>
<td>Pitt</td>
<td>35</td>
<td>New York</td>
<td>USA</td>
</tr>
<tr>
<td>1</td>
<td>Anna</td>
<td>Pitt</td>
<td>35</td>
<td>New York</td>
<td>USA</td>
</tr>
<tr>
<td>1</td>
<td>Anna</td>
<td>Pitt</td>
<td>35</td>
<td>New York</td>
<td>USA</td>
</tr>
<tr>
<td>1</td>
<td>Anna</td>
<td>Pitt</td>
<td>35</td>
<td>New York</td>
<td>USA</td>
</tr>
<tr>
<td>1</td>
<td>Anna</td>
<td>Pitt</td>
<td>35</td>
<td>New York</td>
<td>USA</td>
</tr>
<tr>
<td>1</td>
<td>Anna</td>
<td>Pitt</td>
<td>35</td>
<td>New York</td>
<td>USA</td>
</tr>
<tr>
<td>1</td>
<td>Anna</td>
<td>Pitt</td>
<td>35</td>
<td>New York</td>
<td>USA</td>
</tr>
<tr>
<td>1</td>
<td>Anna</td>
<td>Pitt</td>
<td>35</td>
<td>New York</td>
<td>USA</td>
</tr>
<tr>
<td>1</td>
<td>Anna</td>
<td>Pitt</td>
<td>35</td>
<td>New York</td>
<td>USA</td>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
 <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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

</div>

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
<p class="ms-2 ps-2 pe-4">Transfer from one wallet to another within seconds. It's that simple.</p>
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
<button type="button" class="btn btn-primary represh-btn mb-4"><i class="fas fa-exchange-alt" aria-hidden="true"></i></button>
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
<a href="javascript:;" class="btn btn-primary call-remove comman-flex me-2" data-bs-dismiss="modal"><img src="assets/img/icon/call-remove.svg" alt="img"></a>
<a href="javascript:;" class="btn btn-primary call-received comman-flex"><img src="assets/img/icon/call-received.svg" alt="img"></a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="sidebar-overlay" data-reff=""></div>

<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min-1.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/select2.min.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>