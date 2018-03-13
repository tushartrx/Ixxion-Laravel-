<!DOCTYPE html>

<!--
   Template:   Asso - One Page HTML5 Website Template
   Author:     Themetorium
   URL:        http://themetorium.net/
-->

<html lang="en">

<!-- Mirrored from demo.themetorium.net/html/asso/v.1.2/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jul 2017 10:42:38 GMT -->
<head>

    <!-- Title -->
    <title>IXIION</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Responsive One Page HTML5 Website Template">
    <meta name="keywords" content="HTML5, CSS3, Bootsrtrap, Responsive, One Page, Template, Theme, Website" />
    <meta name="author" content="themetorium.net">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon (http://www.favicon-generator.org/) -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{asset('asset/fontend/')}}/favicon.ico" type="image/x-icon">

    <!-- Google font (https://www.google.com/fonts) -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Mono:400,300,500,700' rel='stylesheet' type='text/css'> <!-- Body font -->
    <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'> <!-- Alternative font -->

    <!-- Bootstrap CSS (http://getbootstrap.com) -->
    <link rel="stylesheet" href="{{asset('asset/fontend/')}}/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="{{asset('asset/fontend/')}}/vendor/animate.min.css"> <!-- Animations CSS (more info: http://daneden.github.io/animate.css) -->
    <link rel="stylesheet" href="{{asset('asset/fontend/')}}/vendor/font-awesome/css/font-awesome.min.css"> <!-- Font Icons (more info: http://fortawesome.github.io/Font-Awesome) -->
    <link rel="stylesheet" href="{{asset('asset/fontend/')}}/vendor/ytplayer/css/jquery.mb.YTPlayer.min.css"> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
    <link rel="stylesheet" href="{{asset('asset/fontend/')}}/vendor/owl-carousel/css/owl.carousel.min.css"> <!-- Owl Carousel CSS (more info: http://www.owlcarousel.owlgraphic.com) -->
    <link rel="stylesheet" href="{{asset('asset/fontend/')}}/vendor/owl-carousel/css/owl.theme.default.min.css"> <!-- Owl Carousel default theme CSS (more info: http://www.owlcarousel.owlgraphic.com) -->
    <link rel="stylesheet" href="{{asset('asset/fontend/')}}/vendor/magnific-popup/css/magnific-popup.css"> <!-- Magnific Popup CSS (more info: http://dimsemenov.com/plugins/magnific-popup/) -->

    <!-- Theme master CSS -->
    <link rel="stylesheet" href="{{asset('asset/fontend/')}}/css/helper.css">
    <link rel="stylesheet" href="{{asset('asset/fontend/')}}/css/theme.css">

    <!-- Theme styles CSS (comment or uncomment below lines to enable/disable styles) -->
    <link rel="alternate stylesheet" media="screen" title="blue-theme" href="{{asset('asset/fontend/')}}/css/styles/blue.css">
    <link rel="alternate stylesheet" media="screen" title="brown-theme" href="{{asset('asset/fontend/')}}/css/styles/brown.css">
    <link rel="alternate stylesheet" media="screen" title="green-theme" href="{{asset('asset/fontend/')}}/css/styles/green.css">
    <link rel="alternate stylesheet" media="screen" title="purple-theme" href="{{asset('asset/fontend/')}}/css/styles/purple.css">
    <link rel="alternate stylesheet" media="screen" title="yellow-theme" href="{{asset('asset/fontend/')}}/css/styles/yellow.css">

    <!-- Theme custom CSS (all your CSS customizations) -->
    <link rel="stylesheet" href="{{asset('asset/fontend/')}}/css/custom.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>




<!-- Additional information
============================
* You are free to use extra helper classes to customize your website (look into "helper.css" file).
* To use scrolling animations please read more information here: http://mynameismatthieu.com/WOW/index.html.
-->


<!-- =================
///// Begin body /////
======================
* Add class="boxed" to use boxed layout (example: <body class="boxed" data-spy="scroll" data-target="#scrollspy">).
* Use backgroun classes to change boxed layout background color. example: <body class="boxed bg-dark" data-spy="scroll" data-target="#scrollspy"> (look into "helper.css" file for more info).
-->
<body data-spy="scroll" data-target="#scrollspy">

<!-- Begin preloader -->
<div id="preloader">
    <div class="pulse"></div>
</div>
<!-- End preloader -->

<!-- Begin body content -->
<div id="body-content">


    <!-- ============================
    ///// Begin top sliding bar /////
    =================================
    * Add class "slidingbar-fixed" to enable fixed slidingbar.
    -->
    <section id="top-slidingbar-wrapper" class="slidingbar-fixed">
        <div id="top-slidingbar">
            <div class="container">
                <div class="row">

                    <div class="col col-md-4">
                        <h4 class="top-slidingbar-heading text-gray-2">Information</h4>
                        <hr class="hr-width-1 hr-double margin-top-15">
                        <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt uteralis labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div> <!-- /.col -->

                    <div class="col col-md-4">
                        <h4 class="top-slidingbar-heading text-gray-2">Contact</h4>
                        <hr class="hr-width-1 hr-double margin-top-15">
                        <ul class="list-unstyled small">
                            <li><i class="fa fa-home"></i>Zakir Hossin Road</li>
                            <li><i class="fa fa-phone"></i> (+548) 12-345-6789</li>
                            <li><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></li>
                        </ul>
                    </div> <!-- /.col -->

                    <div class="col col-md-4">

                        {{--<h4 class="top-slidingbar-heading text-gray-2">Our Instagram</h4>--}}
                        <h4 class="top-slidingbar-heading text-gray-2">
                          <button class="btn btn-block"><a href="{{ route('login') }}" target="_blank">Login</a></button>
                        </h4>
                        <hr class="hr-width-1 hr-double margin-top-15">

                        <!-- Begin thumbnail list
                        ==========================
                        * Use class "col-2", "col-3", "col-4" "col-5" or "col-6" for thumbnail list columns.
                        * Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4" or "gutter-5" to add more space between items.
                        -->
                        <ul class="thumb-list col-5 gutter-3">
                            <li><a target="_blank" href="https://www.instagram.com/" class="thumb-list-item bg-image" style="background-image: url(assets/img/misc/small/img-1.jpg);"></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/" class="thumb-list-item bg-image" style="background-image: url(assets/img/misc/small/img-2.jpg);"></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/" class="thumb-list-item bg-image" style="background-image: url(assets/img/misc/small/img-3.jpg);"></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/" class="thumb-list-item bg-image" style="background-image: url(assets/img/misc/small/img-4.jpg);"></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/" class="thumb-list-item bg-image" style="background-image: url(assets/img/misc/small/img-5.jpg);"></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/" class="thumb-list-item bg-image" style="background-image: url(assets/img/misc/small/img-6.jpg);"></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/" class="thumb-list-item bg-image" style="background-image: url(assets/img/misc/small/img-7.jpg);"></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/" class="thumb-list-item bg-image" style="background-image: url(assets/img/misc/small/img-8.jpg);"></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/" class="thumb-list-item bg-image" style="background-image: url(assets/img/misc/small/img-9.jpg);"></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/" class="thumb-list-item bg-image" style="background-image: url(assets/img/misc/small/img-11.jpg);"></a></li>
                        </ul>
                        <!-- End thumbnail list -->

                    </div> <!-- /.col -->

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top-slidingbar -->

        <!-- top-top-slidingbar trigger -->
        <div class="top-slidingbar-trigger-wrapper"><span class="top-slidingbar-trigger">+</span></div>

    </section>
    <!-- End top sliding bar -->


    <!-- ==============
    ///// Begin header
    =================== -->
    <header id="header-wrap">

        <!-- Begin Header content
        ==========================
        * Use class "show-hide-on-scroll" to hide header on scroll down and show on scroll up.
        * Use class "fixed-top" to set header to fixed position.
        * Use class "transparent" for transparent header.
        * Use class "transparent-border" to enable bottom border on transparent header (class "transparent" is still required).
        * Use class "semi-transparent" for semi-transparent header.
        * Use class "header-fluid" for full width header.
        * Use class "header-dark" for dark header.
        * Use class "header-color" for header custom background color. By default theme main color is used, but you ca use custom background color classes (class "header-color" is still required!). Look into "helper.css" file for more info.
        * Use class "header-shadow" to enable header bottom shadow.
        * Use class "header-md", "header-lg" or "header-xlg" to change header size.
        -->
        <div id="header" class="header-md fixed-top header-dark transparent">
            <div id="scrollspy" class="container header-container">

                <!-- Begin logo  -->
                <div class="logo font-alter-1">
                    <a href="index.html"><h1>IXI/ION</h1></a>
                </div>
                <!-- End logo -->

                <!-- Begin navbar
                ================== -->
                <nav class="navbar pull-right">

                    <!-- Begin toggle button (get grouped for better mobile display) -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-main" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- End toggle button-->

                    <!-- Begin nav main
                    ====================
                    * Use class "nav-separator" to enable nav links separators.
                    * Use class "nav-uppercase" to enable nav uppercase letters.
                    * Use class "mob-navbar-collapse-dark" to enable dark mobile menu.
                    * Use class "mob-navbar-align-center" to enable dark mobile menu.
                    * Note-1: class "mlc" in menu links = close mobile menu when clicking menu link (for one page template version only).
                    * Note-2: class "sm-scroll" in menu links = enable smooth scrolling when clicking menu link (for one page template version only).
                    -->
                    <div id="nav-main" class="collapse navbar-collapse mob-navbar-collapse-dark">

                        <!-- Begin navbar-nav
                        ======================
                        * Use class "nav-pills" to enable nav pills.
                        * Use class "pills-rounded", "pills-rounded-2x", "pills-rounded-3x" or "pills-rounded-4x" for rounded pills (class "nav-pills" is required).
                        * Use class "pills-gradient" to enable gradient pills (class "nav-pills" is required).
                        * Use class "nav-border-bottom" to enable menu links with bottom border (class "nav-pills" is required).
                        -->
                        <ul class="nav navbar-nav navbar-right nav-pills pills-rounded">

                            <li class="active"><a class="mlc sm-scroll" href="#intro">Home</a></li>
                            <li><span class="nav-link-separator">/</span></li>

                            <!-- Begin dropdown
                            ====================
                            * Use class "dropdown-hover" to make navigation toggle on desktop hover.
                            * Use class "dropdown-uppercase" to enable dropdown menu uppercase letters.
                            * Use class "dropdown-menu-dark" to enable dark dropdown menu.
                            * Use class "dropdown-menu-color" to enable custom colored dropdown menu.
                            * Use class "dropdown-menu-right" to right align the dropdown menu.
                            -->
                            <li class="dropdown dropdown-menu-dark dropdown-hover">
                                <a href="#0" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    About<span class="caret-2"><i class="fa fa-angle-down"></i></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="mlc sm-scroll" href="#section-1">About Us</a></li>
                                    <li><a class="mlc sm-scroll" href="#section-5">Our Team</a></li>
                                    <li><a class="mlc sm-scroll" href="#section-9">Video Promo</a></li>
                                    <li><a class="mlc sm-scroll" href="#section-7">Testimonials</a></li>
                                    <li><a class="mlc sm-scroll" href="#section-10">Our Clients</a></li>

                                    <!-- Begin dropdown (submenu)
                                    ==============================
                                    * Use class "dropdown-hover" to make navigation toggle on desktop hover.
                                    * Use class "dropdown-uppercase" to enable dropdown menu uppercase letters.
                                    * Use class "dropdown-menu-dark" to enable dark dropdown menu.
                                    * Use class "dropdown-menu-color" to enable custom colored dropdown menu.
                                    * Use class "dropdown-submenu" for dropdown submenu.
                                    -->

                                    <!-- End dropdown -->

                                </ul> <!-- /.dropdown-menu -->
                            </li>
                            <!-- End dropdown -->

                            <li><span class="nav-link-separator">/</span></li>
                            <li><a class="mlc sm-scroll" href="#section-2">Services</a></li>
                            <li><span class="nav-link-separator">/</span></li>
                            <li><a class="mlc sm-scroll" href="#section-3">Portfolio</a></li>
                            <li><span class="nav-link-separator">/</span></li>
                            {{--<li><a class="mlc sm-scroll" href="#section-4">Pricing</a></li>--}}
                            {{--<li><span class="nav-link-separator">/</span></li>--}}
                            {{--<li><a class="mlc sm-scroll" href="#section-6">Articles</a></li>--}}
                            {{--<li><span class="nav-link-separator">/</span></li>--}}
                            <li><a class="mlc sm-scroll" href="#section-8">Contact</a></li>

                        </ul>
                        <!-- End navbar-nav -->

                    </div>
                    <!-- End nav main -->

                </nav>
                <!-- End navbar -->

            </div> <!-- /.container -->
        </div>
        <!-- End header content -->

    </header>
    <!-- End header -->


    <!-- ==========================
    ///// Begin intro section /////
    ===============================
    * Use class "full-height" to full screen intro.
    * Use class "angle-left-bottom" or "angle-right-bottom" to change intro bottom angle.
    * Use class "bg-image-parallax" to enable background image parallax effect (otherwise use class "bg-image").
    -->
    <section id="intro" class="full-height bg-image-parallax" style="background-image: url({{asset('asset/fontend/')}}/img/intro/intro-bg.jpg);">

        <div class="intro-inner">

            <!-- Element cover
            ===================
            * Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info.
            -->
            <span class="cover bg-transparent-2-dark bg-transparent-gradient-2"></span>

            <!-- Begin intro caption -->
            <div class="intro-caption vertical-align-center text-center text-white">
                <h2 class="intro-title font-alter-1">
                    <span class="wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="0.5s">I</span>
                    <span class="wow fadeInDown" data-wow-delay="0.6s" data-wow-duration="0.5s">X</span>
                    <span class="wow fadeInDown" data-wow-delay="0.6s" data-wow-duration="0.5s">I</span>
                    <span class="wow bounceIn" data-wow-delay="1.6s">I</span>
                    <span class="wow fadeInDown" data-wow-delay="0.8s" data-wow-duration="0.5s">O</span>
                    <span class="wow fadeInDown" data-wow-delay="1s" data-wow-duration="0.5s">N</span>
                </h2>
                <p class="intro-description wow fadeIn" data-wow-delay="2.2s">Creative Agency Since 2017</p>
                <div class="margin-top-30">
                    <a href="#section-2" class="btn btn-white-bordered btn-rounded sm-scroll wow bounceIn" data-wow-delay="0.8s">Our Services</a>
                    <a href="#section-8" class="btn btn-primary btn-rounded sm-scroll margin-top-10 wow bounceIn" data-wow-delay="1s">Hire Us Now!</a>
                </div>
            </div>
            <!-- End intro caption -->

            <!-- Made with love :) -->
            <div class="made-with-love hidden-xs">
                <p class="text-gray">Made with <span class="text-main"><i class="fa fa-heart-o"></i></span></p>
            </div>

            <!-- Scroll down arrow -->
            <a class="scroll-down-arrow sm-scroll text-center text-white" href="#section-1"><span><i class="fa fa-chevron-down"></i></span></a>

        </div>

    </section>
    <!-- End intro section -->


    <!-- ===================================
    ///// Begin call to action section /////
    ========================================
    * Use class "angle-left-bottom" or "angle-right-bottom" to change intro bottom angle.
    * Use class "bg-image-fixed" to make background image fixed (otherwise use class "bg-image").
    * Use class "bg-image-parallax" to enable background image parallax effect (otherwise use class "bg-image").
    * Use class "bg-pattern" if you use background patterns (example: http://subtlepatterns.com/). Combine with class "bg-image-fixed".
    -->
    <section class="call-to-action-section angle-left-bottom bg-dark bg-pattern" style="background-image: url(assets/img/patterns/ptn-2.png);">

        <!-- Element cover
        ===================
        * Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info.
        -->
        <span class="cover bg-transparent-4-5-dark"></span>

        <div class="container">
            <div class="row wow fadeIn">

                <!-- Left column -->
                <div class="col-md-8 padding-right-40">

                    <h2 class="call-to-action-title text-gray-2">Pellentesque Dignissim Risus Ante</h2>
                    <p class="lead call-to-action-text text-gray">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore.
                    </p>
                    <p class="call-to-action-text lead text-gray margin-top-30"><strong>Cool / Innovative / Creative</strong></p>

                </div> <!-- /.col -->

                <!-- Right column -->
                <div class="col-md-4 text-center">

                    <a href="https://wrapbootstrap.com/user/Themetorium" target="_blank" class="btn btn-primary-bordered btn-xlg btn-block"><i class="fa fa-shopping-cart"></i> Buy This Template</a>
                    <br>
                    <a href="#" class="small text-gray">Or Learn More.. <i class="fa fa-graduation-cap"></i></a>

                </div> <!-- /.col -->

            </div><!-- /.row -->
        </div> <!-- /.container -->
    </section>
    <!-- End call to action section -->


    <!-- =================================
    ///// Begin section 1 (about us) /////
    ================================== -->
    <section id="section-1" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Begin heading
                    ===================
                    * Use class "heading-center" or "heading-right" to align heading.
                    * Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
                    * Use class "heading-hover" to enable heading hover effect.
                    * Use class "heading-uppercase" to enable uppercase letters.
                    -->
                    <div class="heading heading-lg heading-hover wow fadeIn">
                        <span class="heading-title-ghost">About Us</span>
                        <h2 class="heading-title">About Us</h2>

                        <!-- Begin divider
                        ===================
                        * Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
                        * Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
                        * Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
                        -->

                        <hr class="hr-width-1 hr-5x border-main">
                        <!-- End divider -->
                    @foreach($frndaboutdlts as $abdfntdetls)
                        <p class="heading-tescription lead">
                            {{$abdfntdetls->about}}
                        </p>
                    @endforeach
                    </div>
                    <!-- End heading -->

                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

        <div class="container margin-top-20">
            <div class="row wow fadeIn" data-wow-delay="0.3s">

                <div class="col-sm-6 col-md-3">
                    <!-- Begin info box-1 -->
                    <div class="info-box info-box-1">
                        <span class="info-box-icon"><i class="fa fa-clone"></i></span>
                        <div class="info-box-info">
                            <h4 class="info-box-title">Fully Responsive</h4>
                            <p class="info-box-text">
                                Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.
                            </p>
                        </div>
                    </div>
                    <!-- End info box-1 -->
                </div> <!-- /.col -->

                <div class="col-sm-6 col-md-3">
                    <!-- Begin info box-1 -->
                    <div class="info-box info-box-1">
                        <span class="info-box-icon"><i class="fa fa-diamond"></i></span>
                        <div class="info-box-info">
                            <h4 class="info-box-title">Clean Code</h4>
                            <p class="info-box-text">
                                Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.
                            </p>
                        </div>
                    </div>
                    <!-- End info box-1 -->
                </div> <!-- /.col -->

                <div class="col-sm-6 col-md-3">
                    <!-- Begin info box-1 -->
                    <div class="info-box info-box-1">
                        <span class="info-box-icon"><i class="fa fa-television"></i></span>
                        <div class="info-box-info">
                            <h4 class="info-box-title">One Page</h4>
                            <p class="info-box-text">
                                Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.
                            </p>
                        </div>
                    </div>
                    <!-- End info box-1 -->
                </div> <!-- /.col -->

                <div class="col-sm-6 col-md-3">
                    <!-- Begin info box-1 -->
                    <div class="info-box info-box-1">
                        <span class="info-box-icon"><i class="fa fa-bicycle"></i></span>
                        <div class="info-box-info">
                            <h4 class="info-box-title">Awesome Icons</h4>
                            <p class="info-box-text">
                                Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.
                            </p>
                        </div>
                    </div>
                    <!-- End info box-1 -->
                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->

    </section>
    <!-- End section 1 -->


    <!-- =================================
    ///// Begin section 2 (services) /////
    ======================================
    * Use class "angle-left-top", "angle-right-top", "angle-left-bottom", "angle-right-bottom" to change section angle.
    * Use class "bg-image-fixed" to make background image fixed (otherwise use class "bg-image").
    * Use class "bg-image-parallax" to enable background image parallax effect (otherwise use class "bg-image").
    * Use class "bg-pattern" if you use background patterns (example: http://subtlepatterns.com/). Combine with class "bg-image-fixed".
    -->
    <section id="section-2" class="services-section bg-dark angle-right-top angle-left-bottom bg-image-parallax" style="background-image: url({{asset('asset/fontend/')}}/img/misc/bg-4.jpg);">

        <!-- Element cover
        ===================
        * Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info.
        -->
        <span class="cover bg-transparent-9-dark"></span>

        <div class="container">
            <div class="row">

                <!-- Left column -->
                <div class="col-md-6">

                    <!-- Begin heading
                    ===================
                    * Use class "heading-center" or "heading-right" to align heading.
                    * Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
                    * Use class "heading-hover" to enable heading hover effect.
                    * Use class "heading-uppercase" to enable uppercase letters.
                    -->
                    <div class="heading heading-lg text-white heading-hover wow fadeIn" data-wow-delay="0.2s">
                        <span class="heading-title-ghost">Services</span>
                        <h2 class="heading-title">Services</h2>

                        <!-- Begin divider
                        ===================
                        * Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
                        * Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
                        * Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
                        -->
                        <hr class="hr-width-1 hr-5x border-main">
                        <!-- End divider -->
                    @foreach($fntservcdlts as $sercfnrdts)
                        <p class="heading-tescription lead text-gray-2"></p>
                        {{$sercfnrdts->service}}
                        <br>
                        <a href="#" target="_blank" class="btn btn-white-bordered btn-rounded"><i class="fa fa-external-link"></i> Read More!</a>
                    @endforeach
                    </div>
                    <!-- End heading -->

                </div> <!-- /.col -->

                <!-- Right column -->
                <div class="col-md-6">

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Begin info box-4 -->
                            <div class="info-box info-box-4 info-box-white wow fadeIn">
                                <span class="info-box-icon rounded-icon bg-main text-white"><i class="fa fa-paint-brush"></i></span>
                                <div class="info-box-info">
                                    <h4 class="info-box-title">Designing</h4>
                                    <p class="info-box-text text-gray-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit minim veniam ut enim.
                                    </p>
                                </div>
                            </div>
                            <!-- End info box-4 -->
                        </div> <!-- /.col -->

                        <div class="col-md-12">
                            <!-- Begin info box-4 -->
                            <div class="info-box info-box-4 info-box-white wow fadeIn" data-wow-delay="0.2s">
                                <span class="info-box-icon rounded-icon bg-main text-white"><i class="fa fa-code"></i></span>
                                <div class="info-box-info">
                                    <h4 class="info-box-title">Developing</h4>
                                    <p class="info-box-text text-gray-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit minim veniam ut enim.
                                    </p>
                                </div>
                            </div>
                            <!-- End info box-4 -->
                        </div> <!-- /.col -->

                        <div class="col-md-12">
                            <!-- Begin info box-4 -->
                            <div class="info-box info-box-4 info-box-white wow fadeIn" data-wow-delay="0.4s">
                                <span class="info-box-icon rounded-icon bg-main text-white"><i class="fa fa-globe"></i></span>
                                <div class="info-box-info">
                                    <h4 class="info-box-title">Branding</h4>
                                    <p class="info-box-text text-gray-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit minim veniam ut enim.
                                    </p>
                                </div>
                            </div>
                            <!-- End info box-4 -->
                        </div> <!-- /.col -->

                    </div><!-- /.row -->
                </div> <!-- /.col -->

            </div><!-- /.row -->
        </div> <!-- /.container -->

    </section>
    <!-- End section 2 -->


    <!-- ==================================
    ///// Begin section 3 (portfolio) /////
    =================================== -->
    <section id="section-3" class="portfolio-section">

        <div class="container">
            <div class="row wow fadeIn">

                <!-- Left column -->
                <div class="col-md-6">

                    <!-- Begin heading
                    ===================
                    * Use class "heading-center" or "heading-right" to align heading.
                    * Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
                    * Use class "heading-hover" to enable heading hover effect.
                    * Use class "heading-uppercase" to enable uppercase letters.
                    -->
                    <div class="heading heading-lg heading-hover">
                        <span class="heading-title-ghost">Portfolio</span>
                        <h2 class="heading-title">Portfolio</h2>

                        <!-- Begin divider
                        ===================
                        * Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
                        * Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
                        * Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
                        -->
                        <hr class="hr-width-1 hr-5x border-main">
                        <!-- End divider -->

                    </div>
                    <!-- End heading -->

                </div> <!-- /.col -->

                <!-- Right column -->
                <div class="col-md-6">

                    <p class="lead">
                        <strong>Lorem ipsum dolor</strong> sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>

                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->


        <div class="container">

            <!-- Begin isotope
            ===================
            * Use classes "gutter-1", "gutter-2" or "gutter-3" to add more space between items.
            * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
            -->
            <div class="isotope popup-gallery gutter-2 col-3">

                <!-- Begin isotope filter
                =========================== -->
                <div class="isotope-filter">

                    <!-- Begin isotope filter toggle button -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed filter-toggle-btn" data-toggle="collapse" data-target="#isotope-filter-collapse">
                            <span class="text-center">Filter <i class="fa fa-chevron-down"></i></span>
                        </button>
                    </div>
                    <!-- End isotope filter toggle button -->

                    <!-- Begin isotope filter links
                    ==================================
                    * Use class "text-center" or "text-right" to align isotope filter links.
                    * Note: class "mlc" = close filter menu when clicking filter link.
                    -->
                    <div class="isotope-filter-links collapse navbar-collapse no-padding wow fadeIn" id="isotope-filter-collapse">
                        <a class="active" href="#" data-filter="*">All</a>
                        <a href="#" data-filter=".photography">Photography</a>
                        <a href="#" data-filter=".web-design">Web Design</a>
                        <a href="#" data-filter=".graphics">Graphics</a>
                        <a href="#" data-filter=".branding, .web-design">Mockups</a>
                    </div>
                    <!-- End isotope filter links -->

                </div>
                <!-- End isotope filter -->


                <!-- Begin isotope items
                ==========================
                * Note: For grid layout make sure that your images are the same dimensions.
                * Note: For masonry layout make sure that your images are the different dimensions.
                -->
                <div class="isotope-items-wrap">

                    <!-- Grid sizer (do not remove!!!) -->
                    <div class="grid-sizer"></div>


                    <!-- //////////////////
                    // Begin isotope item. Note: use class "width2" for alternative item width (works best on first item)
                    /////////////////////// -->
@foreach($prrrtim as $ppppim)
                    <div class="isotope-item photography wow fadeInUp">

                        <!-- Begin portfolio item -->
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-item">
                                <a class="item-link inline-popup-trigger" href="#portfolio-1">
                                    <span class="cover bg-transparent-9-main"></span>
                                    {{--<img class="item-img" src="{{asset('asset/fontend/')}}/img/portfolio/masonry/portfolio-img-1.jpg" alt="image">--}}
                                    <img class="item-img" src="{{asset($ppppim->pimg)}}" alt="{{$ppppim->pimg}}">
                                    <div class="item-info text-white">
                                        <h3 class="item-info-title">{{$ppppim->title}}</h3>

                                    </div>
                                </a>
                            </div>

                            <!-- Begin inline popup content. Class "mfp-hide" is required to make dialog hidden -->

                            <div id="portfolio-1" class="inline-popup mfp-hide">
                                <div class="inline-popup-inner">

                                    <div class="inline-popup-image bg-image" style="background-image: url({{asset($ppppim->pimg)}}); background-position: 50% 50%;"></div>

                                    <div class="row margin-top-40">
                                        <div class="col-md-8 margin-bottom-20">
                                            <h2 class="no-margin-top">{{$ppppim->title}}</h2>
                                            <p>{{$ppppim->dscritn}}</p>
                                             </div>
                                        <div class="col-md-4 margin-bottom-20 padding-left-40">
                                            <ul class="list-unstyled">
                                                <li>Client: <strong><a href="#" target="_blank">MockCo INC</a></strong></li>
                                                <li>Date: <strong><a href="#" target="_blank">01 jan, 2016</a></strong></li>
                                                <li>Category <strong><a href="#" target="_blank">Photography</a></strong></li>
                                                <li>Copyright ©2016, All Rights Reserved</li>
                                            </ul>
                                            <a href="#" target="_blank" class="btn btn-primary btn-rounded btn-lg margin-top-20">Launch Project</a>
                                        </div>
                                    </div> <!-- /.row -->

                                </div> <!-- /.inline-popup-inner -->

                                <a class="inline-popup-close" href="#"><i class="fa fa-times"></i></a>

                            </div>
                            <!-- End inline popup content -->

                        </div>
                        <!-- End portfolio item -->

                    </div>
@endforeach
                    <!-- End isotope item -->

                    <!-- //////////////////
                    // Begin isotope item
                    /////////////////////// -->
                    {{--<div class="isotope-item branding wow fadeInUp">--}}

                        {{--<!-- Begin portfolio item -->--}}
                        {{--<div class="portfolio-item-wrap">--}}
                            {{--<div class="portfolio-item">--}}
                                {{--<a class="item-link inline-popup-trigger" href="#portfolio-2">--}}
                                    {{--<span class="cover bg-transparent-9-main"></span>--}}
                                    {{--<img class="item-img" src="{{asset('asset/fontend/')}}/img/portfolio/masonry/portfolio-img-2.jpg" alt="image">--}}
                                    {{--<div class="item-info text-white">--}}
                                        {{--<h3 class="item-info-title">Identity MockUp Vol.1</h3>--}}
                                        {{--<p class="item-info-text">Branding</p>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                            {{--<!-- Begin inline popup content. Class "mfp-hide" is required to make dialog hidden -->--}}
                            {{--<div id="portfolio-2" class="inline-popup mfp-hide">--}}
                                {{--<div class="inline-popup-inner">--}}

                                    {{--<div class="inline-popup-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/portfolio/big/portfolio-img-2.jpg); background-position: 50% 50%;"></div>--}}

                                    {{--<div class="row margin-top-40">--}}
                                        {{--<div class="col-md-8 margin-bottom-20">--}}
                                            {{--<h2 class="no-margin-top">Portfolio Single Item 2</h2>--}}
                                            {{--<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show.</p>--}}

                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquapta. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquipter consequat adipisicing sedari.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 margin-bottom-20 padding-left-40">--}}
                                            {{--<ul class="list-unstyled">--}}
                                                {{--<li>Client: <strong><a href="#" target="_blank">MockCo INC</a></strong></li>--}}
                                                {{--<li>Date: <strong><a href="#" target="_blank">03 jan, 2016</a></strong></li>--}}
                                                {{--<li>Category <strong><a href="#" target="_blank">Photography</a></strong></li>--}}
                                                {{--<li>Copyright ©2017, All Rights Reserved</li>--}}
                                            {{--</ul>--}}
                                            {{--<a href="#" target="_blank" class="btn btn-primary btn-rounded btn-lg margin-top-20">Launch Project</a>--}}
                                        {{--</div>--}}
                                    {{--</div> <!-- /.row -->--}}

                                {{--</div> <!-- /.inline-popup-inner -->--}}

                                {{--<a class="inline-popup-close" href="#"><i class="fa fa-times"></i></a>--}}

                            {{--</div>--}}
                            {{--<!-- End inline popup content -->--}}

                        {{--</div>--}}
                        {{--<!-- End portfolio item -->--}}

                    {{--</div>--}}
                    <!-- End isotope item -->

                    <!-- //////////////////
                    // Begin isotope item
                    /////////////////////// -->
                    {{--<div class="isotope-item web-design wow fadeInUp">--}}

                        {{--<!-- Begin portfolio item -->--}}
                        {{--<div class="portfolio-item-wrap">--}}
                            {{--<div class="portfolio-item">--}}
                                {{--<a class="item-link inline-popup-trigger" href="#portfolio-3">--}}
                                    {{--<span class="cover bg-transparent-9-main"></span>--}}
                                    {{--<img class="item-img" src="{{asset('asset/fontend/')}}/img/portfolio/masonry/portfolio-img-3.jpg" alt="image">--}}
                                    {{--<div class="item-info text-white">--}}
                                        {{--<h3 class="item-info-title">Brown Paper Bag</h3>--}}
                                        {{--<p class="item-info-text">Web Design</p>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                            {{--<!-- Begin inline popup content. Class "mfp-hide" is required to make dialog hidden -->--}}
                            {{--<div id="portfolio-3" class="inline-popup mfp-hide">--}}
                                {{--<div class="inline-popup-inner">--}}

                                    {{--<!-- Begin content carousel (http://www.owlcarousel.owlgraphic.com)--}}
                                    {{--====================================================================--}}
                                    {{--* Use class "nav-outside" for outside nav.--}}
                                    {{--* Use class "nav-outside-top" for outside top nav.--}}
                                    {{--* Use class "nav-rounded" for rounded nav.--}}
                                    {{--* Use class "dots-outside" for outside dots.--}}
                                    {{--* Use class "dots-left" or "dots-right" to align dots.--}}
                                    {{--* Use class "dots-rounded" for rounded dots.--}}
                                    {{--* Available carousel data attributes:--}}
                                            {{--data-items="5".......................(items visible on desktop)--}}
                                            {{--data-tablet-landscape="4"............(items visible on mobiles)--}}
                                            {{--data-tablet-portrait="3".............(items visible on mobiles)--}}
                                            {{--data-mobile-landscape="2"............(items visible on tablets)--}}
                                            {{--data-mobile-portrait="1".............(items visible on tablets)--}}
                                            {{--data-loop="true".....................(true/false)--}}
                                            {{--data-margin="10".....................(space between items)--}}
                                            {{--data-center="true"...................(true/false)--}}
                                            {{--data-start-position="0"..............(item start position)--}}
                                            {{--data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)--}}
                                            {{--data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)--}}
                                            {{--data-mouse-drag="false"..............(true/false)--}}
                                            {{--data-touch-drag="false"..............(true/false)--}}
                                            {{--data-autoheight="true"...............(true/false)--}}
                                            {{--data-autoplay="true".................(true/false)--}}
                                            {{--data-autoplay-timeout="5000".........(milliseconds)--}}
                                            {{--data-autoplay-hover-pause="true".....(true/false)--}}
                                            {{--data-autoplay-speed="800"............(milliseconds)--}}
                                            {{--data-drag-end-speed="800"............(milliseconds)--}}
                                            {{--data-lazy-load="true"................(true/false)--}}
                                            {{--data-nav="true"......................(true/false)--}}
                                            {{--data-nav-speed="800".................(milliseconds)--}}
                                            {{--data-dots="false"....................(true/false)--}}
                                            {{--data-dots-speed="800"................(milliseconds)--}}
                                    {{---->--}}
                                    {{--<div class="owl-carousel portfolio-single-carousel dots-outside" data-items="1" data-nav="true">--}}

                                        {{--<!-- Begin carousel item--}}
                                        {{--========================= -->--}}
                                        {{--<div class="cc-item">--}}
                                            {{--<div class="inline-popup-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/portfolio/big/portfolio-img-3.jpg); background-position: 50% 50%;"></div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End carousel item -->--}}

                                        {{--<!-- Begin carousel item--}}
                                        {{--========================= -->--}}
                                        {{--<div class="cc-item">--}}
                                            {{--<div class="inline-popup-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/portfolio/big/portfolio-img-4.jpg); background-position: 50% 50%;"></div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End carousel item -->--}}

                                        {{--<!-- Begin carousel item--}}
                                        {{--========================= -->--}}
                                        {{--<div class="cc-item">--}}
                                            {{--<div class="inline-popup-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/portfolio/big/portfolio-img-5.jpg); background-position: 50% 50%;"></div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End carousel item -->--}}

                                    {{--</div>--}}
                                    {{--<!-- End content carousel -->--}}

                                    {{--<div class="row margin-top-80">--}}
                                        {{--<div class="col-md-8 margin-bottom-20">--}}
                                            {{--<h2 class="no-margin-top">Portfolio Single Item 3</h2>--}}
                                            {{--<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show.</p>--}}

                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquapta. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquipter consequat adipisicing sedari.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 margin-bottom-20 padding-left-40">--}}
                                            {{--<ul class="list-unstyled">--}}
                                                {{--<li>Client: <strong><a href="#" target="_blank">MockCo INC</a></strong></li>--}}
                                                {{--<li>Date: <strong><a href="#" target="_blank">04 jan, 2016</a></strong></li>--}}
                                                {{--<li>Category <strong><a href="#" target="_blank">Photography</a></strong></li>--}}
                                                {{--<li>Copyright ©2017, All Rights Reserved</li>--}}
                                            {{--</ul>--}}
                                            {{--<a href="#" target="_blank" class="btn btn-primary btn-rounded btn-lg margin-top-20">Launch Project</a>--}}
                                        {{--</div>--}}
                                    {{--</div> <!-- /.row -->--}}

                                {{--</div> <!-- /.inline-popup-inner -->--}}

                                {{--<a class="inline-popup-close" href="#"><i class="fa fa-times"></i></a>--}}

                            {{--</div>--}}
                            {{--<!-- End inline popup content -->--}}

                        {{--</div>--}}
                        {{--<!-- End portfolio item -->--}}

                    {{--</div>--}}
                    <!-- End isotope item -->

                    <!-- //////////////////
                    // Begin isotope item
                    /////////////////////// -->
                    {{--<div class="isotope-item graphics wow fadeInUp">--}}

                        {{--<!-- Begin portfolio item -->--}}
                        {{--<div class="portfolio-item-wrap">--}}
                            {{--<div class="portfolio-item">--}}
                                {{--<a class="item-link inline-popup-trigger" href="#portfolio-4">--}}
                                    {{--<span class="cover bg-transparent-9-main"></span>--}}
                                    {{--<img class="item-img" src="{{asset('asset/fontend/')}}/img/portfolio/masonry/portfolio-img-4.jpg" alt="image">--}}
                                    {{--<div class="item-info text-white">--}}
                                        {{--<h3 class="item-info-title">Canvas Tote Bag</h3>--}}
                                        {{--<p class="item-info-text">Graphics</p>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                            {{--<!-- Begin inline popup content. Class "mfp-hide" is required to make dialog hidden -->--}}
                            {{--<div id="portfolio-4" class="inline-popup mfp-hide">--}}
                                {{--<div class="inline-popup-inner">--}}

                                    {{--<div class="inline-popup-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/portfolio/big/portfolio-img-4.jpg); background-position: 50% 50%;"></div>--}}

                                    {{--<div class="row margin-top-40">--}}
                                        {{--<div class="col-md-8 margin-bottom-20">--}}
                                            {{--<h2 class="no-margin-top">Portfolio Single Item 4</h2>--}}
                                            {{--<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show.</p>--}}

                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquapta. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquipter consequat adipisicing sedari.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 margin-bottom-20 padding-left-40">--}}
                                            {{--<ul class="list-unstyled">--}}
                                                {{--<li>Client: <strong><a href="#" target="_blank">MockCo INC</a></strong></li>--}}
                                                {{--<li>Date: <strong><a href="#" target="_blank">05 jan, 2016</a></strong></li>--}}
                                                {{--<li>Category <strong><a href="#" target="_blank">Graphics</a></strong></li>--}}
                                                {{--<li>Copyright ©2016, All Rights Reserved</li>--}}
                                            {{--</ul>--}}
                                            {{--<a href="#" target="_blank" class="btn btn-primary btn-rounded btn-lg margin-top-20">Launch Project</a>--}}
                                        {{--</div>--}}
                                    {{--</div> <!-- /.row -->--}}

                                {{--</div> <!-- /.inline-popup-inner -->--}}

                                {{--<a class="inline-popup-close" href="#"><i class="fa fa-times"></i></a>--}}

                            {{--</div>--}}
                            {{--<!-- End inline popup content -->--}}

                        {{--</div>--}}
                        {{--<!-- End portfolio item -->--}}

                    {{--</div>--}}
                    <!-- End isotope item -->

                    <!-- //////////////////
                    // Begin isotope item
                    /////////////////////// -->
                    {{--<div class="isotope-item photography wow fadeInUp">--}}

                        {{--<!-- Begin portfolio item -->--}}
                        {{--<div class="portfolio-item-wrap">--}}
                            {{--<div class="portfolio-item">--}}
                                {{--<a class="item-link inline-popup-trigger" href="#portfolio-5">--}}
                                    {{--<span class="cover bg-transparent-9-main"></span>--}}
                                    {{--<img class="item-img" src="{{asset('asset/fontend/')}}/img/portfolio/masonry/portfolio-img-5.jpg" alt="image">--}}
                                    {{--<div class="item-info text-white">--}}
                                        {{--<h3 class="item-info-title">Rubber Stamp</h3>--}}
                                        {{--<p class="item-info-text">Photography</p>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                            {{--<!-- Begin inline popup content. Class "mfp-hide" is required to make dialog hidden -->--}}
                            {{--<div id="portfolio-5" class="inline-popup mfp-hide">--}}
                                {{--<div class="inline-popup-inner">--}}

                                    {{--<!-- Begin embed video (more info about reffering embed videos: https://www.feedthebot.com/pagespeed/defer-videos.htm) -->--}}
                                    {{--<div class="embed-responsive embed-responsive-16by9">--}}
                                        {{--<iframe data-src="https://www.youtube.com/embed/9UWo5RdXc1o" src="https://player.vimeo.com/video/60616160?"></iframe>--}}
                                    {{--</div>--}}
                                    {{--<!-- End embed video -->--}}

                                    {{--<div class="row margin-top-40">--}}
                                        {{--<div class="col-md-8 margin-bottom-20">--}}
                                            {{--<h2 class="no-margin-top">Portfolio Single Item 5</h2>--}}
                                            {{--<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show.</p>--}}

                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquapta. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquipter consequat adipisicing sedari.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 margin-bottom-20 padding-left-40">--}}
                                            {{--<ul class="list-unstyled">--}}
                                                {{--<li>Client: <strong><a href="#" target="_blank">MockCo INC</a></strong></li>--}}
                                                {{--<li>Date: <strong><a href="#" target="_blank">07 jan, 2016</a></strong></li>--}}
                                                {{--<li>Category <strong><a href="#" target="_blank">Photography</a></strong></li>--}}
                                                {{--<li>Copyright ©2017, All Rights Reserved</li>--}}
                                            {{--</ul>--}}
                                            {{--<a href="#" target="_blank" class="btn btn-primary btn-rounded btn-lg margin-top-20">Launch Project</a>--}}
                                        {{--</div>--}}
                                    {{--</div> <!-- /.row -->--}}

                                {{--</div> <!-- /.inline-popup-inner -->--}}

                                {{--<a class="inline-popup-close" href="#"><i class="fa fa-times"></i></a>--}}

                            {{--</div>--}}
                            {{--<!-- End inline popup content -->--}}
                        {{--</div>--}}
                        {{--<!-- End portfolio item -->--}}

                    {{--</div>--}}
                    <!-- End isotope item -->

                    <!-- //////////////////
                    // Begin isotope item
                    /////////////////////// -->
                    {{--<div class="isotope-item branding wow fadeInUp">--}}

                        {{--<!-- Begin portfolio item -->--}}
                        {{--<div class="portfolio-item-wrap">--}}
                            {{--<div class="portfolio-item">--}}
                                {{--<a class="item-link inline-popup-trigger" href="#portfolio-6">--}}
                                    {{--<span class="cover bg-transparent-9-main"></span>--}}
                                    {{--<img class="item-img" src="{{asset('asset/fontend/')}}/img/portfolio/masonry/portfolio-img-6.jpg" alt="image">--}}
                                    {{--<div class="item-info text-white">--}}
                                        {{--<h3 class="item-info-title">Vintage Logo MockUp</h3>--}}
                                        {{--<p class="item-info-text">Branding</p>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                            {{--<!-- Begin inline popup content. Class "mfp-hide" is required to make dialog hidden -->--}}
                            {{--<div id="portfolio-6" class="inline-popup mfp-hide">--}}
                                {{--<div class="inline-popup-inner">--}}

                                    {{--<!-- Begin embed video (more info about reffering embed videos: https://www.feedthebot.com/pagespeed/defer-videos.htm) -->--}}
                                    {{--<div class="embed-responsive embed-responsive-16by9">--}}
                                        {{--<iframe data-src="https://player.vimeo.com/video/79298633?" src="https://player.vimeo.com/video/60616160?"></iframe>--}}
                                    {{--</div>--}}
                                    {{--<!-- End embed video -->--}}

                                    {{--<div class="row margin-top-40">--}}
                                        {{--<div class="col-md-8 margin-bottom-20">--}}
                                            {{--<h2 class="no-margin-top">Portfolio Single Item 6</h2>--}}
                                            {{--<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show.</p>--}}

                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquapta. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquipter consequat adipisicing sedari.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 margin-bottom-20 padding-left-40">--}}
                                            {{--<ul class="list-unstyled">--}}
                                                {{--<li>Client: <strong><a href="#" target="_blank">MockCo INC</a></strong></li>--}}
                                                {{--<li>Date: <strong><a href="#" target="_blank">08 jan, 2016</a></strong></li>--}}
                                                {{--<li>Category <strong><a href="#" target="_blank">Branding</a></strong></li>--}}
                                                {{--<li>Copyright ©2017, All Rights Reserved</li>--}}
                                            {{--</ul>--}}
                                            {{--<a href="#" target="_blank" class="btn btn-primary btn-rounded btn-lg margin-top-20">Launch Project</a>--}}
                                        {{--</div>--}}
                                    {{--</div> <!-- /.row -->--}}

                                {{--</div> <!-- /.inline-popup-inner -->--}}

                                {{--<a class="inline-popup-close" href="#"><i class="fa fa-times"></i></a>--}}

                            {{--</div>--}}
                            {{--<!-- End inline popup content -->--}}

                        {{--</div>--}}
                        {{--<!-- End portfolio item -->--}}

                    {{--</div>--}}
                    <!-- End isotope item -->

                    <!-- //////////////////
                    // Begin isotope item
                    /////////////////////// -->
                    {{--<div class="isotope-item web-design wow fadeInUp">--}}

                        {{--<!-- Begin portfolio item -->--}}
                        {{--<div class="portfolio-item-wrap">--}}
                            {{--<div class="portfolio-item">--}}
                                {{--<a class="item-link inline-popup-trigger" href="#portfolio-7">--}}
                                    {{--<span class="cover bg-transparent-9-main"></span>--}}
                                    {{--<img class="item-img" src="{{asset('asset/fontend/')}}/img/portfolio/masonry/portfolio-img-7.jpg" alt="image">--}}
                                    {{--<div class="item-info text-white">--}}
                                        {{--<h3 class="item-info-title">Identity MockUp vol.2</h3>--}}
                                        {{--<p class="item-info-text">Web Design</p>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                            {{--<!-- Begin inline popup content. Class "mfp-hide" is required to make dialog hidden -->--}}
                            {{--<div id="portfolio-7" class="inline-popup mfp-hide">--}}
                                {{--<div class="inline-popup-inner">--}}

                                    {{--<div class="inline-popup-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/portfolio/big/portfolio-img-7.jpg); background-position: 50% 50%;"></div>--}}

                                    {{--<div class="row margin-top-40">--}}
                                        {{--<div class="col-md-8 margin-bottom-20">--}}
                                            {{--<h2 class="no-margin-top">Portfolio Single Item 7</h2>--}}
                                            {{--<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show.</p>--}}

                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquapta. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquipter consequat adipisicing sedari.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 margin-bottom-20 padding-left-40">--}}
                                            {{--<ul class="list-unstyled">--}}
                                                {{--<li>Client: <strong><a href="#" target="_blank">MockCo INC</a></strong></li>--}}
                                                {{--<li>Date: <strong><a href="#" target="_blank">11 jan, 2016</a></strong></li>--}}
                                                {{--<li>Category <strong><a href="#" target="_blank">Web Design</a></strong></li>--}}
                                                {{--<li>Copyright ©2017, All Rights Reserved</li>--}}
                                            {{--</ul>--}}
                                            {{--<a href="#" target="_blank" class="btn btn-primary btn-rounded btn-lg margin-top-20">Launch Project</a>--}}
                                        {{--</div>--}}
                                    {{--</div> <!-- /.row -->--}}

                                {{--</div> <!-- /.inline-popup-inner -->--}}

                                {{--<a class="inline-popup-close" href="#"><i class="fa fa-times"></i></a>--}}

                            {{--</div>--}}
                            {{--<!-- End inline popup content -->--}}

                        {{--</div>--}}
                        {{--<!-- End portfolio item -->--}}

                    {{--</div>--}}
                    <!-- End isotope item -->

                    <!-- //////////////////
                    // Begin isotope item
                    /////////////////////// -->
                    {{--<div class="isotope-item graphics wow fadeInUp">--}}

                        {{--<!-- Begin portfolio item -->--}}
                        {{--<div class="portfolio-item-wrap">--}}
                            {{--<div class="portfolio-item">--}}
                                {{--<a class="item-link inline-popup-trigger" href="#portfolio-8">--}}
                                    {{--<span class="cover bg-transparent-9-main"></span>--}}
                                    {{--<img class="item-img" src="{{asset('asset/fontend/')}}/img/portfolio/masonry/portfolio-img-8.jpg" alt="image">--}}
                                    {{--<div class="item-info text-white">--}}
                                        {{--<h3 class="item-info-title">Identity MockUp vol.3</h3>--}}
                                        {{--<p class="item-info-text">Graphics</p>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                            {{--<!-- Begin inline popup content. Class "mfp-hide" is required to make dialog hidden -->--}}
                            {{--<div id="portfolio-8" class="inline-popup mfp-hide">--}}
                                {{--<div class="inline-popup-inner">--}}

                                    {{--<div class="inline-popup-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/portfolio/big/portfolio-img-8.jpg); background-position: 50% 50%;"></div>--}}

                                    {{--<div class="row margin-top-40">--}}
                                        {{--<div class="col-md-8 margin-bottom-20">--}}
                                            {{--<h2 class="no-margin-top">Portfolio Single Item 8</h2>--}}
                                            {{--<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show.</p>--}}

                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquapta. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquipter consequat adipisicing sedari.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 margin-bottom-20 padding-left-40">--}}
                                            {{--<ul class="list-unstyled">--}}
                                                {{--<li>Client: <strong><a href="#" target="_blank">MockCo INC</a></strong></li>--}}
                                                {{--<li>Date: <strong><a href="#" target="_blank">16 jan, 2016</a></strong></li>--}}
                                                {{--<li>Category <strong><a href="#" target="_blank">Graphics</a></strong></li>--}}
                                                {{--<li>Copyright ©2017, All Rights Reserved</li>--}}
                                            {{--</ul>--}}
                                            {{--<a href="#" target="_blank" class="btn btn-primary btn-rounded btn-lg margin-top-20">Launch Project</a>--}}
                                        {{--</div>--}}
                                    {{--</div> <!-- /.row -->--}}

                                {{--</div> <!-- /.inline-popup-inner -->--}}

                                {{--<a class="inline-popup-close" href="#"><i class="fa fa-times"></i></a>--}}

                            {{--</div>--}}
                            {{--<!-- End inline popup content -->--}}

                        {{--</div>--}}
                        {{--<!-- End portfolio item -->--}}

                    {{--</div>--}}
                    <!-- End isotope item -->

                    <!-- //////////////////
                    // Begin isotope item
                    /////////////////////// -->
                    {{--<div class="isotope-item branding wow fadeInUp">--}}

                        {{--<!-- Begin portfolio item -->--}}
                        {{--<div class="portfolio-item-wrap">--}}
                            {{--<div class="portfolio-item">--}}
                                {{--<a class="item-link inline-popup-trigger" href="#portfolio-9">--}}
                                    {{--<span class="cover bg-transparent-9-main"></span>--}}
                                    {{--<img class="item-img" src="{{asset('asset/fontend/')}}/img/portfolio/masonry/portfolio-img-9.jpg" alt="image">--}}
                                    {{--<div class="item-info text-white">--}}
                                        {{--<h3 class="item-info-title">Vinyl Record</h3>--}}
                                        {{--<p class="item-info-text">Branding</p>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                            {{--<!-- Begin inline popup content. Class "mfp-hide" is required to make dialog hidden -->--}}
                            {{--<div id="portfolio-9" class="inline-popup mfp-hide">--}}
                                {{--<div class="inline-popup-inner">--}}

                                    {{--<div class="inline-popup-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/portfolio/big/portfolio-img-9.jpg); background-position: 50% 50%;"></div>--}}

                                    {{--<div class="row margin-top-40">--}}
                                        {{--<div class="col-md-8 margin-bottom-20">--}}
                                            {{--<h2 class="no-margin-top">Portfolio Single Item 9</h2>--}}
                                            {{--<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show.</p>--}}

                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquapta. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquipter consequat adipisicing sedari.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 margin-bottom-20 padding-left-40">--}}
                                            {{--<ul class="list-unstyled">--}}
                                                {{--<li>Client: <strong><a href="#" target="_blank">MockCo INC</a></strong></li>--}}
                                                {{--<li>Date: <strong><a href="#" target="_blank">18 jan, 2016</a></strong></li>--}}
                                                {{--<li>Category <strong><a href="#" target="_blank">Branding</a></strong></li>--}}
                                                {{--<li>Copyright ©2017, All Rights Reserved</li>--}}
                                            {{--</ul>--}}
                                            {{--<a href="#" target="_blank" class="btn btn-primary btn-rounded btn-lg margin-top-20">Launch Project</a>--}}
                                        {{--</div>--}}
                                    {{--</div> <!-- /.row -->--}}

                                {{--</div> <!-- /.inline-popup-inner -->--}}

                                {{--<a class="inline-popup-close" href="#"><i class="fa fa-times"></i></a>--}}

                            {{--</div>--}}
                            {{--<!-- End inline popup content -->--}}

                        {{--</div>--}}
                        {{--<!-- End portfolio item -->--}}

                    {{--</div>--}}
                    <!-- End isotope item -->

                    <!-- //////////////////
                    // Begin isotope item
                    /////////////////////// -->
                    {{--<div class="isotope-item web-design wow fadeInUp">--}}

                        {{--<!-- Begin portfolio item -->--}}
                        {{--<div class="portfolio-item-wrap">--}}
                            {{--<div class="portfolio-item">--}}
                                {{--<a class="item-link inline-popup-trigger" href="#portfolio-10">--}}
                                    {{--<span class="cover bg-transparent-9-main"></span>--}}
                                    {{--<img class="item-img" src="{{asset('asset/fontend/')}}/img/portfolio/masonry/portfolio-img-10.jpg" alt="image">--}}
                                    {{--<div class="item-info text-white">--}}
                                        {{--<h3 class="item-info-title">Shopping Bag</h3>--}}
                                        {{--<p class="item-info-text">Web Design</p>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                            {{--<!-- Begin inline popup content. Class "mfp-hide" is required to make dialog hidden -->--}}
                            {{--<div id="portfolio-10" class="inline-popup mfp-hide">--}}
                                {{--<div class="inline-popup-inner">--}}

                                    {{--<div class="inline-popup-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/portfolio/big/portfolio-img-10.jpg); background-position: 50% 50%;"></div>--}}

                                    {{--<div class="row margin-top-40">--}}
                                        {{--<div class="col-md-8 margin-bottom-20">--}}
                                            {{--<h2 class="no-margin-top">Portfolio Single Item 10</h2>--}}
                                            {{--<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show.</p>--}}

                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquapta. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquipter consequat adipisicing sedari.</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 margin-bottom-20 padding-left-40">--}}
                                            {{--<ul class="list-unstyled">--}}
                                                {{--<li>Client: <strong><a href="#" target="_blank">MockCo INC</a></strong></li>--}}
                                                {{--<li>Date: <strong><a href="#" target="_blank">29 jan, 2016</a></strong></li>--}}
                                                {{--<li>Category <strong><a href="#" target="_blank">Web Design</a></strong></li>--}}
                                                {{--<li>Copyright ©2016, All Rights Reserved</li>--}}
                                            {{--</ul>--}}
                                            {{--<a href="#" target="_blank" class="btn btn-primary btn-rounded btn-lg margin-top-20">Launch Project</a>--}}
                                        {{--</div>--}}
                                    {{--</div> <!-- /.row -->--}}

                                {{--</div> <!-- /.inline-popup-inner -->--}}

                                {{--<a class="inline-popup-close" href="#"><i class="fa fa-times"></i></a>--}}

                            {{--</div>--}}
                            {{--<!-- End inline popup content -->--}}

                        {{--</div>--}}
                        {{--<!-- End portfolio item -->--}}

                    {{--</div>--}}
                    <!-- End isotope item -->

                </div>
                <!-- End isotope items wrap -->

            </div>
            <!-- End isotope -->

            <div class="text-center wow fadeIn" data-wow-delay="0.4s">
                <a href="#" target="_blank" class="btn btn-default btn-xlg btn-block margin-top-40">View All Portfolio</a>
            </div>

        </div> <!-- /.container -->

    </section>
    <!-- End section 3 -->


    <!-- ===============================
    ///// Begin section 4 (prices) /////
    ====================================
    * Use class "angle-left-top", "angle-right-top", "angle-left-bottom", "angle-right-bottom" to change section angle.
    * Use class "bg-image-fixed" to make background image fixed (otherwise use class "bg-image").
    * Use class "bg-image-parallax" to enable background image parallax effect (otherwise use class "bg-image").
    * Use class "bg-pattern" if you use background patterns (example: http://subtlepatterns.com/). Combine with class "bg-image-fixed".
    -->
    {{--<section id="section-4" class="prices-section bg-dark angle-right-top angle-left-bottom bg-image-parallax" style="background-image: url({{asset('asset/fontend/')}}/img/misc/bg-3.jpg);">--}}

        {{--<!-- Element cover--}}
        {{--===================--}}
        {{--* Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info.--}}
        {{---->--}}
        {{--<span class="cover bg-transparent-9-5-dark"></span>--}}

        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}

                    {{--<!-- Begin heading--}}
                    {{--===================--}}
                    {{--* Use class "heading-center" or "heading-right" to align heading.--}}
                    {{--* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.--}}
                    {{--* Use class "heading-hover" to enable heading hover effect.--}}
                    {{--* Use class "heading-uppercase" to enable uppercase letters.--}}
                    {{---->--}}
                    {{--<div class="heading heading-lg text-white heading-hover wow fadeIn">--}}
                        {{--<span class="heading-title-ghost">Pricing</span>--}}
                        {{--<h2 class="heading-title">Pricing</h2>--}}

                        {{--<!-- Begin divider--}}
                        {{--===================--}}
                        {{--* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.--}}
                        {{--* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.--}}
                        {{--* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.--}}
                        {{---->--}}
                        {{--<hr class="hr-width-1 hr-5x border-main">--}}
                        {{--<!-- End divider -->--}}

                    {{--</div>--}}
                    {{--<!-- End heading -->--}}

                {{--</div> <!-- /.col -->--}}
            {{--</div> <!-- /.row -->--}}
        {{--</div> <!-- /.container -->--}}

        {{--<div class="container wow fadeIn">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}

                    {{--<!-- Begin info box-4 -->--}}
                    {{--<div class="info-box info-box-4 info-box-white wow fadeIn">--}}
                        {{--<span class="info-box-icon rounded-icon bg-main text-white"><i class="fa fa-usd"></i></span>--}}
                        {{--<div class="info-box-info">--}}
                            {{--<h4 class="info-box-title">Consectetur Adipis</h4>--}}
                            {{--<p class="info-box-text text-gray-2">--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit minim veniam ut enim.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- End info box-4 -->--}}

                {{--</div> <!-- /.col -->--}}

                {{--<div class="col-md-4">--}}

                    {{--<!-- Begin info box-4 -->--}}
                    {{--<div class="info-box info-box-4 info-box-white wow fadeIn" data-wow-delay="0.2s">--}}
                        {{--<span class="info-box-icon rounded-icon bg-main text-white"><i class="fa fa-bar-chart"></i></span>--}}
                        {{--<div class="info-box-info">--}}
                            {{--<h4 class="info-box-title">Excepteur Sint</h4>--}}
                            {{--<p class="info-box-text text-gray-2">--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit minim veniam ut enim.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- End info box-4 -->--}}

                {{--</div> <!-- /.col -->--}}

                {{--<div class="col-md-4">--}}

                    {{--<!-- Begin info box-4 -->--}}
                    {{--<div class="info-box info-box-4 info-box-white wow fadeIn" data-wow-delay="0.4s">--}}
                        {{--<span class="info-box-icon rounded-icon bg-main text-white"><i class="fa fa-balance-scale"></i></span>--}}
                        {{--<div class="info-box-info">--}}
                            {{--<h4 class="info-box-title">Cillum Dolore</h4>--}}
                            {{--<p class="info-box-text text-gray-2">--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit minim veniam ut enim.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- End info box-4 -->--}}

                {{--</div> <!-- /.col -->--}}

            {{--</div> <!-- /.row -->--}}
        {{--</div> <!-- /.container -->--}}

        {{--<!-- Begin prices -->--}}
        {{--<div class="prices wow fadeIn" data-wow-delay="0.6s">--}}
            {{--<div class="container">--}}

                {{--<!-- Begin content carousel (http://www.owlcarousel.owlgraphic.com)--}}
                {{--====================================================================--}}
                {{--* Use class "nav-outside" for outside nav.--}}
                {{--* Use class "nav-outside-top" for outside top nav.--}}
                {{--* Use class "nav-rounded" for rounded nav.--}}
                {{--* Use class "dots-outside" for outside dots.--}}
                {{--* Use class "dots-left" or "dots-right" to align dots.--}}
                {{--* Use class "dots-rounded" for rounded dots.--}}
                {{--* Available carousel data attributes:--}}
                        {{--data-items="5".......................(items visible on desktop)--}}
                        {{--data-tablet-landscape="4"............(items visible on mobiles)--}}
                        {{--data-tablet-portrait="3".............(items visible on mobiles)--}}
                        {{--data-mobile-landscape="2"............(items visible on tablets)--}}
                        {{--data-mobile-portrait="1".............(items visible on tablets)--}}
                        {{--data-loop="true".....................(true/false)--}}
                        {{--data-margin="10".....................(space between items)--}}
                        {{--data-center="true"...................(true/false)--}}
                        {{--data-start-position="0"..............(item start position)--}}
                        {{--data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)--}}
                        {{--data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)--}}
                        {{--data-mouse-drag="false"..............(true/false)--}}
                        {{--data-touch-drag="false"..............(true/false)--}}
                        {{--data-autoheight="true"...............(true/false)--}}
                        {{--data-autoplay="true".................(true/false)--}}
                        {{--data-autoplay-timeout="5000".........(milliseconds)--}}
                        {{--data-autoplay-hover-pause="true".....(true/false)--}}
                        {{--data-autoplay-speed="800"............(milliseconds)--}}
                        {{--data-drag-end-speed="800"............(milliseconds)--}}
                        {{--data-lazy-load="true"................(true/false)--}}
                        {{--data-nav="true"......................(true/false)--}}
                        {{--data-nav-speed="800".................(milliseconds)--}}
                        {{--data-dots="false"....................(true/false)--}}
                        {{--data-dots-speed="800"................(milliseconds)--}}
                {{---->--}}
                {{--<div class="owl-carousel prices-carousel dots-outside nav-outside-top" data-items="4" data-margin="15" data-nav="true" data-tablet-landscape="3" data-tablet-portrait="3" data-mobile-landscape="2" data-mobile-portrait="1">--}}

                    {{--<!-- Begin price box--}}
                    {{--======================--}}
                    {{--* Use class "price-box-dark" for dark style.--}}
                    {{---->--}}
                    {{--<div class="price-box price-box-dark">--}}
                        {{--<div class="pr-box price-heading">--}}
                            {{--<i class="fa fa-plug"></i>--}}
                            {{--<h3 class="price-title">Light</h3>--}}
                            {{--<div class="price-heading-text">Light Membership</div>--}}
                        {{--</div>--}}
                        {{--<div class="pr-box price-box-price">--}}
                            {{--<div class="price"><span class="price-currency">$</span>69</div>--}}
                            {{--<div class="price-tenure">Per Month</div>--}}
                        {{--</div>--}}
                        {{--<div class="pr-box price-features">--}}
                            {{--<ul class="list-unstyled">--}}
                                {{--<li>Personal Use</li>--}}
                                {{--<li>5 Projects</li>--}}
                                {{--<li>1 Month License</li>--}}
                                {{--<li>27/7 Support</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="pr-box price-footer">--}}
                            {{--<a href="#" class="btn btn-white-bordered btn-rounded">Order Now</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- End price box -->--}}

                    {{--<!-- Begin price box--}}
                    {{--======================--}}
                    {{--* Use class "price-box-dark" for dark style.--}}
                    {{---->--}}
                    {{--<div class="price-box price-box-dark">--}}
                        {{--<div class="pr-box price-heading">--}}
                            {{--<i class="fa fa-gavel fa-2x"></i>--}}
                            {{--<h3 class="price-title">Basic</h3>--}}
                            {{--<div class="price-heading-text">Basic Membership</div>--}}
                        {{--</div>--}}
                        {{--<div class="pr-box price-box-price">--}}
                            {{--<div class="price"><span class="price-currency">$</span>99</div>--}}
                            {{--<div class="price-tenure">Per Month</div>--}}
                        {{--</div>--}}
                        {{--<div class="pr-box price-features">--}}
                            {{--<ul class="list-unstyled">--}}
                                {{--<li>Personal Use</li>--}}
                                {{--<li>10 Projects</li>--}}
                                {{--<li>1 Month License</li>--}}
                                {{--<li>27/7 Support</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="pr-box price-footer">--}}
                            {{--<a href="#" class="btn btn-white-bordered btn-rounded">Order Now</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- End price box -->--}}

                    {{--<!-- Begin price box (featured)--}}
                    {{--=================================--}}
                    {{--* Use class "price-box-dark" for dark style.--}}
                    {{---->--}}
                    {{--<div class="price-box price-box-dark price-box-featured">--}}
                        {{--<div class="price-box-ribbon">Popular</div>--}}
                        {{--<div class="pr-box price-heading">--}}
                            {{--<i class="fa fa-magic"></i>--}}
                            {{--<h3 class="price-title">Premium</h3>--}}
                            {{--<div class="price-heading-text">Premium Membership</div>--}}
                        {{--</div>--}}
                        {{--<div class="pr-box price-box-price">--}}
                            {{--<div class="price"><span class="price-currency">$</span>149</div>--}}
                            {{--<div class="price-tenure">Per Month</div>--}}
                        {{--</div>--}}
                        {{--<div class="pr-box price-features">--}}
                            {{--<ul class="list-unstyled">--}}
                                {{--<li>Multi Use</li>--}}
                                {{--<li>20 Projects</li>--}}
                                {{--<li>1 Month License</li>--}}
                                {{--<li>27/7 Support</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="pr-box price-footer">--}}
                            {{--<a href="#" class="btn btn-primary btn-rounded">Order Now</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- End price box -->--}}

                    {{--<!-- Begin price box--}}
                    {{--======================--}}
                    {{--* Use class "price-box-dark" for dark style.--}}
                    {{---->--}}
                    {{--<div class="price-box price-box-dark">--}}
                        {{--<div class="pr-box price-heading">--}}
                            {{--<i class="fa fa-plus"></i>--}}
                            {{--<h3 class="price-title">Premium Plus</h3>--}}
                            {{--<div class="price-heading-text">Plus Membership</div>--}}
                        {{--</div>--}}
                        {{--<div class="pr-box price-box-price">--}}
                            {{--<div class="price"><span class="price-currency">$</span>199</div>--}}
                            {{--<div class="price-tenure">Per Month</div>--}}
                        {{--</div>--}}
                        {{--<div class="pr-box price-features">--}}
                            {{--<ul class="list-unstyled">--}}
                                {{--<li>Multi Use</li>--}}
                                {{--<li>Unlimited Projects</li>--}}
                                {{--<li>1 Month License</li>--}}
                                {{--<li>27/7 Support</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="pr-box price-footer">--}}
                            {{--<a href="#" class="btn btn-white-bordered btn-rounded">Order Now</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- End price box -->--}}

                {{--</div>--}}
                {{--<!-- End prices carousel -->--}}

            {{--</div> <!-- /.container -->--}}
        {{--</div>--}}
        {{--<!-- End prices -->--}}

    {{--</section>--}}
    <!-- End section 4 -->


    <!-- =============================
    ///// Begin section 5 (team) /////
    ============================== -->
    <section id="section-5" class="team-section">

        <div class="container">
            <div class="row wow fadeIn">

                <!-- Left column -->
                <div class="col-md-6">

                    <!-- Begin heading
                    ===================
                    * Use class "heading-center" or "heading-right" to align heading.
                    * Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
                    * Use class "heading-hover" to enable heading hover effect.
                    * Use class "heading-uppercase" to enable uppercase letters.
                    -->
                    <div class="heading heading-lg heading-hover">
                        <span class="heading-title-ghost">The Team</span>
                        <h2 class="heading-title">The Team</h2>

                        <!-- Begin divider
                        ===================
                        * Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
                        * Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
                        * Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
                        -->
                        <hr class="hr-width-1 hr-5x border-main">
                        <!-- End divider -->

                    </div>
                    <!-- End heading -->

                </div> <!-- /.col -->

                <!-- Right column -->
                <div class="col-md-6">

                    <p class="lead">
                        Aliquam id viverra dolor. Duis vel ligula non neque.Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Suckamik saneta isromet.
                    </p>

                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->

        <!-- Begin team -->
        <div class="team wow fadeIn" data-wow-delay="0.3s">
            <div class="container">

                <!-- Begin content carousel (http://www.owlcarousel.owlgraphic.com)
                ====================================================================
                * Use class "nav-outside" for outside nav.
                * Use class "nav-outside-top" for outside top nav.
                * Use class "nav-rounded" for rounded nav.
                * Use class "dots-outside" for outside dots.
                * Use class "dots-left" or "dots-right" to align dots.
                * Use class "dots-rounded" for rounded dots.
                * Available carousel data attributes:
                        data-items="5".......................(items visible on desktop)
                        data-tablet-landscape="4"............(items visible on mobiles)
                        data-tablet-portrait="3".............(items visible on mobiles)
                        data-mobile-landscape="2"............(items visible on tablets)
                        data-mobile-portrait="1".............(items visible on tablets)
                        data-loop="true".....................(true/false)
                        data-margin="10".....................(space between items)
                        data-center="true"...................(true/false)
                        data-start-position="0"..............(item start position)
                        data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)
                        data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)
                        data-mouse-drag="false"..............(true/false)
                        data-touch-drag="false"..............(true/false)
                        data-autoheight="true"...............(true/false)
                        data-autoplay="true".................(true/false)
                        data-autoplay-timeout="5000".........(milliseconds)
                        data-autoplay-hover-pause="true".....(true/false)
                        data-autoplay-speed="800"............(milliseconds)
                        data-drag-end-speed="800"............(milliseconds)
                        data-lazy-load="true"................(true/false)
                        data-nav="true"......................(true/false)
                        data-nav-speed="800".................(milliseconds)
                        data-dots="false"....................(true/false)
                        data-dots-speed="800"................(milliseconds)
                -->
                <div class="owl-carousel team-carousel dots-outside" data-items="4" data-margin="20" data-tablet-landscape="3" data-tablet-portrait="2" data-mobile-landscape="2" data-mobile-portrait="1">

                    <!-- Begin team box
                    =====================
                    * Use class "team-box-hover" to enable team box hover effect.
                    * Use class "team-box-rounded" to enable team box rounded image.
                    -->
@foreach($temimg as $tmni)
                    <div class="team-box team-box-hover team-box-rounded">
                        <div class="team-image">
                            <img src="{{asset($tmni->image)}}" alt="John Doe">
                        </div>

                        <div class="team-info text-center">
                            <h4 class="team-info-title">{{$tmni->name}}</h4>
                            <p class="team-info-text">{{$tmni->desination}}</p>

                            <!-- Begin social icons -->
                            <ul class="social-icons">
                                <li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                <li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                            <!-- End social icons -->

                        </div>
                    </div>
@endforeach
                    <!-- End team box -->

                    <!-- Begin team box
                    =====================
                    * Use class "team-box-hover" to enable team box hover effect.
                    * Use class "team-box-rounded" to enable team box rounded image.
                    -->
                    {{--<div class="team-box team-box-hover team-box-rounded">--}}
                        {{--<div class="team-image">--}}
                            {{--<img src="{{asset('asset/fontend/')}}/img/team/staff-2.jpg" alt="Joseph Reeves">--}}
                        {{--</div>--}}

                        {{--<div class="team-info text-center">--}}
                            {{--<h4 class="team-info-title">Joseph Reeves</h4>--}}
                            {{--<p class="team-info-text">Developer</p>--}}

                            {{--<!-- Begin social icons -->--}}
                            {{--<ul class="social-icons">--}}
                                {{--<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>--}}
                                {{--<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>--}}
                                {{--<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>--}}
                                {{--<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>--}}
                            {{--</ul>--}}
                            {{--<!-- End social icons -->--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    <!-- End team box -->

                    <!-- Begin team box
                    =====================
                    * Use class "team-box-hover" to enable team box hover effect.
                    * Use class "team-box-rounded" to enable team box rounded image.
                    -->
                    {{--<div class="team-box team-box-hover team-box-rounded">--}}
                        {{--<div class="team-image">--}}
                            {{--<img src="{{asset('asset/fontend/')}}/img/team/staff-3.jpg" alt="Henry Harrison">--}}
                        {{--</div>--}}

                        {{--<div class="team-info text-center">--}}
                            {{--<h4 class="team-info-title">Miranda Harrison</h4>--}}
                            {{--<p class="team-info-text">Designer</p>--}}

                            {{--<!-- Begin social icons -->--}}
                            {{--<ul class="social-icons">--}}
                                {{--<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>--}}
                                {{--<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>--}}
                                {{--<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>--}}
                                {{--<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>--}}
                            {{--</ul>--}}
                            {{--<!-- End social icons -->--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    <!-- End team box -->

                    <!-- Begin team box
                    =====================
                    * Use class "team-box-hover" to enable team box hover effect.
                    * Use class "team-box-rounded" to enable team box rounded image.
                    -->
                    {{--<div class="team-box team-box-hover team-box-rounded">--}}
                        {{--<div class="team-image">--}}
                            {{--<img src="{{asset('asset/fontend/')}}/img/team/staff-4.jpg" alt="Henry Harrison">--}}
                        {{--</div>--}}

                        {{--<div class="team-info text-center">--}}
                            {{--<h4 class="team-info-title">Anna Daniel</h4>--}}
                            {{--<p class="team-info-text">Marketing</p>--}}

                            {{--<!-- Begin social icons -->--}}
                            {{--<ul class="social-icons">--}}
                                {{--<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>--}}
                                {{--<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>--}}
                                {{--<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>--}}
                                {{--<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>--}}
                            {{--</ul>--}}
                            {{--<!-- End social icons -->--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    <!-- End team box -->

                    <!-- Begin team box
                    =====================
                    * Use class "team-box-hover" to enable team box hover effect.
                    * Use class "team-box-rounded" to enable team box rounded image.
                    -->
                    {{--<div class="team-box team-box-hover team-box-rounded">--}}
                        {{--<div class="team-image">--}}
                            {{--<a href="#" target="_blank"><img src="{{asset('asset/fontend/')}}/img/team/staff-5.jpg" alt="Henry Harrison"></a>--}}
                        {{--</div>--}}

                        {{--<div class="team-info text-center">--}}
                            {{--<h4 class="team-info-title">Join Us</h4>--}}
                            {{--<p class="team-info-text">Designer Wanted</p>--}}
                            {{--<a href="#" class="btn btn-primary btn-rounded btn-sm">Read More!</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <!-- End team box -->

                </div>
                <!-- End team carousel -->

            </div> <!-- /.container -->
        </div>
        <!-- End team -->

    </section>
    <!-- End section 5 -->


    <!-- ====================================
    ///// Begin section 9 (video promo) /////
    =========================================
    * Use class "angle-left-top", "angle-right-top", "angle-left-bottom", "angle-right-bottom" to change section angle.
    -->

    <!-- Youtube video background
    NOTE: Replace videoURL with your own (videoURL:'your-youtube-video-URL').
    Do not forget to add your background image for mobile devices (because the video background doesn't work on mobile devices).
    More info about YTPlayer: https://github.com/pupunzi/jquery.mb.YTPlayer -->
    <section id="section-9" class="video-section youtube-bg text-white angle-right-top angle-left-bottom"
             style="background-image: url({{asset('asset/fontend/')}}/img/video-bg/promo-video-bg.jpg); background-position: 50% 50%;"
             data-property="{
			      videoURL: 'https://youtu.be/2QKQX7fbjnA',
			      containment: 'self',
			      startAt: 0,
			      stopAt: 0,
			      autoPlay: true,
			      loop: true,
			      mute: true,
			      showControls: false,
			      showYTLogo: false,
			      realfullscreen: true,
			      addRaster: false,
			      optimizeDisplay: true,
			      stopMovieOnBlur: true
				}">

        <!-- Element cover
        ===================
        * Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info.
        -->
        <span class="cover bg-transparent-7-dark"></span>

        <div class="video-section-caption vertical-align-center">

            <!-- Begin heading
            ===================
            * Use class "heading-center" or "heading-right" to align heading.
            * Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
            * Use class "heading-hover" to enable heading hover effect.
            * Use class "heading-uppercase" to enable uppercase letters.
            -->
            <div class="heading heading-lg heading-center heading-hover wow fadeIn">
                <span class="heading-title-ghost">Video Promo</span>
                <h2 class="heading-title">Video Promo</h2>
                <a class="video-btn bg-main" href="https://www.youtube.com/channel/UCs8Rk4gupgF0vDPUvXtZHcA/videos" target="_blank"><i class="fa fa-play"></i></a>
                <p class="heading-tescription lead text-gray-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt sumbire itkum.
                </p>
            </div>
            <!-- End heading -->

        </div> <!-- /.vertical-align-center -->

    </section>
    <!-- End section 7 -->


    <!-- ===========================================
    ///// Begin section 6 (blog/articles list) /////
    ============================================ -->
    {{--<section id="section-6" class="blog-section">--}}

        {{--<div class="container">--}}
            {{--<div class="row wow fadeIn">--}}

                {{--<!-- Left column -->--}}
                {{--<div class="col-md-6">--}}

                    {{--<!-- Begin heading--}}
                    {{--===================--}}
                    {{--* Use class "heading-center" or "heading-right" to align heading.--}}
                    {{--* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.--}}
                    {{--* Use class "heading-hover" to enable heading hover effect.--}}
                    {{--* Use class "heading-uppercase" to enable uppercase letters.--}}
                    {{---->--}}
                    {{--<div class="heading heading-lg heading-hover">--}}
                        {{--<span class="heading-title-ghost">Articles</span>--}}
                        {{--<h2 class="heading-title">Articles</h2>--}}

                        {{--<!-- Begin divider--}}
                        {{--===================--}}
                        {{--* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.--}}
                        {{--* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.--}}
                        {{--* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.--}}
                        {{---->--}}
                        {{--<hr class="hr-width-1 hr-5x border-main">--}}
                        {{--<!-- End divider -->--}}

                    {{--</div>--}}
                    {{--<!-- End heading -->--}}

                {{--</div> <!-- /.col -->--}}

                {{--<!-- Right column -->--}}
                {{--<div class="col-md-6">--}}

                    {{--<p class="lead">--}}
                        {{--<strong>Lorem ipsum dolor</strong> sit amet, consectetur adipisicing elit, sed do eiusmod--}}
                        {{--tempor incididunt ut labore et dolore magna aliqua. Ullamco laboris nisi vaimera suttis.--}}
                    {{--</p>--}}

                {{--</div> <!-- /.col -->--}}

            {{--</div> <!-- /.row -->--}}
        {{--</div> <!-- /.container -->--}}

        {{--<div class="container">--}}

            {{--<!-- Begin blog list--}}
            {{--=====================--}}
            {{--* Use class "blog-list-classic" to enable classic blog list layout.--}}
            {{---->--}}
            {{--<div class="blog-list margin-top-80">--}}
                {{--<div class="blog-wrap">--}}

                    {{--<!-- Begin blog list item 1--}}
                    {{--============================ -->--}}
                    {{--<div class="blog-list-item row wow fadeInUp">--}}

                        {{--<!-- Left column -->--}}
                        {{--<div class="col col-md-6 no-padding">--}}
                            {{--<a href="#" class="bco blog-list-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/blog/blog-1.jpg); background-position: 50% 50%;"></a>--}}
                        {{--</div> <!-- /.col -->--}}

                        {{--<!-- Right column -->--}}
                        {{--<div class="col col-md-6 no-padding">--}}
                            {{--<div class="bco blog-list-info">--}}
                                {{--<h2 class="blog-list-title"><a href="#" title="Aenean Odio Metus">Aenean Odio Metus</a></h2>--}}
                                {{--<div class="blog-list-meta">--}}
                                    {{--<a href="#" class="article-time">29 jan 2016</a> - in--}}
                                    {{--<a href="#" class="article-category">#web design</a>--}}
                                {{--</div>--}}
                                {{--<p class="blog-list-desc">--}}
                                    {{--Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco--}}
                                    {{--laboris nisi ut aliquip ex ea commodo consequat...--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div> <!-- /.col -->--}}

                    {{--</div>--}}
                    {{--<!-- End blog list item 1 -->--}}

                    {{--<!-- Begin blog list item 2--}}
                    {{--============================ -->--}}
                    {{--<div class="blog-list-item row wow fadeInUp">--}}

                        {{--<!-- Left column -->--}}
                        {{--<div class="col col-md-6 col-md-push-6 no-padding">--}}
                            {{--<a href="#" class="bco blog-list-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/blog/blog-2.jpg); background-position: 50% 50%;"></a>--}}
                        {{--</div> <!-- /.col -->--}}

                        {{--<!-- Right column -->--}}
                        {{--<div class="col col-md-6 col-md-pull-6 no-padding">--}}
                            {{--<div class="bco blog-list-info">--}}
                                {{--<h2 class="blog-list-title"><a href="#" title="Curabitur a Sodales">Curabitur a Sodales</a></h2>--}}
                                {{--<div class="blog-list-meta">--}}
                                    {{--<a href="#" class="article-time">12 jan 2016</a> -in--}}
                                    {{--<a href="#" class="article-category">#development</a>--}}
                                {{--</div>--}}
                                {{--<p class="blog-list-desc">--}}
                                    {{--Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco--}}
                                    {{--laboris nisi ut aliquip ex ea commodo consequat...--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div> <!-- /.col -->--}}

                    {{--</div>--}}
                    {{--<!-- End blog list item 2 -->--}}

                    {{--<!-- Begin blog list item 3--}}
                    {{--============================ -->--}}
                    {{--<div class="blog-list-item row wow fadeInUp">--}}

                        {{--<!-- Left column -->--}}
                        {{--<div class="col col-md-6 no-padding">--}}

                            {{--<!-- Begin content carousel (http://www.owlcarousel.owlgraphic.com)--}}
                            {{--====================================================================--}}
                            {{--* Use class "nav-outside" for outside nav.--}}
                            {{--* Use class "nav-outside-top" for outside top nav.--}}
                            {{--* Use class "nav-rounded" for rounded nav.--}}
                            {{--* Use class "dots-outside" for outside dots.--}}
                            {{--* Use class "dots-left" or "dots-right" to align dots.--}}
                            {{--* Use class "dots-rounded" for rounded dots.--}}
                            {{--* Available carousel data attributes:--}}
                                    {{--data-items="5".......................(items visible on desktop)--}}
                                    {{--data-tablet-landscape="4"............(items visible on mobiles)--}}
                                    {{--data-tablet-portrait="3".............(items visible on mobiles)--}}
                                    {{--data-mobile-landscape="2"............(items visible on tablets)--}}
                                    {{--data-mobile-portrait="1".............(items visible on tablets)--}}
                                    {{--data-loop="true".....................(true/false)--}}
                                    {{--data-margin="10".....................(space between items)--}}
                                    {{--data-center="true"...................(true/false)--}}
                                    {{--data-start-position="0"..............(item start position)--}}
                                    {{--data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)--}}
                                    {{--data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)--}}
                                    {{--data-mouse-drag="false"..............(true/false)--}}
                                    {{--data-touch-drag="false"..............(true/false)--}}
                                    {{--data-autoheight="true"...............(true/false)--}}
                                    {{--data-autoplay="true".................(true/false)--}}
                                    {{--data-autoplay-timeout="5000".........(milliseconds)--}}
                                    {{--data-autoplay-hover-pause="true".....(true/false)--}}
                                    {{--data-autoplay-speed="800"............(milliseconds)--}}
                                    {{--data-drag-end-speed="800"............(milliseconds)--}}
                                    {{--data-lazy-load="true"................(true/false)--}}
                                    {{--data-nav="true"......................(true/false)--}}
                                    {{--data-nav-speed="800".................(milliseconds)--}}
                                    {{--data-dots="false"....................(true/false)--}}
                                    {{--data-dots-speed="800"................(milliseconds)--}}
                            {{---->--}}
                            {{--<div class="owl-carousel dots-right" data-items="1" data-nav="true">--}}

                                {{--<!-- Begin carousel item--}}
                                {{--========================= -->--}}
                                {{--<div class="cc-item">--}}
                                    {{--<a href="#" class="bco blog-list-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/blog/blog-3.jpg); background-position: 50% 50%;"></a>--}}
                                {{--</div>--}}
                                {{--<!-- End carousel item -->--}}

                                {{--<!-- Begin carousel item--}}
                                {{--========================= -->--}}
                                {{--<div class="cc-item">--}}
                                    {{--<a href="#" class="bco blog-list-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/blog/blog-5.jpg); background-position: 50% 50%;"></a>--}}
                                {{--</div>--}}
                                {{--<!-- End carousel item -->--}}

                                {{--<!-- Begin carousel item--}}
                                {{--========================= -->--}}
                                {{--<div class="cc-item">--}}
                                    {{--<a href="#" class="bco blog-list-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/blog/blog-6.jpg); background-position: 50% 50%;"></a>--}}
                                {{--</div>--}}
                                {{--<!-- End carousel item -->--}}

                            {{--</div>--}}
                            {{--<!-- End content carousel -->--}}

                        {{--</div> <!-- /.col -->--}}

                        {{--<!-- Right column -->--}}
                        {{--<div class="col col-md-6 no-padding">--}}
                            {{--<div class="bco blog-list-info">--}}
                                {{--<h2 class="blog-list-title"><a href="#" title="Sed Quis Vestibulum">Sed Quis Vestibulum</a></h2>--}}
                                {{--<div class="blog-list-meta">--}}
                                    {{--<a href="#" class="article-time">06 jan 2016</a> - in--}}
                                    {{--<a href="#" class="article-category">#development</a>--}}
                                {{--</div>--}}
                                {{--<p class="blog-list-desc">--}}
                                    {{--Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco--}}
                                    {{--laboris nisi ut aliquip ex ea commodo consequat...--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div> <!-- /.col -->--}}

                    {{--</div>--}}
                    {{--<!-- End blog list item 3 -->--}}

                    {{--<!-- Begin blog list item 4--}}
                    {{--============================ -->--}}
                    {{--<div class="blog-list-item row wow fadeInUp">--}}

                        {{--<!-- Left column -->--}}
                        {{--<div class="col col-md-6 col-md-push-6 no-padding">--}}
                            {{--<a href="#" class="bco blog-list-image bg-image" style="background-image: url({{asset('asset/fontend/')}}/img/blog/blog-4.jpg); background-position: 50% 50%;"></a>--}}
                        {{--</div> <!-- /.col -->--}}

                        {{--<!-- Right column -->--}}
                        {{--<div class="col col-md-6 col-md-pull-6 no-padding">--}}
                            {{--<div class="bco blog-list-info">--}}
                                {{--<h2 class="blog-list-title"><a href="#" title="Proin Ex Dolor">Proin Ex Dolor</a></h2>--}}
                                {{--<div class="blog-list-meta">--}}
                                    {{--<a href="#" class="article-time">03 jan 2016</a> -in--}}
                                    {{--<a href="#" class="article-category">#web design</a>--}}
                                {{--</div>--}}
                                {{--<p class="blog-list-desc">--}}
                                    {{--Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco--}}
                                    {{--laboris nisi ut aliquip ex ea commodo consequat...--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div> <!-- /.col -->--}}

                    {{--</div>--}}
                    {{--<!-- End blog list item 4 -->--}}

                {{--</div> <!-- /.blog-wrap -->--}}
            {{--</div>--}}
            {{--<!-- End blog-list -->--}}

            {{--<div class="text-center wow fadeIn" data-wow-delay="0.4s">--}}
                {{--<a href="#" target="_blank" class="btn btn-default btn-xlg btn-block margin-top-60">View All Articles</a>--}}
            {{--</div>--}}

        {{--</div> <!-- /.container -->--}}

    {{--</section>--}}
    <!-- End section 6 -->


    <!-- =====================================
    ///// Begin section 7 (testimonials) /////
    ==========================================
    * Use class "angle-left-top", "angle-right-top", "angle-left-bottom", "angle-right-bottom" to change section angle.
    * Use class "bg-image-fixed" to make background image fixed (otherwise use class "bg-image").
    * Use class "bg-image-parallax" to enable background image parallax effect (otherwise use class "bg-image").
    * Use class "bg-pattern" if you use background patterns (example: http://subtlepatterns.com/). Combine with class "bg-image-fixed".
    -->
    <section id="section-7" class="testimonials-section bg-dark angle-right-top angle-left-bottom bg-image-parallax" style="background-image: url({{asset('asset/fontend/')}}/img/misc/bg-2.jpg);">

        <!-- Element cover
        ===================
        * Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info.
        -->
        <span class="cover bg-transparent-9-5-dark"></span>

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Begin heading
                    ===================
                    * Use class "heading-center" or "heading-right" to align heading.
                    * Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
                    * Use class "heading-hover" to enable heading hover effect.
                    * Use class "heading-uppercase" to enable uppercase letters.
                    -->
                    <div class="heading heading-lg heading-hover text-white wow fadeIn">
                        <span class="heading-title-ghost">Testimonials</span>
                        <h2 class="heading-title">Testimonials</h2>

                        <!-- Begin divider
                        ===================
                        * Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
                        * Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
                        * Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
                        -->
                        <hr class="hr-width-1 hr-5x border-main">
                        <!-- End divider -->

                    </div>
                    <!-- End heading -->

                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

        <div class="container">
            <div class="row wow fadeIn" data-wow-delay="0.3s">
                <div class="col-md-12">

                    <!-- Begin testimonials
                    ========================
                    * Use class "tm-hide-image" to hide testimonial image.
                    * Use class "tm-center" or "tm-right" to align testimonials.
                    -->
                    <div class="testimonial-wrap">

                        <!-- Begin content carousel (http://www.owlcarousel.owlgraphic.com)
                        ====================================================================
                        * Use class "nav-outside" for outside nav.
                        * Use class "nav-outside-top" for outside top nav.
                        * Use class "nav-rounded" for rounded nav.
                        * Use class "dots-outside" for outside dots.
                        * Use class "dots-left" or "dots-right" to align dots.
                        * Use class "dots-rounded" for rounded dots.
                        * Available carousel data attributes:
                                data-items="5".......................(items visible on desktop)
                                data-tablet-landscape="4"............(items visible on mobiles)
                                data-tablet-portrait="3".............(items visible on mobiles)
                                data-mobile-landscape="2"............(items visible on tablets)
                                data-mobile-portrait="1".............(items visible on tablets)
                                data-loop="true".....................(true/false)
                                data-margin="10".....................(space between items)
                                data-center="true"...................(true/false)
                                data-start-position="0"..............(item start position)
                                data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)
                                data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)
                                data-mouse-drag="false"..............(true/false)
                                data-touch-drag="false"..............(true/false)
                                data-autoheight="true"...............(true/false)
                                data-autoplay="true".................(true/false)
                                data-autoplay-timeout="5000".........(milliseconds)
                                data-autoplay-hover-pause="true".....(true/false)
                                data-autoplay-speed="800"............(milliseconds)
                                data-drag-end-speed="800"............(milliseconds)
                                data-lazy-load="true"................(true/false)
                                data-nav="true"......................(true/false)
                                data-nav-speed="800".................(milliseconds)
                                data-dots="false"....................(true/false)
                                data-dots-speed="800"................(milliseconds)
                        -->
                        <div class="owl-carousel testimonial-carousel dots-outside text-white" data-items="1" data-loop="true">

                            <!-- Begin testimonial item -->
                            @foreach($tesfntdtls as $fnrtesdtlsfnt)
                            <div class="testimonial-item text-gray-2">
                                {{--<img src="{{asset('asset/fontend/')}}/img/testimonial/client-1.png" alt="image">--}}
                                <img src="{{asset($fnrtesdtlsfnt->tesimage)}}" alt="{{$fnrtesdtlsfnt->tesimage}}">
                                <blockquote>
                                    <p>"{{$fnrtesdtlsfnt->tesdescription}}"</p>
                                    <small>{{$fnrtesdtlsfnt->tesname}}</small>
                                </blockquote>
                            </div>
                            @endforeach
                            <!-- End testimonial item -->

                            <!-- Begin testimonial item -->
                            {{--<div class="testimonial-item text-gray-2">--}}
                                {{--<img src="{{asset('asset/fontend/')}}/img/testimonial/client-2.png" alt="image">--}}
                                {{--<blockquote>--}}
                                    {{--<p>"Maecenas sit amet diam iaculis, lobortis tortor sed, bibendum quam. Nam mauris odio, sodales interdum facilisis in, dignissim et massa. In suscipit quam nisi."</p>--}}
                                    {{--<small>John Smith</small>--}}
                                {{--</blockquote>--}}
                            {{--</div>--}}
                            <!-- End testimonial item -->

                            <!-- Begin testimonial item -->
                            {{--<div class="testimonial-item text-gray-2">--}}
                                {{--<img src="{{asset('asset/fontend/')}}/img/testimonial/client-3.png" alt="image">--}}
                                {{--<blockquote>--}}
                                    {{--<p>"Proin at tincidunt leo. Morbi ut metus sit amet purus molestie sollicitudin. Maecenas convallis est vitae neque feugiat, in accumsan odio vestibulum. Pellentesque sodales fermentum porttitor."</p>--}}
                                    {{--<small>Jack Paterson</small>--}}
                                {{--</blockquote>--}}
                            {{--</div>--}}
                            <!-- End testimonial item -->

                        </div>
                        <!-- End testimonials carousel -->

                    </div>
                    <!-- End testimonials -->

                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

    </section>
    <!-- End section 7 -->


    <!-- =================================
    ///// Begin section 10 (clients) /////
    ================================== -->
    <section id="section-10" class="clients-section">

        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <!-- Begin heading
                    ===================
                    * Use class "heading-center" or "heading-right" to align heading.
                    * Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
                    * Use class "heading-hover" to enable heading hover effect.
                    * Use class "heading-uppercase" to enable uppercase letters.
                    -->
                    <div class="heading heading-lg heading-center heading-hover wow fadeIn">
                        <span class="heading-title-ghost">Our Clients</span>
                        <h2 class="heading-title">Our Clients</h2>

                        <!-- Begin divider
                        ===================
                        * Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
                        * Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
                        * Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
                        -->
                        <hr class="hr-width-1 hr-5x border-main">
                        <!-- End divider -->

                        <p class="heading-tescription lead max-width-800 margin-auto">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <!-- End heading -->

                </div> <!-- /.col -->

                <!-- Left column -->
                <div class="col-md-12 margin-top-60 wow fadeIn" data-wow-delay="0.3s">

                    <!-- Begin content carousel (http://www.owlcarousel.owlgraphic.com)
                    ====================================================================
                    * Use class "nav-outside" for outside nav.
                    * Use class "nav-outside-top" for outside top nav.
                    * Use class "nav-rounded" for rounded nav.
                    * Use class "dots-outside" for outside dots.
                    * Use class "dots-left" or "dots-right" to align dots.
                    * Use class "dots-rounded" for rounded dots.
                    * Available carousel data attributes:
                            data-items="5".......................(items visible on desktop)
                            data-tablet-landscape="4"............(items visible on mobiles)
                            data-tablet-portrait="3".............(items visible on mobiles)
                            data-mobile-landscape="2"............(items visible on tablets)
                            data-mobile-portrait="1".............(items visible on tablets)
                            data-loop="true".....................(true/false)
                            data-margin="10".....................(space between items)
                            data-center="true"...................(true/false)
                            data-start-position="0"..............(item start position)
                            data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)
                            data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)
                            data-mouse-drag="false"..............(true/false)
                            data-touch-drag="false"..............(true/false)
                            data-autoheight="true"...............(true/false)
                            data-autoplay="true".................(true/false)
                            data-autoplay-timeout="5000".........(milliseconds)
                            data-autoplay-hover-pause="true".....(true/false)
                            data-autoplay-speed="800"............(milliseconds)
                            data-drag-end-speed="800"............(milliseconds)
                            data-lazy-load="true"................(true/false)
                            data-nav="true"......................(true/false)
                            data-nav-speed="800".................(milliseconds)
                            data-dots="false"....................(true/false)
                            data-dots-speed="800"................(milliseconds)
                    -->
                    <div class="owl-carousel clients-carousel dots-outside" data-items="5" data-margin="40" data-tablet-landscape="4" data-tablet-portrait="3" data-mobile-landscape="2" data-mobile-portrait="1">

                        <!-- Begin carousel item
                        ========================= -->
                        @foreach($fntclntdlts as $clntfrnddets)
                        <div class="cc-item">
                            <a target="_blank" href="#" class="client">
                                {{--<img src="{{asset('asset/fontend/')}}/img/clients/client-1.png" alt="image">--}}
                                <img src="{{asset($clntfrnddets->clientimg)}}" alt="{{$clntfrnddets->clientimg}}">
                            </a>
                        </div>
                        @endforeach
                        <!-- End carousel item -->

                        <!-- Begin carousel item
                        ========================= -->
                        {{--<div class="cc-item">--}}
                            {{--<a target="_blank" href="#" class="client"><img src="{{asset('asset/fontend/')}}/img/clients/client-2.png" alt="image"></a>--}}
                        {{--</div>--}}
                        <!-- End carousel item -->

                        <!-- Begin carousel item
                        ========================= -->
                        {{--<div class="cc-item">--}}
                            {{--<a target="_blank" href="#" class="client"><img src="{{asset('asset/fontend/')}}/img/clients/client-3.png" alt="image"></a>--}}
                        {{--</div>--}}
                        <!-- End carousel item -->

                        <!-- Begin carousel item
                        ========================= -->
                        {{--<div class="cc-item">--}}
                            {{--<a target="_blank" href="#" class="client"><img src="{{asset('asset/fontend/')}}/img/clients/client-4.png" alt="image"></a>--}}
                        {{--</div>--}}
                        <!-- End carousel item -->

                        <!-- Begin carousel item
                        ========================= -->
                        {{--<div class="cc-item">--}}
                            {{--<a target="_blank" href="#" class="client"><img src="{{asset('asset/fontend/')}}/img/clients/client-5.png" alt="image"></a>--}}
                        {{--</div>--}}
                        <!-- End carousel item -->

                        <!-- Begin carousel item
                        {{--========================= -->--}}
                        {{--<div class="cc-item">--}}
                            {{--<a target="_blank" href="#" class="client"><img src="{{asset('asset/fontend/')}}/img/clients/client-6.png" alt="image"></a>--}}
                        {{--</div>--}}
                        <!-- End carousel item -->

                        <!-- Begin carousel item
                        ========================= -->
                        {{--<div class="cc-item">--}}
                            {{--<a target="_blank" href="#" class="client"><img src="{{asset('asset/fontend/')}}/img/clients/client-7.png" alt="image"></a>--}}
                        {{--</div>--}}
                        <!-- End carousel item -->

                    </div>
                    <!-- End content carousel -->

                </div> <!-- /.col-->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

    </section>
    <!-- End section 10 -->


    <!-- ================================
    ///// Begin section 8 (contact) /////
    =====================================
    * Use class "angle-left-top", "angle-right-top", "angle-left-bottom", "angle-right-bottom" to change section angle.
    * Use class "bg-image-fixed" to make background image fixed (otherwise use class "bg-image").
    * Use class "bg-image-parallax" to enable background image parallax effect (otherwise use class "bg-image").
    * Use class "bg-pattern" if you use background patterns (example: http://subtlepatterns.com/). Combine with class "bg-image-fixed".
    -->
    <section id="section-8" class="contact-section bg-dark angle-right-top bg-image-parallax" style="background-image: url({{asset('asset/fontend/')}}/img/misc/bg-1.jpg);">

        <!-- Element cover
        ===================
        * Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info.
        -->
        <span class="cover bg-transparent-9-dark bg-transparent-gradient-1"></span>

        <div class="container">
            <div class="row wow fadeIn">

                <!-- Left column -->
                <div class="col-md-7">

                    <!-- Begin heading
                    ===================
                    * Use class "heading-center" or "heading-right" to align heading.
                    * Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
                    * Use class "heading-hover" to enable heading hover effect.
                    * Use class "heading-uppercase" to enable uppercase letters.
                    -->
                    <div class="heading heading-lg heading-hover">
                        <span class="heading-title-ghost">Contact Us</span>
                        <h2 class="heading-title text-white">Contact Us</h2>

                        <!-- Begin divider
                        ===================
                        * Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
                        * Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
                        * Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
                        -->
                        <hr class="hr-width-1 hr-5x border-main">
                        <!-- End divider -->

                        <p class="heading-tescription lead text-gray-2">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <!-- End heading -->

                </div> <!-- /.col -->

                <!-- Right column -->
                <div class="col-md-5 text-gray-2 padding-left-40">

                    <div class="contact-info">
                        <p><i class="fa fa-home"></i>Zakir hossain road ,Mohammadpur . Dahaka</p>
                        <p><i class="fa fa-phone"></i> phone: +123 456 789 00</p>
                        <p><i class="fa fa-envelope"></i> <a href="mailto:company.email@info.com" target="_blank">company.email@info.com</a></p>
                    </div>

                    <h5 class="margin-top-40 margin-bottom-20">Follow Us:</h5>

                    <!-- Begin social icons -->
                    <ul class="social-icons margin-bottom-20">
                        <li><a class="btn btn-social-min btn-white-bordered btn-rounded-full btn-lg" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="btn btn-social-min btn-white-bordered btn-rounded-full btn-lg" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="btn btn-social-min btn-white-bordered btn-rounded-full btn-lg" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="btn btn-social-min btn-white-bordered btn-rounded-full btn-lg" href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        <li><a class="btn btn-social-min btn-white-bordered btn-rounded-full btn-lg" href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                    <!-- End social icons -->

                </div> <!-- /.col -->

            </div> <!-- /.row -->

            <div class="row">
                <div class="col-md-12">

                    <!-- Begin contact form
                    ========================= -->
                    <form id="contact-form" class="margin-top-80 text-white wow fadeIn" data-wow-delay="0.3s">

                        <!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
                        <input type="hidden" name="project_name" value="yourwebsiteaddress.com"> <!-- Change value to your site name -->
                        <input type="hidden" name="admin_email" value="your@email.com"> <!-- Change value to your email address (where a message will be sent) -->
                        <input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com"> <!-- Change value to your own message subject -->
                        <!-- End Hidden Required Fields -->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Name:" placeholder="Your Name" required="">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="Email:" placeholder="Your Email" required="">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Subject:" placeholder="Subject" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="Message:" rows="8" placeholder="Your Message (text only)" required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary btn-rounded btn-block btn-lg">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <!-- End contact form -->

                </div> <!-- /.col-->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

    </section>
    <!-- End section 8 -->



    <!-- ===================
    ///// Begin footer /////
    ========================
    * Use class "angle-left-top" or "angle-right-top" to change footer top angle.
    -->
    <footer id="footer" class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright small">
                        <a href="#">Asso - One Page HTML5 Template</a>
                        <p>Copyright 2017 / All rights reserved</p>
                    </div>
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </footer>
    <!-- End footer -->


    <!-- Scroll to top button -->
    <a href="#body-content" class="scrolltotop sm-scroll bg-main"><i class="fa fa-chevron-up"></i></a>

</div>
<!-- End body content -->






<!-- ====================
///// Scripts below /////
===================== -->

<!-- Core JS -->
<script src="{{asset('asset/fontend/')}}/vendor/jquery/jquery.min.js"></script> <!-- jquery JS (more info: https://jquery.com) -->
<script src="{{asset('asset/fontend/')}}/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- bootstrap JS (more info: http://getbootstrap.com) -->

<!-- Libs and Plugins JS -->
<script src="{{asset('asset/fontend/')}}/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js"></script> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
<script src="{{asset('asset/fontend/')}}/vendor/wow.min.js"></script> <!-- WOW animations JS (more info: http://mynameismatthieu.com/WOW/index.html) -->
<script src="{{asset('asset/fontend/')}}/vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel JS (more info: http://www.owlcarousel.owlgraphic.com) -->
<script src="{{asset('asset/fontend/')}}/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script> <!-- Magnific Popup JS (more info: http://dimsemenov.com/plugins/magnific-popup/) -->

<script src="{{asset('asset/fontend/')}}/vendor/isotope.pkgd.min.js"></script> <!-- isotope JS (more info: http://isotope.metafizzy.co) -->
<script src="{{asset('asset/fontend/')}}/vendor/imagesloaded.pkgd.min.js"></script> <!-- ImagesLoaded JS (https://github.com/desandro/imagesloaded) -->
<script src="{{asset('asset/fontend/')}}/vendor/smoothscroll.js"></script> <!-- YTPlayer JS (more info: https://gist.github.com/theroyalstudent/4e6ec834be19bf077298) -->
<script src="{{asset('asset/fontend/')}}/vendor/jquery.easing.min.js"></script> <!-- Easing JS (more info: http://gsgd.co.uk/sandbox/jquery/easing/) -->

<!-- Theme master JS -->
<script src="{{asset('asset/fontend/')}}/js/theme.js"></script>

<!-- Theme custom JS (all your JS customizations) -->
<script src="{{asset('asset/fontend/')}}/js/custom.js"></script>


<!--==============================
///// Begin Google Analytics /////
============================== -->

<!-- Paste your Google Analytics code here.
Go to http://www.google.com/analytics/ for more information. -->

<!--==============================
///// End Google Analytics /////
============================== -->







<!-- ================================================================================
 ///// Begin Stylesheet Switcher (for demo only). Remove if you do not need it. /////
 ================================================================================ -->
<div class="switcher-wrapper">
    <div class="switcher">
        <div class="color-box-list">
            <ul>
                <li><a class="switcher-color-box default" href="javascript:chooseStyle('none', 60)"></a></li>
                <li><a class="switcher-color-box blue" href="javascript:chooseStyle('blue-theme', 60)"></a></li>
                <li><a class="switcher-color-box brown" href="javascript:chooseStyle('brown-theme', 60)"></a></li>
                <li><a class="switcher-color-box green" href="javascript:chooseStyle('green-theme', 60)"></a></li>
                <li><a class="switcher-color-box purple" href="javascript:chooseStyle('purple-theme', 60)"></a></li>
                <li><a class="switcher-color-box yellow" href="javascript:chooseStyle('yellow-theme', 60)"></a></li>
            </ul>
        </div>
        <hr class="no-margin-top">
        <div class="link-list">
            <ul>
                <li><a href="index.html">Default Menu</a></li>
                <li><a href="hamburger-menu.html">Hamburger Menu</a></li>
                <li><a href="boxed-layout.html">Boxed Layout</a></li>
                <li><a href="template-v2.html">Template v.2</a></li>
            </ul>
        </div>
    </div>
    <div class="switcher-btn pull-right"><i class="fa fa-cog fa-spin fa-fw"></i></div>
</div>

<!-- Begin Stylesheet Switcher JS (for demo only). Remove if you do not need it.  -->
<script src="assets/vendor/styleswitch.js"></script>
<!--/***********************************************
* Style Sheet Switcher v1.1- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/-->
<!-- End Stylesheet Switcher JS -->

<script type="text/javascript">
    $(function(){
        $(".switcher-btn").on("click", function(e) {
            e.preventDefault();
            var div = $(".switcher-wrapper");
            if (div.css("left") === "-160px") {
                $(".switcher-wrapper").animate({
                    left: "0px"
                });
            } else {
                $(".switcher-wrapper").animate({
                    left: "-160px"
                });
            }
        });
    });
</script>
<!--==============================================================================
///// End Stylesheet Switcher (for demo only). Remove if you do not need it. /////
============================================================================== -->



</body>
<!-- End body -->


<!-- Mirrored from demo.themetorium.net/html/asso/v.1.2/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jul 2017 10:45:04 GMT -->
</html>