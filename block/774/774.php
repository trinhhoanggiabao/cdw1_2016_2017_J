<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/774.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include './libs/lessc.inc.php';
        }
        $less = new lessc;
        $less->compileFile('./less/774.less', './css/774.css')
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <!--DETAILS-->
            <div class="type-774">
                    <div id="first-slider">
                        <div id="carousel-example-generic" class="carousel slide carousel-fade">

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div style="background-color: rgb(247, 247, 247); max-height: 527px; height: 527px;">
                                <div class="carousel-inner" role="listbox" style="display: block; width: 100%; height: 100%;">
                                    <!-- Item 1 -->
                                    <div class="item active slide1">
                                        <div class="row">
                                            <div class="container">
                                                <li>
                                                    <div class="text-center" data-animation="animated bounceInDown" style="font-size: 48px;">
                                                        <h2>
                                                            Neighborhood V3
                                                            <br>
                                                            is now available!
                                                        </h2>
                                                    </div>
                                                    <br>
                                                    <div class="button text-center" data-animation="animated bounceInUp" style="animation-delay: 0.5s">
                                                        <h4>
                                                            <a href="#" class="sf-button white medium">Tell me more</a> 
                                                        </h4>
                                                    </div>
                                                </li>
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- Item 2 -->
                                    <div class="item slide2" style="background-color: rgb(237, 237, 237); background-repeat: no-repeat; background-image: url(images/transparent.png); background-size: cover; background-size: cover; background-position: center top; opacity: 1; visibility: inherit;">
                                        <div class="row">
                                            <div class="container">
                                                <li style="list-style: none; transform: translate3d(100px, 0px, 0px);">
                                                    <div data-animation="animated fadeInUp" style="font-size: 13px; animation-delay: 1;">
                                                        Exclusive to Neighborhood for Spring / Summer 2013
                                                    </div>
                                                    <br>
                                                    <div data-animation="animated fadeInUp" style="animation-delay: 1.5">
                                                        <img src="images/nike_roshe_slide_textBig.png" data-animation="animated fadeInUp">
                                                    </div>
                                                    <br>
                                                    <div data-animation="animated fadeInUp" style="font-size: 13px; animation-delay: 1.5s;">
                                                        <h4>
                                                            <a href="#" class="sf-button square black medium">CLICK TO SHOP</a>
                                                        </h4>
                                                    </div>
                                                </li>
                                                <div style="visibility: visible; opacity: 1; transform: translate3d(100px, 0px, 0px);">
                                                    <img data-animation="animated fadeInUp" src="images/nike_roshe_show_60.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="item slide3">
                                        <div class="row">
                                            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="off" style="width: 100%; height: 100%;">
                                                <div class="col-md-6">

                                                    <div data-animation="animated fadeIn" style="animation-delay: 0s; z-index: 7; left: 387.5px; top: 349px; visibility: visible; opacity: 0; transform: translate3d(420px, 320px, 0px);">
                                                        <img src="images/nhood-shop-mousclick50.png">
                                                    </div>

                                                    <div data-animation="animated fadeIn" style="animation-delay: 0.5s; animation-timing-function: 0.5s; z-index: 8; left: 387.5px; top: 349px; visibility: visible; opacity: 0; transform: translate3d(420px, 299px, 0px);">
                                                        <img src="images/nhood-shop-mousclick100.png">
                                                    </div>

                                                    <div data-animation="animated fadeOut" style="animation-delay: 1s;animation-timing-function: 0.4s; z-index: 2; left: 170.5px; top: 71px; visibility: visible; opacity: 0; transform: translate3d(200px, 20px, 0px);">
                                                        <img src="images/nhood-shop-index1.png">
                                                    </div>

                                                    <div data-animation="animated fadeIn" style="animation-delay: 1.5s; z-index: 9; left: 521.5px; top: 229px; visibility: visible; opacity: 0; transform: translate3d(550px, -279px, 0px);">
                                                        <img src="images/nhood-shop-mousclick50.png">
                                                    </div>

                                                    <div data-animation="animated fadeIn" style="animation-delay: 1.6s; z-index: 10; left: 521.5px; top: 229px; visibility: visible; opacity: 0; transform: translate3d(550px, -300px, 0px);">
                                                        <img src="images/nhood-shop-mousclick100.png">
                                                    </div>

                                                    <div data-animation="animated fadeIn" style="animation-delay: 1.5s; animation-timing-function: 0.4s; z-index: 3; left: 170.5px; top: 71px; visibility: visible; opacity: 0; transform: translate3d(200px, -480px, 0px);">
                                                        <img src="images/nhood-shop-product2.png">
                                                    </div>

                                                    <div data-animation="animated fadeIn" style="animation-delay: 2.5s; z-index: 11; left: 645.5px; top: 124px; visibility: visible; opacity: 0; transform: translate3d(680px, -909px, 0px);">
                                                        <img src="images/nhood-shop-mousclick50.png">
                                                    </div>

                                                    <div data-animation="animated fadeIn" style="animation-delay: 2.7s; z-index: 12; left: 558.5px; top: 332px; visibility: visible; opacity: 0; transform: translate3d(680px, -930px, 0px);">
                                                        <img src="images/nhood-shop-mousclick100.png">
                                                    </div>

                                                    <div data-animation="animated fadeIn" style="animation-delay: 2.5s; animation-timing-function: 0.5s; z-index: 4; left: 170.5px; top: 71px; visibility: visible; opacity: 0; transform: translate3d(200px, -980px, 0px);">
                                                        <img src="images/nhood-shop-product-update1.png"">
                                                    </div>

                                                    <div data-animation="animated fadeIn" style="animation-delay: 3.5s; z-index: 13; left: 645.5px; top: 124px; visibility: visible; opacity: 0; transform: translate3d(600px, -1179px, 0px);">
                                                        <img src="images/nhood-shop-mousclick50.png">
                                                    </div>

                                                    <div data-animation="animated fadeIn" style="animation-delay: 3.7s; z-index: 14; left: 558.5px; top: 332px; visibility: visible; opacity: 0; transform: translate3d(600px, -1200px, 0px);">
                                                        <img src="images/nhood-shop-mousclick100.png">
                                                    </div>


                                                    <div data-animation="animated fadeIn" style="animation-delay: 3.5s; animation-timing-function: 0.5s; z-index: 5; left: 170.5px; top: 71px; visibility: visible; opacity: 0; transform: translate3d(200px, -1480px, 0px);">
                                                        <img src="images/nhood-shop-cart-dropdown1.png">
                                                    </div>

                                                    <div data-animation="animated fadeIn" style="animation-delay: 4.5s; z-index: 6; left: 170.5px; top: 71px; visibility: visible; opacity: 0; transform: translate3d(200px, -1960px, 0px);">
                                                        <img src="images/nhood-shop-cart1.png">
                                                    </div>

                                                    <div data-animation="animated fadeIn" style="animation-delay: 4.7s; z-index: 15; left: 212.5px; top: 366px; visibility: visible; opacity: 0; transform: translate3d(255px, -2120px, 0px);">
                                                        <img src="images/nhood-cart-highlight.png">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div style="z-index: 16; white-space: nowrap; min-height: 0px; min-width: 0px; line-height: 40px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 30px; left: 874.5px; top: 161px; visibility: visible; opacity: 1; transform: translate3d(100px, 140px, 0px);">
                                                        The ultimate multipurpose
                                                        <br>
                                                        eCommerce WordPress theme
                                                    </div>

                                                    <div style="z-index: 17; white-space: nowrap; min-height: 0px; min-width: 0px; line-height: 24px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 18px; left: 874.5px; top: 260px; visibility: visible; opacity: 1; transform: translate3d(100px, 160px, 0px);">
                                                        Built for WooCommerce 2.0+, it has
                                                        <br>
                                                        everything you need to start selling today!
                                                    </div>

                                                    <div style="z-index: 18; left: 874.5px; top: 341px; transform: translate3d(100px, 180px, 0px);">
                                                        <img src="images/woocommerce-logo.png">
                                                    </div>

                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                    <!-- Item 4 -->
                                    <div class="item slide4" style="width: 100%; height: 100%;">
                                        <div class="row">
                                            <li>
                                                <div data-animation="animated bounceInUp" class="text-center" style="z-index: 2; left: 430.5px; top: 114px; visibility: visible; opacity: 1; transform: translate3d(-180px, 120px, 0px);"">
                                                    <img src="images/nh_rev_sale_text1.png">
                                                </div>

                                                <div data-animation="animated bounceInUp" class="text-center" style="animation-delay: 1s; z-index: 3; left: 972.5px; top: 391px; visibility: visible; opacity: 1; transform: translate3d(0px, 120px, 0px);">
                                                    <img src="images/SALE_static1.png">
                                                </div>

                                                <div data-animation="animated bounceInUp" class="text-center" style="animation-delay: 2s; z-index: 3; left: 972.5px; top: 391px; visibility: visible; opacity: 1; transform: translate3d(270px, 120px, 0px);">
                                                    <img src="images/nh_rev_sale_text2b.png">
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                    <!-- End Item 4 -->
                                    <!-- Item 5 -->
                                    <div class="item slide5" style="width: 100%; height: 100%;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <li class="text-center" style="list-style: none;">
                                                    <div data-animation="animated bounceInUp" style="font-size: 48px; transform: translate3d(60px, 100px, 0px);">
                                                        Clean, Retina-ready
                                                        <br>
                                                        & incredibly responsive
                                                    </div>

                                                    <div data-animation="animated bounceInUp" style="font-size: 18px;transform: translate3d(60px, 100px, 0px);">
                                                        Built on the Twitter Bootstrap 12-column responsive grid,
                                                        <br>
                                                        so now you can sell your products anytime, anyplace, on any device.
                                                    </div>

                                                    <div class="button text-center" data-animation="animated bounceInUp" style="animation-delay: 0.5s; font-size: 18px;transform: translate3d(60px, 120px, 0px);">
                                                        <h4>
                                                            <a href="#" class="sf-button black medium">Tell me more</a> 
                                                        </h4>
                                                    </div>
                                                </li>
                                            </div>

                                            <div class="col-md-6">
                                                <div data-animation="animated bounceInUp" style="z-index: 5; left: 798.5px; top: 75px; visibility: visible; opacity: 1; transform: translate3d(0px, 70px, -100px);">
                                                    <img src="images/nhood-respsonsive-ipad1.png">
                                                </div>

                                                <div data-animation="animated bounceInUp" style="z-index: 5; left: 798.5px; top: 75px; visibility: visible; opacity: 1; transform: translate3d(340px, -205px, 100px);">
                                                    <img src="images/nhood-respsonsive-iphone1.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item 5 -->

                                </div>
                            </div>
                            <!-- End Wrapper for slides-->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                <script type="text/javascript">
                    (function ($) {

                        //Function to animate slider captions 
                        function doAnimations(elems) {
                            //Cache the animationend event in a variable
                            var animEndEv = 'webkitAnimationEnd animationend';

                            elems.each(function () {
                                var $this = $(this),
                                        $animationType = $this.data('animation');
                                $this.addClass($animationType).one(animEndEv, function () {
                                    $this.removeClass($animationType);
                                });
                            });
                        }

                        //Variables on page load 
                        var $myCarousel = $('#carousel-example-generic'),
                                $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

                        //Initialize carousel 
                        $myCarousel.carousel();

                        //Animate captions in first slide on page load 
                        doAnimations($firstAnimatingElems);

                        //Pause carousel  
                        $myCarousel.carousel('pause');


                        //Other slides to be animated on carousel slide event 
                        $myCarousel.on('slide.bs.carousel', function (e) {
                            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                            doAnimations($animatingElems);
                        });
                        $('#carousel-example-generic').carousel({
                            interval: 3000,
                            pause: "false"
                        });

                    })(jQuery);

                </script>
            </div> 
    </body>
</html>