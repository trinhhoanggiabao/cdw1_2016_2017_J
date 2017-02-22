<!DOCTYPE html>

<html>
<head>
    <title>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/702.less', 'css/702.css');
    ?>
    <link href="css/702.css" rel="stylesheet" type="text/css"/>
    <script language="JavaScript" type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/script-dropdown.js"></script>

</head>

<body>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="content">
                    <h4 class="footer-title">
                        INFORMATION
                        <span class="fa fa-angle-down"></span>
                    </h4>
                    <ul class="dropdown-content">
                        <li>
                            <a href="#" title="Specials">Specials</a>
                        </li>
                        <li>
                            <a href="#" title="New products">New products</a>
                        </li>
                        <li>
                            <a href="#" title="Top sellers">Top sellers</a>
                        </li>
                        <li>
                            <a href="#" title="Our stores">Our stores</a>
                        </li>
                        <li>
                            <a href="#" title="Contact us">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="content">
                    <h4 class="footer-title">
                        USEFUL LINKS
                        <span class="fa fa-angle-down"></span>
                    </h4>
                    <ul class="dropdown-content">
                        <li>
                            <a href="#" title="Specials">About Us</a>
                        </li>
                        <li>
                            <a href="#" title="Specials">Delivery</a>
                        </li>
                        <li>
                            <a href="#" title="Specials">Legal Notice</a>
                        </li>
                        <li>
                            <a href="#" title="Specials">Secure Payment</a>
                        </li>
                        <li>
                            <a href="#" title="Specials">Terms & conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="content">
                    <h4 class="footer-title">
                        LATEST TWEETS
                        <span class="fa fa-angle-down"></span>
                    </h4>
                    <ul id="tweet" class="dropdown-content">
                        <li>
                        <span>
                            RT
                            <span>@</span>
                            <br>
                            <a href="#">wylsacom</a>
                            <br>
                             Презентация iPhone 7 вместе с Wylsacom + розыгрыш iPhone 7!
                            <br>
                            <a href="#">youtu.be/Z4Hs_j-CHCA</a>
                            <br>
                            Отличная презентация,<br>
                             отличные призы.
                            #Wylsacom7
                        </span>
                            <span class="fa fa-twitter icon"></span>
                        <span class="tweet-time">
                            <a href="#">about 76 days ago</a>
                        </span>
                        </li>
                        <li>
                        <span>
                            Find a lot of helpful information for Alysum theme. <br>Documentation <br>
                            <a href="#">alysum.promokit.eu/documentation</a>
                            <br> <br>
                            <a href="#">docs.promokit.eu/doku.php/alysum
                            </a> <br>
                            <span>@</span><br>
                            <a href="#">PromokitInfo
                            </a>
                        </span>
                            <span class="fa fa-twitter icon"></span>
                        <span class="tweet-time">
                            <a href="#">about 124 days ago</a>
                        </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="content">
                    <h4 class="footer-title">
                        FACEBOOK
                        <span class="fa fa-angle-down"></span>
                    </h4>
                    <div class="dropdown-content">
                        <div class="fb-fans">
                            3267 people like
                            <a href="#" target="_blank">Promokit Co.</a>
                        </div>
                        <div class="fb-followers">
                            <div class="row">
                                <div class="col-md-4 item">
                                    <a href="#">
                                        <img src="images/mem_1.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="#">
                                        <img src="images/mem_2.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="#">
                                        <img src="images/mem_3.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="#">
                                        <img src="images/mem_1.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="#">
                                        <img src="images/mem_2.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="#">
                                        <img src="images/mem_3.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-text">© 2016 Powered by Prestashop™. All Rights Reserved.</div>
            <div id="payment-icons">
                <ul>
                    <li><img src="images/discover.png" alt=""></li>
                    <li><img src="images/maestro.png" alt=""></li>
                    <li><img src="images/paypal.png" alt=""></li>
                    <li><img src="images/mastercard.png" alt=""></li>
                    <li><img src="images/am_exp.png" alt=""></li>
                    <li><img src="images/visa.png" alt=""></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>

</html>