<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="asset/vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
    <link href="asset/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="asset/vendors/animate.css/animate.min.css" rel="stylesheet" />
    <link href="asset/vendors/toastr/toastr.min.css" rel="stylesheet" />
    <link href="asset/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="asset/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="asset/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
<div class="page-wrapper">
    <!-- START HEADER-->
    <header class="header">
        <div class="page-brand">
            <a href="/">
                <span class="brand">Shui Admin</span>
                <span class="brand-mini">SA</span>
            </a>
        </div>
        <div class="flexbox flex-1">
            <!-- START TOP-LEFT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                <li>
                    <a class="nav-link sidebar-toggler js-sidebar-toggler" href="javascript:;">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                </li>
                <li>
                    <a class="nav-link search-toggler js-search-toggler"><i class="ti-search"></i>
                        <span>Search here...</span>
                    </a>
                </li>
            </ul>
            <!-- END TOP-LEFT TOOLBAR-->
            <!-- START TOP-RIGHT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                <li class="dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                        <span>Super User</span>
                        <img src="asset/img/users/admin-image.png" alt="image" />
                    </a>
                    <div class="dropdown-menu dropdown-arrow dropdown-menu-right admin-dropdown-menu">
                        <div class="dropdown-arrow"></div>
                        <div class="dropdown-header">
                            <div class="admin-avatar">
                                <img src="asset/img/users/admin-image.png" alt="image" />
                            </div>
                            <div>
                                <h5 class="font-strong text-white">Super User</h5>
                                <div>
                                    <span class="admin-badge mr-3"><i class="ti-alarm-clock mr-2"></i>30m.</span>
                                    <span class="admin-badge"><i class="ti-lock mr-2"></i>Safe Mode</span>
                                </div>
                            </div>
                        </div>
                        <div class="admin-menu-features">
                            <a class="admin-features-item" href="javascript:;"><i class="ti-user"></i>
                                <span>PROFILE</span>
                            </a>
                            <a class="admin-features-item" href="javascript:;"><i class="ti-support"></i>
                                <span>SUPPORT</span>
                            </a>
                            <a class="admin-features-item" href="javascript:;"><i class="ti-settings"></i>
                                <span>SETTINGS</span>
                            </a>
                        </div>
                        <div class="admin-menu-content">
                            <div class="text-muted mb-2">Your Wallet</div>
                            <div><i class="ti-wallet h1 mr-3 text-light"></i>
                                <span class="h1 text-success"><sup>$</sup>12.7k</span>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <a class="text-muted" href="javascript:;">Earnings history</a>
                                <a class="d-flex align-items-center" href="javascript:;">Logout<i class="ti-shift-right ml-2 font-20"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="nav-link">
                        <span class="ti-align-right"></span>
                    </a>
                </li>
            </ul>
            <!-- END TOP-RIGHT TOOLBAR-->
        </div>
    </header>
    <!-- END HEADER-->
    <!-- START SIDEBAR-->
    <nav class="page-sidebar" id="sidebar">
        <div id="sidebar-collapse">
            <ul class="side-menu metismenu">
                <li>
                    <a href="/admin"><i class="sidebar-item-icon ti-home"></i>
                        <span class="nav-label">Dashboard</span>
                    </a>
                </li>
                <li class="heading">FEATURES</li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-check-box"></i>
                        <span class="nav-label">Forms</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="javascript:;">
                                <span class="nav-label">Form Controls</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-3-level collapse">
                                <li>
                                    <a href="form-controls.html">Inputs</a>
                                </li>
                                <li>
                                    <a href="form-switch.html">Switch</a>
                                </li>
                                <li>
                                    <a href="form-checkbox-radio.html">Checkbox &amp; Radio</a>
                                </li>
                                <li>
                                    <a href="form-input-groups.html">Input Groups</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="form_layouts.html">Form Layouts</a>
                        </li>
                        <li>
                            <a href="form_advanced.html">Advanced Plugins</a>
                        </li>
                        <li>
                            <a href="form_masks.html">Form input masks</a>
                        </li>
                        <li>
                            <a href="form_validation.html">Form Validation</a>
                        </li>
                        <li>
                            <a href="text_editors.html">Text Editors</a>
                        </li>
                        <li>
                            <a href="form_dropzone.html">Dropzone File Upload</a>
                        </li>
                        <li>
                            <a href="image_cropping.html">Image Cropping</a>
                        </li>
                        <li>
                            <a href="autocomplete.html">Autocomplete</a>
                        </li>
                        <li>
                            <a href="form_wizard.html">Form Wizard</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="login.html"><i class="ti-power-off"></i></a>
            </div>
        </div>
    </nav>
    <!-- END SIDEBAR-->
    <div class="content-wrapper">


@yield('content')


        <footer class="page-footer">
            <div class="font-13">{{date('Y')}} © <b>Shui</b> - Save your time, choose the best</div>
            <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
        </footer>
    </div>
</div>
<!-- START SEARCH PANEL-->
<form class="search-top-bar" action="http://admincast.com/adminca/preview/admin_1/html/search.html">
    <input class="form-control search-input" type="text" placeholder="Search...">
    <button class="reset input-search-icon"><i class="ti-search"></i></button>
    <button class="reset input-search-close" type="button"><i class="ti-close"></i></button>
</form>
<!-- END SEARCH PANEL-->
<!-- BEGIN PAGA BACKDROPS-->
<div class="sidenav-backdrop backdrop"></div>
<div class="preloader-backdrop">
    <div class="page-preloader">Loading</div>
</div>
<!-- END PAGA BACKDROPS-->
<!-- CORE PLUGINS-->
<script src="asset/vendors/jquery/dist/jquery.min.js"></script>
<script src="asset/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="asset/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="asset/vendors/metisMenu/dist/metisMenu.min.js"></script>
<script src="asset/vendors/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="asset/vendors/jquery-idletimer/dist/idle-timer.min.js"></script>
<script src="asset/vendors/toastr/toastr.min.js"></script>
<script src="asset/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="asset/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src="asset/vendors/chart.js/dist/Chart.min.js"></script>
<script src="asset/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script src="asset/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="asset/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- CORE SCRIPTS-->
<script src="asset/js/app.min.js"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src="asset/js/scripts/dashboard_ecommerce.js"></script>
</body>

</html>