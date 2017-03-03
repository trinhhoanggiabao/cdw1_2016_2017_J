<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  
    <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/styles.less', 'css/styles.css');
    ?>
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/type-5.js" type="text/javascript"></script>



</head>

<body >
    <div class="type-1">
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
    <div class="type-b-danhmuc1">
        <div class="row">
            <div class="headclothing">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="clothing">
                                <h4>Clothing</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="clothing-text">
                                <a href="#">Home</a> / <a href="#"> clothing</a> / Suspendisse massa Ipsum random
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
                <div class="type_b_chitiet_menu">

                    <!--=====Phan navber catogery====-->
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
                    <!--=======phan product=======--->
                    <div class="product">
                        <h4>SPECIAL PRODUCTS</h4>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="thumb-image">
                                    <img src="images/1_4.jpg" alt="" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="text">
                                    Arcu vitae i..				 
                                </div>
                                <div class="price-product">
                                    <span class="money1">$860.00</span> <span class="money2">$800</span>
                                </div>
                                <div class="addtocart">
                                    Add to cart
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="thumb-image">
                                    <img src="images/7_3_4.jpg" alt="" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="text">
                                    ifashion ips..				 
                                </div>
                                <div class="price-product">
                                    <span class="money1">$770.00</span> <span class="money2">$860</span>
                                </div>
                                <div class="addtocart">
                                    Add to cart
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="thumb-image">
                                    <img src="images/17_1_5_1.jpg" alt="" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="text">
                                    Established ..			 
                                </div>
                                <div class="price-product">
                                    <span class="money1">$400.00</span> <span class="money2">$325</span>
                                </div>
                                <div class="addtocart">
                                    Add to cart
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="clearfix"></div>
                    <!---=======phan sop by brand --->

                    <div class="shopbybrand">
                        <ul>
                            <li><a href="#" class="active"> SHOP BY BRAND</a></li>
                            <li><a href="#">Airtel </a></li>
                            <li><a href="#">Apple</a></li>
                            <li><a href="#">Docomo </a></li>
                            <li><a href="#">Idea</a></li>
                            <li><a href="#">lenovo</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Samaung</a></li>
                            <li><a href="#">Vodafone</a></li>
                            <li><a href="#">Gionee</a></li>
                            <li><a href="#">HCL</a></li>
                            <li><a href="#">HTC</a></li>
                            <li><a href="#">Lava</a></li>
                            <li><a href="#">Navneet</a></li>
                            <li><a href="#">Nokia</a></li>
                            <li><a href="#">Tata</a></li>
                            <li><a href="#">Riliance</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div class="clearfix"></div>

                    <!--======phan image bottom banner----->
                    <div class="image-bottom">
                        <img src="images/left-banner.jpg" alt=""/>
                    </div>
                </div>
            </div>



            <div class="col-md-9">
                <div class="type_b_chitiet_1">
                    <!---Detail_1-->

                    <!--Detail_product-->
                    <div class="container">
                        <div class="row">    
                            <div class="product-view">
                                <div class="col-md-6 col-sm-12 col-xs-12">

                                    <div class="detail_left">
                                        <div class="product-img-box">
                                            <div class="image" style="width: 100%;display: block"style="height: auto;">
                                                <img src="images/2_12.jpg" id="main_img">
                                            </div>
                                            <div  class="carousel slide" id="myCarousel" > 
                                                <ul class="product-carousel" style="opacity: 0;display: block;margin-left: -25px; ">
                                                    <div class="slider-wrapper-outer">
                                                        <div class="slider-wrapper" style="width: 100%;display: block">
                                                            <div class="carousel-inner">
                                                                <div class="item active">
                                                                    <div class="col-md-3 col-sm-4 col-xs-4 ">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner">
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/2_12.jpg" width="100" height="105" alt="" class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-xs-4 hidden2">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner">
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/21_1_2.jpg" alt="" class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-xs-4 hidden2">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner">
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/6_1_14.jpg" alt="" class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-xs-4 hidden1">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner">
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/7_3_7.jpg" alt=""  class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                </div>
                                                                <div class="item ">
                                                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner"> 
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/2_12.jpg" alt="" class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-xs-4 hidden2">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner">
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/21_1_2.jpg" alt="" class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-xs-4 hidden2">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner">
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/6_1_14.jpg" alt=""  class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-xs-4 hidden1">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner">
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/7_3_7.jpg" alt="" class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                </div>
                                                                <div class="item ">
                                                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner"> 
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/7_3_7.jpg" alt="" class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-xs-4 hidden2">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner">
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/21_1_2.jpg" alt="" class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-xs-4 hidden2">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner">
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/2_12.jpg" alt=""  class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-xs-4 hidden1">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner">
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/6_1_14.jpg" alt="" class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                </div>
                                                                <div class="item ">
                                                                    <div class="col-md-3 col-sm-4 col-xs-4">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner"> 
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/7_3_7.jpg" alt="" class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-xs-4 hidden2">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner">
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/21_1_2.jpg" alt="" class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-xs-4 hidden2">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner">
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/2_12.jpg" alt=""  class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-xs-4 hidden1">
                                                                        <li class="item   " style="width:  100%;">
                                                                            <div class="product-block" style="height: auto;">
                                                                                <div class="product-block-inner">
                                                                                    <div class="product-image-block-inner">
                                                                                        <div class="product-image-block">

                                                                                            <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                                <img   src="images/6_1_14.jpg" alt="" class="click">

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- End div class product-block-->
                                                                            </div>
                                                                            <!-- End div class product-block-inner -->
                                                                        </li>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                                                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>                                           
                                            </div>       
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="detail_right">
                                            <div class="product-name">
                                                <h1> ARCU VITAE IMPERDIET SIMPLY NEMO </h1>
                                                <div id="prev-next-links">
                                                    <a href="#" class="prev-next"><</a>
                                                    <a href="#" class="prev-next">></a>
                                                </div>
                                            </div>   
                                            <p class="no-rating">
                                                <a  href="#newproducts5">Be the first to review this product</a>


                                            </p>
                                            <div class="sku">
                                                <span>SKU: </span>
                                                mag100215_3_1
                                            </div>
                                            <div class="short-description">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo,
                                                eget vulputate orci purus ut lorem. In fringilla mi in ligula.
                                                Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.
                                            </div>
                                            <div class="availability in-stock">
                                                Availability: 
                                                <span>In stock</span>
                                            </div>
                                            <div class="price-box">

                                                <span id="Totalcost" class="price"> $488.00 </span>
                                            </div>
                                            <div class="product-options"> 
                                                <p class="required"><em>*</em> Required Fields</p>


                                                <dt><label class="required"><em>*</em>color</label></dt>

                                                <div class="color-price">
                                                    <input type="radio" name="channelcost" value="10.00" onClick="test(this);" /> <label>black  <span> <em>+</em>$10.00</span></label> <br />
                                                    <input type="radio" name="channelcost" value="30.00" onClick="test(this);" /> <label>brown  <span> <em>+</em>$30.00</span></label> <br />
                                                    <input type="radio" name="channelcost" value="50.00" onClick="test(this);" /> <label>gray  <span> <em>+</em>$50.00</span></label> <br />    
                                                </div>



                                                <dt><label class="required"><em>*</em>size</label></dt>

                                                <div class="size-price">
                                                    <input type="checkbox" name="channelcost" value="10.00" onClick="test(this);" /> <label>black  <span> <em>+</em>$10.00</span></label> <br />
                                                    <input type="checkbox" name="channelcost" value="30.00" onClick="test(this);" /> <label>brown  <span> <em>+</em>$30.00</span></label> <br />
                                                    <input type="checkbox" name="channelcost" value="50.00" onClick="test(this);" /> <label>gray  <span> <em>+</em>$50.00</span></label> <br />    
                                                </div>  

                                            </div>                        
                                            <div class="product-options-bottom"> 
                                                <div class="add-to-cart">
                                                    <label for="qty">Qty:</label>

                                                </div>
                                                <div class="input-content">
                                                    <div class="box-qty">
                                                        <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
                                                        <div class="qty-arrows">
                                                            <input type="button" class="qty-increase" onclick="var qty_el = document.getElementById('qty');
                                                                    var qty = qty_el.value;
                                                                    if (!isNaN(qty))
                                                                        qty_el.value++;
                                                                    return false;" style="background-position: inherit">
                                                            <input type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if (!isNaN(qty) & amp; & amp; qty > 0) qty_el.value--; return false;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" title="Add to Cart" id="product-addtocart-button" class="button btn-cart" onclick="productAddToCartForm.submit(this)"><span>Add to Cart</span></button>

                                            </div>
                                            <div class="email-addto-box"> 
                                                <p class="email-friend"><a href="#">Email to a Friend</a></p>
                                                <ul class="add-to-links">
                                                    <li><a href="#" onclick="productAddToCartForm.submitLight(this, this.href);
                                                            return false;" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><span class="separator">|</span> <a href="#" class="link-compare">Add to Compare</a></li>
                                                </ul>
                                            </div>
                                            <div class="tabberlive">
                                                <ul class="tabbernav_product nav-pills  ">
                                                    <li class="active"><a   data-toggle="tab" title="tab_product" href="#newproducts"  data-text="Latest">DELIVERY</a></li>
                                                    <li><a  data-toggle="tab"  title="tab_product" href="#newproducts2"  data-text="Best Seller">SHIPPING</a></li>
                                                    <li><a  data-toggle="tab"  title="tab_product" href="#newproducts3"  data-text="Special">SIZEGUIDE</a></li>

                                                </ul>
                                                <div class="tabs-live">
                                                    <div class="tab-content" >
                                                        <div id="newproducts" class="tab-pane fade in active ">                                    
                                                            <p>LOVE are renowned for their cute as a button skater Floral Woven Skater Dress is no exception! Flower power and Japanese print influences are big news.</p>                                   
                                                        </div>
                                                        <div id="newproducts2" class="tab-pane fade  ">                                 
                                                            <p><span> <strong>About Me :</strong> </span> LOVE are renowned for their cute as a button skater Floral Woven Skater Dress is no exception! Flower power and Japanese print influences are big news. <br> <br> <span> <strong>Composition :</strong> 100% POLYESTER </span> <br> <span> <strong>Example Shown :</strong> SIZE XS, Hem to Hem 84cm OR 33 ' </span></p>                                  
                                                        </div>
                                                        <div id="newproducts3" class="tab-pane fade  ">                                   
                                                            <table class="size_guide_table data-table">
                                                                <thead>
                                                                    <tr><th>Size</th><th>S</th><th>M</th><th>L</th><th>XL</th></tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Men</td>
                                                                        <td>7-10</td>
                                                                        <td>10-13</td>
                                                                        <td>13-15</td>
                                                                        <td>15-17</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Women</td>
                                                                        <td>7-9</td>
                                                                        <td>10-12</td>
                                                                        <td>13-14</td>
                                                                        <td>15-16</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="product-collateral"> 
                                <ul class="tabbernav_product2 nav-pills  ">
                                    <li class="active"><a   data-toggle="tab" title="tab_product" href="#newproducts4"  data-text="Latest"><span>Product Description</span></a></li>
                                    <li><a  data-toggle="tab"  title="tab_product" href="#newproducts5"  data-text="Best Seller"><span>Product's Review</span></a></li>
                                    <li><a  data-toggle="tab"  title="tab_product" href="#newproducts6"  data-text="Special"><span>Product Tags</span></a></li>
                                    <li><a  data-toggle="tab"  title="tab_product" href="#newproducts7"  data-text="Special"><span>CMS tab</span></a></li>
                                </ul>
                                <div class="tabs">
                                    <div class="tab-content" >
                                        <div id="newproducts4" class="tab-pane fade in active ">                                    
                                            <p><strong>Sample Lorem Ipsum Text</strong></p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo,
                                                eget vulputate orci purus ut lorem. In fringilla mi in ligula.
                                                Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, 
                                                aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. 
                                                Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, 
                                                sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a</p>
                                            <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which has since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                        </div>
                                        <div id="newproducts5" class="tab-pane fade  ">                                 
                                            <div class="review">

                                                <h2>Write Your Own Review</h2>
                                                <form action="http://magento.templatemela.com/MAG241/MAG100215_3/index.php/review/product/post/id/88/" method="post" id="review-form">
                                                    <input name="form_key" type="hidden" value="uOYN1YASBd0l6TPz">
                                                    <fieldset class="">
                                                        <h3>You're reviewing: <span>Arcu vitae imperdiet simply</span></h3>
                                                        <h4>How do you rate this product? <em class="required">*</em></h4>
                                                        <span id="input-message-box"></span>
                                                        <table class="data-table" id="product-review-table">
                                                            <colgroup><col>
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                            </colgroup><thead>
                                                                <tr class="first last">
                                                                    <th>&nbsp;</th>
                                                                    <th><span class="nobr">1 star</span></th>
                                                                    <th><span class="nobr">2 stars</span></th>
                                                                    <th><span class="nobr">3 stars</span></th>
                                                                    <th><span class="nobr">4 stars</span></th>
                                                                    <th><span class="nobr">5 stars</span></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="first odd">
                                                                    <th>Price</th>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[3]" id="Price_1" value="11" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[3]" id="Price_2" value="12" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[3]" id="Price_3" value="13" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio tm-selected"><input type="radio" name="ratings[3]" id="Price_4" value="14" class="radio tm-hide"></div></td>
                                                                    <td class="value last"><div class="tm-radio"><input type="radio" name="ratings[3]" id="Price_5" value="15" class="radio tm-hide"></div></td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <th>Value</th>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[2]" id="Value_1" value="6" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[2]" id="Value_2" value="7" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[2]" id="Value_3" value="8" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[2]" id="Value_4" value="9" class="radio tm-hide"></div></td>
                                                                    <td class="value last"><div class="tm-radio"><input type="radio" name="ratings[2]" id="Value_5" value="10" class="radio tm-hide"></div></td>
                                                                </tr>
                                                                <tr class="last odd">
                                                                    <th>Quality</th>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio tm-hide"></div></td>
                                                                    <td class="value last"><div class="tm-radio"><input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio tm-hide"></div></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <input type="hidden" name="validate_rating" class="validate-rating" value="">
                                                        <!-- <script type="text/javascript">decorateTable('product-review-table')</script> -->
                                                        <ul class="form-list">
                                                            <li>
                                                                <label for="nickname_field" class="required">Nickname<em>*</em></label>
                                                                <div class="input-box">
                                                                    <input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label for="summary_field" class="required">Summary of Your Review<em>*</em></label>
                                                                <div class="input-box">
                                                                    <input type="text" name="title" id="summary_field" class="input-text required-entry" value="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label for="review_field" class="required">Review<em>*</em></label>
                                                                <div class="input-box">
                                                                    <textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </fieldset>
                                                    <div class="buttons-set">
                                                        <button type="submit" title="Submit Review" class="button"><span>Submit Review</span></button>
                                                    </div>
                                                </form>

                                            </div>                                                                  
                                        </div>
                                        <div id="newproducts6" class="tab-pane fade  ">
                                            <div class="box-tags">
                                                <div class="form-add">
                                                    <label for="productTagName">Add Your Tags:</label>
                                                    <div class="input-box">
                                                        <input type="text" class="input-text required-entry" name="productTagName" id="productTagName">
                                                    </div>
                                                    <button type="button" title="Add Tags" class="button" onclick="submitTagForm()"><span>Add Tags</span></button>
                                                </div>        
                                                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                            </div>   
                                        </div>
                                        <div id="newproducts7" class="tab-pane fade  ">                                   
                                            <div class="std">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.</div>                                  
                                        </div>
                                    </div>
                                </div> 
                                <div class="padder">                  
                                    <div id="product_tabs_description_tabbed_contents">
                                        <div class="detail_collap">
                                            <button type="button" class="btn" data-toggle="collapse" data-target="#decription">Product Description
                                                <h5 class="mobile_togglemenu">&nbsp;</h5>
                                            </button>
                                        </div>
                                        <div id="decription" class="collapse">
                                            <div class="c_decription">
                                                <p><strong>Sample Lorem Ipsum Text</strong></p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo,
                                                    eget vulputate orci purus ut lorem. In fringilla mi in ligula.
                                                    Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, 
                                                    aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. 
                                                    Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, 
                                                    sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a</p>
                                                <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which has since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                            </div>
                                        </div>
                                    </div>              
                                    <div id="product_tabs_review_tabbed_contents">
                                        <div class="detail_collap">
                                            <button type="button" class="btn" data-toggle="collapse" data-target="#review">Product's Review
                                                <h5 class="mobile_togglemenu">&nbsp;</h5>
                                            </button>
                                        </div>
                                        <div id="review" class="collapse">
                                            <div class="c_review">                
                                                <h2>Write Your Own Review</h2>
                                                <form action="http://magento.templatemela.com/MAG241/MAG100215_3/index.php/review/product/post/id/88/" method="post" id="review-form">
                                                    <input name="form_key" type="hidden" value="uOYN1YASBd0l6TPz">
                                                    <fieldset class="">
                                                        <h3>You're reviewing: <span>Arcu vitae imperdiet simply</span></h3>
                                                        <h4>How do you rate this product? <em class="required">*</em></h4>
                                                        <span id="input-message-box"></span>
                                                        <table class="data-table" id="product-review-table">
                                                            <colgroup><col>
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                            </colgroup><thead>
                                                                <tr class="first last">
                                                                    <th>&nbsp;</th>
                                                                    <th><span class="nobr">1 star</span></th>
                                                                    <th><span class="nobr">2 stars</span></th>
                                                                    <th><span class="nobr">3 stars</span></th>
                                                                    <th><span class="nobr">4 stars</span></th>
                                                                    <th><span class="nobr">5 stars</span></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="first odd">
                                                                    <th>Price</th>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[3]" id="Price_1" value="11" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[3]" id="Price_2" value="12" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[3]" id="Price_3" value="13" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio tm-selected"><input type="radio" name="ratings[3]" id="Price_4" value="14" class="radio tm-hide"></div></td>
                                                                    <td class="value last"><div class="tm-radio"><input type="radio" name="ratings[3]" id="Price_5" value="15" class="radio tm-hide"></div></td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <th>Value</th>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[2]" id="Value_1" value="6" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[2]" id="Value_2" value="7" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[2]" id="Value_3" value="8" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[2]" id="Value_4" value="9" class="radio tm-hide"></div></td>
                                                                    <td class="value last"><div class="tm-radio"><input type="radio" name="ratings[2]" id="Value_5" value="10" class="radio tm-hide"></div></td>
                                                                </tr>
                                                                <tr class="last odd">
                                                                    <th>Quality</th>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio tm-hide"></div></td>
                                                                    <td class="value"><div class="tm-radio"><input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio tm-hide"></div></td>
                                                                    <td class="value last"><div class="tm-radio"><input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio tm-hide"></div></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <input type="hidden" name="validate_rating" class="validate-rating" value="">
                                                        <!-- <script type="text/javascript">decorateTable('product-review-table')</script> -->
                                                        <ul class="form-list">
                                                            <li>
                                                                <label for="nickname_field" class="required">Nickname<em>*</em></label>
                                                                <div class="input-box">
                                                                    <input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label for="summary_field" class="required">Summary of Your Review<em>*</em></label>
                                                                <div class="input-box">
                                                                    <input type="text" name="title" id="summary_field" class="input-text required-entry" value="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label for="review_field" class="required">Review<em>*</em></label>
                                                                <div class="input-box">
                                                                    <textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </fieldset>
                                                    <div class="buttons-set">
                                                        <button type="submit" title="Submit Review" class="button"><span>Submit Review</span></button>
                                                    </div>
                                                </form>

                                            </div> 
                                        </div>
                                    </div>                   
                                    <div id="product_tabs_tags_tabbed_contents">
                                        <div class="detail_collap">
                                            <button type="button" class="btn" data-toggle="collapse" data-target="#tags">Product Tags
                                                <h5 class="mobile_togglemenu">&nbsp;</h5>
                                            </button>
                                        </div>
                                        <div id="tags" class="collapse">
                                            <div class="c_tags">
                                                <div class="box-tags">
                                                    <div class="form-add">
                                                        <label for="productTagName">Add Your Tags:</label>
                                                        <div class="input-box">
                                                            <input type="text" class="input-text required-entry" name="productTagName" id="productTagName">
                                                        </div>
                                                        <button type="button" title="Add Tags" class="button" onclick="submitTagForm()"><span>Add Tags</span></button>
                                                    </div>        
                                                    <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>                  
                                    <div id="product_tabs_cms_contents">
                                        <div class="detail_collap">
                                            <button type="button" class="btn" data-toggle="collapse" data-target="#tab">CMS tab
                                                <h5 class="mobile_togglemenu">&nbsp;</h5>
                                            </button>
                                        </div>
                                        <div id="tab" class="collapse">
                                            <div class="c_tab">
                                                <div class="std">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.</div>
                                            </div>
                                        </div>
                                    </div>                   
                                </div>

                                <div class="clear"></div>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="type_b_chitiet_2">
                    <div class="container content">
                        <div class="row">
                            <div class="tabberlive_outer_sub">
                                <div class="tabbernav_product_sub ">
                                    <div class="row">
                                        <div class="tabs">
                                            <div class="tab-content" >
                                                <div id="newproducts" class="tab-pane fade in active ">
                                                    <div class="new-products">
                                                        <div class="new-products-inner">
                                                            <div class="related product-outer">
                                                                <div class=" caltegory-title">
                                                                    <h2> related Products </h2>
                                                                </div>
                                                            </div>
                                                            <div  class="carousel slide " id="myCarousel2" > 
                                                                <ul class="product-carousel" style="opacity: 0;display: block;margin-left: -25px; ">
                                                                    <div class="slider-wrapper-outer">
                                                                        <div class="slider-wrapper" style="width: 100%;display: block">
                                                                            <div class="carousel-inner">
                                                                                <div class="item active">
                                                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                                                        <li class="item   " style="width:  100%;">
                                                                                            <div class="product-block" style="height: auto;">
                                                                                                <div class="product-block-inner">
                                                                                                    <div class="product-image-block-inner">
                                                                                                        <div class="product-image-block">
                                                                                                            <a href="#" title="youthful elegance and unmistakable" class="product-image">
                                                                                                                <img   src="images/1.jpg" alt="">
                                                                                                                <img class="hover-image" src="images/1_1.jpg"  alt="youthful elegance and unmistakable">
                                                                                                            </a>
                                                                                                            <div class="product_hover-block">
                                                                                                                <div class="actions">
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                                                                        <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="product_desc">
                                                                                                        <h2 class="product-name"><a href="#" title="youthful elegance and unmistakable">youthful elegance and unmistakable</a></h2>
                                                                                                        <div class="price-box">
                                                                                                            <span class=" old-price"> $664.00</span>        

                                                                                                            <span class="price">$523.00</span> 
                                                                                                        </div>
                                                                                                        <div class="ratings">
                                                                                                            <div class="rating-box">
                                                                                                                <div class="rating" style="width:0%"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- End div class product-block-->
                                                                                            </div>
                                                                                            <!-- End div class product-block-inner -->
                                                                                        </li>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-6 hidden3">
                                                                                        <li class="item   " style="width:  100%;">
                                                                                            <div class="product-block" style="height: auto;">
                                                                                                <div class="product-block-inner">
                                                                                                    <div class="product-image-block-inner">
                                                                                                        <div class="product-image-block">

                                                                                                            <a href="#" title="standard  passage Lorem Ipsum" class="product-image">
                                                                                                                <img   src="images/2.jpg" alt="">
                                                                                                                <img class="hover-image" src="images/2_2.jpg"  alt="standard  passage Lorem Ipsum">
                                                                                                            </a>
                                                                                                            <div class="product_hover-block">
                                                                                                                <div class="actions">
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                                                                        <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="product_desc">
                                                                                                        <h2 class="product-name"><a href="#" title="standard  passage Lorem Ipsum">standard  passage Lorem Ipsum</a></h2>
                                                                                                        <div class="price-box">
                                                                                                            <span class=" old-price"> $863.00</span>        

                                                                                                            <span class="price">$789.00</span>
                                                                                                        </div>
                                                                                                        <div class="ratings">
                                                                                                            <div class="rating-box">
                                                                                                                <div class="rating" style="width:0%"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- End div class product-block-->
                                                                                            </div>
                                                                                            <!-- End div class product-block-inner -->
                                                                                        </li>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-6 hidden2">
                                                                                        <li class="item   " style="width:  100%;">
                                                                                            <div class="product-block" style="height: auto;">
                                                                                                <div class="product-block-inner">
                                                                                                    <div class="product-image-block-inner">
                                                                                                        <div class="product-image-block">

                                                                                                            <a href="#" title="Ifashion ipsum dolor amet" class="product-image">
                                                                                                                <img   src="images/3.jpg" alt="">
                                                                                                                <img class="hover-image" src="images/3_3.jpg"  alt="Ifashion ipsum dolor amet">
                                                                                                            </a>
                                                                                                            <div class="product_hover-block">
                                                                                                                <div class="actions">
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
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
                                                                                                            <span class="regular-price" >
                                                                                                                <span class="price">$689.00</span> </span>
                                                                                                        </div>
                                                                                                        <div class="ratings">
                                                                                                            <div class="rating-box">
                                                                                                                <div class="rating" style="width:0%"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- End div class product-block-->
                                                                                            </div>
                                                                                            <!-- End div class product-block-inner -->
                                                                                        </li>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="item ">
                                                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                                                        <li class="item   " style="width:  100%;">
                                                                                            <div class="product-block" style="height: auto;">
                                                                                                <div class="product-block-inner">
                                                                                                    <div class="product-image-block-inner">
                                                                                                        <div class="product-image-block">
                                                                                                            <a href="#" title="youthful elegance and unmistakable" class="product-image">
                                                                                                                <img   src="images/1.jpg" alt="">
                                                                                                                <img class="hover-image" src="images/1_1.jpg"  alt="youthful elegance and unmistakable">
                                                                                                            </a>
                                                                                                            <div class="product_hover-block">
                                                                                                                <div class="actions">
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                                                                        <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="product_desc">
                                                                                                        <h2 class="product-name"><a href="#" title="youthful elegance and unmistakable">youthful elegance and unmistakable</a></h2>
                                                                                                        <div class="price-box">
                                                                                                            <span class=" old-price"> $664.00</span>        

                                                                                                            <span class="price">$523.00</span> 
                                                                                                        </div>
                                                                                                        <div class="ratings">
                                                                                                            <div class="rating-box">
                                                                                                                <div class="rating" style="width:0%"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- End div class product-block-->
                                                                                            </div>
                                                                                            <!-- End div class product-block-inner -->
                                                                                        </li>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-6 hidden3">
                                                                                        <li class="item   " style="width:  100%;">
                                                                                            <div class="product-block" style="height: auto;">
                                                                                                <div class="product-block-inner">
                                                                                                    <div class="product-image-block-inner">
                                                                                                        <div class="product-image-block">

                                                                                                            <a href="#" title="standard  passage Lorem Ipsum" class="product-image">
                                                                                                                <img   src="images/2.jpg" alt="">
                                                                                                                <img class="hover-image" src="images/2_2.jpg"  alt="standard  passage Lorem Ipsum">
                                                                                                            </a>
                                                                                                            <div class="product_hover-block">
                                                                                                                <div class="actions">
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                                                                        <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="product_desc">
                                                                                                        <h2 class="product-name"><a href="#" title="standard  passage Lorem Ipsum">standard  passage Lorem Ipsum</a></h2>
                                                                                                        <div class="price-box">
                                                                                                            <span class=" old-price"> $863.00</span>        

                                                                                                            <span class="price">$789.00</span>
                                                                                                        </div>
                                                                                                        <div class="ratings">
                                                                                                            <div class="rating-box">
                                                                                                                <div class="rating" style="width:0%"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- End div class product-block-->
                                                                                            </div>
                                                                                            <!-- End div class product-block-inner -->
                                                                                        </li>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-6 hidden2">
                                                                                        <li class="item   " style="width:  100%;">
                                                                                            <div class="product-block" style="height: auto;">
                                                                                                <div class="product-block-inner">
                                                                                                    <div class="product-image-block-inner">
                                                                                                        <div class="product-image-block">

                                                                                                            <a href="#" title="Ifashion ipsum dolor amet" class="product-image">
                                                                                                                <img   src="images/3.jpg" alt="">
                                                                                                                <img class="hover-image" src="images/3_3.jpg"  alt="Ifashion ipsum dolor amet">
                                                                                                            </a>
                                                                                                            <div class="product_hover-block">
                                                                                                                <div class="actions">
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
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
                                                                                                            <span class="regular-price" >
                                                                                                                <span class="price">$689.00</span> </span>
                                                                                                        </div>
                                                                                                        <div class="ratings">
                                                                                                            <div class="rating-box">
                                                                                                                <div class="rating" style="width:0%"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- End div class product-block-->
                                                                                            </div>
                                                                                            <!-- End div class product-block-inner -->
                                                                                        </li>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item ">
                                                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                                                        <li class="item   " style="width:  100%;">
                                                                                            <div class="product-block" style="height: auto;">
                                                                                                <div class="product-block-inner">
                                                                                                    <div class="product-image-block-inner">
                                                                                                        <div class="product-image-block">
                                                                                                            <a href="#" title="youthful elegance and unmistakable" class="product-image">
                                                                                                                <img   src="images/1.jpg" alt="">
                                                                                                                <img class="hover-image" src="images/1_1.jpg"  alt="youthful elegance and unmistakable">
                                                                                                            </a>
                                                                                                            <div class="product_hover-block">
                                                                                                                <div class="actions">
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                                                                        <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="product_desc">
                                                                                                        <h2 class="product-name"><a href="#" title="youthful elegance and unmistakable">youthful elegance and unmistakable</a></h2>
                                                                                                        <div class="price-box">
                                                                                                            <span class=" old-price"> $664.00</span>        

                                                                                                            <span class="price">$523.00</span> 
                                                                                                        </div>
                                                                                                        <div class="ratings">
                                                                                                            <div class="rating-box">
                                                                                                                <div class="rating" style="width:0%"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- End div class product-block-->
                                                                                            </div>
                                                                                            <!-- End div class product-block-inner -->
                                                                                        </li>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-6 hidden3">
                                                                                        <li class="item   " style="width:  100%;">
                                                                                            <div class="product-block" style="height: auto;">
                                                                                                <div class="product-block-inner">
                                                                                                    <div class="product-image-block-inner">
                                                                                                        <div class="product-image-block">

                                                                                                            <a href="#" title="standard  passage Lorem Ipsum" class="product-image">
                                                                                                                <img   src="images/2.jpg" alt="">
                                                                                                                <img class="hover-image" src="images/2_2.jpg"  alt="standard  passage Lorem Ipsum">
                                                                                                            </a>
                                                                                                            <div class="product_hover-block">
                                                                                                                <div class="actions">
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                                                                        <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="product_desc">
                                                                                                        <h2 class="product-name"><a href="#" title="standard  passage Lorem Ipsum">standard  passage Lorem Ipsum</a></h2>
                                                                                                        <div class="price-box">
                                                                                                            <span class=" old-price"> $863.00</span>        

                                                                                                            <span class="price">$789.00</span>
                                                                                                        </div>
                                                                                                        <div class="ratings">
                                                                                                            <div class="rating-box">
                                                                                                                <div class="rating" style="width:0%"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- End div class product-block-->
                                                                                            </div>
                                                                                            <!-- End div class product-block-inner -->
                                                                                        </li>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-6 hidden2">
                                                                                        <li class="item   " style="width:  100%;">
                                                                                            <div class="product-block" style="height: auto;">
                                                                                                <div class="product-block-inner">
                                                                                                    <div class="product-image-block-inner">
                                                                                                        <div class="product-image-block">

                                                                                                            <a href="#" title="Ifashion ipsum dolor amet" class="product-image">
                                                                                                                <img   src="images/3.jpg" alt="">
                                                                                                                <img class="hover-image" src="images/3_3.jpg"  alt="Ifashion ipsum dolor amet">
                                                                                                            </a>
                                                                                                            <div class="product_hover-block">
                                                                                                                <div class="actions">
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
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
                                                                                                            <span class="regular-price" >
                                                                                                                <span class="price">$689.00</span> </span>
                                                                                                        </div>
                                                                                                        <div class="ratings">
                                                                                                            <div class="rating-box">
                                                                                                                <div class="rating" style="width:0%"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- End div class product-block-->
                                                                                            </div>
                                                                                            <!-- End div class product-block-inner -->
                                                                                        </li>
                                                                                    </div>   
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </ul>
                                                                <div class="dichuyen">
                                                                    <a class="prev1" href="#myCarousel2" data-slide="prev">‹</a>
                                                                    <a class="next2" href="#myCarousel2" data-slide="next">›</a>
                                                                </div>

                                                            </div>
                                                        </div>                                           
                                                    </div>

                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                            <!--------------------------->
                            <div class="tabs">
                                <div class="tab-content" >
                                    <div id="newproducts" class="tab-pane fade in active ">

                                        <div class="new-products">
                                            <div class="new-products-inner">
                                                <div class="related product-outer">
                                                    <div class="box-collateral">
                                                        <div class=" caltegory-title">
                                                            <h2> You may also be interested in the following product(s) </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div  class="carousel slide " id="myCarousel1" > 
                                                    <ul class="product-carousel" style="opacity: 0;display: block;margin-left: -25px; ">
                                                        <div class="slider-wrapper-outer">
                                                            <div class="slider-wrapper" style="width: 100%;display: block">
                                                                <div class="carousel-inner">
                                                                    <div class="item active">
                                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                                            <li class="item   " style="width:  100%;">
                                                                                <div class="product-block" style="height: auto;">
                                                                                    <div class="product-block-inner">
                                                                                        <div class="product-image-block-inner">
                                                                                            <div class="product-image-block">

                                                                                                <a href="#" title="youthful elegance and unmistakable" class="product-image">
                                                                                                    <img   src="images/3_3.jpg" alt="">
                                                                                                    <img class="hover-image" src="images/3.jpg"  alt="youthful elegance and unmistakable">
                                                                                                </a>
                                                                                                <div class="product_hover-block">
                                                                                                    <div class="actions">
                                                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
                                                                                                        <ul class="add-to-links">
                                                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="product_desc">
                                                                                            <h2 class="product-name"><a href="#" title="youthful elegance and unmistakable">youthful elegance and unmistakable</a></h2>
                                                                                            <div class="price-box">
                                                                                                <span class=" old-price"> $664.00</span>        

                                                                                                <span class="price">$523.00</span> 
                                                                                            </div>
                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">
                                                                                                    <div class="rating" style="width:0%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End div class product-block-->
                                                                                </div>
                                                                                <!-- End div class product-block-inner -->
                                                                            </li>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-6 hidden3">
                                                                            <li class="item   " style="width:  100%;">
                                                                                <div class="product-block" style="height: auto;">
                                                                                    <div class="product-block-inner">
                                                                                        <div class="product-image-block-inner">
                                                                                            <div class="product-image-block">

                                                                                                <a href="#" title="established fact variations of passages" class="product-image">
                                                                                                    <img   src="images/1_1.jpg" alt="">
                                                                                                    <img class="hover-image" src="images/1.jpg"  alt="established fact variations of passages">
                                                                                                </a>
                                                                                                <div class="product_hover-block">
                                                                                                    <div class="actions">
                                                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
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
                                                                                                <span class="regular-price" >
                                                                                                    <span class="price">$498.00</span> </span>
                                                                                            </div>
                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">
                                                                                                    <div class="rating" style="width:0%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End div class product-block-->
                                                                                </div>
                                                                                <!-- End div class product-block-inner -->
                                                                            </li>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-6 hidden2">
                                                                            <li class="item   " style="width:  100%;">
                                                                                <div class="product-block" style="height: auto;">
                                                                                    <div class="product-block-inner">
                                                                                        <div class="product-image-block-inner">
                                                                                            <div class="product-image-block">

                                                                                                <a href="#" title="consectetur adipiscing Ipsum available" class="product-image">
                                                                                                    <img   src="images/2.jpg" alt="">
                                                                                                    <img class="hover-image" src="images/2_2.jpg"  alt="consectetur adipiscing Ipsum available">
                                                                                                </a>
                                                                                                <div class="product_hover-block">
                                                                                                    <div class="actions">
                                                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
                                                                                                        <ul class="add-to-links">
                                                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="product_desc">
                                                                                            <h2 class="product-name"><a href="#" title="consectetur adipiscing Ipsum available">consectetur adipiscing Ipsum available</a></h2>
                                                                                            <div class="price-box">
                                                                                                <span class="regular-price" >
                                                                                                    <span class="price">$444.00</span> </span>
                                                                                            </div>
                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">
                                                                                                    <div class="rating" style="width:0%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End div class product-block-->
                                                                                </div>
                                                                                <!-- End div class product-block-inner -->
                                                                            </li>
                                                                        </div>

                                                                    </div>
                                                                    <div class="item ">
                                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                                            <li class="item   " style="width:  100%;">
                                                                                <div class="product-block" style="height: auto;">
                                                                                    <div class="product-block-inner">
                                                                                        <div class="product-image-block-inner">
                                                                                            <div class="product-image-block">

                                                                                                <a href="#" title="youthful elegance and unmistakable" class="product-image">
                                                                                                    <img   src="images/3_3.jpg" alt="">
                                                                                                    <img class="hover-image" src="images/3.jpg"  alt="youthful elegance and unmistakable">
                                                                                                </a>
                                                                                                <div class="product_hover-block">
                                                                                                    <div class="actions">
                                                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
                                                                                                        <ul class="add-to-links">
                                                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="product_desc">
                                                                                            <h2 class="product-name"><a href="#" title="youthful elegance and unmistakable">youthful elegance and unmistakable</a></h2>
                                                                                            <div class="price-box">
                                                                                                <span class=" old-price"> $664.00</span>        

                                                                                                <span class="price">$523.00</span> 
                                                                                            </div>
                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">
                                                                                                    <div class="rating" style="width:0%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End div class product-block-->
                                                                                </div>
                                                                                <!-- End div class product-block-inner -->
                                                                            </li>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-6 hidden3">
                                                                            <li class="item   " style="width:  100%;">
                                                                                <div class="product-block" style="height: auto;">
                                                                                    <div class="product-block-inner">
                                                                                        <div class="product-image-block-inner">
                                                                                            <div class="product-image-block">

                                                                                                <a href="#" title="established fact variations of passages" class="product-image">
                                                                                                    <img   src="images/1_1.jpg" alt="">
                                                                                                    <img class="hover-image" src="images/1.jpg"  alt="established fact variations of passages">
                                                                                                </a>
                                                                                                <div class="product_hover-block">
                                                                                                    <div class="actions">
                                                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
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
                                                                                                <span class="regular-price" >
                                                                                                    <span class="price">$498.00</span> </span>
                                                                                            </div>
                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">
                                                                                                    <div class="rating" style="width:0%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End div class product-block-->
                                                                                </div>
                                                                                <!-- End div class product-block-inner -->
                                                                            </li>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-6 hidden2">
                                                                            <li class="item   " style="width:  100%;">
                                                                                <div class="product-block" style="height: auto;">
                                                                                    <div class="product-block-inner">
                                                                                        <div class="product-image-block-inner">
                                                                                            <div class="product-image-block">

                                                                                                <a href="#" title="consectetur adipiscing Ipsum available" class="product-image">
                                                                                                    <img   src="images/2.jpg" alt="">
                                                                                                    <img class="hover-image" src="images/2_2.jpg"  alt="consectetur adipiscing Ipsum available">
                                                                                                </a>
                                                                                                <div class="product_hover-block">
                                                                                                    <div class="actions">
                                                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
                                                                                                        <ul class="add-to-links">
                                                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="product_desc">
                                                                                            <h2 class="product-name"><a href="#" title="consectetur adipiscing Ipsum available">consectetur adipiscing Ipsum available</a></h2>
                                                                                            <div class="price-box">
                                                                                                <span class="regular-price" >
                                                                                                    <span class="price">$444.00</span> </span>
                                                                                            </div>
                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">
                                                                                                    <div class="rating" style="width:0%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End div class product-block-->
                                                                                </div>
                                                                                <!-- End div class product-block-inner -->
                                                                            </li>
                                                                        </div>

                                                                    </div>
                                                                    <div class="item ">
                                                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                                                            <li class="item   " style="width:  100%;">
                                                                                <div class="product-block" style="height: auto;">
                                                                                    <div class="product-block-inner">
                                                                                        <div class="product-image-block-inner">
                                                                                            <div class="product-image-block">

                                                                                                <a href="#" title="youthful elegance and unmistakable" class="product-image">
                                                                                                    <img   src="images/3_3.jpg" alt="">
                                                                                                    <img class="hover-image" src="images/3.jpg"  alt="youthful elegance and unmistakable">
                                                                                                </a>
                                                                                                <div class="product_hover-block">
                                                                                                    <div class="actions">
                                                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
                                                                                                        <ul class="add-to-links">
                                                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="product_desc">
                                                                                            <h2 class="product-name"><a href="#" title="youthful elegance and unmistakable">youthful elegance and unmistakable</a></h2>
                                                                                            <div class="price-box">
                                                                                                <span class=" old-price"> $664.00</span>        

                                                                                                <span class="price">$523.00</span> 
                                                                                            </div>
                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">
                                                                                                    <div class="rating" style="width:0%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End div class product-block-->
                                                                                </div>
                                                                                <!-- End div class product-block-inner -->
                                                                            </li>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-6 hidden3">
                                                                            <li class="item   " style="width:  100%;">
                                                                                <div class="product-block" style="height: auto;">
                                                                                    <div class="product-block-inner">
                                                                                        <div class="product-image-block-inner">
                                                                                            <div class="product-image-block">

                                                                                                <a href="#" title="established fact variations of passages" class="product-image">
                                                                                                    <img   src="images/1_1.jpg" alt="">
                                                                                                    <img class="hover-image" src="images/1.jpg"  alt="established fact variations of passages">
                                                                                                </a>
                                                                                                <div class="product_hover-block">
                                                                                                    <div class="actions">
                                                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
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
                                                                                                <span class="regular-price" >
                                                                                                    <span class="price">$498.00</span> </span>
                                                                                            </div>
                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">
                                                                                                    <div class="rating" style="width:0%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End div class product-block-->
                                                                                </div>
                                                                                <!-- End div class product-block-inner -->
                                                                            </li>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-6 hidden2">
                                                                            <li class="item   " style="width:  100%;">
                                                                                <div class="product-block" style="height: auto;">
                                                                                    <div class="product-block-inner">
                                                                                        <div class="product-image-block-inner">
                                                                                            <div class="product-image-block">

                                                                                                <a href="#" title="consectetur adipiscing Ipsum available" class="product-image">
                                                                                                    <img   src="images/2.jpg" alt="">
                                                                                                    <img class="hover-image" src="images/2_2.jpg"  alt="consectetur adipiscing Ipsum available">
                                                                                                </a>
                                                                                                <div class="product_hover-block">
                                                                                                    <div class="actions">
                                                                                                        <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#')"><span>Add to Cart</span></button>
                                                                                                        <ul class="add-to-links">
                                                                                                            <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                                                            <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="product_desc">
                                                                                            <h2 class="product-name"><a href="#" title="consectetur adipiscing Ipsum available">consectetur adipiscing Ipsum available</a></h2>
                                                                                            <div class="price-box">
                                                                                                <span class="regular-price" >
                                                                                                    <span class="price">$444.00</span> </span>
                                                                                            </div>
                                                                                            <div class="ratings">
                                                                                                <div class="rating-box">
                                                                                                    <div class="rating" style="width:0%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End div class product-block-->
                                                                                </div>
                                                                                <!-- End div class product-block-inner -->
                                                                            </li>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </ul>
                                                    <div class="dichuyen">
                                                        <a class="prev3" href="#myCarousel1" data-slide="prev">‹</a>
                                                        <a class="next4" href="#myCarousel1" data-slide="next">›</a>
                                                    </div>

                                                </div>
                                            </div>                                           
                                        </div>

                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-----------<---------------->

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

    <!--------------------------->




    <!--------------------------->





</body>



