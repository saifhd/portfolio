<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('css/starlight.css')}}">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
    <div class="sl-sideleft">
        <label class="sidebar-label">Navigation</label>
        <div class="sl-sideleft-menu">
            {{-- <a href="index.html" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link --> --}}

            <a href="{{ route('career.index') }}" class="sl-menu-link {{ Request::is('admin/career') || Request::is('admin/career/*') ?'active' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Careers</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="{{ route('education.index') }}" class="sl-menu-link {{ Request::is('admin/education') || Request::is('admin/education/*') ?'active' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Education</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="{{ route('skills.index') }}" class="sl-menu-link {{ Request::is('admin/skills') || Request::is('admin/skills/*') ?'active' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Skills</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="{{ route('projects.index') }}"
                class="sl-menu-link {{ Request::is('admin/projects') || Request::is('admin/projects/*') ?'active' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Projects</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="{{ route('settings.index') }}" class="sl-menu-link {{ Request::is('admin/settings') || Request::is('admin/settings/*') ?'active' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Setttings</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
        </div><!-- sl-sideleft-menu -->

        <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name">{{ auth()->user()->name }}</span>
                        @if(auth()->user()->avatar)
                            <img src="{{ auth()->user()->avatar }}" class="wd-32 rounded-circle" alt="">
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            {{-- <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li> --}}
                            <li><a href="{{ route('settings.index') }}"><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                            {{-- <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li> --}}
                            {{-- <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li> --}}
                            {{-- <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li> --}}
                            <li><a href=""
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                ><i class="icon ion-power"></i> Sign Out</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
        </div><!-- sl-header-right -->
    </div>
    <!-- ########## END: HEAD PANEL ########## -->




    <div class="sl-mainpanel" style="background-color: white; text-color:black">


        <div class="sl-pagebody">

            @yield('content')


        </div><!-- sl-pagebody -->
        <hr>
        <footer class="sl-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2021. Saiful Islam . All Rights Reserved.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Share:</span>
                <a target="_blank" class="pd-x-5"
                    href="https://www.facebook.com/profile.php?id=100003316156571"><i
                        class="fa fa-facebook tx-20"></i></a>
                {{-- <a target="_blank" class="pd-x-5"
                    href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i
                        class="fa fa-twitter tx-20"></i></a> --}}
            </div>
        </footer>
    </div>


    <script src="{{ asset('lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('lib/d3/d3.js') }}"></script>
    <script src="{{ asset('lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('lib/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('lib/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('lib/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('lib/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('lib/flot-spline/jquery.flot.spline.js') }}"></script>

    <script src="{{ asset('js/starlight.js') }}"></script>
    <script src="{{ asset('js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>

    @yield('scripts')
</body>

</html>
