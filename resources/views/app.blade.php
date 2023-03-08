<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pillloMart</title>
    <link rel="stylesheet" href="{{ asset ("css/bootstrap.min.css")}}">
    <link rel="icon" href="{{ asset ("/img/favicon.png")}}">
    <link rel="stylesheet" href="{{ asset ("/css/animate.css")}}">
    <link rel="stylesheet" href="{{ asset ("/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{ asset ("/css/all.css")}}">
    <link rel="stylesheet" href="{{ asset ("/css/flaticon.css")}}">
    <link rel="stylesheet" href="{{ asset ("/css/themify-icons.css")}}">
    <link rel="stylesheet" href="{{ asset ("/css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{ asset ("/css/slick.css")}}">
    <link rel="stylesheet" href="{{ asset ("/css/style.css")}}">
</head>
<body>

<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ asset("main") }}"> <img src="{{ asset("/img/logo.png")}}" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ asset(" ") }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ asset("about") }}">about</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ asset("blog") }}" id="navbarDropdown_1"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    product
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                    <a class="dropdown-item" href="product_list.html"> product list</a>
                                    <a class="dropdown-item" href="single-product.html">product details</a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ asset("blog") }}" id="navbarDropdown_3"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="{{ asset("login") }}">
                                        login
                                    </a>
                                    <a class="dropdown-item" href="{{ asset("checkout") }}">product checkout</a>
                                    <a class="dropdown-item" href="{{ asset("cart") }}">shopping cart</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ asset("blog") }}" id="navbarDropdown_2"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="{{ asset("blog") }}"> blog</a>
                                    <a class="dropdown-item" href="single-{{ asset("blog") }}">Single blog</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ asset("contact") }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex align-items-center">
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <a href="{{ asset("cart") }}">
                            <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
@yield('content')
<footer class="footer_part">
    <div class="footer_iner">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8">
                    <div class="footer_menu">
                        <div class="footer_logo">
                            <a href="{{ asset(" ") }}"><img src="img/logo.png" alt="#"></a>
                        </div>
                        <div class="footer_menu_item">
                            <a href="{{ asset(" ") }}">Home</a>
                            <a href="{{ asset("about") }}">About</a>
                            <a href="product_list.html">Products</a>
                            <a href="#">Pages</a>
                            <a href="{{ asset("blog") }}">Blog</a>
                            <a href="{{ asset("contact") }}">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="social_icon">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright_part">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="copyright_text">
                        <P>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></P>
                        <div class="copyright_link">
                            <a href="#">Turms & Conditions</a>
                            <a href="#">FAQ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset("/js/jquery-1.12.1.min.js") }}"></script>
<script src="{{ asset("/js/popper.min.js") }}"></script>
<script src="{{ asset("/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("/js/jquery.magnific-popup.js") }}"></script>
<script src="{{ asset("/js/owl.carousel.min.js") }}"></script>
<script src="{{ asset("/js/jquery.nice-select.min.js") }}"></script>
<script src="{{ asset("/js/slick.min.js") }}"></script>
<script src="{{ asset("/js/jquery.counterup.min.js") }}"></script>
<script src="{{ asset("/js/waypoints.min.js") }}"></script>
<script src="{{ asset("/js/contact.js") }}"></script>
<script src="{{ asset("/js/jquery.ajaxchimp.min.js") }}"></script>
<script src="{{ asset("/js/jquery.form.js") }}"></script>
<script src="{{ asset("/js/jquery.validate.min.js") }}"></script>
<script src="{{ asset("/js/mail-script.js") }}"></script>
<script src="{{ asset("/js/custom.js") }}"></script>
</body>
</html>
