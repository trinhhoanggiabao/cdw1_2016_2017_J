<!DOCTYPE html>
<html>

    <head>
        <title>704</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/704.less', 'css/704.css');
        ?> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/704.css" rel="stylesheet" type="text/css"/>

    </head> 

    <body>
        <div class="type-704">
            <div class="zaro">
                <div id="white_background" class="slidelip"> 

                    <div class="container margin-auto header">
                        <div id="header">
                            <figure id="header_logo" class="align-center">
                                <a>
                                    <img class="logo" src="images/logo.jpg" alt="Alysum" width="250" height="72">
                                </a>
                            </figure>

                            <div id="shopping_cart" class="slidelip">
                                <a>
                                    <i class="fa fa-shopping-basket main-color"></i>
                                    <b>Cart:</b>
                                    <span >(empty)</span>
                                </a>
                            </div>

                            <div id="search_box_top" class="slidelip">

                                <input type="text" id="search_query_top" name="search_query" value="" placeholder="Search..."
                                       autocomplete="off" style="background-color: rgb(249, 249, 249);">
                                <button type="submit" name="submit_search" class="search-button slidelip main-bg-hover">
                                    <i class="fa fa-search main-color"></i>
                                </button>

                            </div>

                            <div id="currencies_list" class="dib">

                                <div id="currencyHolder">
                                    <span class="dib smooth02">
                                        <span>Dollar</span>
                                        <i class="fa fa-angle-down"></i>
                                    </span>
                                    <ul class=" zaro-dropdown">
                                        <li class="main-bg-hover">Euro</li>
                                        <li class="main-bg-hover">Pound</li>
                                    </ul>
                                </div>

                            </div>


                            <div id="languages_block_top" class="dib">
                                <div id="countries" class=""> 
                                    <span class="selected_language smooth02">
                                        <figure><img src="images/1.jpg" class="dib" width="16" height="11" alt="en"></figure>
                                        <a class="dib" href="#"> English</a>
                                        <i class="fa fa-angle-down"></i>
                                    </span>
                                    <ul id="first-languages" class="zaro-dropdown" >
                                        <li class="smooth02 main-bg-hover"> 
                                            <figure><img src="images/1.jpg" clasfs="dib" width="16" height="11" alt="de"></figure>
                                            <a href="#" title="Vietnamese">Vietnamese</a>
                                        </li> 

                                        <li class="smooth02 main-bg-hover"> 
                                            <figure><img src="images/1.jpg" class="dib" width="16" height="11" alt="de"></figure>
                                            <a href="#" title="Japan">Japan</a>
                                        </li> 

                                        <li class="smooth02 main-bg-hover"> 
                                            <figure><img src="images/1.jpg" class="dib" width="16" height="11" alt="de"></figure>
                                            <a href="#" title="Korea">Korea</a>
                                        </li>  

                                    </ul>
                                </div>
                            </div>

                            <!--TOP MENU-->
                            <div id="menu_header" class="dib">
                                <ul>
                                    <li class=" dib smooth02 main-bg-hover">
                                        <a href="#" title="My Account"> 
                                            <i class="fa fa-user"></i>
                                            <span>My Account</span>
                                        </a>
                                        <div class="zaro-dropdown main-bg" >
                                            <div class="indent">
                                                <ul>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=" dib smooth02 main-bg-hover">
                                        <a href="#" title="My Wishlist"> 
                                            <i class="fa fa-gift"></i>
                                            <span>My Wishlist (<span class="number">0</span>)</span>
                                        </a>
                                        <div class="zaro-dropdown main-bg" >
                                            <div class="indent">
                                                <ul>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=" dib smooth02 main-bg-hover">
                                        <a href="#" title="My Watchlist"> 
                                            <i class="fa fa-eye"></i>
                                            <span>My Watchlist (<span class="number">0</span>)</span>
                                        </a>
                                        <div class="zaro-dropdown main-bg" >
                                            <div class="indent">
                                                <ul>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                    <li><a href="#" title="My orders" rel="nofollow">My orders</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <!--USER-->
                            <div id="header_user" class="dib">
                                <ul>
                                    <li>
                                        <a href="#" class=" " rel="nofollow">Sign in</a>
                                        or 
                                        <a href="#" class=" ">Register</a>
                                    </li>
                                </ul>
                            </div> 
                        </div>
                    </div>

                    <!--MEGA MENU-->
                    <div class="menu-container">
                        <div class="container margin-auto"> 
                            <div class="mega-menu">
                                <div class="mobileMenuTitle">Menu</div>
                                <ul class="mega-menu-ul">
                                    <li class="dropdown mega-menu-item mega-active">
                                        <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown">
                                            <span>Women</span>
                                        </a>	
                                        <a href="#" class="opener"></a>
                                        <ul class="container margin-auto dropdown-menu mega-dropdown-menu" >
                                            <li class="col-md-2 col-sm-3">
                                                <ul class="first-item">
                                                    <li class="dropdown-header">Men Collection</li>  
                                                    <div class="item active">
                                                        <a href="#">
                                                            <figure>
                                                                <img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive" alt="product 1">
                                                            </figure>
                                                        </a>
                                                    </div>

                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">Dress Anna Sui....</a>
                                                        <span class="price">$309.00</span>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="col-md-10 col-sm-10">
                                                <ul class="full-width">
                                                    <li class="col-md-2 col-sm-3">
                                                        <ul>
                                                            <li class="dropdown-header">Features</li>
                                                            <li><a href="#">Auto Carousel</a></li>
                                                            <li><a href="#">Carousel Control</a></li>
                                                            <li><a href="#">Left & Right Navigation</a></li>
                                                            <li><a href="#">Four Columns Grid</a></li>
                                                            <li class="divider"></li> 
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-2 col-sm-3">
                                                        <ul>
                                                            <li class="dropdown-header">Plus</li>
                                                            <li><a href="#">Navbar Inverse</a></li>
                                                            <li><a href="#">Pull Right Elements</a></li>
                                                            <li><a href="#">Coloured Headers</a></li>                            
                                                            <li><a href="#">Primary Buttons & Default</a></li>							
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-2 col-sm-3">
                                                        <ul>
                                                            <li class="dropdown-header">Much more</li>
                                                            <li><a href="#">Easy to Customize</a></li>
                                                            <li><a href="#">Calls to action</a></li>
                                                            <li><a href="#">Custom Fonts</a></li>
                                                            <li><a href="#">Slide down on Hover</a></li>                         
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-2 col-sm-3">
                                                        <ul>
                                                            <li class="dropdown-header">Much more</li>
                                                            <li><a href="#">Easy to Customize</a></li>
                                                            <li><a href="#">Calls to action</a></li>
                                                            <li><a href="#">Custom Fonts</a></li>
                                                            <li><a href="#">Slide down on Hover</a></li>                         
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-2 col-sm-3">
                                                        <ul>
                                                            <li class="dropdown-header">Much more</li>
                                                            <li><a href="#">Easy to Customize</a></li>
                                                            <li><a href="#">Calls to action</a></li>
                                                            <li><a href="#">Custom Fonts</a></li>
                                                            <li><a href="#">Slide down on Hover</a></li>                         
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="col-md-10 col-sm-10 clearfix">
                                                <a>
                                                    <figure><img src="images/banner-bottom.jpg"></figure>
                                                </a>
                                            </li>
                                        </ul>	
                                    </li>
                                    <li class="dropdown mega-menu-item">
                                        <a href="#" class="menu-item dropdown-toggle" data-toggle="dropdown">
                                            <span>Men</span>
                                        </a>				
                                        <a href="#" class="opener"></a>
                                        <ul class="container margin-auto dropdown-menu mega-dropdown-menu" >
                                            <li class="col-md-2 col-sm-3">
                                                <ul class="first-item">
                                                    <div class="item active">
                                                        <a href="#">
                                                            <figure>
                                                                <img src="images/banner-left.jpg" class="img-responsive" alt="product 1">
                                                            </figure>
                                                        </a>
                                                    </div> 
                                                </ul>
                                            </li>
                                            <li class="col-md-8 col-sm-8">
                                                <ul class="full-width">
                                                    <li class="col-md-3 col-sm-6">
                                                        <ul>
                                                            <li class="dropdown-header">Features</li>
                                                            <li><a href="#">Auto Carousel</a></li>
                                                            <li><a href="#">Carousel Control</a></li>
                                                            <li><a href="#">Left & Right Navigation</a></li>
                                                            <li><a href="#">Four Columns Grid</a></li>
                                                            <li class="divider"></li> 
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-3 col-sm-6">
                                                        <ul>
                                                            <li class="dropdown-header">Plus</li>
                                                            <li><a href="#">Navbar Inverse</a></li>
                                                            <li><a href="#">Pull Right Elements</a></li>
                                                            <li><a href="#">Coloured Headers</a></li>                            
                                                            <li><a href="#">Primary Buttons & Default</a></li>							
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-3 col-sm-6">
                                                        <ul>
                                                            <li class="dropdown-header">Much more</li>
                                                            <li><a href="#">Easy to Customize</a></li>
                                                            <li><a href="#">Calls to action</a></li>
                                                            <li><a href="#">Custom Fonts</a></li>
                                                            <li><a href="#">Slide down on Hover</a></li>                         
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-3 col-sm-6">
                                                        <ul>
                                                            <li class="dropdown-header">Much more</li>
                                                            <li><a href="#">Easy to Customize</a></li>
                                                            <li><a href="#">Calls to action</a></li>
                                                            <li><a href="#">Custom Fonts</a></li>
                                                            <li><a href="#">Slide down on Hover</a></li>                         
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="col-md-2 col-sm-2">
                                                <ul class="first-item">
                                                    <li class="dropdown-header">Men Collection</li>  
                                                    <div class="item active">
                                                        <a href="#">
                                                            <img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive" alt="product 1">
                                                        </a>
                                                    </div>

                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">View all Collection 

                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>	
                                    </li>

                                    <li class="dropdown mega-menu-item">
                                        <a href="#" class="menu-item">
                                            <span>Blog</span>

                                        </a> 
                                        <a href="#" class="opener"></a>
                                    </li>
                                    <li class="dropdown mega-menu-item">
                                        <a href="#"class="menu-item">
                                            <span>About Us</span>
                                        </a>
                                        <a href="#" class="opener"></a>

                                        <ul class="container margin-auto dropdown-menu mega-dropdown-menu" >
                                            <li class="align-center full-width">
                                                <h2>Alysum -  is the universal theme, with the pleasant and clean design.</h2>
                                                <p>With this theme you can easily create your unique shop, choosing any colors & over 500 Google fonts. </p>
                                            </li>
                                            <li class="col-md-3 col-sm-3 clearfix align-center">
                                                <figure><img src="images/mic01.png"></figure>
                                                <h4>Responsive design</h4>
                                                <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                            </li>
                                            <li class="col-md-3 col-sm-3 align-center">
                                                <figure><img src="images/mic02.png"></figure>
                                                <h4>Responsive design</h4>
                                                <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                            </li>
                                            <li class="col-md-3 col-sm-3 align-center">
                                                <figure><img src="images/mic03.png"></figure>
                                                <h4>Responsive design</h4>
                                                <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                            </li>
                                            <li class="col-md-3 col-sm-3 align-center">
                                                <figure><img src="images/mic04.png"></figure>
                                                <article><h4>Responsive design</h4>
                                                    <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small cell phones.</p>
                                                </article>
                                            </li>
                                        </ul>	
                                    </li>
                                    <li class="dropdown mega-menu-item">
                                        <a href="#"class="menu-item">
                                            <span>Brands</span>
                                        </a>
                                        <a href="#" class="opener"></a>
                                        <ul class="container margin-auto dropdown-menu mega-dropdown-menu" >
                                            <li class="col-md-2 col-sm-2 brand">
                                                <figure><img src="images/4-manu_alysum.jpg" class="img-responsive"></figure>
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <figure><img src="images/4-manu_alysum.jpg" class="img-responsive"></figure>
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <figure><img src="images/4-manu_alysum.jpg" class="img-responsive"></figure>
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <figure><img src="images/4-manu_alysum.jpg" class="img-responsive"></figure>
                                            </li>  
                                            <li class="col-md-2 col-sm-2 brand">
                                                <figure><img src="images/4-manu_alysum.jpg" class="img-responsive"></figure>
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <figure><img src="images/4-manu_alysum.jpg" class="img-responsive"></figure>
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <figure><img src="images/4-manu_alysum.jpg" class="img-responsive"></figure>
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <figure><img src="images/4-manu_alysum.jpg" class="img-responsive"></figure>
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <figure><img src="images/4-manu_alysum.jpg" class="img-responsive"></figure>
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <figure><img src="images/4-manu_alysum.jpg" class="img-responsive"></figure>
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <figure><img src="images/4-manu_alysum.jpg" class="img-responsive"></figure>
                                            </li> 
                                            <li class="col-md-2 col-sm-2 brand">
                                                <figure><img src="images/4-manu_alysum.jpg" class="img-responsive"></figure>
                                            </li> 
                                        </ul>	
                                    </li>

                                    <li class="dropdown mega-menu-item">
                                        <a href="#"class="menu-item">
                                            <span>Demos</span>
                                        </a>
                                        <a href="#" class="opener"></a>
                                        <ul class="dropdown-menu mega-dropdown-menu demos" >
                                            <li>Demo 01 - Alysum</li>
                                            <li>Demo 01 - Alysum</li>
                                            <li>Demo 01 - Alysum</li>
                                            <li>Demo 01 - Alysum</li>
                                            <li>Demo 01 - Alysum</li>
                                            <li>Demo 01 - Alysum</li>
                                            <li>Demo 01 - Alysum</li>
                                        </ul>
                                    </li>
                                </ul> 
                            </div><!-- /.nav-collapse -->

                        </div>
                    </div>
                    <!--SLIDE SHOW-->
                    <div id="zaro-carousel" class="container margin-auto">
                        <table class="title-table">
                            <tbody>
                                <tr>
                                    <td class="col-md-6 col-sm-6">
                                        <span class="title-wing"></span>
                                    </td>

                                    <td class="carousel-title">
                                        <h3> Featured Products </h3>
                                        <div class=" smooth02 zaro-controls carousel-control" data-slide="prev">
                                            <i class="fa fa-angle-left"></i>
                                        </div>
                                        <div class="zaro-next smooth02 zaro-controls carousel-control" href="#myCarousel" data-slide="next">
                                            <i class="fa fa-angle-right"></i>
                                        </div>
                                    </td>

                                    <td class="col-md-6 col-sm-6">
                                        <span class="title-wing"></span>
                                    </td> 
                                </tr>
                            </tbody>
                        </table>



                        <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-custom-5-col item-hover">
                                        <div class="row">
                                            <a href="#">
                                                <img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive">
                                            </a>
                                            <a class="search-box-img">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <span class="zaro-rate slidelip">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </span>
                                            <p>Dress Mark James Badgley Mischka</p>
                                            <div class="add-ToCart">
                                                <h3 class="">$309.00</h3>
                                                <div class="addToCart-hover">
                                                    <div class="card">
                                                        <a>Add To Cart</a>
                                                    </div> 
                                                    <div class="favorite">
                                                        <span class="fa fa-heart"></span>
                                                    </div>
                                                    <div class="wishlist">
                                                        <span class="fa fa-gift"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-custom-5-col item-hover">
                                        <div class="row">
                                            <a href="#">
                                                <img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive">
                                            </a>
                                            <a class="search-box-img">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <span class="zaro-rate slidelip">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </span>
                                            <p>Dress Mark James Badgley Mischka</p>
                                            <div class="add-ToCart">
                                                <h3 class="">$309.00</h3>
                                                <div class="addToCart-hover">
                                                    <div class="card">
                                                        <a>Add To Cart</a>
                                                    </div> 
                                                    <div class="favorite">
                                                        <span class="fa fa-heart"></span>
                                                    </div>
                                                    <div class="wishlist">
                                                        <span class="fa fa-gift"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-custom-5-col item-hover">
                                        <div class="row">
                                            <a href="#">
                                                <figure><img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive"></figure>
                                            </a>
                                            <a class="search-box-img">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <span class="zaro-rate slidelip">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </span>
                                            <p>Dress Mark James Badgley Mischka</p>
                                            <div class="add-ToCart">
                                                <h3 class="">$309.00</h3>
                                                <div class="addToCart-hover">
                                                    <div class="card">
                                                        <a>Add To Cart</a>
                                                    </div> 
                                                    <div class="favorite">
                                                        <span class="fa fa-heart"></span>
                                                    </div>
                                                    <div class="wishlist">
                                                        <span class="fa fa-gift"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-custom-5-col item-hover">
                                        <div class="row">
                                            <a href="#">
                                                <figure><img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive"></figure>
                                            </a>
                                            <a class="search-box-img">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <span class="zaro-rate slidelip">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </span>
                                            <p>Dress Mark James Badgley Mischka</p>
                                            <div class="add-ToCart">
                                                <h3 class="">$309.00</h3>
                                                <div class="addToCart-hover">
                                                    <div class="card">
                                                        <a>Add To Cart</a>
                                                    </div> 
                                                    <div class="favorite">
                                                        <span class="fa fa-heart"></span>
                                                    </div>
                                                    <div class="wishlist">
                                                        <span class="fa fa-gift"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-custom-5-col item-hover">
                                        <div class="row">
                                            <a href="#">
                                                <figure><img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive"></figure>
                                            </a>
                                            <a class="search-box-img">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <span class="zaro-rate slidelip">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </span>
                                            <p>Dress Mark James Badgley Mischka</p>
                                            <div class="add-ToCart">
                                                <h3 class="">$309.00</h3>
                                                <div class="addToCart-hover">
                                                    <div class="card">
                                                        <a>Add To Cart</a>
                                                    </div> 
                                                    <div class="favorite">
                                                        <span class="fa fa-heart"></span>
                                                    </div>
                                                    <div class="wishlist">
                                                        <span class="fa fa-gift"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-custom-5-col item-hover">
                                        <div class="row">
                                            <a href="#">
                                                <figure><img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive"></figure>
                                            </a>
                                            <a class="search-box-img">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <span class="zaro-rate slidelip">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </span>
                                            <p>Dress Mark James Badgley Mischka</p>
                                            <div class="add-ToCart">
                                                <h3 class="">$309.00</h3>
                                                <div class="addToCart-hover">
                                                    <div class="card">
                                                        <a>Add To Cart</a>
                                                    </div> 
                                                    <div class="favorite">
                                                        <span class="fa fa-heart"></span>
                                                    </div>
                                                    <div class="wishlist">
                                                        <span class="fa fa-gift"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-custom-5-col item-hover">
                                        <div class="row">
                                            <a href="#">
                                                <figure><img src="images/dress-anna-sui-ambrosia-lace.jpg" class="img-responsive"></figure>
                                            </a>
                                            <a class="search-box-img">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <span class="zaro-rate slidelip">
                                                <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </span>
                                            <p>Dress Mark James Badgley Mischka</p>
                                            <div class="add-ToCart">
                                                <h3 class="">$309.00</h3>
                                                <div class="addToCart-hover">
                                                    <div class="card">
                                                        <a>Add To Cart</a>
                                                    </div> 
                                                    <div class="favorite">
                                                        <span class="fa fa-heart"></span>
                                                    </div>
                                                    <div class="wishlist">
                                                        <span class="fa fa-gift"></span>
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


        <script src="scripts/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="scripts/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/script.js" type="text/javascript"></script>
    </body>

</html>