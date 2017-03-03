<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-b-danhmuc1.less', 'css/type-b-danhmuc1.css');
        ?>
        <link href="css/type-b-danhmuc1.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
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
                                    <a href="#">Home</a> / <a href="#"> clothing</a>
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
                    <div class="type-b-danhmuc2">
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
                        <!--=====Shop By=====-->
                        <div class="shopby">
                            <h4>SHOP BY </h4>
                            <div class="catogeri">
                                <ul class="menushohby">
                                    <li><a href="#" class="active">Category</a></li>
                                    <li><a href="#">bottomwear <span class="number">(17)</span></a></li>
                                    <li><a href="#">Topwear <span class="number">(17)</span></a></li> 
                                    <li><a href="#">Clothing Style <span class="number">(17)</span></a></li> 
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="color">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bg">
                                            <img src="images/black.png" alt=""/>
                                            <span>(7)</span>
                                        </div>
                                        <div class="bg">
                                            <img src="images/brown.png" alt=""/>
                                            <span>(3)</span>
                                        </div>
                                        <div class="bg">
                                            <img src="images/green.png" alt=""/>
                                            <span>(2)</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg">
                                            <img src="images/blue.png" alt=""/>
                                            <span>(3)</span>
                                        </div>
                                        <div class="bg">
                                            <img src="images/gray.png" alt=""/>
                                            <span>(4)</span>
                                        </div>
                                        <div class="bg">
                                            <img src="images/orange.png" alt=""/>
                                            <span>(2)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <!--phan Manufacturer--->
                            <div class="manufacturer">
                                <ul class="menufacturer">
                                    <li><a href="#" class="active"> Manufacturer</a></li>
                                    <li><a href="#">Airtel <span class="count">(4)</span></a></li>
                                    <li><a href="#">Apple <span class="count">(4)</span></a></li>
                                    <li><a href="#">Docomo <span class="count">(3)</span></a></li>
                                    <li><a href="#">Idea <span class="count">(3)</span></a></li>
                                    <li><a href="#">lenovo <span class="count">(2)</span></a></li>
                                    <li><a href="#">Lorem <span class="count">(1)</span></a></li>
                                    <li><a href="#">Samaung <span class="count">(1)</span></a></li>
                                    <li><a href="#">Vodafone <span class="count">(1)</span></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <!--=====phan price======--->
                            <div class="price">
                                <ul>
                                    <li><a href="#" class="active"> Price</a></li>
                                    <li><a href="#"> <span class="money">$300.00 - $399.99 (5)</span></a></li>
                                    <li><a href="#"><span class="money">$400.00 - $499.99 (1)</span></a></li>
                                    <li><a href="#"><span class="money">$500.00 - $599.99 (3)</span></a></li>
                                    <li><a href="#"><span class="money">$600.00 - $699.99 (2)</span></a></li>
                                    <li><a href="#"><span class="money">$700.00 - $799.99 (1)</span></a></li>
                                    <li><a href="#"><span class="money">$800.00 - $899.99 (4)</span></a></li>
                                    <li><a href="#"><span class="money">$900.00 and above (1)</span></a></li>
                                </ul>
                            </div>
                            <hr>
                            <div class="clearfix"> </div>
                        </div>
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
                            <div class="seeall">
                                see all
                            </div>
                        </div>
                        <hr>
                        <div class="clearfix">
                            <!--======phan image bottom banner----->
                            <div class="image-bottom">
                                <img src="images/left-banner.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="type-b-danhmuc3">
                        <div class="thumb-item">
                            <div class="row">
                                <!--========phan left=========-->
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <div class="cms-left">
                                        <i class="fa fa-th-large" aria-hidden="true"></i>
                                        <i class="fa fa-th-list" aria-hidden="true"></i>
                                        <span>Items 1 to 12 of 17 total</span>
                                    </div>
                                </div>

                                <!--=====phan right========-->
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <div class="cms-right">
                                        <span>Sort By</span>
                                        <select>
                                            <option>Posstion</option>
                                            <option>Namme</option>
                                            <option>price</option>
                                            <option>brand</option>
                                        </select>
                                        <i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                                        <span>Show</span>
                                        <select>
                                            <option>12</option>
                                            <option>24</option>
                                            <option>36</option>
                                        </select>
                                        <span class="numberone">1</span>
                                        <span class="number">2</span>
                                        <span class="glyphicon glyphicon-triangle-right"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="type-b-danhmuc4">
                        <div class="product">
                            <div class="row">
                                 <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="images">
                                        <div class="main-image">
                                            <img src="images/20_11.jpg" alt=""/>
                                        </div>
                                        <div class="sub-image">
                                            <img src="images/21_5.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            ADD TO CART
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thumb">
                                        <div class="arcu"><p>Tenetur Aeta Sapiente Delectus</p></div>
                                        <div class="price">
                                            <span class="money">$455.00</span>
                                        </div>
                                        <div class="icon-star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="images">
                                        <div class="main-image">
                                            <img src="images/20_11.jpg" alt=""/>
                                        </div>
                                        <div class="sub-image">
                                            <img src="images/21_5.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            ADD TO CART
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thumb">
                                        <div class="arcu"><p>Tenetur Aeta Sapiente Delectus</p></div>
                                        <div class="price">
                                            <span class="money">$455.00</span>
                                        </div>
                                        <div class="icon-star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="images">
                                        <div class="main-image">
                                            <img src="images/19_7.jpg" alt=""/>
                                        </div>
                                        <div class="sub-image">
                                            <img src="images/20_11.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            ADD TO CART
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thumb">
                                        <div class="arcu"><p>Suspendisse Massa Ipsum Random</p></div>
                                        <div class="price">
                                            <span class="money-860"> $358.00 </span><span class="money">$800.00</span>
                                        </div>
                                        <div class="icon-star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="images">
                                        <div class="sale">
                                            sale
                                        </div>
                                        <div class="main-image">
                                            <img src="images/15_4_5_1_1.jpg" alt=""/>
                                        </div>
                                        <div class="sub-image">
                                            <img src="images/16_8_1_1.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            ADD TO CART
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thumb">
                                        <div class="arcu"><p>Standard Passage Lorem Ipsum</p></div>
                                        <div class="price">
                                            <span class="money-860"> $774.00 </span><span class="money">$626.00</span>
                                        </div>
                                        <div class="icon-star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="images">
                                        <div class="main-image">
                                            <img src="images/14_4_6_1.jpg" alt=""/>
                                        </div>
                                        <div class="sub-image">
                                            <img src="images/17_1_5_1.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            ADD TO CART
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thumb">
                                        <div class="arcu"><p>Perspiciatis Voluptatem</p></div>
                                        <div class="price">
                                            <span class="money">$784.00</span>
                                        </div>
                                        <div class="icon-star">
                                            <span class="bg-yellow">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="images">
                                        <div class="sale">
                                            sale
                                        </div>
                                        <div class="main-image">
                                            <img src="images/13_4_8.jpg" alt=""/>
                                        </div>
                                        <div class="sub-image">
                                            <img src="images/15_4_5_1_1.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            ADD TO CART
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thumb">
                                        <div class="arcu"><p>Purus Ut Lorem In Fringilla</p></div>
                                        <div class="price">
                                            <span class="money-860"> $465.00 </span><span class="money">$325.00</span>
                                        </div>
                                        <div class="icon-star">
                                            <span class="bg-yellow">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                            <i class="fa fa-star" aria-hidden="true"></i>

                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="images">
                                        <div class="sale">
                                            sale
                                        </div>
                                        <div class="main-image">
                                            <img src="images/12_5_7.jpg" alt=""/>
                                        </div>
                                        <div class="sub-image">
                                            <img src="images/16_8_1_1.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            ADD TO CART
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thumb">
                                        <div class="arcu"><p>Occaecati Cupiditate Non Provident</p></div>
                                        <div class="price">
                                            <span class="money-860"> $684.00 </span><span class="money">$562.00</span>
                                        </div>
                                        <div class="icon-star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="images">
                                        <div class="main-image">
                                            <img src="images/11_5_7.jpg" alt=""/>
                                        </div>
                                        <div class="sub-image">
                                            <img src="images/16_8_1_1.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            ADD TO CART
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thumb">
                                        <div class="arcu"><p>Tenetur Aeta Sapiente Delectus</p></div>
                                        <div class="price">
                                            <span class="money">$875.00</span>
                                        </div>
                                        <div class="icon-star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="images">
                                        <div class="sale">sale</div>
                                        <div class="new">new</div>
                                        <div class="main-image">
                                            <img src="images/10_4_6.jpg" alt=""/>
                                        </div>
                                        <div class="sub-image">
                                            <img src="images/16_8_1_1.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            ADD TO CART
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thumb">
                                        <div class="arcu"><p>Suspendisse Massa Ipsum Random</p></div>
                                        <div class="price">
                                            <span class="money-860"> $1,080.00 </span><span class="money">$900.00</span>
                                        </div>
                                        <div class="icon-star">
                                            <span class="bg-yellow">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                       
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="images">
                                        <div class="sale">
                                            sale
                                        </div>
                                        <div class="new">
                                            new
                                        </div>
                                        <div class="main-image">
                                            <img src="images/2_10.jpg" alt=""/>
                                        </div>
                                        <div class="sub-image">
                                            <img src="images/4_1_3.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            ADD TO CART
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thumb">
                                        <div class="arcu"><p>Lorem Ipsum Dolor Simply Sed</p></div>
                                        <div class="price">
                                            <span class="money-860"> $780.00 </span><span class="money">$680.00</span>
                                        </div>
                                        <div class="icon-star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="clearfix"></div>
                                       

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="images">
                                        <div class="sale">
                                            sale
                                        </div>
                                        <div class="new">
                                            new
                                        </div>
                                        <div class="main-image">
                                            <img src="images/5_6.jpg" alt=""/>
                                        </div>
                                        <div class="sub-image">
                                            <img src="images/21_5.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            ADD TO CART
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thumb">
                                        <div class="arcu"><p>Tenetur Aeta Sapiente Delectus</p></div>
                                        <div class="price">
                                            <span class="money-860"> $400.00 </span><span class="money">$325.00</span>
                                        </div>
                                        <div class="icon-star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="images">
                                        <div class="new">
                                            new
                                        </div>
                                        <div class="main-image">
                                            <img src="images/7_3_4.jpg" alt=""/>
                                        </div>
                                        <div class="sub-image">
                                            <img src="images/17_1_5_1.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            ADD TO CART
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="thumb">
                                        <div class="arcu"><p>Suspendisse Massa Ipsum Random</p></div>
                                        <div class="price">
                                            <span class="money">$300.00</span>
                                        </div>
                                        <div class="icon-star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class="type_b_11">
            <footer class="footer-container">
                <div class="footer-top-outer">
                    <div class="container">
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
    </body>

</html>