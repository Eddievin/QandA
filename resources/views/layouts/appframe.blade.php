<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Qanda</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->

</head>

<body>


    <div class="header">
        <div class="header-left">
            <div class="menu-icon dw dw-menu"></div>
            <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
            <div class="header-search">
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here">
                        <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="ion-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="header-right">

            <!--  Notifications Section -->
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                        <i class="icon-copy dw dw-notification"></i>
                        <span class="badge notification-active"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="notification-list mx-h-350 customscroll">
                            <ul>
                                <li>
                                    <a href="#">
                                        {{-- <img src="vendors/images/img.jpg" alt=""> --}}
                                        <h3>Hey, </h3>
                                        <p>Well done...Keep going.</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--  End Notifications Section -->

            <!--  Profile Section -->
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="/vendors/images/photo1.jpg" alt="">
                        </span>
                        <span class="user-name">Eddie Eddie</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="/pages/profile"><i class="dw dw-user1"></i> Profile</a>


                        <!-- Authentication -->
                        <div class="dropdown-item" href="/pages/login"><i class="dw dw-logout"></i>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                        </div>

                    </div>
                </div>
            </div>
            <!--  End Profile Section -->

        </div>
    </div>
    <!-- End Nav Bar Section -->

    <!-- Dark header Background code -->
    <div class="right-sidebar">

        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">
                <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Dark header Background code -->

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="/">
                <h1 class="dark-logo">QandA</h1>
                <h1 class="light-logo">QandA</h1>
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="/" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                        </a>

                    </li>

                    <li class="dropdown">
                        <a href="/pages/phpquestions" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-library"></span><span class="mtext">Php</span>
                        </a>

                    </li>
                    <li class="dropdown">
                        <a href="/pages/linuxquestions" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-library"></span><span class="mtext">Linux</span>
                        </a>

                    </li>
                    <li class="dropdown">
                        <a href="/pages/iotquestions" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-library"></span><span class="mtext">IOT</span>
                        </a>

                    </li>
                    <li class="dropdown">
                        <a href="/pages/sqlquestions" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-library"></span><span class="mtext">mySQL</span>
                        </a>

                    </li>
                    <li>
                        <a href="/pages/sitemap" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-diagram"></span><span class="mtext">Sitemap</span>
                        </a>
                    </li>


                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Extra</div>
                    </li>
                    <li class="dropdown">
                        <a href="/pages/about" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-paper-plane1"></span><span class="mtext">About Us</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <!-- Body -->
    <div>
        @yield('body')
    </div>
    <!-- End Body -->
 <!-- js -->
 <script src="/vendors/scripts/core.js"></script>
 <script src="/vendors/scripts/script.min.js"></script>
 <script src="/vendors/scripts/process.js"></script>
 <script src="/vendors/scripts/layout-settings.js"></script>
</body>

</html>
