<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/731.less', 'css/731.css');
        ?>
        <link href="css/731.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="type-b-danhmuc2">
            <div class="container">
                <!--====phan menu==========--->
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">CATEGORIES</a></li><br>
                                <li><a href="#">Clothing</a></li><br>
                                <li><a href="#">Accessories</a></li><br>
                                <li><a href="#">Tops & T-Shirts</a></li><br>
                                <li><a href="#">Cardigans</a></li><br>
                                <li><a href="#">Jumpers</a></li><br>
                                <li><a href="#">Designer Wear</a></li><br>
                                <li><a href="#">jersey tops</a></li><br>
                                <li><a href="#">Blouses</a></li><br>
                                <li><a href="#">Swim Wear</a></li><br>
                                <li><a href="#">Skirts</a></li><br>
                                <li><a href="#">Coats & Jackets</a></li><br> 
                            </ul>
                        </div>
                    </div>
                </nav>
                <hr>
                <div class="clearfix"></div>
                <!--====phan shopby==========--->
                <div class="shopby">
                    <ul>
                        <label class="shobytext">Shop by</label>
                        <li><a href="#">category</a></li>
                        <li><a href="#">Bottomwear (17)</a></li>
                        <li><a href="#">Topwear (17)</a></li>
                        <li><a href="#">Clothing Style (17)</a></li>
                        <label class="color">Color</label>
                    </ul>
                    <!--====phan color==========--->
                    <div class="color-bg">
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><img src="images/black.png" alt=""/> (7)</li>
                                    <li><img src="images/brown.png" alt=""/> (3)</li>
                                    <li><img src="images/green.png" alt=""/> (2)</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><img src="images/blue.png" alt=""/> (3)</li>
                                    <li><img src="images/gray.png" alt=""/> (4)</li>
                                    <li><img src="images/orange.png" alt=""/> (2)</li>
                                </ul>
                            </div>
                        </div>

                        <ul>
                            <label class="manufa">Manufaturer</label>
                            <li>Airtel (4)</li>
                            <li>Apple (4)</li>
                            <li>Docomo</li>
                            <li>Idea</li>
                            <li>lenovo</li>
                            <li>Lorem</li>
                            <li>Samsung</li>
                            <li>Vodafone</li>
                        </ul> 
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--====phan price==========--->
                <div class="container">
                    <div class="price">
                        <ul>
                            <label>Price</label>
                            <li><a href="#">$300.00 - $399.99 (5)</a></li>
                            <li><a href="#">$400.00 - $499.99 (1)</a></li>
                            <li><a href="#">$500.00 - $599.99 (3)</a></li>
                            <li><a href="#">$600.00 - $699.99 (2)</a></li>
                            <li><a href="#">$700.00 - $799.99 (1)</a></li>
                            <li><a href="#"> $800.00 - $899.99 (4)</a></li>
                            <li><a href="#">$900.00 and above (1)</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="clearfix"></div>
                <!--====phan shop by brand==========--->
                <div class="container">
                    <div class="shopbybrand">
                        <ul>
                            <label>SHOP BY BRAND</label>
                            <li><a href="#">Airtel</a></li>
                            <li><a href="#">Apple</a></li>
                            <li><a href="#">Docomo</a></li>
                            <li><a href="#">idea</a></li>
                            <li><a href="#">Lenovo</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Sam sung</a></li>
                            <li><a href="#">Vodafone</a></li>
                            <li><a href="#">Gioonee</a></li>
                            <li><a href="#">HCL</a></li>
                            <li><a href="#">HTC</a></li>
                            <li><a href="#">Lava</a></li>
                            <li><a href="#">Navneet</a></li>
                            <li><a href="#">Nokia</a></li>
                            <li><a href="#">Tata</a></li>
                            <li><a href="#">Reliance</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="clearfix"></div>
                <!--========phanspecial product=========-->
                <div class="container">
                    <div class="produt-menu">
                        <label>SPECIAL PRODUCTS</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="">
                                    <img src="images/1_4.jpg" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <p>Arcu Vitae I.</p>
                                    <span class="moneymenu">$860</span> <span class="dolar800">$800.00</span>
                                    <div class="addcartmenu">
                                        <a   href="#">Add To Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="imagemenu">
                                    <img src="images/7_3_4.jpg" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="khoang cach">
                                    <p>Ifashion Ips..</p>
                                    <span class="moneymenu">$970</span> <span class="dolar800">$860.00</span>
                                    <div class="addcartmenu">
                                        <a   href="#">Add To Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="imagemenu">
                                    <img src="images/17_1_5_1.jpg" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="khoang cach">
                                    <p>Established.</p>
                                    <span class="moneymenu">$400</span> <span class="dolar800">$325.00</span>
                                    <div class="addcartmenu">
                                        <a   href="#">Add To Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="seeall">See All</div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>
                <!--========phan recently=============-->
            </div>
            <div class="container">
                <div class="recently">
                    <h4>RECENTLY VIEWED</h4>
                    <h4>PRODUCTS</h4>
                    <a href="#">Arcu Vitate Imperdiet Simply </a>
                    <div class="clearfix"></div>
                    <hr>
                </div>
            </div>
            <div class="container">
                <div class="img-left">
                    <img src="images/left-banner.jpg" alt=""/>
                </div>
            </div>
        </div>
    </body>
</html>