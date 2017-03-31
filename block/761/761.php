<!DOCTYPE html>

<html>

    <head>
        <title>761</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/761.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/761.less', 'css/761.css');
        ?>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-761">
            <div class="sub-footer">
                <div class="container">
                    <div class="border">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="about">
                                    <h1>About</h1>
                                    <p>Comfort is a very important thing nowadays because it is a condition of satisfaction and calmness. It is clear that our way of life must be as comfortable as possible. Home electronics satisfy our wishes and make our life more pleasant. We must admit that our way of life depends on quality of different goods of popular brands. Many of our clients were surprised by the incredible assortment of products in our store. You know, we have many devoted customers all over the world, and this fact proves that we sell only quality commodities. Recipe of our success is a fair price and premium quality.</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="event">
                                    <h1>Events</h1>
                                    <p><a href="#"><span class="fa fa-truck"></span> Free shipping.</a> For all purchases starting from 3 items.</p>
                                    <p><a href="#"><span class="fa fa-refresh"></span> 100% quality</a> The best quality of all products.</p>
                                    <p><a href="#"><span class="fa fa-thumbs-o-up"></span> Customer program</a> A lot of bonuses for the loyal customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="container">
                    <div class="service">
                        <div class="row">
                            <div class="col-md-9">

                                <div class="col-md-3 col-sm-4">
                                    <div class="row">
                                        <ul>
                                            <li><h1>Information</h1></li>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Delivery Information</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-4">
                                    <div class="row">
                                        <ul>
                                            <li><h1>Customer Service</h1></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Returns</a></li>
                                            <li><a href="#">Site Map</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-4">
                                    <div class="row">
                                        <ul>
                                            <li><h1>Extras</h1></li>
                                            <li><a href="#">Brands</a></li>
                                            <li><a href="#">Gift Vouchers</a></li>
                                            <li><a href="#">Affiliates</a></li>
                                            <li><a href="#">Specials</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-4">
                                    <div class="row">
                                        <div class="line">
                                            <ul>
                                                <li><h1>My Account</h1></li>
                                                <li><a href="#">My Account</a></li>
                                                <li><a href="#">Order History</a></li>
                                                <li><a href="#">Wish List</a></li>
                                                <li><a href="#">Newsletter</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="row">
                                    <ul>
                                        <li><h1>Follow Us</h1></li>
                                        <li class="follow"><a href="#"><i class="fa fa-facebook"></i><span> Facebook</span></a></li>
                                        <li class="follow"><a href="#"><i class="fa fa-twitter"></i><span> Twitter</span></a></li>
                                        <li class="follow"><a href="#"><i class="fa fa-google-plus"></i><span> Google +</span></a></li>
                                        <li class="follow"><a href="#"><i class="fa fa-youtube"></i><span> YouTube</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="footer-bottom"><img src="images/footer-logo.png"> Powered By <a href="#">OpenCart</a> Electronics online store © 2016</p>
                </div>
            </div>
        </div>
    </body>
</html>