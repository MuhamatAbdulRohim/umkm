<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description"
          content="{{ $deskripsi_toko }}">
    <meta name="keywords" content="{{ $nama_toko }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin-UMKM</title>

    <link rel="icon" href="http://www.araydeveloper.com/images/ico/favicon.ico" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="{{asset('admin/images/favicon/apple-touch-icon-152x152.png')}}">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{asset('admin/images/favicon/mstile-144x144.png')}}">

    <link href="{{asset('admin/css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('admin/css/style.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">
    <link href="{{asset('admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet"
          media="screen,projection">

    @yield('head_css')

</head>
<body>
<div class="page-loader">
    <div class="loader"></div>
</div>
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="grey lighten-4 navbar-color">
            <div class="nav-wrapper">
                <ul class="left">
                    <li><h1 class="blue-text logo-text"></h1></li>
                    <li>
                        <i class="center logo-text">
                            Admin UMKM
                        </i>
                    </li>
                </ul>
                <ul class="right ">
                    <li>
                        <a href=""
                           class="light-blue-text text-darken-1 waves-effect waves-block waves-light notification-button"
                           data-activates="notifications-dropdown"><i class="mdi-action-settings"></i></a>
                    </li>
                </ul>
                <ul id="notifications-dropdown" class="dropdown-content">
                    <li>
                        <a class="grey-text text-darken-4 modal-trigger" href="#modal3">
                            <i class="mdi-image-tune"></i><b>&nbsp;&nbsp; Settings</b>
                        </a>
                    </li>
                    <li>
                        <a class="orange-text text-darken-4" href="{{ route('logout') }}">
                            <i class="mdi-action-exit-to-app"></i><b>&nbsp;&nbsp; Logout</b> </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <section id="content">
        <div class="container">
            <div id="modals-demo" class="container">
                <div class="row">
                    <div class="col s12 m8 l9">
                        <div id="modal3" class="modal">
                            <div class="modal-content grey lighten-2">
                                <h5 class="light-blue-text text-darken-1"><i>Change Account</i></h5>
                                <div id="basic-form" class="section">
                                    <div class="row">
                                        <div class="col s12 m12 l12">
                                            <div class="card-panel">
                                                <div class="row">
                                                    <form class="col s12">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <i class="mdi-action-account-circle prefix"></i>
                                                                <input id="uname" type="text">
                                                                <label for="uname">Username</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <i class="mdi-action-lock prefix"></i>
                                                                <input id="password" type="password">
                                                                <label for="password">Password</label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer  light-blue darken-1">
                                <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close white-text"><i
                                            class="mdi-action-highlight-remove prefix"></i> Cancel</a>
                                <a href="#"
                                   class="btn-success waves-effect waves-green btn-flat modal-action modal-close white-text"><i
                                            class="mdi-action-done prefix"></i> Ok</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>

<div id="main">
    <div class="wrapper">

        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side side-nav fixed leftside-navigation">

                <li class="bold @if($menu == 'profile') active @endif"><a href="/adm"
                                                                          class="waves-effect waves-cyan"><i
                                class="light-blue-text text-darken-1 mdi-action-face-unlock"></i> Profile</a>
                </li>

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="light-blue-text text-darken-1 mdi-image-collections"></i> Galery</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="@if($menu == 'addgalery') active @endif"><a
                                                href="/adm/add_galery">Add</a></li>
                                    <li class="@if($menu == 'mygalery') active @endif"><a
                                                href="/adm/my_galery">Media</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="light-blue-text text-darken-1 mdi-action-account-child"></i> Service</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="@if($menu == 'addservice') active @endif"><a
                                                href="/adm/add_service">Add</a></li>
                                    <li class="@if($menu == 'myservice') active @endif"><a href="/adm/my_service">My
                                            Service</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

                <br><br>
                <li class="li-hover">
                    <div class="divider"></div>
                </li>

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="light-blue-text text-darken-1 mdi-action-view-carousel"></i>
                                Aditional</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="@if($menu == 'slider') active @endif"><a href="/adm/slide">Slider</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>

        <section id="content">
            @yield('content')
        </section>
    </div>
</div>

<footer class="page-footer">
    <div class="light-blue darken-1 footer-copyright">
        <div class="container">
            <span class="right">Copyright © 2017 <a class="grey-text text-lighten-4" href="http://araydeveloper.com"
                                                    target="_blank"><b>ARAY Developer</b></a></span>
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{asset('admin/js/plugins/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/angular.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/prism/prism.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/custom-script.js')}}"></script>

<script type="text/javascript">
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@stack('scripts')

</body>
</html>
