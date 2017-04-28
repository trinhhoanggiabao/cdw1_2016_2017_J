<!DOCTYPE HTML>
<html>

    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/740.less', 'css/740.css');
        ?>
        <link href="css/740.css" rel="stylesheet" type="text/css" />
        <script>
            $(document).ready(function () {
                $(".b1").click(function () {
                   
                    $(".collapse").slideToggle();
                    $(".a1").slideToggle();
                    $(".a1").css("margin-top","50px");
                });
            });
        </script>
    </head>

    <body>
        <div class="type-740">
            <nav class="navbar navbar-default megamenu">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <span class="navbar-brand">COLLECTIONS</span>
                        <h2>Cook<i class="fa fa-chevron-down b1" aria-hidden="true"></i></h2>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse ">
                        <ul class="nav navbar-nav a1">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">HOME <span class="caret "></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Bakeware</a></li>
                                    <li><a href="#">Cookware sets</a></li>
                                    <li><a href="#">Cooking Utensils</a></li>
                                    <li><a href="#">Cooks' Tools</a></li>
                                    <li><a href="#">Cookware</a></li>
                                    <li><a href="#">Cutlery</a></li>
                                    <li><a href="#">Dinnerware</a></li>
                                    <li><a href="#">Electrics</a></li>
                                    <li><a href="#">Gadgets</a></li>

                                </ul>
                            </li>
                            <li class="dropdown megamenu-fw">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">PRODUCTS <span class="caret"></span></a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <li>

                                        <div class="column_item">
                                            <h3>Featured Products</h3>
                                            <ul>

                                                <li><a href="#" title="">Bakeware</a></li>

                                                <li><a href="#" title="">Cookware sets</a></li>

                                                <li><a href="#" title="">Cooking Utensils</a></li>

                                                <li><a href="#" title="">Cooks' Tools</a></li>

                                                <li><a href="#" title="">Cookware</a></li>

                                                <li><a href="#" title="">Cutlery</a></li>

                                                <li><a href="#" title="">Dinnerware</a></li>

                                                <li><a href="#" title="">Electrics</a></li>

                                                <li><a href="#" title="">Gadgets</a></li>

                                            </ul>

                                        </div>
                                        <div class="column_item">
                                            <h3>Latest Tutorials</h3>
                                            <ul>

                                                <li><a href="#" title="">Bakeware</a></li>

                                                <li><a href="#" title="">Cookware sets</a></li>

                                                <li><a href="#" title="">Cooking Utensils</a></li>

                                                <li><a href="#" title="">Cooks' Tools</a></li>

                                                <li><a href="#" title="">Cookware</a></li>

                                                <li><a href="#" title="">Cutlery</a></li>

                                                <li><a href="#" title="">Dinnerware</a></li>

                                                <li><a href="#" title="">Electrics</a></li>

                                                <li><a href="#" title="">Gadgets</a></li>

                                            </ul>
                                        </div>
                                        <div class="column_item">
                                            <h3>Google Map</h3>
                                            <ul>

                                                <li><a href="#" title="">Bakeware</a></li>

                                                <li><a href="#" title="">Cookware sets</a></li>

                                                <li><a href="#" title="">Cooking Utensils</a></li>

                                                <li><a href="#" title="">Cooks' Tools</a></li>

                                                <li><a href="#" title="">Cookware</a></li>

                                                <li><a href="#" title="">Cutlery</a></li>

                                                <li><a href="#" title="">Dinnerware</a></li>

                                                <li><a href="#" title="">Electrics</a></li>

                                                <li><a href="#" title="">Gadgets</a></li>

                                            </ul>
                                        </div>
                                        <div class="column_item">
                                            <h3>Google Map</h3>
                                            <ul>

                                                <li><a href="#" title="">Bakeware</a></li>

                                                <li><a href="#" title="">Cookware sets</a></li>

                                                <li><a href="#" title="">Cooking Utensils</a></li>

                                                <li><a href="#" title="">Cooks' Tools</a></li>

                                                <li><a href="#" title="">Cookware</a></li>

                                                <li><a href="#" title="">Cutlery</a></li>

                                                <li><a href="#" title="">Dinnerware</a></li>

                                                <li><a href="#" title="">Electrics</a></li>

                                                <li><a href="#" title="">Gadgets</a></li>

                                            </ul>
                                        </div>

                                    </li>
                                </ul>
                            </li>
                            </li>
                            <li class="dropdown megamenu-fw">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">BLOG <span class="caret "></span></a>
                                <ul class="dropdown-menu megamenu-content dropdown-menu-mega" role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="column_item">

                                                <ul>

                                                    <li>
                                                        <a href="#" title=""><img src="images/blog1_1024x1024.jpg" alt="" /> </a>
                                                    </li>

                                                    <li><a href="#" title="">The secret of success lies ...</a></li>

                                                    <li class="chu">We specialize in all kinds of kitchen supplies including the goods for food servicing and restaurant business. Every business is...</a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="column_item">

                                                <ul>

                                                    <li>
                                                        <a href="#" title=""><img src="images/blog1_1024x1024.jpg" alt="" /> </a>
                                                    </li>

                                                    <li><a href="#" title="">The secret of success lies ...</a></li>

                                                    <li class="chu">We specialize in all kinds of kitchen supplies including the goods for food servicing and restaurant business. Every business is...</a>
                                                    </li>

                                                </ul>

                                            </div>
                                            <div class="column_item">

                                                <ul>

                                                    <li>
                                                        <a href="#" title=""><img src="images/blog1_1024x1024.jpg" alt="" /> </a>
                                                    </li>

                                                    <li><a href="#" title="">The secret of success lies ...</a></li>

                                                    <li class="chu">We specialize in all kinds of kitchen supplies including the goods for food servicing and restaurant business. Every business is...</a>
                                                    </li>

                                                </ul>

                                            </div>
                                            <div class="column_item">

                                                <ul>

                                                    <li>
                                                        <a href="#" title=""><img src="images/blog1_1024x1024.jpg" alt="" /> </a>
                                                    </li>

                                                    <li><a href="#" title="">The secret of success lies ...</a></li>

                                                    <li class="chu">We specialize in all kinds of kitchen supplies including the goods for food servicing and restaurant business. Every business is...</a>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown megamenu-fw">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SALE <span class="caret"></span></a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <div class="level_2_products">
                                        <div class="column_item">
                                            <div class="product_img">
                                                <a href="/products/batter-dispenser">
                                                    <img src="//cdn.shopify.com/s/files/1/1398/6279/products/batter_dispenser_1_large.png?v=1469532771" alt="Batter Dispenser">
                                                </a>
                                            </div>

                                            <span class="money" data-currency-usd="$65.00" data-currency-eur="&amp;euro;59.59" data-currency="EUR">€59.59</span>

                                            <div class="product_name">
                                                <a href="/products/batter-dispenser">Batter Dispenser</a>
                                            </div>

                                            <div class="product_desc">
                                                Kitchen Supplies store We specialize in all ki...
                                            </div>

                                            <div class="product_links">
                                                <form method="post" action="/cart/add">
                                                    <button class="btn" disabled="disabled" title="Unavailable"><i class="fa fa-ban" aria-hidden="true"></i>Unavailable</button>
                                                </form>

                                            </div>

                                        </div>
                                        <div class="column_item">
                                            <div class="product_img">
                                                <a href="/products/batter-dispenser">
                                                    <img src="//cdn.shopify.com/s/files/1/1398/6279/products/batter_dispenser_1_large.png?v=1469532771" alt="Batter Dispenser">
                                                </a>
                                            </div>
                                            <span class="money" data-currency-usd="$89.00" data-currency-eur="&amp;euro;81.59" data-currency="EUR">€81.59</span>

                                            <span class="money compare-at-price" data-currency-usd="$92.00" data-currency-eur="&amp;euro;84.34" data-currency="EUR">€84.34</span>


                                            <div class="product_name">
                                                <a href="/products/batter-dispenser">Batter Dispenser</a>
                                            </div>

                                            <div class="product_desc">
                                                Kitchen Supplies store We specialize in all ki...
                                            </div>

                                            <div class="product_links">
                                                <form method="post" action="/cart/add">

                                                    <a class="btn" href="/products/boston-shaker" title="Add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add to cart</a>

                                                </form>
                                            </div>
                                        </div>

                                        <div class="column_item">
                                            <div class="product_img">
                                                <a href="/products/batter-dispenser">
                                                    <img src="//cdn.shopify.com/s/files/1/1398/6279/products/batter_dispenser_1_large.png?v=1469532771" alt="Batter Dispenser">
                                                </a>
                                            </div>


                                            <span class="money" data-currency-usd="$65.00" data-currency-eur="&amp;euro;59.59" data-currency="EUR">€59.59</span>

                                            <div class="product_name">
                                                <a href="/products/batter-dispenser">Batter Dispenser</a>
                                            </div>

                                            <div class="product_desc">
                                                Kitchen Supplies store We specialize in all ki...
                                            </div>

                                            <div class="product_links">
                                                <form method="post" action="/cart/add">
                                                    <a class="btn" href="/products/boston-shaker" title="Add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i>Add to cart</a>
                                                </form>
                                            </div>

                                        </div>
                                        <div class="column_item">
                                            <div class="product_img">
                                                <a href="/products/batter-dispenser">
                                                    <img src="//cdn.shopify.com/s/files/1/1398/6279/products/batter_dispenser_1_large.png?v=1469532771" alt="Batter Dispenser">
                                                </a>
                                            </div>
                                            <span class="money" data-currency-usd="$89.00" data-currency-eur="&amp;euro;81.59" data-currency="EUR">€81.59</span>
                                            <span class="money compare-at-price" data-currency-usd="$92.00" data-currency-eur="&amp;euro;84.34" data-currency="EUR">€84.34</span>

                                            <div class="product_name">
                                                <a href="/products/batter-dispenser">Batter Dispenser</a>
                                            </div>
                                            <div class="product_desc">
                                                Kitchen Supplies store We specialize in all ki...
                                            </div>
                                            <div class="product_links">
                                                <form method="post" action="/cart/add">
                                                    <a class="btn" href="/products/boston-shaker" title="Add to cart">
                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        Add to cart
                                                    </a>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#" data-toggle="dropdown" aria-expanded="false">ABOUT US </a> </li>
                            <li><a href="#" data-toggle="dropdown" aria-expanded="false">CONTACT US </a>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="fa fa-shopping-cart "></span>CART 0 item(s)</a></li>

                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>
    </body>

</html>