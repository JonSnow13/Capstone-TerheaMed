<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('assets/material-kit/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('assets/material-kit/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/material-kit/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>

	<link rel="stylesheet" type="text/css" href="{{asset('assets/man_library/css/man.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/sweet-alert/sweetalert.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-3.3.1.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-scrolltofixed.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/sweet-alert/sweetalert.js')}}"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
</head>

<body>

<div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="dashboard.html">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./user.html">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./table.html">
                            <i class="material-icons">content_paste</i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="./typography.html">
                            <i class="material-icons">library_books</i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a href="./icons.html">
                            <i class="material-icons">bubble_chart</i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href="./maps.html">
                            <i class="material-icons">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href="./notifications.html">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="upgrade.html">
                            <i class="material-icons">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Table List </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>

            @yield('content')

        </div>
    </div>

@include('admin2.script')
@include('admin2.validation')
@include('admin2.modal')

</body>
<!--   Core JS Files   -->
<script src="{{asset('assets/material-kit/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/material-kit/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/material-kit/js/material.min.js')}}" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{asset('assets/material-kit/js/chartist.min.js')}}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{asset('assets/material-kit/js/arrive.min.js')}}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{asset('assets/material-kit/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/material-kit/js/bootstrap-notify.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('assets/material-kit/js/material-dashboard.js?v=1.2.0')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/material-kit/js/demo.js')}}"></script>

<script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{asset('assets/sweet-alert/sweetalert.min.js')}}"></script>

</html>