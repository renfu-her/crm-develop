<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

    <title>@yield('title', 'CRM 客戶關係管理')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @yield('styles')
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">CRM 客戶關係管理</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        管理系統
                    </li>

                    <li class="sidebar-item {{ request()->is('backend/customers*') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('backend.customers.index') }}">
                            <i class="align-middle fas fa-users"></i>
                            <span class="align-middle">客戶管理</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->is('backend/marketing*') ? 'active' : '' }}">
                        <a class="sidebar-link" href="pages-blank.html">
                            <i class="align-middle fas fa-bullhorn"></i>
                            <span class="align-middle">營銷活動管理</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->is('backend/contacts*') ? 'active' : '' }}">
                        <a class="sidebar-link" href="pages-profile.html">
                            <i class="align-middle fas fa-address-book"></i>
                            <span class="align-middle">聯繫管理</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->is('backend/sales*') ? 'active' : '' }}">
                        <a class="sidebar-link" href="pages-sign-in.html">
                            <i class="align-middle fas fa-shopping-cart"></i>
                            <span class="align-middle">銷售管理</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->is('backend/schedules*') ? 'active' : '' }}">
                        <a class="sidebar-link" href="pages-sign-up.html">
                            <i class="align-middle fas fa-calendar-alt"></i>
                            <span class="align-middle">日程與任務管理</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->is('backend/tickets*') ? 'active' : '' }}">
                        <a class="sidebar-link" href="pages-blank.html">
                            <i class="align-middle fas fa-ticket-alt"></i>
                            <span class="align-middle">票務與支持</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        報告分析
                    </li>

                    <li class="sidebar-item {{ request()->is('backend/reports*') ? 'active' : '' }}">
                        <a class="sidebar-link" href="pages-blank.html">
                            <i class="align-middle fas fa-chart-line"></i>
                            <span class="align-middle">業務報告與分析</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">

                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                <span class="text-dark">{{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                        data-feather="user"></i> Profile</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                @yield('content')
            </main>

        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @yield('scripts')

</body>

</html>
