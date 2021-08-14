<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('admin/assets/images/favicon.png') }}">
    <title>Admin WEB BEM SV 2021</title>

    <!-- Custom CSS -->
    <link href="{{ URL::asset('admin/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('admin/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('admin/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="{{ url('/admin/dashboard') }}">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="{{ URL::asset('admin/assets/images/logo.png') }}" alt="logo"
                                    class="dark-logo') }}" />
                                <!-- Light Logo icon -->
                            </b>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent"
                    style="background-image: linear-gradient(to right,#3f4c77,#202639); ">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1" style="color: white">
                        <li>
                            <script>
                                var hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
                                document.write(hari[new Date().getDay()])
                            </script>,
                            <script>
                                document.write(new Date().getDate())
                            </script>
                            <script>
                                var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",
                                    "September",
                                    "Oktober", "November", "Desember"
                                ];
                                document.write(months[new Date().getMonth()])
                            </script>
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </li>
                    </ul>


                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="ml-2 d-lg-inline-block"><span style="color: white">
                                        {{ Auth::user()->name }}</span>
                                    <span class="text-dark"></span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="/admin/profile"><i data-feather="user"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Edit Profil</a>
                                <a class="dropdown-item" href="/admin/password"><i data-feather="key"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Ganti Password</a>
                                <hr>
                                <a class="dropdown-item" href="" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i data-feather="log-out"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Keluar</a>
                                <form id="logout-form" action="" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/admin/dashboard"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Kelola</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="/admin/kelola/tampilan"
                                aria-expanded="false"><i data-feather="trello" class="feather-icon"></i><span
                                    class="hide-menu">Tampilan Web
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/admin/kelola/info"
                                aria-expanded="false"><i data-feather="info" class="feather-icon"></i><span
                                    class="hide-menu">Informasi</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/admin/kelola/user"
                                aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span
                                    class="hide-menu">User</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">BEM SV</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/admin/bem/program"
                                aria-expanded="false"><i data-feather="award" class="feather-icon"></i><span
                                    class="hide-menu">Program Kerja</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/admin/bem/struktur"
                                aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span
                                    class="hide-menu">Struktur</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/admin/bem/aspirasi"
                                aria-expanded="false"><i data-feather="smile" class="feather-icon"></i><span
                                    class="hide-menu">Aspirasi</span></a></li>
                        <li class="list-divider"></li>

                        <li class="nav-small-cap"><span class="hide-menu">Biro Statistik</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="/admin/statistik/struktur"
                                aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span
                                    class="hide-menu">Struktur
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a href="/admin/statistik/buletin" class="sidebar-link"
                                aria-expanded="false"><i data-feather="book-open" class="feather-icon"></i><span
                                    class="hide-menu">Buletin
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/admin/statistik/survei"
                                aria-expanded="false"><i data-feather="check-square" class="feather-icon"></i><span
                                    class="hide-menu">Survei</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/admin/statistik/database"
                                aria-expanded="false"><i data-feather="database" class="feather-icon"></i><span
                                    class="hide-menu">Database</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Web</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/" aria-expanded="false"><i
                                    data-feather="monitor" class="feather-icon"></i><span class="hide-menu"> BEM
                                    SV</span></a></li>
                        <li class="sidebar-item"> <a href="/statdiary" class="sidebar-link sidebar-link"
                                aria-expanded="false"><i data-feather="monitor" class="feather-icon"></i><span
                                    class="hide-menu">
                                    Statistic Diary</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Profil</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/admin/edit"
                                aria-expanded="false"><i data-feather="user-check" class="feather-icon"></i><span
                                    class="hide-menu">Edit Profil</span></a></li>
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <li class="sidebar-item"> <button type="submit"
                                    class="sidebar-link sidebar-link btn btn-link" aria-expanded="false"><i
                                        data-feather="log-out" class="feather-icon"></i><span
                                        class="hide-menu">Logout</span></button></li>
                        </form>

                        </li>
                        <br><br>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <script src="{{ URL::asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- apps -->
        <!-- apps -->
        <script src="{{ URL::asset('admin/dist/js/app-style-switcher.js') }}"></script>
        <script src="{{ URL::asset('admin/dist/js/feather.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}">
        </script>
        <script src="{{ URL::asset('admin/dist/js/sidebarmenu.js') }}"></script>
        <!--Custom JavaScript -->
        <script src="{{ URL::asset('admin/dist/js/custom.min.js') }}"></script>
        <!--This page JavaScript -->
        <script src="{{ URL::asset('admin/assets/extra-libs/c3/d3.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/extra-libs/c3/c3.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/libs/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}">
        </script>
        <script src="{{ URL::asset('admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}">
        </script>
        <script src="{{ URL::asset('admin/dist/js/pages/dashboards/dashboard1.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('admin/dist/js/pages/datatable/datatable-basic.init.js') }}"></script>
        <script>
            $(function() {
                $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
            });
        </script>
        <div class="main-content" id="panel">
            @include('sweetalert::alert')
            @yield('content')
        </div>
    </div>
</body>

<footer class="footer text-center text-muted">
    Made With Love From <b>Saraf Design</b>
</footer>
