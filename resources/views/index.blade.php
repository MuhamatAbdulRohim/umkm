<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <!-- meta charec set -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Page Title -->
    <title>UMKM JEMBER</title>
    <!-- Meta Description -->
    <meta name="description" content="UMKM ARAY DEVELOPER">
    <meta name="keywords" content="UMKM JEMBER">
    <meta name="author" content="Aray Developer">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS
    ================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{asset('master/css/font-awesome.min.css')}}">
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="{{asset('master/css/bootstrap.min.css')}}">
    <!-- jquery.fancybox  -->
    <link rel="stylesheet" href="{{asset('master/css/jquery.fancybox.css')}}">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('master/css/animate.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('master/css/main.css')}}">
    <!-- media-queries -->
    <link rel="stylesheet" href="{{asset('master/css/media-queries.css')}}">

    <!-- Modernizer Script for old Browsers -->
    <script src="{{asset('master/js/modernizr-2.6.2.min.js')}}"></script>

</head>

<body id="body">

<!-- preloader -->
<div id="preloader">
    <img src="{{asset('master/img/logo1.png')}}" alt="Preloader">
</div>
<!-- end preloader -->

<!--
Fixed Navigation
==================================== -->
<header id="navigation" class="navbar-fixed-top navbar">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <a class="navbar-brand" href="#body">
                <h1 id="logo">
                    <img src="{{asset('master/img/logo.png')}}" alt="Brandi">
                </h1>
            </a>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav">
                <li class="current"><a href="#body">Home</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#features">Pelayanan</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <!-- /main nav -->

    </div>
</header>
<!--
End Fixed Navigation
==================================== -->


<!--
Home Slider
==================================== -->

<section id="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Indicators bullet -->
        <ol class="carousel-indicators">
            <?php $no = -1; ?>
            @foreach($banner as $ban)
                <?php $no = $no + 1; ?>
                <li data-target="#carousel-example-generic" data-slide-to="{{$no}}" class="active"></li>
            @endforeach
        </ol>
        <!-- End Indicators bullet -->

        <!-- Wrapper for slides -->
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
                        <p data-wow-duration="1000ms" class="wow slideInRight animated">{{$ban->description}}</p>

                        <ul class="social-links text-center">
                            <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram fa-lg"></i></a></li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!--
End Home SliderEnd
==================================== -->

<!--
About Us
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

<!--
End About Us
==================================== -->

<!--
Features
==================================== -->

<section id="features" class="features" style="height: 100% !important;">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                <h2>Pelayanan</h2>

            </div>
            <!-- service item -->
            @foreach($service as $serv)
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms" style="margin-bottom: 3% !important;">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-bullhorn fa-2x"></i>
                        </div>
                        <div class="service-desc">
                            <h3>{{$serv->service_name}}</h3>
                            <p>{{$serv->description}}</p>
                        </div>
                    </div>
                </div>
                <!-- end service item -->
            @endforeach
        </div>
    </div>
</section>

<!--
End Features
==================================== -->


<!--
Our Works
==================================== -->

<section id="gallery" class="works clearfix">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center">
                <h2>Gallery</h2>
            </div>

            <div class="sec-sub-title text-center">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore</p>
            </div>

        </div>
    </div>

    <div class="project-wrapper">
        <div class="container">
            @foreach($product as $prod)
                <figure class="mix work-item branding">
                    <img src="{{asset('master/img/product/'.$prod->image_url)}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="{{$prod->product_name}}"
                           href="{{asset('master/img/works/'.$prod->image_url)}}"><i
                                    class="fa fa-eye fa-lg"></i></a>
                        <h4>{{$prod->product_name}}</h4>
                        <p>{{$prod->description}}</p>
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </div>


</section>

<!--
End Our Works
==================================== -->


<!--
Contact Us
==================================== -->

<section id="contact" class="contact" style="height: 100% !important;">
    <div class="container">
        <div class="row mb50">

            <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                <h2>Kontak Kami</h2>

            </div>

            <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore</p>
            </div>

            <!-- contact address -->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                <div class="contact-address">
                    <h3>Alamat & Kontak</h3>
                    <p>{{$company->address}}</p>
                    <p>{{$company->district}}, {{$company->province}}</p>
                    <p>{{$company->email}}</p>
                    <p>{{$company->handphone}}</p>
                </div>
            </div>
            <!-- end contact address -->

            <!-- contact form -->
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms"
                 data-wow-delay="300ms">
                <iframe src="{{$company->maps}}"
                        width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- end contact form -->

            <!-- footer social links -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms"
                 data-wow-delay="600ms">
                <ul class="footer-social">
                    <li><a href="https://www.behance.net/Themefisher"><i class="fa fa-instagram fa-2x"></i></a></li>
                    <li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="https://dribbble.com/themefisher"><i class="fa fa-google-plus fa-2x"></i></a></li>
                    <li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
                </ul>
            </div>
            <!-- end footer social links -->

        </div>
    </div>
</section>

<!--
End Contact Us
==================================== -->


<footer id="footer" class="footer">
    <div class="container">
        <div class="col-md-12">
            <center><img class="fot" src="{{asset('master/img/logo.png')}}" alt=""></center>

            <p class="copyright text-center">
                Copyright © 2017 <a href="http://araydeveloper.com/">Aray Developer</a>. All rights reserved. Powered &
                developed by <a href="http://araydeveloper.com/">Aray Developer</a>
            </p>
        </div>
    </div>
</footer>

<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

<!-- Essential jQuery Plugins
================================================== -->
<!-- Main jQuery -->
<script src="{{asset('master/js/jquery-1.11.1.min.js')}}"></script>
<!-- Single Page Nav -->
<script src="{{asset('master/js/jquery.singlePageNav.min.js')}}"></script>
<!-- Twitter Bootstrap -->
<script src="{{asset('master/js/bootstrap.min.js')}}"></script>
<!-- jquery.fancybox.pack -->
<script src="{{asset('master/js/jquery.fancybox.pack.js')}}"></script>
<!-- jquery.mixitup.min -->
<script src="{{asset('master/js/jquery.mixitup.min.js')}}"></script>
<!-- jquery.parallax -->
<script src="{{asset('master/js/jquery.parallax-1.1.3.js')}}"></script>
<!-- jquery.countTo -->
<script src="{{asset('master/js/jquery-countTo.js')}}"></script>
<!-- jquery.appear -->
<script src="{{asset('master/js/jquery.appear.js')}}"></script>
<!-- Contact form validation -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
<!-- Google Map -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<!-- jquery easing -->
<script src="{{asset('master/js/jquery.easing.min.js')}}"></script>
<!-- jquery easing -->
<script src="{{asset('master/js/wow.min.js')}}"></script>
<script>
    var wow = new WOW({
            boxClass: 'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 120,          // distance to the element when triggering the animation (default is 0)
            mobile: false,       // trigger animations on mobile devices (default is true)
            live: true        // act on asynchronously loaded content (default is true)
        }
    );
    wow.init();
</script>
<!-- Custom Functions -->
<script src="{{asset('master/js/custom.js')}}"></script>
</body>
</html>
