<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>

    <title>Dashboard</title>
    @include('admin.includes.head')
    

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">
                <!-- Brand demo (see assets/css/demo/demo.css) -->
                @include('admin.includes.header_info')
                <div class="sidenav-divider mt-0"></div>

                <!-- Links -->
                <ul class="sidenav-inner py-1">

                    <!-- Dashboards -->
                    <li class="sidenav-item active">
                        <a href="index.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>

                    <!-- Layouts -->
                    <li class="sidenav-item">
                        <a href="typography.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-file-text"></i>
                            <div>Registration</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="typography.html" class="sidenav-link">
                             <i class="sidenav-icon fas fa-chalkboard-teacher"></i>
                            <div>Course Details</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="typography.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-list"></i>
                            <div>Sessions & Sections</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="typography.html" class="sidenav-link">
                            <i class="sidenav-icon fas fa-calendar-alt"></i>
                            <div>Class Routine</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="typography.html" class="sidenav-link">
                            <i class="sidenav-icon fas fa-archive"></i>
                            <div>Advisorship</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="typography.html" class="sidenav-link">
                            <i class="sidenav-icon feather icon-credit-card"></i>
                            <div>Payments</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="typography.html" class="sidenav-link">
                            <i class="sidenav-icon 	fas fa-server"></i>
                            <div>Results</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="typography.html" class="sidenav-link">
                            <i class="sidenav-icon fas fa-layer-group"></i>
                            <div>Exam Scheduleing</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="typography.html" class="sidenav-link">
                            <i class="sidenav-icon 	fas fa-mail-bulk"></i>
                            <div>Notices & Events</div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">

                    <!-- Brand demo (see assets/css/demo/demo.css) -->

                    <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
                    @include('admin.includes.nav')
                    

                    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                        <!-- Divider -->
                        @include('admin.includes.search')

                        @yield('intro')

                    </div>
                </nav>
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">
                  
                    @yield('content')
                       

                    <!-- [ Layout footer ] Start -->
                   @include('admin.includes.footer')
                    <!-- [ Layout footer ] End -->
               
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    @include('admin.includes.last')
</body>

</html>
