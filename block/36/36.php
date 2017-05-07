<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!--end slideshow-->
        <!--croll-->
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <script src="js/wow.min.js" type="text/javascript"></script>

        <script>
            new WOW().init();
        </script>
        <!-- ..end croll -->

        <!-- Owl slide -->
        <link rel="stylesheet" href="jsOWL/owl.carousel.min.css">
        <link rel="stylesheet" href="jsOWL/owl.theme.default.min.css">
        <script src="jsOWL/jquery.min.js"></script>
        <script src="jsOWL/owl.carousel.js"></script>
        <!-- end owl -->
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/36.less', 'css/36.css');
        ?>
        <link href="css/36.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="type-36">
            <div class="header">
                <div class="container">
                    <div class="header_contai">
                        <p>Wrlcover to virut over writer <a href="#"> Nark(riday 50% al) erlire size + Shore</a></p>
                    </div>
                    <div class="header_contai2">
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>Fod & Store</a>
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>My Account</a>
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>Frewcrocring Mcrrecrt</a>
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>Emg <i class="fa fa-chevron-down b1" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="container">
                    <div class="title1">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        <h2>CATECORIES</h2>
                    </div>
                    <div class="title2">
                        <h1><a href="#">a</a>neue<a href="#">.</a></h1>
                    </div>
                    <div class="title3">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="menu">
                <div class="container">
                    <ul>
                        <li><a class="home" href="#">HOME</a></li>
                        <li><a href="#">SHOP</a></li>
                        <li><a href="#">WOMEN'S</a></li>
                        <li><a href="#">MEN'S</a></li>
                        <li><a href="#">PACES</a></li>
                        <li><a href="#">FEATURES</a></li>
                        <li><a href="#">BLOG</a></li>
                    </ul>
                </div>
            </div>
            <div class="project">
                <section id="demos">
                    <div class="row">
                        <div class="large-12 columns">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="images/img_fjords_wide.jpg" alt=""/>
                                </div>
                                <div class="item">
                                    <img src="images/img_mountains_wide.jpg" alt=""/>
                                </div>
                                <div class="item">
                                    <img src="images/img_nature_wide.jpg" alt=""/>
                                </div>

                            </div>


                            <script>
            $(document).ready(function () {
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    margin: 10,
                    nav: true,
                    loop: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                })
            })
                            </script>
                        </div>
                    </div>
                </section>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 d1">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <h2>MEMBER SAFE SHOPPING</h2>
                            <P>Sale Shopping Oulkds</P>
                        </div>
                        <div class="col-md-4 d1">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <h2>MEMBER SAFE SHOPPING</h2>
                            <P>Sale Shopping Oulkds</P>
                        </div>
                        <div class="col-md-4 d1">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <h2>MEMBER SAFE SHOPPING</h2>
                            <P>Sale Shopping Oulkds</P>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact">
                <div class="container">
                    <div class="left"></div><i class="fa fa-square-o" aria-hidden="true"></i><h2>DEAL OF THE DAY</h2><i class="fa fa-square-o o2" aria-hidden="true"></i><div class="right"></div>
                </div>
            </div>
            <div class="content2">
                <div class="container">
                    <div class="row">
                        <div class="large-12 columns">
                            <div class="owl-carousel owl-theme" id="abc">
                                <div class="item">
                                    <img src="images/img_fjords_wide.jpg" alt=""/>
                                    <h2>klvfkdhkj</h2>
                                    <span class="s1">$21.21<span>$11.11</span></span>
                                </div>
                                <div class="item">
                                    <img src="images/img_fjords_wide.jpg" alt=""/>
                                    <h2>klvfkdhkj</h2>
                                    <span class="s1">$21.21<span>$11.11</span></span>
                                </div>
                                <div class="item">
                                    <img src="images/img_fjords_wide.jpg" alt=""/>
                                    <h2>klvfkdhkj</h2>
                                    <span class="s1">$21.21<span>$11.11</span></span>
                                </div>
                                <div class="item">
                                    <img src="images/img_fjords_wide.jpg" alt=""/>
                                    <h2>klvfkdhkj</h2>
                                    <span class="s1">$21.21<span>$11.11</span></span>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function () {
                                    var owl = $('#abc');
                                    owl.owlCarousel({
                                        margin: 10,
                                        nav: true,
                                        loop: true,
                                        responsive: {
                                            0: {
                                                items: 1
                                            },
                                            600: {
                                                items: 4
                                            },
                                            1000: {
                                                items: 4
                                            }
                                        }
                                    })
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/img_fjords_wide.jpg" alt=""/>
                            <div class="s6">
                                <p>Enjoy<span class="s1">30% 40%</span></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/img_fjords_wide.jpg" alt=""/>
                            <div class="s6">
                                <p>Enjoy<span class="s1">30% 40%</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>