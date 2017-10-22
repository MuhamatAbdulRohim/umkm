<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>UMKM JEMBER</title>
    <meta name="description" content="UMKM ARAY DEVELOPER">
    <meta name="keywords" content="UMKM JEMBER">
    <meta name="author" content="Aray Developer">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS
    ================================================== -->
    <link rel="icon" href="http://www.araydeveloper.com/images/ico/favicon.ico" sizes="32x32">
    <link rel="stylesheet" href="{{asset('master/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/media-queries.css')}}">

    <script src="{{asset('master/js/modernizr-2.6.2.min.js')}}"></script>

</head>

<body id="body">

<div id="preloader">
    <img src="{{asset('master/img/logo1.png')}}" alt="Preloader">
</div>

<!--Navigation
==================================== -->
<header id="navigation" class="navbar-fixed-top navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <a class="navbar-brand" href="#body">
                <h1 id="logo">
                    <img src="{{asset('master/img/logo.png')}}" style="width: 80% !important; height: 80%" alt="Brandi">
                </h1>
            </a>
        </div>
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav">
                <li class="current"><a href="#body">Home</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#features">Pelayanan</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

    </div>
</header>

<!--Slider
==================================== -->
<section id="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php $no = -1; ?>
            @foreach($banner as $ban)
                <?php $no = $no + 1; ?>
                <li data-target="#carousel-example-generic" data-slide-to="{{$no}}" class="active"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($banner as $ban)
                <div class="item @if($ban->id == 1) active @endif"
                     style="background-image: url({{asset('master/img/'.$ban->image_url)}});">
                    <div class="carousel-caption">
                        <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">
                            <span>{{$ban->title}}</span>
                        </h2>
                        <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span
                                    class="color">{{$ban->sub_title}}</span></h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!--Tentang
==================================== -->

<section id="about" class="contact">
    <div class="container">
        <div class="row mb50">

            <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                <h2>Tentang Kami</h2>
            </div>

            <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                <p>{{$company->about_company}}</p>
            </div>
        </div>
    </div>
</section>

<!--Layanan
==================================== -->

<section id="features" class="features" style="height: 100% !important;">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                <h2>Pelayanan</h2>

            </div>
            @foreach($service as $serv)
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms" style="margin-bottom: 3% !important;">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-check-circle fa-2x"></i>
                        </div>
                        <div class="service-desc">
                            <h3>{{$serv->service_name}}</h3>
                            <p>{{$serv->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!--Galery
==================================== -->

<section id="gallery" class="works clearfix">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center">
                <h2>Gallery</h2>
            </div>

            <div class="sec-sub-title text-center">
                <p>Keupasan Anda adalah Kebanggaan Kami</p>
            </div>

        </div>
    </div>

    <div class="project-wrapper">
        <div class="container">
            @foreach($product as $prod)
                <figure class="mix work-item branding">
                    <img src="{{asset('admin/images/gallary/'.$prod->image_url)}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="{{$prod->description}}"
                           href="{{asset('admin/images/gallary/'.$prod->image_url)}}"><i
                                    class="fa fa-eye fa-lg"></i></a>
                        <h4>{{$prod->product_name}}</h4>
                        <p>Rp. {{$prod->unit_price}}</p>
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </div>


</section>

<!--Kontak
==================================== -->

<section id="contact" class="contact" style="height: 100% !important;">
    <div class="container">
        <div class="row mb50">

            <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                <h2>Kontak Kami</h2>

            </div>

            <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                <p>Jangan Jadikan Jarak sebagai Pemisah, Segera hubungi kami :)</p>
            </div>

            <!-- contact address -->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                <div class="contact-address">
                    <h3>Alamat & Kontak</h3>
                    <p>{{$company->address}}</p>
                    <p>{{$company->city}}</p>
                    <p>{{$company->email}}</p>
                    <p>{{$company->handphone}}</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms"
                 data-wow-delay="300ms">
                <iframe src="{{$company->maps}}"
                        width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms"
                 data-wow-delay="600ms">
                <ul class="footer-social">
                    <li><a target="{{$company->instagram_url}}" href="{{$company->instagram_url}}"><i class="fa fa-instagram fa-2x"></i></a></li>
                    <li><a target="{{$company->twitter_url}}" href="{{$company->twitter_url}}"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a target="{{$company->facebook_url}} "href="{{$company->facebook_url}}"><i class="fa fa-facebook fa-2x"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<footer id="footer" class="footer">
    <div class="container">
        <div class="col-md-12">
            <center><img class="fot" src="{{asset('master/img/logo.png')}}" alt=""></center>

            <p class="copyright text-center">
                Copyright © 2017 <a target="http://araydeveloper.com/" href="http://araydeveloper.com/">Aray Developer</a>. All rights reserved. Powered &
                developed by <a target="http://araydeveloper.com/" href="http://araydeveloper.com/">Aray Developer</a>
            </p>
        </div>
    </div>
</footer>

<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

<script src="{{asset('master/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('master/js/jquery.singlePageNav.min.js')}}"></script>
<script src="{{asset('master/js/bootstrap.min.js')}}"></script>
<script src="{{asset('master/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('master/js/jquery.mixitup.min.js')}}"></script>
<script src="{{asset('master/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('master/js/jquery-countTo.js')}}"></script>
<script src="{{asset('master/js/jquery.appear.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="{{asset('master/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('master/js/wow.min.js')}}"></script>
<script>
    var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 120,
            mobile: false,
            live: true
        }
    );
    wow.init();
</script>

<script src="{{asset('master/js/custom.js')}}"></script>
</body>
</html>
