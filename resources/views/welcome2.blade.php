<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Management Website</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body id="page-top" class="landing-page" style="background: url('img/landing/header_two1.jpg') no-repeat center center fixed; background-size: cover;">
<div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a class="navbar-brand" href="{{ url('/home') }}">Dashboard</a>
                        @else
                            <a class="navbar-brand" href="{{ route('login') }}">Login</a>
                        @endauth
                        @endif
                    </div>

            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="#page-top">Home</a></li>
                    <li><a class="page-scroll" href="#about">About Us</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!--div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div-- class="carousel-caption">
                    <h1>We craft<br/>
                        brands, web apps,<br/>
                        and user interfaces<br/>
                        we are IN+ studio</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">READ MORE</a>
                        <a class="caption-link" href="#" role="button">Inspinia Theme</a>
                    </p>
                </div-->
{{--<div  style="position: static;">--}}
{{--    <img src="{{ asset('img/landing/header_two1.jpg') }}" alt="laptop" class="img-responsive"/>--}}
{{--</div>--}}

<section id="about" class="about container">
    <h1 style="padding-top: 30px;" class="text-center"> About Us</h1>
    <div class="col-lg-6 features-text wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft; padding-bottom: 30px;">
        <small>INSPINIA</small>
        <h2>Perfectly designed </h2>
        <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with latest jQuery plugins.</p>
        <a href="" class="btn btn-primary">Learn more</a>
    </div>
    <div class="col-lg-6 text-right wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight; padding-top: 10px; padding-bottom: 30px;">
        <img src="img/landing/dashboard.png" alt="dashboard" class="img-responsive pull-right">
    </div>
</section>

<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row pt-30">
            <div class="col-md-6">
                <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>

                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="" action="#" method="post" novalidate="novalidate">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name <small>*</small></label>
                                <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="" aria-required="true">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <small>*</small></label>
                                <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Subject <small>*</small></label>
                                <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject" aria-required="true">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message" aria-required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <input name="form_botcheck" class="form-control" type="hidden" value="">
                        <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                        <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                    </div>
                </form>

                =
            </div>
            <div class="col-md-6">
                <h3 class="line-bottom mt-0">Get in touch with us</h3>
                <p>Aliquam officia dolor rerum enim doloremque iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus.</p>
                <ul class="list-inline social-icon">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>

                <div class="icon-box media mb-0 pb-0 pt-0 mt-0"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                    <div class="media-body">
                        <h5 class="mt-0">Contact Number</h5>
                        <p><a href="tel:+325-12345-65478">+325-12345-65478</a></p>
                    </div>
                </div>
                <div class="icon-box media mb-0 pb-0 pt-0 mt-0"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                    <div class="media-body">
                        <h5 class="mt-0">Email Address</h5>
                        <p><a href="mailto:supporte@yourdomin.com">supporte@yourdomin.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy;School Mangement Website</strong><br/> The all in one solution for your school management problems</p>
            </div>
        </div>
    </div>
</section>

<!-- Mainly scripts -->
<script src="{{ asset('js/jquery-2.1.1.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('js/inspinia.js') }}"></script>
<script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('js/plugins/wow/wow.min.js') }}"></script>


<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
            header = document.querySelector( '.navbar-default' ),
            didScroll = false,
            changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

</body>
</html>

