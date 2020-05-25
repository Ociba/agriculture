<header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-content d-flex justify-content-center  justify-content-sm-between align-items-center">
                            <div class="header-top-text d-sm-block d-lg-block d-xs-block d-md-block">
                                <p><i class="far fa-leaf"></i>Marketing your products ,connect buyers and improve Agric services</p>
                            </div>
                            <div class="header-top-btns d-flex align-items-center text-lg-right text-center">
                                {{--
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                                --}}
                                <a class="d-sm-block d-lg-block d-xs-block d-md-block" href="{{ route('login') }}">signin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-info-item">
                            <div class="logo">
                            <a href="#"><img src="{{asset('assets/images/agricul.png')}}" alt="logo">AgricUg</a>
                            </div>
                            <div class="header-info d-lg-flex d-md-flex d-sm-flex d-xs-flex">
                                <div class="item">
                                   <i class="fal fa-phone"></i>
                                   <span style="font-size:11px; font-weight:20px;">Phone Number</span>
                                    <a href="tel:+12345678999">
                                        <h6 class="title">+256 775 401793</h6>
                                    </a>
                                </div>
                                <div class="item">
                                <i class="fal fa-envelope-open"></i>
                                <span style="font-size:11px; font-weight:20px;">Email Address</span>
                                    <a href="mailto:support@gmail.com">
                                        <h6 class="title">agricug@gmail.com</h6>
                                    </a>

                                </div>
                                {{--
                                <div class="item">
                                <?php
                                echo "Today is"." ".date("l") ." ". date("F d, Y");
                                ?>
                                </div>
                                --}}
                            </div>
                            {{--
                            <div class="header-flag">
                                <ul class="flag-wrap">
                                    <li class="flag-item-top">
                                        <a href="#" class="flag-bar d-flex align-items-center">
                                            <img src="{{asset('assets/images/flag.png')}}" alt="Image">
                                            <span>Eng <i class="far fa-angle-down"></i></span>
                                        </a>
                                        <ul class="flag-item-bottom">
                                            <li class="flag-item">
                                                <a href="#" class="flag-link">
                                                    <img src="{{asset('assets/images/flag-1.png')}}" alt="Image">
                                                    United Kingdom 
                                                </a>
                                            </li>
                                            <li class="flag-item">
                                                <a href="#" class="flag-link">
                                                    <img src="{{asset('assets/images/flag-2.png')}}" alt="Image">
                                                    Germany
                                                </a>
                                            </li>
                                            <li class="flag-item">
                                                <a href="#" class="flag-link">
                                                    <img src="{{asset('assets/images/flag-3.png')}}" alt="Image">
                                                    Argentina
                                                </a>
                                            </li>
                                            <li class="flag-item">
                                                <a href="#" class="flag-link">
                                                    <img src="{{asset('assets/images/flag-4.png')}}" alt="Image">
                                                    Australia
                                                </a>
                                            </li>
                                            <li class="flag-item">
                                                <a href="#" class="flag-link">
                                                    <img src="{{asset('assets/images/flag-5.png')}}" alt="Image">
                                                    Canada
                                                </a>
                                            </li>
                                            <li class="flag-item">
                                                <a href="#" class="flag-link">
                                                    <img src="{{asset('assets/images/flag-6.png')}}" alt="Image">
                                                    New Zealand
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="navigation ">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarFive" aria-controls="navbarFive" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button> <!-- navbar toggler -->
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarFive">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active"><a class="page-scroll" href="/">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="/about">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="/project">Project</a>
                                            {{--
                                            <ul class="sub-menu">
                                                <li><a href="our-project.html">Project</a></li>
                                                <li><a href="project-details.html">Project details</a></li>
                                                <li><a href="our-team.html">Team</a></li>
                                                <li><a href="our-gallery.html">Gallery</a></li>
                                            </ul>
                                            --}}
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="/services">Services</a>
                                        </li>
                                        {{--
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#">Shop +</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop 1</a></li>
                                                <li><a href="shop-2.html">Shop 2</a></li>
                                                <li><a href="shop-details.html">Shop Details</a></li>
                                                <li><a href="checkout.html">Check Out</a></li>
                                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            </ul> 
                                        </li>
                                        --}}
                                        <li class="nav-item">
                                            <a class="page-scroll" href="/blog">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#">Contact<button class="sub-nav-toggler"> <i class="fa fa-angle-down"></i> </button></a>
                                            <ul class="sub-menu">
                                                <li><a href="/contact"><i class="far fa-check-circle"></i>Cuntact Form</a></li>
                                                <li><a href="/front-page-feedback"><i class="far fa-trophy-alt"></i>Feedback Form</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="/farm">Farms</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="{{ route('register') }}">Register</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="navbar-btns">
                                    <ul>
                                        <li><a class="search-box" href="#"><i class="fal fa-search"></i></a></li>
                                        <li><a class="d-lg-inline d-md-inline d-sm-inline d-xs-inline " href="#myModal2" data-toggle="modal"><i class="fal fa-bars"></i></a></li>
                                    </ul>
                                </div>
                            </nav> <!-- navbar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>