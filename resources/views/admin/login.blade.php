<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Admin-UMKM</title>

    <link rel="icon" href="http://www.araydeveloper.com/images/ico/favicon.ico" sizes="32x32">

    <link rel="apple-touch-icon-precomposed" href="{{asset('admin/images/favicon/apple-touch-icon-152x152.png')}}">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{asset('admin/images/favicon/mstile-144x144.png')}}">

    <link href="{{asset('admin/css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('admin/css/style.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('admin/css/layouts/page-center.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">
    <link href="{{asset('admin/js/plugins/animate-css/animate.css')}}" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body class="grey lighten-1">

<!--==================================================== CONTENT ====================================================-->

<div id="login-page" class="row">
    <div class="col s12 z-depth-2 card-panel animated bounceIn">
        <form class="login-form">
            <div class="row">
                <div class="input-field col s12 center">
                    <img src="{{asset('admin/images/b.png')}}" alt="" class="circle responsive-img valign profile-image-login">
                    <p class="center login-form-text">Selamat Datang</p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-account-circle prefix"></i>
                    <input id="username" type="text">
                    <label for="username" class="center-align">Username</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock prefix"></i>
                    <input id="password" type="password">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <a href="/adm" class="btn teal lighten-1 waves-effect waves-light col s12"><b>Login</b></a>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <p class="center medium-small">Support by : <a href="http://araydeveloper.com" target="_blank" class="light-blue-text text-darken-1 "><b>ARAY Developer</b></a></p>
                </div>
            </div>
        </form>
    </div>
</div>

<!--==================================================== END-CONTENT ====================================================-->


<!--==================================================== SCRIPT ====================================================-->

<!-- jQuery Library -->
<script type="text/javascript" src="{{asset('admin/js/plugins/jquery-1.11.2.min.js')}}"></script>
<!--materialize js-->
<script type="text/javascript" src="{{asset('admin/js/materialize.min.js')}}"></script>
<!-- main -->
<script type="text/javascript" src="{{asset('admin/js/main.js')}}"></script>

<!--==================================================== END-SCRIPT ====================================================-->

</body>
</html>