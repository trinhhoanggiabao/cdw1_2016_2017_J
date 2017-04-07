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
            <div class="first-slider">
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
                    <div class="carousel-inner" role="listbox">
                        <!-- Item 1 -->
                        <div class="item active slide1">
                            <div class="row">
                                <div class="container">
                                    <li class="img1">
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
                        <div class="item slide2">
                            <div class="row">
                                <div class="container img-slide2">
                                    <li>
                                        <div data-animation="animated fadeInUp">
                                            Exclusive to Neighborhood for Spring / Summer 2013
                                        </div>
                                        <br>
                                        <div data-animation="animated fadeInUp">
                                            <img src="images/nike_roshe_slide_textBig.png" data-animation="animated fadeInUp">
                                        </div>
                                        <br>
                                        <div data-animation="animated fadeInUp">
                                            <h4>
                                                <a href="#" class="sf-button square black medium">CLICK TO SHOP</a>
                                            </h4>
                                        </div>
                                    </li>

                                    <img data-animation="animated fadeInUp" src="images/nike_roshe_show_60.jpg">

                                </div>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="item slide3">
                            <div class="row">
                                <li class="slide3-img" data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                                    <div class="col-md-6">
                                        <div data-animation="animated fadeOut">
                                            <img src="images/nhood-shop-index1.png">
                                        </div>

                                        <div data-animation="animated fadeIn">
                                            <img src="images/nhood-shop-product2.png">
                                        </div>

                                        <div data-animation="animated fadeIn">
                                            <img src="images/nhood-shop-product-update1.png">
                                        </div>

                                        <div data-animation="animated fadeIn">
                                            <img src="images/nhood-shop-mousclick50.png">
                                        </div>

                                        <div data-animation="animated fadeIn">
                                            <img src="images/nhood-shop-mousclick100.png">
                                        </div>

                                        <div data-animation="animated fadeIn">
                                            <img src="images/nhood-shop-cart-dropdown1.png">
                                        </div>

                                        <div data-animation="animated fadeIn">
                                            <img src="images/nhood-shop-cart1.png">
                                        </div>

                                        <div data-animation="animated fadeIn">
                                            <img src="images/nhood-cart-highlight.png">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="title">
                                            The ultimate multipurpose
                                            <br>
                                            eCommerce WordPress theme
                                        </div>

                                        <div class="title2">
                                            Built for WooCommerce 2.0+, it has
                                            <br>
                                            everything you need to start selling today!
                                        </div>

                                        <div class="logo">
                                            <img src="images/woocommerce-logo.png">
                                        </div>

                                    </div>
                                </li>
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="item slide4">
                            <div class="row">
                                <li>
                                    <div data-animation="animated bounceInUp" class="text-center">
                                        <img src="images/nh_rev_sale_text1.png">
                                    </div>

                                    <div data-animation="animated bounceInUp" class="text-center">
                                        <img src="images/SALE_static1.png">
                                    </div>

                                    <div data-animation="animated bounceInUp" class="text-center1">
                                        <img src="images/nh_rev_sale_text2b.png">
                                    </div>
                                </li>
                            </div>
                        </div>
                        <!-- End Item 4 -->
                        <!-- Item 5 -->
                        <div class="item slide5">
                            <div class="row">
                                <div class="col-md-6">
                                    <li class="text-center">
                                        <div class="title-clean" data-animation="animated bounceInUp">
                                            Clean, Retina-ready
                                            <br>
                                            & incredibly responsive
                                        </div>

                                        <div class="title-built" data-animation="animated bounceInUp">
                                            Built on the Twitter Bootstrap 12-column responsive grid,
                                            <br>
                                            so now you can sell your products anytime, anyplace, on any device.
                                        </div>

                                        <div class="button text-center" data-animation="animated bounceInUp">
                                            <h4>
                                                <a href="#" class="sf-button black medium">Tell me more</a> 
                                            </h4>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-md-6">    
                                    <div class="ipad" data-animation="animated bounceInUp">
                                        <img src="images/nhood-respsonsive-ipad1.png">
                                    </div>

                                    <div class="iphone" data-animation="animated bounceInUp">
                                        <img src="images/nhood-respsonsive-iphone1.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item 5 -->

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