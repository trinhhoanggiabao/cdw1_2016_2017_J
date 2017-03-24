<!DOCTYPE HTML>

<html>
    <head>
        <title>779</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
        if (!class_exists('lessc')) {
            include './libs/lessc.inc.php';
        }
        $less = new lessc;
        $less->compileFile('./less/779.less', './css/779.css')
        ?>

        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/779.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-41">
            <div class="footer">
                <!--footers-->
                <section id="footer">
                    <div class="container">
                        <div class="">
                            <div class="col-md-3">
                                <section id="text-3">
                                    <div class="">
                                        <h4>
                                            <span>Welcome to Neighborhood</span>
                                        </h4>
                                    </div> 
                                    <div class="">
                                        <br>
                                        <img class="size-full" alt="welcome" src="images/welcome.png" width="215" height="44">
                                        <br>
                                        <br>
                                        Neighborhood is a clean, responsive &amp; retina-ready eCommerce WordPress theme. It has everything you need to start selling today!
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                </section>
                            </div>

                            <div class="col-md-3">
                                <section id="menu-1" class="nav-menu">
                                    <div class="">
                                        <h4>
                                            <span>About Neighborhood</span>
                                        </h4>
                                    </div>
                                    <div class="col-menu-content">
                                        <ul class="menu">
                                            <li><a href="#">Our Story</a></li>
                                            <li><a href="#">Stores</a></li>
                                            <li><a href="#">Press</a></li>
                                            <li><a href="#">Events</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </section>
                            </div>

                            <div class="col-md-3">
                                <section id="menu-2" class="nav-menu">
                                    <div class="">
                                        <h4>
                                            <span>Online Shopping</span>
                                        </h4>
                                    </div>
                                    <div class="col-menu-content">
                                        <ul class="menu">
                                            <li><a href="#">F.A.Q.’s</a></li>
                                            <li><a href="#">Delivery & Returns</a></li>
                                            <li><a href="#">Ordering Tracking</a></li>
                                            <li><a href="#">Payment</a></li>
                                            <li><a href="#">Privacy</a></li>
                                        </ul>
                                    </div>
                                </section>
                            </div>

                            <div class="col-md-3">
                                <section id="social" class="widget">
                                    <div class="">
                                        <h4>
                                            <span>Follow Us</span>
                                        </h4>
                                    </div>
                                    <div class="">
                                        <ul class="social-icons">
                                            <li class="dribbble"><a href="#" target="_blank">Dribbble</a></li>
                                            <li class="facebook"><a href="#" target="_blank">Facebook</a></li>
                                            <li class="twitter"><a href="#" target="_blank">Twitter</a></li>
                                            <li class="vimeo"><a href="#" target="_blank">Vimeo</a></li>
                                            <li class="youtube"><a href="#" target="_blank">YouTube</a></li>
                                            <li class="tumblr"><a href="#" target="_blank">Tumblr</a></li>
                                        </ul>
                                        <hr>
                                        <p style="margin-bottom: 10px;">Sign up for our newsletter:</p>
                                        <div id="mc_embed_signup">
                                            <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" novalidate="">
                                                <input type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email address here" style="margin-bottom: 0;" required="">
                                                <div>
                                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" style="visibility:hidden;">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>

                <!--copyright-->
                <footer id="copyright" class="">
                    <div class="container">
                        <p>
                            ©2016 Neighborhood · Built with love by 
                            <a href="#">Swift Ideas</a> 
                            using 
                            <a href="#" target="_blank">WordPress</a> 
                            <a href="#">Premium WordPress Themes by Swift Ideas</a>
                        </p>
                        <div class="beam-me-up three columns offset-by-one">
                            <a href="#">
                                <i class="fa-arrow-up"></i>
                            </a>
                        </div>
                    </div>

                </footer>
            </div> 
        </div>
    </body>
</html>