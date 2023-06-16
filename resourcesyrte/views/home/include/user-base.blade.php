<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="AFONETE Template">
    <meta name="keywords" content="AFONETE, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Muhahe Affiliate || Earn money infinetely</title>
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/front/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/front/css/booststrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/font-awesome.min.css')}}">
    <link rel="icon" href="{{asset('assets/front/img/small-logo.png')}}">

</head>

<body>
    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu" style="font-size: 55px"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="{{asset('assets/front/img/flag.jpg')}}" alt="">
                <span>ENG <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Kiny</a></li>
                        <li><a href="#">French</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li><a href="" class="bttn">Home</a></li>
                <li><a href="" class="bttn">About Us</a></li>
                <li><a href="" class="bttn">Login</a></li>
                <li><a href="" class="bttn">Register</a></li>
                <li><a href="" class="bttn">Contact Us</a></li>
            </ul>
        </nav>

        <div id="mobile-menu-wrap"></div>
        <div class="footer-mobile container-fluid">

            <div class="top-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div><br><br><br><br>
            <ul class="top-widget">
                <li style="color: white"><i class="fa fa-phone"></i> +(250) 783524980</li>
                <li style="color: white"><i class="fa fa-envelope"></i>affiliate@muhahe.com</li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i>+(250) 783524980</li>
                            <li><i class="fa fa-envelope"></i>affiliate@muhahe.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>

                            <div class="language-option">
                                <img src="{{asset('assets/front/img/flag.jpg')}}" alt="">
                                <span>ENG <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">Kiny</a></li>
                                        <li><a href="#">French</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="/">
                                <!-- <img src="{{asset('assets/front/img/log2.png')}}" alt=""> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul id="btns">
                                    <li><a href="" class="bttn">Home</a></li>
                                    <li><a href="" class="bttn">About Us</a></li>
                                    <li><a href="" class="bttn">Login</a></li>
                                    <li><a href="" class="bttn">Register</a></li>
                                    <li><a href="" class="bttn">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{--
        <script>
            // Get the container element
            var btnContainer = document.getElementById("btns");

            // Get all buttons with class="btn" inside the container
            var btns = btnContainer.getElementsByClassName("btn");

            // Loop through the buttons and add the active class to the current/clicked button
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
        </script> --}}

    @yield('content')
</body>

</html>