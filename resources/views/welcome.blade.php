<!DOCTYPE html>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Prefix</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('assets/images/fevicon.png" type="image/gif"') }} />
    <!-- font css -->
    <link href=" https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/ css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>

<body>
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/images/logo.png') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.html">Pricing Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="login_bt">
                            <ul>
                                <li class="active"><a href="#">Buy Now</a></li>
                                <li><a href="{{ url('/admin') }}">Login</a></li>
                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="banner_taital">SELL EVERY OLD THINGS & <span style="color: #2b2b2b;">BUY NEW</span></h1>
                        <p class="banner_text">It is a long established fact that a reader will be distracted by the readable c</p>
                        <div class="started_text"><a href="#">Read More</a></div>
                        <div class="play_icon"><img src="{{ asset('assets/images/play-icon.png') }}"></div>
                    </div>
                    <div class="col-md-6">
                        <div id="banner_slider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="banner_img"><img src="{{ asset('assets/images/banner-img.png') }}"></div>
                                </div>
                                <div class="carousel-item">
                                    <div class="banner_img"><img src="images/banner-img.png"></div>
                                </div>
                                <div class="carousel-item">
                                    <div class="banner_img"><img src="images/banner-img.png"></div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- select box section start -->

    <!-- services section start -->
    <div class="services_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="services_taital">Ads Services</h1>
                    <p class=" services_text">Page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to</p>
                    <div class="readmore_btn"><a href="#">Read More</a></div>
                </div>
                <div class="col-md-8">
                    <h1 class="services_taital">
                        <div class="services_box">
                            <div class="services_box_left">
                                <h5 class="fashion_text">Automotive</h5>
                                <div><img src="{{ asset('assets/images/icon-1.png') }}"></div>
                            </div>
                            <div class="services_box_right">
                                <h5 class="fashion_text">Fashion</h5>
                                <div><img src="{{ asset('assets/images/icon-2.png') }}"></div>
                            </div>
                        </div>
                        <div class="services_box_2">
                            <div class="services_box_left">
                                <h5 class="fashion_text">Automotive</h5>
                                <div><img src="{{ asset('assets/images/icon-3.png') }}"></div>
                            </div>
                            <div class="services_box_right">
                                <h5 class="fashion_text">Fashion</h5>
                                <div><img src="{{ asset('assets/images/icon-4.png') }}"></div>
                            </div>
                        </div>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- services section end -->
    <!-- shop section start -->
    <div class="blog_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="blog_taital">PREMIUM ADVERTISEMENT</h1>
                </div>
            </div>
            <div class="blog_section_2">
                <div id="main_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="blog_img"><img src="{{ asset('assets/images/blog-img.png') }}"></div>
                                    <h6 class="number_text">01</h6>
                                    <div class="callnow_btn">
                                        <div class="chat_bt"><a href="#">Chat Now</a></div>
                                        <div class="call_bt active"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="blog_img"><img src="{{ asset('assets/images/blog-img1.png') }}"></div>
                                    <h6 class="number_text">02</h6>
                                    <div class="callnow_btn">
                                        <div class="chat_bt"><a href="#">Chat Now</a></div>
                                        <div class="call_bt active"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="blog_img"><img src="{{ asset('assets/images/blog-img2.png') }}"></div>
                                    <h6 class="number_text">03</h6>
                                    <div class="callnow_btn">
                                        <div class="chat_bt"><a href="#">Chat Now</a></div>
                                        <div class="call_bt active"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="blog_img"><img src="{{ asset('assets/images/blog-img.png') }}"></div>
                                    <h6 class="number_text">01</h6>
                                    <div class="callnow_btn">
                                        <div class="chat_bt"><a href="#">Chat Now</a></div>
                                        <div class="call_bt active"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="blog_img"><img src="{{ asset('assets/images/blog-img1.png') }}"></div>
                                    <h6 class="number_text">02</h6>
                                    <div class="callnow_btn">
                                        <div class="chat_bt"><a href="#">Chat Now</a></div>
                                        <div class="call_bt active"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="blog_img"><img src="{{ asset('assets/images/blog-img2.png') }}"></div>
                                    <h6 class="number_text">03</h6>
                                    <div class="callnow_btn">
                                        <div class="chat_bt"><a href="#">Chat Now</a></div>
                                        <div class="call_bt active"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="blog_img"><img src="{{ asset('assets/images/blog-img.png') }}"></div>
                                    <h6 class="number_text">01</h6>
                                    <div class="callnow_btn">
                                        <div class="chat_bt"><a href="#">Chat Now</a></div>
                                        <div class="call_bt active"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="blog_img"><img src="{{ asset('assets/images/blog-img1.png') }}"></div>
                                    <h6 class="number_text">02</h6>
                                    <div class="callnow_btn">
                                        <div class="chat_bt"><a href="#">Chat Now</a></div>
                                        <div class="call_bt active"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="blog_img"><img src="{{ asset('assets/images/blog-img2.png') }}"></div>
                                    <h6 class="number_text">03</h6>
                                    <div class="callnow_btn">
                                        <div class="chat_bt"><a href="#">Chat Now</a></div>
                                        <div class="call_bt active"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="customer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="customer_taital">What Is says Our customers</h1>
                </div>
            </div>
        </div>
        <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="customer_section_2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box_main">
                                        <div class="customer_main">
                                            <p class="enim_text">has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors </p>
                                            <div class="customer_left">
                                                <div class="customer_img"><img src="images/customer-img.png"></div>
                                            </div>
                                            <div class="customer_right">
                                                <h3 class="customer_name">Content</h3>
                                                <p class="web_text">And web page </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="customer_section_2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box_main">
                                        <div class="customer_main">
                                            <p class="enim_text">has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors </p>
                                            <div class="customer_left">
                                                <div class="customer_img"><img src="images/customer-img.png"></div>
                                            </div>
                                            <div class="customer_right">
                                                <h3 class="customer_name">Content</h3>
                                                <p class="web_text">And web page </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="customer_section_2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box_main">
                                        <div class="customer_main">
                                            <p class="enim_text">has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors </p>
                                            <div class="customer_left">
                                                <div class="customer_img"><img src="images/customer-img.png"></div>
                                            </div>
                                            <div class="customer_right">
                                                <h3 class="customer_name">Content</h3>
                                                <p class="web_text">And web page </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>

    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer_logo"><img src="images/footer-logo.png"></div>
                </div>
            </div>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">Useful link </h2>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="sell.html">Sell</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">Portfolio</h2>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">LIodeno</a></li>
                                <li><a href="jokri.html">Jokri</a></li>
                                <li><a href="begana.html">Begana</a></li>
                                <li><a href="sell.html">Sell</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">Contact Us</h2>
                        <div class="location_text"><img src="images/call-icon.png"><span class="padding_left_15"><a href="#">+01 1234567</a></span></div>
                        <div class="location_text"><img src="images/mail-icon.png"><span class="padding_left_15"><a href="#">demo@gmail.com</a></span></div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">Social Link</h2>
                        <p class="footer_text">It is a long established fact that a reader will be </p>
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input_main">
                <input type="text" class="email_text" placeholder="Enter your email" name="Enter your email">
                <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script>
        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').materialSelect();
            $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function() {
                $(this).closest('.select-outline').find('label').toggleClass('active');
                $(this).closest('.select-outline').find('.caret').toggleClass('active');
            });
        });
    </script>
</body>

</html>