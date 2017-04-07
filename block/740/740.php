<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js"type="text/javascript"></script>
        <script src="js/bootstrap.min.js"type="text/javascript"></script>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/740.less', 'css/740.css');
        ?>
        <link href="css/740.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-740">
            <nav class="navbar navbar-default megamenu">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                        </button>
                        <span class="navbar-brand" >COLLECTIONS</span>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse ">
                        <ul class="nav navbar-nav a1">
                            <li class="dropdown">
                                <a href="#"class="dropdown-toggle"data-toggle="dropdown"role="button"aria-expanded="false">HOME <span class="caret "></span></a>
                                <ul class="dropdown-menu"role="menu">
                                    <li ><a href="#">Bakeware</a></li>
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
                                <a href="#"class="dropdown-toggle"data-toggle="dropdown"role="button"aria-expanded="false">PRODUCTS <span class="caret"></span></a>
                                <ul class="dropdown-menu megamenu-content"role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h3 >Featured Products</h3>
                                                <ul >

                                                    <li><a href="#"title="">Bakeware</a></li>

                                                    <li><a href="#"title="">Cookware sets</a></li>

                                                    <li><a href="#"title="">Cooking Utensils</a></li>

                                                    <li><a href="#"title="">Cooks' Tools</a></li>

                                                    <li><a href="#"title="">Cookware</a></li>

                                                    <li><a href="#"title="">Cutlery</a></li>

                                                    <li><a href="#"title="">Dinnerware</a></li>

                                                    <li><a href="#"title="">Electrics</a></li>

                                                    <li><a href="#"title="">Gadgets</a></li>

                                                </ul>

                                            </div><!-- end col-4 -->
                                            <div class="col-sm-3">
                                                <h3 >Latest Tutorials</h3>
                                                <ul >

                                                    <li><a href="#"title="">Bakeware</a></li>

                                                    <li><a href="#"title="">Cookware sets</a></li>

                                                    <li><a href="#"title="">Cooking Utensils</a></li>

                                                    <li><a href="#"title="">Cooks' Tools</a></li>

                                                    <li><a href="#"title="">Cookware</a></li>

                                                    <li><a href="#"title="">Cutlery</a></li>

                                                    <li><a href="#"title="">Dinnerware</a></li>

                                                    <li><a href="#"title="">Electrics</a></li>

                                                    <li><a href="#"title="">Gadgets</a></li>

                                                </ul>
                                            </div><!-- end col-4 -->
                                            <div class="col-sm-3">
                                                <h3 >Google Map</h3>
                                                <ul >

                                                    <li><a href="#"title="">Bakeware</a></li>

                                                    <li><a href="#"title="">Cookware sets</a></li>

                                                    <li><a href="#"title="">Cooking Utensils</a></li>

                                                    <li><a href="#"title="">Cooks' Tools</a></li>

                                                    <li><a href="#"title="">Cookware</a></li>

                                                    <li><a href="#"title="">Cutlery</a></li>

                                                    <li><a href="#"title="">Dinnerware</a></li>

                                                    <li><a href="#"title="">Electrics</a></li>

                                                    <li><a href="#"title="">Gadgets</a></li>

                                                </ul>
                                            </div><!-- end col-4 -->
                                            <div class="col-sm-3">
                                                <h3 >Google Map</h3>
                                                <ul >

                                                    <li><a href="#"title="">Bakeware</a></li>

                                                    <li><a href="#"title="">Cookware sets</a></li>

                                                    <li><a href="#"title="">Cooking Utensils</a></li>

                                                    <li><a href="#"title="">Cooks' Tools</a></li>

                                                    <li><a href="#"title="">Cookware</a></li>

                                                    <li><a href="#"title="">Cutlery</a></li>

                                                    <li><a href="#"title="">Dinnerware</a></li>

                                                    <li><a href="#"title="">Electrics</a></li>

                                                    <li><a href="#"title="">Gadgets</a></li>

                                                </ul>
                                            </div><!-- end col-4 -->
                                        </div><!-- end row -->

                                    </li>
                                </ul>
                            </li>
                            </li>
                            <li class="dropdown megamenu-fw">
                                <a href="#"class="dropdown-toggle"data-toggle="dropdown" role="button" aria-expanded="false">BLOG <span class="caret "></span></a>
                                <ul class="dropdown-menu megamenu-content dropdown-menu-mega"role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-3">

                                                <ul >

                                                    <li><a href="#"title=""><img src="images/blog1_1024x1024.jpg"alt=""/> </a></li>


                                                    <li><a href="#"title="">The secret of success lies ...</a></li>

                                                    <li>We specialize in all kinds of kitchen supplies including the goods for food servicing and restaurant business. Every business is...</a></li>
                                                </ul>

                                            </div><!-- end col-4 -->
                                            <div class="col-sm-3">

                                                <ul >

                                                    <li><a href="#"title=""><img src="images/blog1_1024x1024.jpg"alt=""/> </a></li>


                                                    <li><a href="#"title="">The secret of success lies ...</a></li>

                                                    <li>We specialize in all kinds of kitchen supplies including the goods for food servicing and restaurant business. Every business is...</a></li>



                                                </ul>

                                            </div><!-- end col-4 -->
                                            <div class="col-sm-3">

                                                <ul >

                                                    <li><a href="#"title=""><img src="images/blog1_1024x1024.jpg"alt=""/> </a></li>


                                                    <li><a href="#"title="">The secret of success lies ...</a></li>

                                                    <li>We specialize in all kinds of kitchen supplies including the goods for food servicing and restaurant business. Every business is...</a></li>



                                                </ul>

                                            </div><!-- end col-4 -->
                                            <div class="col-sm-3">

                                                <ul >

                                                    <li><a href="#"title=""><img src="images/blog1_1024x1024.jpg"alt=""/> </a></li>


                                                    <li><a href="#"title="">The secret of success lies ...</a></li>

                                                    <li>We specialize in all kinds of kitchen supplies including the goods for food servicing and restaurant business. Every business is...</a></li>



                                                </ul>

                                            </div><!-- end col-4 -->
                                        </div><!-- end row -->


                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown megamenu-fw">
                                <a href="#"class="dropdown-toggle"data-toggle="dropdown" role="button" aria-expanded="false">SALE <span class="caret"></span></a>
                                <ul class="dropdown-menu megamenu-content"role="menu">
                                    <li class="ke">
                                        <div class="row">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-sm-3">
                                                            <div class="thumbnail">

                                                                <img src="images/boston_shaker_1_medium.png"class="img-responsive">
                                                                <div class="caption">
                                                                    <h3>$65.00</h3>
                                                                    <div style="clear: both"></div>
                                                                    <a href="#">BOSTON SHARKER</a>
                                                                    <div style="clear: both"></div>
                                                                    <p>We specialize in all kinds of kitchen supplies ... </p>

                                                                    <div class="row">

                                                                        <a href="#"class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span> ADD TO CART</a>
                                                                    </div>

                                                                    <p> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="thumbnail">

                                                                <img src="images/boston_shaker_1_medium.png"class="img-responsive">
                                                                <div class="caption">
                                                                    <h3>$65.00</h3>
                                                                    <div style="clear: both"></div>
                                                                    <a href="#">BOSTON SHARKER</a>
                                                                    <div style="clear: both"></div>
                                                                    <p>We specialize in all kinds of kitchen supplies ... </p>

                                                                    <div class="row">

                                                                        <a href="#"class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span> ADD TO CART</a>
                                                                    </div>

                                                                    <p> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="thumbnail">

                                                                <img src="images/boston_shaker_1_medium.png"class="img-responsive">
                                                                <div class="caption">
                                                                    <h3>$65.00</h3>
                                                                    <div style="clear: both"></div>
                                                                    <a href="#">BOSTON SHARKER</a>
                                                                    <div style="clear: both"></div>
                                                                    <p>We specialize in all kinds of kitchen supplies ... </p>

                                                                    <div class="row">

                                                                        <a href="#"class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span> ADD TO CART</a>
                                                                    </div>

                                                                    <p> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="thumbnail">

                                                                <img src="images/boston_shaker_1_medium.png"class="img-responsive">
                                                                <div class="caption">
                                                                    <h3>$65.00</h3>
                                                                    <div style="clear: both"></div>
                                                                    <a href="#">BOSTON SHARKER</a>
                                                                    <div style="clear: both"></div>
                                                                    <p>We specialize in all kinds of kitchen supplies ... </p>

                                                                    <div class="row">

                                                                        <a href="#"class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span> ADD TO CART</a>
                                                                    </div>

                                                                    <p> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><!-- end row -->

                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"data-toggle="dropdown"aria-expanded="false">ABOUT US </a> </li>
                            <li><a href="#"data-toggle="dropdown"aria-expanded="false">CONTACT US </a>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="fa fa-shopping-cart "></span>CART 0 item(s)</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>
    </body>
</html>