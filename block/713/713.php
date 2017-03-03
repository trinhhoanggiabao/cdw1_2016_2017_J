<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/713.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/713.less', 'css/713.css');
        ?>

        <link href="css/713.css" rel="stylesheet" type="text/css" /> 
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>

        <div class="type-713">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 action">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">En
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">En</a></li>
                                <li><a href="#">Fr</a></li>
                                <li><a href="#">Ge</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">USD
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">AUD</a></li>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">USD</a></li>
                            </ul>
                        </div>
                        <div class="defaut">Default Welcome Msg!</div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i> <span>My account</span>
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i><span> My Wishlist</span>
                            <i class="fa fa-fax" aria-hidden="true"></i><span> Checkout</span>
                            <i class="fa fa-lock" aria-hidden="true"></i> <span>Log In</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="type-2">
                <div class="headerinner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <img src="images/logo.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="search">
                                    <div class="form-select">
                                        <select>
                                            <option>All Categories</option>
                                            <option>Clothing</option>
                                            <option>Accessories</option>
                                            <option>Tops & T-Shirts</option>
                                            <option>Cardigans</option>
                                            <option>Jumpers</option>
                                            <option>Designer Wear</option>
                                            <option>jersey tops</option>
                                            <option>Blouses</option>
                                            <option>Swim Wear</option>
                                            <option>Skirts</option>
                                            <option>Coats & Jackets</option>

                                        </select>
                                    </div>
                                    <div class="form-input">
                                        <input type="text" name="text" id="text" placeholder="Search Product Here">
                                    </div>
                                    <div class="btn-button">
                                        <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="item">
                                    <div class="thumbitem">
                                        <p>0 ITEM </p>
                                    </div>
                                    <div class="item-cart">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="type-3">
                            <!--===========phan categories=============-->
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span> 
                                    </button>
                                    <div class="logo" data-toggle="collapse" data-target="#myNavbar">
                                        <a class="navbar-brand" href="#">MENU</a>
                                    </div>
                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="#">CATEGORIES</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Accessories</a></li> 
                                        <li><a href="#">Tops & T-Shirts</a></li> 
                                        <li><a href="#">Cardigans</a></li> 
                                        <li><a href="#">Jumpers</a></li> 
                                        <li><a href="#">Designer Wear</a></li> 
                                        <li><a href="#">jersey tops</a></li> 
                                        <li><a href="#">Blouses</a></li> 
                                        <li><a href="#">Swim Wear</a></li> 
                                        <li><a href="#">Skirts</a></li> 
                                        <li><a href="#">Coats & Jackets</a></li> 
                                    </ul>
                                </div>
                            </nav>
                            <hr>
                            <div class="clearfix"></div>
                            <!---===========phan Shop cllection==============-->
                            <div class="shopcollection">
                                <ul>
                                    <li ><a href="#" class="active">SHOP COLLECTION</a></li>
                                    <li><a href="#">Holiday shop</a></li>
                                    <li><a href="#">Fashion Essentials</a></li>
                                    <li><a href="#">Work</a></li>
                                    <li><a href="#">stripes</a></li>
                                    <li><a href="#">Party</a></li>
                                </ul>
                            </div>
                            <hr>
                            <div class="clearfix"></div>
                            <!---===========phan wintershop==============-->
                            <div class="wintershop">
                                <ul>
                                    <li ><a href="#" class="active">WINTER SHOP</a></li>
                                    <li><a href="#">View all</a></li>
                                    <li><a href="#">Faux Fur Coats</a></li>
                                    <li><a href="#">Parkas</a></li>
                                    <li><a href="#">Camel Coats</a></li>
                                    <li><a href="#">Giles</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="type-4">
                            <div class="banner">
                                <div class=row>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                            </ol>
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                    <img src="images/main-banner.jpg" alt=""/>
                                                </div>

                                                <div class="item">
                                                    <img src="images/main-banner2.jpg" alt=""/>
                                                </div>
                                            </div>
                                            <!-- Left and right controls -->
                                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--=========phan sigle banner============-->
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="singlebanner">
                                            <img src="images/sub1.jpg" alt=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="type-5">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="sub-banner">
                                        <img src="images/Sub_banner1.jpg" alt=""/>
                                        <div class="text">
                                            <p>BAGS</p>
                                        </div>
                                        <div class="shopnow">
                                            <p>shop now</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="sub-banner">
                                        <img src="images/Sub_banner2.jpg" alt=""/>
                                        <div class="text">
                                            JACKETS
                                        </div>
                                        <div class="shopnow">
                                            <p>Shop now</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="sub-banner">
                                        <img src="images/Sub_banner3.jpg" alt=""/>
                                        <div class="text">
                                            GOGGLES
                                        </div>
                                        <div class="shopnow">
                                            <p>Shop now</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="type_b_6">
                <div class=" container">
                    <div class="row">

                        <div class="tabberlive_outer_sub">

                            <div class="htabs">
                                <ul class="tabbernav_product nav-pills" id="nav">
                                    <li class="active"><a class="tab-text selected"  data-toggle="tab" title="tab_product" href="#newproducts"  data-text="Latest"><span>Latest</span></a></li>
                                    <li ><a class="tab-text "  data-toggle="tab"  title="tab_product" href="#newproducts"  data-text="Best Seller"><span>Best Seller</span></a></li>
                                    <li ><a class="tab-text " data-toggle="tab"  title="tab_product" href="#newproducts"  data-text="Special"><span>Special</span></a></li>
                                    <li><a class="tab-text" data-toggle="tab"  title="tab_product" href="#newproducts"  data-text="featured"><span>featured</span></a></li>
                                </ul>
                            </div>
                            <div class="tabs">    
                                <div class="tab-content">
                                    <div id="newproducts" class="tab-pane fade in active ">

                                        <ul class="products-grid" style="width: 100%;">

                                            <li class="item" >
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="Donec semper sem nec available" class="product-image">
                                                                    <img src="images/23_2.jpg" alt=""/>
                                                                    <img class="hover-image" src="images/19_3_2.jpg" width="285" height="300" alt="Donec semper sem nec available">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#donec-semper-sem-nec-available.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Donec semper sem nec available">Donec semper sem nec available</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$360.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%">                                                        </div>
                                                                </div>
                                                                <span class="amount">1 Review(s)</span>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="Justo neque Ipsum" class="product-image">
                                                                    <img src="images/9_4_5.jpg" alt="">
                                                                    <img class="hover-image" src="images/10_4_5.jpg" width="285" height="300" alt="Justo neque Ipsum">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#justo-neque-ipsum.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Justo neque Ipsum">Justo neque Ipsum</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$625.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="Ifashion ipsum dolor amet" class="product-image">
                                                                    <img src="images/8_1_10.jpg" alt="">
                                                                    <img class="hover-image" src="images/9_4_5.jpg" width="285" height="300" alt="Ifashion ipsum dolor amet">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#consectetur-adipiscing-ipsum-available-56.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Ifashion ipsum dolor amet">Ifashion ipsum dolor amet</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $970.00 </span>



                                                                <span class="price" >
                                                                    $860.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="feminine designs delivering stylish" class="product-image">
                                                                    <img src="images/4_1_8.jpg" alt="">
                                                                    <img class="hover-image" src="images/5_10.jpg" width="285" height="300" alt="feminine designs delivering stylish">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#feminine-designs-delivering-stylish.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="feminine designs delivering stylish">feminine designs delivering stylish</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$580.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="expound the actual teachings ofgreat" class="product-image">
                                                                    <img src="images/7_3_4.jpg" alt="">
                                                                    <img class="hover-image" src="images/8_1_10.jpg" width="285" height="300" alt="expound the actual teachings ofgreat">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#expound-the-actual-teachings-ofgreat.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="expound the actual teachings ofgreat">expound the actual teachings ofgreat</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$300.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="established fact variations of passages" class="product-image">
                                                                    <img src="images/5_10.jpg" alt="">
                                                                    <img class="hover-image" src="images/6_1_2.jpg" width="285" height="300" alt="established fact variations of passages">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#established-fact-variations-of-passages-44.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="established fact variations of passages">established fact variations of passages</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $400.00 </span>



                                                                <span class="price" >
                                                                    $325.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="Lorem ipsum dolor simply sed" class="product-image">
                                                                    <img src="images/2_10.jpg" alt="">
                                                                    <img class="hover-image" src="images/4_1_8.jpg" width="285" height="300" alt="Lorem ipsum dolor simply sed">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Lorem ipsum dolor simply sed">Lorem ipsum dolor simply sed</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $780.00 </span>



                                                                <span class="price" >
                                                                    $680.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="Arcu vitae imperdiet simply" class="product-image">
                                                                    <img src="images/1_4.jpg" alt="">
                                                                    <img class="hover-image" src="images/2_10.jpg" width="285" height="300" alt="Arcu vitae imperdiet simply">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#arcu-vitae-imperdiet-simply.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Arcu vitae imperdiet simply">Arcu vitae imperdiet simply</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $860.00 </span>



                                                                <span class="price" >
                                                                    $800.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>



                                        </ul>
                                    </div>
                                    <div id="bestseller" class="tab-pane fade  ">
                                        <ul class="products-grid" style="width: 1220px;">

                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="Donec semper sem nec available" class="product-image">
                                                                    <img src="images/23_2.jpg" alt=""/>
                                                                    <img class="hover-image" src="images/19_3_2.jpg" width="285" height="300" alt="Donec semper sem nec available">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#donec-semper-sem-nec-available.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Donec semper sem nec available">Donec semper sem nec available</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$360.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%">                                                        </div>
                                                                </div>
                                                                <span class="amount">1 Review(s)</span>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="Justo neque Ipsum" class="product-image">
                                                                    <img src="images/9_4_5.jpg" alt="">
                                                                    <img class="hover-image" src="images/10_4_5.jpg" width="285" height="300" alt="Justo neque Ipsum">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#justo-neque-ipsum.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Justo neque Ipsum">Justo neque Ipsum</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$625.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="Ifashion ipsum dolor amet" class="product-image">
                                                                    <img src="images/8_1_10.jpg" alt="">
                                                                    <img class="hover-image" src="images/9_4_5.jpg" width="285" height="300" alt="Ifashion ipsum dolor amet">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#consectetur-adipiscing-ipsum-available-56.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Ifashion ipsum dolor amet">Ifashion ipsum dolor amet</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $970.00 </span>



                                                                <span class="price" >
                                                                    $860.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="feminine designs delivering stylish" class="product-image">
                                                                    <img src="images/4_1_8.jpg" alt="">
                                                                    <img class="hover-image" src="images/5_10.jpg" width="285" height="300" alt="feminine designs delivering stylish">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#feminine-designs-delivering-stylish.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="feminine designs delivering stylish">feminine designs delivering stylish</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$580.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="expound the actual teachings ofgreat" class="product-image">
                                                                    <img src="images/7_3_4.jpg" alt="">
                                                                    <img class="hover-image" src="images/8_1_10.jpg" width="285" height="300" alt="expound the actual teachings ofgreat">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#expound-the-actual-teachings-ofgreat.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="expound the actual teachings ofgreat">expound the actual teachings ofgreat</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$300.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="established fact variations of passages" class="product-image">
                                                                    <img src="images/5_10.jpg" alt="">
                                                                    <img class="hover-image" src="images/6_1_2.jpg" width="285" height="300" alt="established fact variations of passages">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#established-fact-variations-of-passages-44.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="established fact variations of passages">established fact variations of passages</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $400.00 </span>



                                                                <span class="price" >
                                                                    $325.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="Lorem ipsum dolor simply sed" class="product-image">
                                                                    <img src="images/2_10.jpg" alt="">
                                                                    <img class="hover-image" src="images/4_1_8.jpg" width="285" height="300" alt="Lorem ipsum dolor simply sed">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Lorem ipsum dolor simply sed">Lorem ipsum dolor simply sed</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $780.00 </span>



                                                                <span class="price" >
                                                                    $680.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="Arcu vitae imperdiet simply" class="product-image">
                                                                    <img src="images/1_4.jpg" alt="">
                                                                    <img class="hover-image" src="images/2_10.jpg" width="285" height="300" alt="Arcu vitae imperdiet simply">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#arcu-vitae-imperdiet-simply.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Arcu vitae imperdiet simply">Arcu vitae imperdiet simply</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $860.00 </span>



                                                                <span class="price" >
                                                                    $800.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>



                                        </ul>

                                    </div>
                                    <div id="special_product" class="tab-pane fade  ">
                                        <ul class="products-grid" style="width: 1220px;">

                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="Donec semper sem nec available" class="product-image">
                                                                    <img src="images/23_2.jpg" alt=""/>
                                                                    <img class="hover-image" src="images/19_3_2.jpg" width="285" height="300" alt="Donec semper sem nec available">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#donec-semper-sem-nec-available.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Donec semper sem nec available">Donec semper sem nec available</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$360.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%">                                                        </div>
                                                                </div>
                                                                <span class="amount">1 Review(s)</span>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="Justo neque Ipsum" class="product-image">
                                                                    <img src="images/9_4_5.jpg" alt="">
                                                                    <img class="hover-image" src="images/10_4_5.jpg" width="285" height="300" alt="Justo neque Ipsum">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#justo-neque-ipsum.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Justo neque Ipsum">Justo neque Ipsum</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$625.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="Ifashion ipsum dolor amet" class="product-image">
                                                                    <img src="images/8_1_10.jpg" alt="">
                                                                    <img class="hover-image" src="images/9_4_5.jpg" width="285" height="300" alt="Ifashion ipsum dolor amet">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#consectetur-adipiscing-ipsum-available-56.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Ifashion ipsum dolor amet">Ifashion ipsum dolor amet</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $970.00 </span>



                                                                <span class="price" >
                                                                    $860.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="feminine designs delivering stylish" class="product-image">
                                                                    <img src="images/4_1_8.jpg" alt="">
                                                                    <img class="hover-image" src="images/5_10.jpg" width="285" height="300" alt="feminine designs delivering stylish">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#feminine-designs-delivering-stylish.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="feminine designs delivering stylish">feminine designs delivering stylish</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$580.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="expound the actual teachings ofgreat" class="product-image">
                                                                    <img src="images/7_3_4.jpg" alt="">
                                                                    <img class="hover-image" src="images/8_1_10.jpg" width="285" height="300" alt="expound the actual teachings ofgreat">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#expound-the-actual-teachings-ofgreat.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="expound the actual teachings ofgreat">expound the actual teachings ofgreat</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$300.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="established fact variations of passages" class="product-image">
                                                                    <img src="images/5_10.jpg" alt="">
                                                                    <img class="hover-image" src="images/6_1_2.jpg" width="285" height="300" alt="established fact variations of passages">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#established-fact-variations-of-passages-44.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="established fact variations of passages">established fact variations of passages</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $400.00 </span>



                                                                <span class="price" >
                                                                    $325.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="Lorem ipsum dolor simply sed" class="product-image">
                                                                    <img src="images/2_10.jpg" alt="">
                                                                    <img class="hover-image" src="images/4_1_8.jpg" width="285" height="300" alt="Lorem ipsum dolor simply sed">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Lorem ipsum dolor simply sed">Lorem ipsum dolor simply sed</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $780.00 </span>



                                                                <span class="price" >
                                                                    $680.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="Arcu vitae imperdiet simply" class="product-image">
                                                                    <img src="images/1_4.jpg" alt="">
                                                                    <img class="hover-image" src="images/2_10.jpg" width="285" height="300" alt="Arcu vitae imperdiet simply">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#arcu-vitae-imperdiet-simply.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Arcu vitae imperdiet simply">Arcu vitae imperdiet simply</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $860.00 </span>



                                                                <span class="price" >
                                                                    $800.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>



                                        </ul>

                                    </div>
                                    <div id="featured_product" class="tab-pane fade  ">
                                        <ul class="products-grid" style="width: 1220px;">

                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="Donec semper sem nec available" class="product-image">
                                                                    <img src="images/23_2.jpg" alt=""/>
                                                                    <img class="hover-image" src="images/19_3_2.jpg" width="285" height="300" alt="Donec semper sem nec available">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#donec-semper-sem-nec-available.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Donec semper sem nec available">Donec semper sem nec available</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$360.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%">                                                        </div>
                                                                </div>
                                                                <span class="amount">1 Review(s)</span>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="Justo neque Ipsum" class="product-image">
                                                                    <img src="images/9_4_5.jpg" alt="">
                                                                    <img class="hover-image" src="images/10_4_5.jpg" width="285" height="300" alt="Justo neque Ipsum">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#justo-neque-ipsum.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Justo neque Ipsum">Justo neque Ipsum</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$625.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="Ifashion ipsum dolor amet" class="product-image">
                                                                    <img src="images/8_1_10.jpg" alt="">
                                                                    <img class="hover-image" src="images/9_4_5.jpg" width="285" height="300" alt="Ifashion ipsum dolor amet">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#consectetur-adipiscing-ipsum-available-56.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Ifashion ipsum dolor amet">Ifashion ipsum dolor amet</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $970.00 </span>



                                                                <span class="price" >
                                                                    $860.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="feminine designs delivering stylish" class="product-image">
                                                                    <img src="images/4_1_8.jpg" alt="">
                                                                    <img class="hover-image" src="images/5_10.jpg" width="285" height="300" alt="feminine designs delivering stylish">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#feminine-designs-delivering-stylish.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="feminine designs delivering stylish">feminine designs delivering stylish</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$580.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>


                                                                <a href="#" title="expound the actual teachings ofgreat" class="product-image">
                                                                    <img src="images/7_3_4.jpg" alt="">
                                                                    <img class="hover-image" src="images/8_1_10.jpg" width="285" height="300" alt="expound the actual teachings ofgreat">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#expound-the-actual-teachings-ofgreat.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="expound the actual teachings ofgreat">expound the actual teachings ofgreat</a></h2>



                                                            <div class="price-box">
                                                                <span class="regular-price" >
                                                                    <span class="price">$300.00</span> </span>

                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="established fact variations of passages" class="product-image">
                                                                    <img src="images/5_10.jpg" alt="">
                                                                    <img class="hover-image" src="images/6_1_2.jpg" width="285" height="300" alt="established fact variations of passages">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#established-fact-variations-of-passages-44.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="established fact variations of passages">established fact variations of passages</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $400.00 </span>



                                                                <span class="price" >
                                                                    $325.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="Lorem ipsum dolor simply sed" class="product-image">
                                                                    <img src="images/2_10.jpg" alt="">
                                                                    <img class="hover-image" src="images/4_1_8.jpg" width="285" height="300" alt="Lorem ipsum dolor simply sed">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Lorem ipsum dolor simply sed">Lorem ipsum dolor simply sed</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $780.00 </span>



                                                                <span class="price" >
                                                                    $680.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>


                                            <li class="item" style="width: 280px;">
                                                <div class="product-block" style="height: 394px;">
                                                    <div class="product-block-inner">
                                                        <div class="product-image-block-inner">
                                                            <div class="product-image-block">
                                                                <div class="new-label">New</div>

                                                                <div class="sale-label">Sale</div>

                                                                <a href="#" title="Arcu vitae imperdiet simply" class="product-image">
                                                                    <img src="images/1_4.jpg" alt="">
                                                                    <img class="hover-image" src="images/2_10.jpg" width="285" height="300" alt="Arcu vitae imperdiet simply">
                                                                </a>



                                                                <div class="product_hover-block">
                                                                    <div class="actions">

                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#arcu-vitae-imperdiet-simply.html?options=cart')"><span>Add to Cart</span></button>


                                                                        <ul class="add-to-links">
                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <div class="product_desc">
                                                            <h2 class="product-name"><a href="#" title="Arcu vitae imperdiet simply">Arcu vitae imperdiet simply</a></h2>



                                                            <div class="price-box">


                                                                <span class="price old-price" >
                                                                    $860.00 </span>



                                                                <span class="price" >
                                                                    $800.00 </span>



                                                            </div>


                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div><!-- End div class product-block-->
                                                </div><!-- End div class product-block-inner -->
                                            </li>



                                        </ul>
                                    </div>
                                    <div class="view_actions"><a href="#newproducts">View All Products</a></div>
                                </div>


                                <span style="display: none; visibility: hidden;" ></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="type_b_7">
                <div class="container">
                    <div class="row">
                        <div class="testimonial_shipping_cms">
                            <!---1--->
                            <div class="col-md-6 col-xs-12 col-sm-6">
                                <div class="tm_shipping_cms">
                                    <div class="shipping_inner">
                                        <div class="shipping-heading">Main features</div>
                                        <div class="ship_content1">
                                            <div class="img_content">&nbsp;</div>
                                            <div class="des_content">
                                                <div class="heading">Responsive Design</div>
                                                <div>There are many variscrbled it to make crambled it to make a type specimen book.</div>
                                            </div>
                                        </div>
                                        <div class="ship_content2">
                                            <div class="img_content">&nbsp;</div>
                                            <div class="des_content">
                                                <div class="heading">SEO Optimized</div>
                                                <div>There are many variscrbled it to make crambled it to make a type specimen book.</div>
                                            </div>
                                        </div>
                                        <div class="ship_content3">
                                            <div class="img_content">&nbsp;</div>
                                            <div class="des_content">
                                                <div class="heading">Satisfied Customers</div>
                                                <div>There are many variscrbled it to make crambled it to make a type specimen book.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!---2--->

                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <div class="testimonial">
                                    <div class="testimonial_cms_inner">
                                        <div class="testimonial_title">
                                            <h2>Testimonial</h2>
                                        </div>
                                        <div class="testimonial_outer">
                                            <div class="testimonial_inner">
                                                <div class="testimonial_sub_inner">
                                                    <ul   style="opacity: 1; display: block;">
                                                        <div id="Carousel" class="carousel slide">
                                                            <div class="carousel-inner">
                                                                <div class="item active">
                                                                    <li class="slider-item " style="width: 100%;padding-right: 30px">
                                                                        <div class="testimonial-block">
                                                                            <div class="image-block"><img alt="" src="images/user1.jpg"></div>

                                                                            <div class="post-description">"Passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in Middle of text. All the."</div>
                                                                            <div class="post-author"><a href="#">Glasgow</a></div>

                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="item">
                                                                    <li class="slider-item " style="width: 100%;padding-right: 30px">
                                                                        <div class="testimonial-block">
                                                                            <div class="image-block"><img alt="" src="images/user1.jpg"></div>

                                                                            <div class="post-description">"Passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in Middle of text. All the."</div>
                                                                            <div class="post-author"><a href="#">Glasgow</a></div>

                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="item">
                                                                    <li class="slider-item " style="width: 100%;padding-right: 30px">
                                                                        <div class="testimonial-block">
                                                                            <div class="image-block"><img alt="" src="images/user1.jpg"></div>

                                                                            <div class="post-description">"Passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in Middle of text. All the."</div>
                                                                            <div class="post-author"><a href="#">Glasgow</a></div>

                                                                        </div>
                                                                    </li>
                                                                </div>
                                                            </div>




                                                            <ol class="carousel-indicators">
                                                                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                                                <li data-target="#Carousel" data-slide-to="1"></li>
                                                                <li data-target="#Carousel" data-slide-to="2"></li>
                                                            </ol>
                                                        </div>

                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <!---end-->
                </div>
            </div>




            <div class="type_b_8">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12   col-xs-12">
                            <div class="bottom-single-banner">
                                <div class="item">
                                    <a href="#"><img src="images/shiping-banner.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="type_b_9">
                <div class="container">
                    <div class="blog">
                        <div class="blog_title">
                            <h2>Latest News</h2>
                        </div>
                        <div class="blog_inner">
                            <div class="row">
                                <div class="col-md-4  col-sm-6 col-xs-12">

                                    <div class="row">
                                        <div class="col-md-5 ">
                                            <div class="blog-left">
                                                <div class="image-block"><a title="" href="#"><img class="img-thumbnail" alt="" src="images/blog1.jpg"></a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 ">
                                            <div class="blog-right">
                                                <div class="post-title"><a title="" href="#">Contrary to all popular belief</a></div>
                                                <div class="view-blog">
                                                    <div class="post-date">19/02/2016</div>
                                                    <div class="read-more">/ <a href="#"> read more </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                </div>
                                <div class="col-md-4  col-sm-6 col-xs-12">

                                    <div class="row">
                                        <div class="col-md-5 ">
                                            <div class="blog-left">
                                                <div class="image-block"><a title="" href="#"><img class="img-thumbnail" alt="" src="images/blog1.jpg"></a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 ">
                                            <div class="blog-right">
                                                <div class="post-title"><a title="" href="#">Contrary to all popular belief</a></div>
                                                <div class="view-blog">
                                                    <div class="post-date">19/02/2016</div>
                                                    <div class="read-more">/ <a href="#"> read more </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                </div>
                                <div class="col-md-4  col-sm-6 col-xs-12">

                                    <div class="row">
                                        <div class="col-md-5 ">
                                            <div class="blog-left">
                                                <div class="image-block"><a title="" href="#"><img class="img-thumbnail" alt="" src="images/blog1.jpg"></a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 ">
                                            <div class="blog-right">
                                                <div class="post-title"><a title="" href="#">Contrary to all popular belief</a></div>
                                                <div class="view-blog">
                                                    <div class="post-date">19/02/2016</div>
                                                    <div class="read-more">/ <a href="#"> read more </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                </div>
                                <div class="col-md-4  col-sm-6 col-xs-12">

                                    <div class="row">
                                        <div class="col-md-5 ">
                                            <div class="blog-left">
                                                <div class="image-block"><a title="" href="#"><img class="img-thumbnail" alt="" src="images/blog1.jpg"></a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 ">
                                            <div class="blog-right">
                                                <div class="post-title"><a title="" href="#">Contrary to all popular belief</a></div>
                                                <div class="view-blog">
                                                    <div class="post-date">19/02/2016</div>
                                                    <div class="read-more">/ <a href="#"> read more </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                </div>
                                <div class="col-md-4  col-sm-6 col-xs-12">

                                    <div class="row">
                                        <div class="col-md-5 ">
                                            <div class="blog-left">
                                                <div class="image-block"><a title="" href="#"><img class="img-thumbnail" alt="" src="images/blog1.jpg"></a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 ">
                                            <div class="blog-right">
                                                <div class="post-title"><a title="" href="#">Contrary to all popular belief</a></div>
                                                <div class="view-blog">
                                                    <div class="post-date">19/02/2016</div>
                                                    <div class="read-more">/ <a href="#"> read more </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                </div>

                                <div class="col-md-4  col-sm-6 col-xs-12">

                                    <div class="row">
                                        <div class="col-md-5 ">
                                            <div class="blog-left">
                                                <div class="image-block"><a title="" href="#"><img class="img-thumbnail" alt="" src="images/blog1.jpg"></a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 ">
                                            <div class="blog-right">
                                                <div class="post-title"><a title="" href="#">Contrary to all popular belief</a></div>
                                                <div class="view-blog">
                                                    <div class="post-date">19/02/2016</div>
                                                    <div class="read-more">/ <a href="#"> read more </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                </div>


                            </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="type_b_10">
                <div class="container">
                    <div class='row'>
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="carousel slide media-carousel" id="media">
                                <div class="carousel-inner">
                                    <div class="item  active">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4" >
                                                <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                            </div>          
                                            <div class="col-md-3">
                                                <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                            </div>
                                            <div class="col-md-3">
                                                <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                            </div>       
                                            <div class="col-md-3">
                                                <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                            </div>        


                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4" >
                                                <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                            </div>          
                                            <div class="col-md-3">
                                                <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                            </div>
                                            <div class="col-md-3">
                                                <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                            </div>       
                                            <div class="col-md-3">
                                                <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                            </div>        

                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4" >
                                                <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                            </div>          
                                            <div class="col-md-3">
                                                <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                            </div>
                                            <div class="col-md-3">
                                                <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                            </div>       
                                            <div class="col-md-3">
                                                <a class="thumbnail" href="#"><img src="images/01.png" alt=""/></a>
                                            </div>        

                                        </div>
                                    </div>
                                </div>
                                <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                                <a data-slide="next" href="#media" class="right carousel-control">›</a>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>

            <div class="type_b_11">
                <footer class="footer-container">

                    <div class="footer-top-outer">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-subscribe-header">
                                    <div class="news_inner">
                                        <div class="news_inner_content">
                                            <div class="news-text">
                                                <i class="fa fa-envelope-o">&nbsp;</i>
                                                <div class="text-content">sign up here for early updates</div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="input-box">
                                    <div class="input_inner">
                                        <input type="text" name="email" id="newsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Enter your email address ...">
                                    </div>

                                    <div class="actions">
                                        <button type="submit" title="Subscribe" class="button"><span>Subscribe</span></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="footer">	 

                        <div class="footer_inner" id="footer">
                            <div class="row">
                                <div class="col-md-4 col-sm-12  footer-border-left-1">

                                    <div id="block_1" class="footer-area-2">
                                        <ul>

                                            <div class="footer_logo"><a href="#"><img alt="" src="images/footer-logo.png"></a></div>
                                            </li>
                                            <li>
                                                <a> 507-Union Trade Center,Udhana Darvaja Surat</a>
                                            </li>
                                            <li>
                                                <a>Call us: 0123-456-789</a>

                                            </li>
                                            <li>
                                                <div class=" "><a href="#" target="_blank">support@templatemela.com</a></div>
                                            </li>
                                            <li class="facebook social_block"><a href="#"><i class="fa fa-facebook-square">&nbsp;</i></a></li>
                                            <li class="twitter social_block"><a href="#"><i class="fa fa-twitter-square">&nbsp;</i></a></li>
                                            <li class="  social_block"><a href="#"><i class="fa fa-google-plus-square">&nbsp;</i></a></li>
                                            <li class="  social_block"><a href="#"><i class="fa fa-pinterest-square">&nbsp;</i></a></li>
                                            <li class="  social_block"><a href="#"><i class="fa fa-linkedin-square">&nbsp;</i></a></li>
                                            <li class="rss social_block"><a href="#"><i class="fa fa-rss-square">&nbsp;</i></a></li>
                                            <li class="share social_block"><a href="#"><i class="fa fa-share-alt-square">&nbsp;</i></a></li>
                                            <li class="  social_block"><a href="#"><i class="fa fa-youtube-square">&nbsp;</i></a></li>
                                        </ul>  
                                    </div>
                                    <br>
                                </div>
                                <div class="col-md-2 col-sm-12  footer-border-left">

                                    <div id="block_1" class="footer-area-1">

                                        <ul>
                                            <li class="footer-title">My Account</li>
                                            <li><a href="#">Ask In forum</a></li>
                                            <li><a href="#">Help Desk</a></li>
                                            <li><a href="#">Payment Method</a></li>
                                            <li><a href="#">Promotions</a></li>
                                            <li><a href="#">Terms &amp; Condition</a></li>
                                            <li><a href="#">Payment Method</a></li>
                                            <li><a href="#">Shipping Policy</a></li>
                                            <li><a href="#">&nbsp;</a></li>
                                            <li><a href="#">&nbsp;</a></li>
                                        </ul>                                  
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12 footer-border-left">

                                    <div id="block_1" class="footer-area-1">

                                        <ul>
                                            <li class="footer-title">SHOP</li>
                                            <li><a href="#">Accessories </a></li>
                                            <li><a href="#">Balcony Tables</a></li>
                                            <li><a href="#">Bar Units</a></li>
                                            <li><a href="#">Fine Art</a></li>
                                            <li><a href="#">Beds</a></li>
                                            <li><a href="#">Rules </a></li>
                                            <li><a href="#">&nbsp;</a></li>
                                            <li><a href="#">&nbsp;</a></li>
                                            <li><a href="#">&nbsp;</a></li>
                                        </ul>        
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 footer-border-left">

                                    <div id="block_1" class="footer-area-1">

                                        <ul>
                                            <li class="footer-title">Customer Service</li>
                                            <li><a href="#">Site Map</a></li>
                                            <li><a href="#">Search Terms</a></li>
                                            <li><a href="#">Advanced Search</a></li>
                                            <li><a href="#">Orders and Returns</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">&nbsp;</a></li>
                                            <li><a href="#">&nbsp;</a></li>
                                            <li><a href="#">&nbsp;</a></li>
                                            <li><a href="#">&nbsp;</a></li>
                                        </ul>                                    </div>
                                </div>

                            </div>


                        </div> 
                    </div>
                    <div class="footer_bottom"> 

                        <div class="footer_bottom_images ">
                            <div class="footer_bottom_images_1">

                                <img src="images/footer-divider.png" alt=""/>
                            </div>
                        </div>

                        <ul class="payment_icon">
                            <li>                                <address>© 2016 Magento Demo Store. All Rights Reserved.</address> 
                            </li>
                            <br>
                            <li class="discover"><a href="#"><span>discover</span></a></li>
                            <li class="visa"><a href="#"><span>visa</span></a></li>
                            <li class="mastro"><a href="#"><span>mastro</span></a></li>
                            <li class="paypal"><a href="#"><span>paypal</span></a></li>
                            <li class="amex"><a href="#"><span>amex</span></a></li>
                            <li class="g-wall"><a href="#"><span>g-wall</span></a></li>
                        </ul>  

                    </div>
                </footer>
            </div>
        </div>


    </body>
</html>