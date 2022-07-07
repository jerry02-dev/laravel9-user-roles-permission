<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Styles -->

    
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">


    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body class="animsition">


    <div>
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        Point of Sale [ COMPANY NAME HERE ]
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="{{ route('home.index') }}">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                               <!--  <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="index.html">Dashboard 1</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">Dashboard 2</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">Dashboard 3</a>
                                    </li>
                                    <li>
                                        <a href="index4.html">Dashboard 4</a>
                                    </li>
                                </ul> -->
                            </li>
                            @can('masterdata-menu')
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>Masterdata</a>
                                    <ul class="header3-sub-list list-unstyled">

                                        <li>
                                            <a href="{{ route('customers.index') }}">Customers</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('category.index') }}">Category</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('suppliers.index') }}">Suppliers</a>
                                        </li>

                                        @can('product-menu')
                                        <li>
                                            <a href="{{ route('products.index') }}">Products</a>
                                        </li> 
                                        @endcan

                                         <li>
                                            <a href="index.html">Packaging</a>
                                        </li>

                                         <li>
                                            <a href="index.html">Pricing</a>
                                        </li>                            
                                    </ul>
                            </li>
                            @endcan
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Transaction</a>
                                    <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="index.html">Sales</a>
                                    </li> 
                                     <li>
                                        <a href="index.html">Receive Stock</a>
                                    </li> 
                                      <li>
                                        <a href="index.html">Stock Return</a>
                                    </li>                                
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>Reports</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="login.html">Stock Inventory</a>
                                    </li>
                                    <li>
                                        <a href="register.html">Stockcard</a>
                                    </li>
                                    <li>
                                        <a href="register.html">Sales</a>
                                    </li>
                                </ul>
                            </li>
               <!--              <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-desktop"></i>
                                    <span class="bot-line"></span>UI Elements</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="button.html">Button</a>
                                    </li>
                                    <li>
                                        <a href="badge.html">Badges</a>
                                    </li>
                                    <li>
                                        <a href="tab.html">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="card.html">Cards</a>
                                    </li>
                                    <li>
                                        <a href="alert.html">Alerts</a>
                                    </li>
                                    <li>
                                        <a href="progress-bar.html">Progress Bars</a>
                                    </li>
                                    <li>
                                        <a href="modal.html">Modals</a>
                                    </li>
                                    <li>
                                        <a href="switch.html">Switchs</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">Grids</a>
                                    </li>
                                    <li>
                                        <a href="fontawesome.html">FontAwesome</a>
                                    </li>
                                    <li>
                                        <a href="typo.html">Typography</a>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
             
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">

                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="account-dropdown__body">

                                       
                                        <div class="account-dropdown__item">
                                            <a href="{{ route('profile.show',Auth::user()->id) }}">
                                                <i class="zmdi zmdi-account"></i>Profile</a>
                                        </div>
                                      
                                       @can('user-menu')
                                        <div class="account-dropdown__item">
                                            <a href="{{ route('users.index') }}">
                                                <i class="zmdi zmdi-settings"></i>Users</a>
                                        </div>
                                        @endcan

                                        @can('role-menu')
                                        <div class="account-dropdown__item">
                                            <a href="{{ route('roles.index') }}">
                                                <i class="zmdi zmdi-money-box"></i>Roles</a>
                                        </div>
                                        @endcan
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link nav_link_sub_css">
                                          <i class="zmdi zmdi-power"></i>Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

  

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a class="text-primary" href="{{ route('home.index') }}">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">{{ ucfirst((Request::segment(1)=='home'?'Dashboard':Request::segment(1))) }} </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
           <!--  <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span>John!</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- END WELCOME-->

            <section>
                <div class="container">
                       @yield('content')
                </div>
            </section>
          
            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

 <!-- Jquery JS-->

 <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>

 <!-- Bootstrap JS-->

 <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
 <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>

 <!-- Vendor JS -->

 <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
 <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
 <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
 <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
 <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
 <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}"></script>
 <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
 <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
 <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
 <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>

 <!-- Main JS-->

 <script src="{{ asset('js/main.js') }}"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
@stack('scripts')
</body>
</html>
